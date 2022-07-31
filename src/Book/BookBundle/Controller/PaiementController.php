<?php

namespace Book\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Book\BookBundle\Entity\Reservation;
use Book\BookBundle\Entity\ReservationUser;

class PaiementController extends Controller
{
    public function backPaiement()
    {

    }

    public function selectLogOutAction($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Trajet');
        $entity = $repository->findBy(array('id' => $id));
        
        if($entity == null)
        {
            $url = $this->generateUrl('search_log_out');
            return $this->redirect($url);
        }

        $rm = mt_rand (0, 100000000);
        $session = $this->getRequest()->getSession();
        if ($session->has('places')) $session->set('places', array());

        $trajet = array();
        $trajet[$rm]['trajet'] = $id;

        $session->set('trajet', $trajet);
        return $this->render('BookBundle:Logout:paiement_logout.html.twig', array(
                    'entity'   => $entity[0],
                    'rm' => $rm,
                ));
    }



/*-----------------------------------------------------------------------------------------------------
Cette partie est reservee au paiement 
Chaque fonction est differente selon le moyen de paiement mais chaque function appel une autre fonction afin d'enregistrer l'utilisateur dans la base de donnees
==> registerPaiement
-----------------------------------------------------------------------------------------------------*/

    public function creditCardAction()
    {
        die("creditCardAction");
    }

    public function paypalAction()
    {
        die("paypalAction");
    }

    public function mobileMoneyAction()
    {
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $rm = $request->request->get('rm');
            if($rm != null)
            {
                
                $session = $request->getSession();

                $places = $session->get('places');
                $trajet = $session->get('trajet');

                if($places != null && $trajet != null)
                {
                    $places = $places[$rm];
                    $trajet = $trajet[$rm]['trajet'];

                    $montant = $this->getMontant($trajet);
                    $trajet = $this->getTrajet($trajet);

                    if($trajet != null && $places != null && $montant!= null)
                    {
                        $transaction = $this->registerUser($trajet, $places, $montant);
                        if($transaction != null)
                        {
                            //var_dump($id);
                            //die('ok');
                            return $this->render('BookBundle:Logout:successpaiement_logout.html.twig', array('transaction'=> $transaction, 'montant' => $montant));
                        }
                    }
                }
            }
        }

        die("okok");

        //return $this->render('BookBundle:Logout:errorpaiement_logout.html.twig');
    }

/*-----------------------------------------------------------------------------------------------------
set session depuis la vue
-----------------------------------------------------------------------------------------------------*/

    private function registerPaiement()
    {
        
    }

    private function registerUser($trajet, $data, $montant)
    {
        $id = 0;
        $transactions = array();

        foreach($data as $key => $value)
        {   
            $nom = $value['nom'];
            $place = $key;
            $trans = strtoupper(substr(sha1(uniqid(mt_rand(),true)), 0, 10));
            $transaction = $place.'_'.$trans.'_'.$trajet->getId().''.$key;

            //enregistre la reservation
            $id_reservation = $this->registerReservation($montant, $transaction, $nom, $place, $trajet);   

            //update le trajet pour que les places reserves ne soient plus proposees
            $this->updateTrajet($trajet, $place);

            $user = $this->getUserByName();

            //si le membre est connecte en enregistre la reservation dans sa liste de reservation
            if($user != null)
            {
                $this->registerUserReservation($id_reservation);
            }

            $transactions[$id] = $transaction;
            $id++;
        }

        return $transactions;
    }

    private function registerUserReservation($reservation)
    {

        $user = $this->getUserByName();

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BookBundle:Reservation');
        $reservation = $repository->findById($reservation);

        $ur = new ReservationUser();
        $ur->setReservation($reservation[0]);
        $ur->setUtilisateurs($user[0]);

        $em = $this->getDoctrine()->getManager();
        $em->persist($ur);
        $em->flush(); 
        

        return null;

    }

    private function registerReservation($montant, $transaction, $nom, $place, $trajet)
    {
        $reservation = new Reservation();
        $reservation->setDateHeure(new \Datetime());
        $reservation->setMontant($montant);
        $reservation->setTransaction($transaction);
        $reservation->setNom($nom);
        $reservation->setNumPlace($place);
        $reservation->setStatut(1);
        $reservation->setTrajet($trajet);

        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush(); 

        return $reservation->getId();   
    }

    private function updateTrajet($trajet, $place)
    {
        $em = $this->getDoctrine()->getManager();
        $trajetU = $em->getRepository('CooperativeBundle:Trajet')->find($trajet);

        if (!$trajetU) {
            throw $this->createNotFoundException('Unable to find Place entity.');
        }


        $nplace = $this->setPlaceTrajet($trajetU->getPlaces(), $place);   

        $trajetU->setPlaces($nplace);
        $trajetU->setPlaceRestante($trajetU->getPlaceRestante() - 1);
        $em->persist($trajetU);

        $em->flush(); 

        return ;
    }

/*-----------------------------------------------------------------------------------------------------
set session depuis la vue
-----------------------------------------------------------------------------------------------------*/
    public function registerSessionAction($id, $nom, $place)
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('places')) $session->set('places',array());

        $places = $session->get('places');

        $places[$id][$place]['nom'] = $nom;

        $session->set('places', $places);

        $response = new JsonResponse();
        return $response->setData(array('message' => '1'));
    }

/*-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------------
Get parametre du paiement :
- get Trajet : pour avoir le trajet
- get Montant : pour avoir le montant du trajet
- get Uer : pour savoir s'il y a un utilisateur connecte
-----------------------------------------------------------------------------------------------------*/

    private function getTrajet($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Trajet');
        $trajet = $repository->findById($id);
        if($trajet != null)
        {
            return $trajet[0];
        }
        else
        {
            return null;
        }
        
    }

    private function getMontant($id)
    {
        $prix = 0;
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Trajet');
        $p = $repository->findPrix($id);
        //var_dump($p);
        foreach ($p as $r)
        {
           $prix = $r->getItineraireCoop()->getPrix();
           break;
        }
        return $prix;

    }

    private function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user != 'anon.')
        {
            $user = $this->container->get('security.context')->getToken()->getUser()->getId();
            $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
            return $users = $repository->findById($user);
        }
        else
        {
            return null;
        }
        
    }

    private function setPlaceTrajet($places, $place)
    {
        //var_dump($places);
        $i = 0;
        $ps = $places;

        $l = 0;
        $c = 0;

        foreach($ps as $key)
        {
            $c = 0;
            foreach($key as $k)
            {
                //echo $i." _ ".$place.' _ '.$k.'<br>';

                if($k == 1 || $k == 2)
                {
                    $i++;
                }

                if($i == $place && $k == 1)
                {
                    $ps[$l][$c] = 2;
                }

                $c++;
            }
            $l++;
        }
        //var_dump($ps);
        return $ps;
    }

/*-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------*/

}
