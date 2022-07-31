<?php

namespace Book\BookBundle\Controller;

use Book\BookBundle\Entity\Reservation;
use Book\BookBundle\Entity\ReservationUser;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SearchController extends Controller
{

    private function getAllLocalisation()
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Localisation');
        return $result = $repository->findAll();
    }

    public function runSearchAction()
    {
        //return $this->render('BookBundle:Log:recherche.html.twig');
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $depart = $request->request->get('depart');
            $depart_data = $this->getLocalisation($depart);

            $destination = $request->request->get('destination');
            $destination_data = $this->getLocalisation($destination);



            if($destination_data != null &&  $depart_data !=null)
            {
                $destination = $destination_data->getId();
                $depart = $depart_data->getId();

                $date = $request->request->get('date');

                $cooperative = $request->request->get('cooperative');
                $horaire = $request->request->get('horaire');
                $place = $request->request->get('place');
                
                $nbrPlace = $request->request->get('nbrPlace');

                $data = $this->getItineraire($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);


                $searchform = "is-close";
                $searchresult = "is-open";

                $villes = $this->getAllLocalisation();

                $data_session = $destination.'_*'.$depart.'_*'.$date.'_*'.$cooperative.'_*'.$horaire.'_*'.$place.'_*'.$nbrPlace;

                //var_dump($data[0]->getItineraireCoop()->getItineraire()->getDepart());
                return $this->render('BookBundle:Log:recherche.html.twig', array(
                    'searchform'   => $searchform,
                    'searchresult' => $searchresult,
                    'data' => $data,
                    'depart' => $request->request->get('depart'),
                    'destination' => $request->request->get('destination'),
                    'data_session' => $data_session,
                    'villes' => $villes,
                    'precherche' => 'active',
                ));

            }

        }

        $searchform = "is-close";
        $searchresult = "is-open";

        return $this->render('BookBundle:Log:recherche.html.twig', array(
                    'searchform'   => $searchform,
                    'searchresult' => $searchresult,
                    'data' => array(),
                    'depart' => $request->request->get('depart'),
                    'destination' => $request->request->get('destination'),
                    'data_session' => '',
                    'precherche' => 'active',
                ));
    }

    public function getLocalisation($depart)
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BtaxBundle:Localisation')->findOneByLocalisation($depart);
    }

    public function getItineraire($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative)
    {
        
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('CooperativeBundle:Trajet')->getTrajetByUser($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);

    }

    public function getCooperativeByName($nom)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->findOneByNom($nom);
    }

    public function selectTrajetAction($id)
    {

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Trajet');
        $entity = $repository->findBy(array('id' => $id));

        if($entity == null)
        {
            $url = $this->generateUrl('book_recherche');
            return $this->redirect($url);
        }

        //echo $entity[0]->getItineraireCoop()->getItineraire()->getDepart();
        $rm = mt_rand (0, 100000000);
        $session = $this->getRequest()->getSession();
        if ($session->has('places')) $session->set('places', array());

        $trajet = array();
        $trajet[$rm]['trajet'] = $id;

        $session->set('trajet', $trajet);

        return $this->render('BookBundle:Log:paiement.html.twig', array(
                    'entity'   => $entity[0],
                    'rm' => $rm,
                ));
    }

    public function setSessionAction($id, $nom, $place)
    {

        $session = $this->getRequest()->getSession();
        if (!$session->has('places')) $session->set('places',array());

        $places = $session->get('places');
        $places[$place]['nom'] = $nom;
        $places[$place]['id'] = $id;
        $session->set('places', $places);

        $response = new JsonResponse();
        return $response->setData(array('message' => '1'));
    }

    public function getSessionAction()
    {
        $session = $this->getRequest()->getSession();
        var_dump($session->get('places'));
        die("ok");
    }

    public function deleteSessionAction()
    {
        $session = $this->getRequest()->getSession();
        $session->remove('places');
        die('supprimer');
    }

    public function registerSessionAction($id, $trajet)
    {
        $idd = 0;
        $session = $this->getRequest()->getSession();
        $places = $session->get('places');
        //$prix = $this->getMontant($trajet);
        $user = $this->getUserByName();
        $montant = $this->getMontant($trajet);

        $transactions = array();
        $session->set('places',array());

        foreach($places as $key => $value)
        {
            if($id === $value['id'])
            {
                //on fait l'enregistrement
                $nom = $value['nom'];
                $place = $key;
                $trans = strtoupper(substr(sha1(uniqid(mt_rand(),true)), 0, 10));
                $transaction = $place.'_'.$trans.'_'.$trajet.''.$id;

                $trajet_data = $this->getTrajet($trajet);

                $id_reservation = $this->registerDataSession($montant, $transaction, $nom, $place, $trajet_data);   

                $this->setTrajet($trajet, $place);

                if($user != null)
                {
                    $this->registerUserReservation($id_reservation);
                }

                $transactions[$idd] = $transaction;
                $idd++;
            }
        }

        $session->set('places', $transactions);

        $response = new JsonResponse();
        return $response->setData(array('id' => $idd));
    }


    public function reservationAfterPaiementAction()
    {
        $session = $this->getRequest()->getSession();

        if (!$session->has('transactions') || $session->get('transactions') == null)
        {
            return $this->render('BookBundle:Log:errorpaiement.html.twig');
        }
        else
        {
            $transactions = $session->get('transactions');
            return $this->render('BookBundle:Log:successpaiement.html.twig', array('transactions' => $transactions));
        }
    }

    public function testSessionAction($id)
    {
        echo "SELECT a FROM CooperativeBundle:Trajet a JOIN CooperativeBundle:ItineraireCoop c where a.itinerairecoop = c.id and c.id = ".$id;
        var_dump($this->getMontant($id));
        die("ok");
    }

    public function setTrajet($trajet, $place)
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

    public function setPlaceTrajet($places, $place)
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
                echo $i." _ ".$place.' _ '.$k.'<br>';

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

    public function getTrajet($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Trajet');
        $trajet = $repository->findById($id);
        return $trajet[0];
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

    private function registerDataSession($montant, $transaction, $nom, $place, $trajet)
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


    public function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $users = $repository->findById($user);
    }


    public function getPlaceCooperativeAction($cooperative)
    {
        $return = '<option value="">Tous</option>';
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Place');
        $place = $repository->findByCooperative($cooperative);

        if($place != null)
        {
            foreach ($place as $p)
            {
                $return = $return.'<option value="'.$p->getTypeplace().'">'.$p->getTypeplace().'</option>';
            }
        }

        //return 'a';
        $response = new JsonResponse();
        return $response->setData(array('return' => $return));
    }

}
