<?php

namespace Book\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Btax\BtaxBundle\Entity\Avis;

use Symfony\Component\HttpFoundation\Request;

class LinkController extends Controller
{

    public function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $users = $repository->findById($user);
    }


    private function getAllLocalisation()
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Localisation');
        return $result = $repository->findAll();
    }


    public function indexAction()
    {
        $villes = $this->getAllLocalisation(); 
        $cooperatives = $this->getAllCooperative();

        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user == 'anon.')
        {
            if($this->get('session')->get('_locale') == null)
            {
                $this->get('session')->set('_locale', 'fr_FR');
            }

            $langue = $this->get('session')->get('_locale');
            return $this->render('BookBundle:Logout:index.html.twig', array('villes' => $villes,
                                                                            'cooperatives' => $cooperatives,
                                                                            'langue' => $langue));
        }
        else
        {
            $url = $this->generateUrl('index_user');
            return $this->redirect($url);
        }
    }

    public function getLocalisation($depart)
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BtaxBundle:Localisation')->findOneByLocalisation($depart);
    }

    public function getItineraireLogOut($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative)
    {
        
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('CooperativeBundle:Trajet')->getTrajetByUser($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);

    }

    public function searchLogOutAction()
    {
        //return $this->render('BookBundle:Log:result_logout.html.twig');

        $searchform = "is-close";
        $searchresult = "is-open";
        $cooperatives = $this->getAllCooperative();

        $villes = $this->getAllLocalisation(); 

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

                $data = $this->getItineraireLogOut($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);



                $data_session = $destination.'_*'.$depart.'_*'.$date.'_*'.$cooperative.'_*'.$horaire.'_*'.$place.'_*'.$nbrPlace;


                //var_dump($data[0]->getItineraireCoop()->getItineraire()->getDepart());
                return $this->render('BookBundle:Logout:result_logout.html.twig', array(
                    'searchform'   => $searchform,
                    'searchresult' => $searchresult,
                    'data' => $data,
                    'depart' => $request->request->get('depart'),
                    'destination' => $request->request->get('destination'),
                    'data_session' => $data_session,
                    'villes' => $villes,
                    'cooperatives' => $cooperatives,
                ));

            }

        }

        $searchform = "is-open";
        $searchresult = "is-close";

        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user == 'anon.')
        {
            return $this->render('BookBundle:Logout:result_logout.html.twig', array(
                    'searchform'   => $searchform,
                    'searchresult' => $searchresult,
                    'data' => array(),
                    'villes' => $villes,
                    'cooperatives' => $cooperatives,
                ));
        }
        else
        {
            $url = $this->generateUrl('index_user');
            return $this->redirect($url);
        }

    }

    /*=============================================================================
    cooperative
    ===============================================================================*/

    public function cooperativeAction()
    {
        $entities = $this->getAllCooperative();

        return $this->render('BookBundle:Log:cooperative.html.twig', array(
            'entities' => $entities,
            'pcooperative' => 'active',
        ));
    }

    public function detailCooperativeAction($id)
    {
        
        $cooperative = $this->getCooperativeById($id);
        $itinerairecoops = $this->getAllItineraireCoopById($id);
        $itineraires = $this->getAllItineraire();
        $tab = $this->getItineraire($itineraires, $cooperative, $itinerairecoops);
        $user = $this->getUserByName();

        $avis = $this->avisCooperative($cooperative);
        $myavis = $this->myAvisCooperative($cooperative[0]->getId(), $user[0]->getId());
           
        return $this->render('BookBundle:Log:detail_cooperative.html.twig', array(
                'itinerairecoops' => $itinerairecoops,
                'itineraires' => $tab,
                'cooperative' => $cooperative,
                'avis' => $avis,
                'myavis' => $myavis,
                'pcooperative' => 'active',
        ));

    }

    /*=============================================================================
    end cooperative
    ===============================================================================*/

    public function avisCooperative($cooperative)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Avis');
        return $result = $repository->findBy(array('cooperative' => $cooperative,
                                                    'statut' => '1'),
                                            array('note' => 'desc'),
                                                5);


    }

    public function myAvisCooperative($cooperative, $utilisateur)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Avis');
        return $result = $repository->findOneBy(array('cooperative' => $cooperative,
                                                    'utilisateur' => $utilisateur,));
    }


    /*=============================================================================
    end avis
    ===============================================================================*/


    public function reservationAction()
    {
       
        $user = $this->getUserByName();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BookBundle:ReservationUser');
        $result = $repository->findByUtilisateurs($user);
        return $this->render('BookBundle:Log:reservation.html.twig', array('data' => $result,
                                                                            'preservation' => 'active',));
    }


    /*=============================================================================
    itineraire
    ===============================================================================*/
    private function getAllItineraireByDepartDestination($depart, $destination)
    {
        $id_depart = $this->getLocalisation($depart);
        $id_destination = $this->getLocalisation($destination);

        if($id_depart == null || $id_destination == null)
        {
            return null;
        }
        else
        {
            $id_depart = $this->getLocalisation($depart)->getId();
            $id_destination = $this->getLocalisation($destination)->getId();

            $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Itineraire');
            return $result = $repository->findByDepartDestination($id_depart, $id_destination);
        }
    }

    private function getAllItineraireCoopByDepartDestination($depart, $destination)
    {
        $id_depart = $this->getLocalisation($depart);
        $id_destination = $this->getLocalisation($destination);

        if($id_depart == null || $id_destination == null)
        {
            return null;
        }
        else
        {
            $id_depart = $this->getLocalisation($depart)->getId();
            $id_destination = $this->getLocalisation($destination)->getId();

            $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
            return $result = $repository->findByDepartDestination($id_depart, $id_destination);
        }
    }


    private function getAllItineraireCoopById($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
        return $result = $repository->findByCooperative($id);
    }


    private function getAllItineraire()
    {

        return $localisation = $this->getDoctrine()
            ->getManager()
            ->getRepository('CooperativeBundle:Itineraire')
            ->findAll();

    }

    private function getAllItineraireCoop()
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
        return $result = $repository->findAll();
    }

    private function getAllItineraireFilterCoop()
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
        return $result = $repository->findAll();
    }

    private function getAllCooperative()
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $result = $repository->findAll();
    }

    private function getCooperativeById($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $result = $repository->findById($id);
    }

    public function itineraireAction()
    {
        $cooperatives = $this->getAllCooperative();
        $itinerairecoops = $this->getAllItineraireCoop();
        $itineraires = $this->getAllItineraire();
        $tab = $this->getItineraire($itineraires, $cooperatives, $itinerairecoops);
        $villes = $this->getAllLocalisation(); 


        return $this->render('BookBundle:Log:itineraire.html.twig', array(
                'itinerairecoops' => $itinerairecoops,
                'itineraires' => $tab,
                'pitineraire' => 'active',
                'villes' => $villes,
        ));
    }

    public function itineraireFilterAction()
    {
        $request = $this->get('request');
        if($request->getMethod() == "POST" && $request->request->get('depart') != null && $request->request->get('destination') != null)
        {
            $depart = $request->request->get('depart');
            $destination = $request->request->get('destination');

            $itineraires = $this->getAllItineraireByDepartDestination($depart, $destination);

            if($itineraires == null)
            {
                $villes = $this->getAllLocalisation(); 
                return $this->render('BookBundle:Log:itineraire.html.twig', array(
                        'itinerairecoops' => null,
                        'itineraires' => null,
                        'pitineraire' => 'active',
                        'villes' => $villes,
                ));
            }
            else
            {
                $cooperatives = $this->getAllCooperative();
                $itinerairecoops = $this->getAllItineraireCoopByDepartDestination($depart, $destination);
                $tab = $this->getItineraire($itineraires, $cooperatives, $itinerairecoops);
                $villes = $this->getAllLocalisation(); 


                return $this->render('BookBundle:Log:itineraire.html.twig', array(
                        'itinerairecoops' => $itinerairecoops,
                        'itineraires' => $tab,
                        'pitineraire' => 'active',
                        'villes' => $villes,
                ));
            }
        }
        else
        {
            return $this->itineraireAction();
        }
    }

    private function getItineraire($itineraires, $cooperatives, $itinerairecoops)
    {
        $tab = array();
        $j = 0;
        $i = 0;
        foreach ($itineraires as $itineraire)
        {
            foreach ($cooperatives as $cooperative)
            {
                $coopname = $cooperative->getNom();
                $cooplogo = $cooperative->getLogo();
                $coopid = $cooperative->getId();
                $logoitineraire = $itineraire->getDestination()->getPhoto();

                foreach ($itinerairecoops as $itinerairecoop)
                {
                    if($itineraire->getId() == $itinerairecoop->getItineraire()->getId())
                    {
                        $i++;
                    }
                }
                if($i != 0)
                {
                    $tab[$j]['itineraire'] = $itineraire->getDepart()->getLocalisation().' - '.$itineraire->getDestination()->getLocalisation();
                    $tab[$j]['cooperative'] = $coopname;
                    $tab[$j]['cooperativelogo'] = $cooplogo;
                    $tab[$j]['cooperativeid'] = $coopid;
                    $tab[$j]['logoitineraire'] = $logoitineraire;
                    $tab[$j]['iditineraire'] = $itineraire->getId();
                    $tab[$j]['idcooperative'] = $cooperative->getId();
                    $j++;
                }
                $i = 0;
            }
        }

        return $tab;
    }

    /*=============================================================================
    fin itineraire
    ===============================================================================*/

    public function rechercheAction()
    {
        $villes = $this->getAllLocalisation();
        $cooperatives = $this->getAllCooperative();

        return $this->render('BookBundle:Log:recherche.html.twig', array(
                                                                        'precherche' => 'active',
                                                                        'villes' => $villes,
                                                                        'cooperatives' => $cooperatives,
                                                                    ));
    }


    public function myaccountAction()
    {
        $langue = $this->getLangueByUser();
        $l = 'fr_FR';
        if($langue != null)
        {
            $l = $this->getLangueByUser()->getLangue();
        }
        

        $user = $this->getUserByName();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BookBundle:ReservationUser');
        $result = $repository->findByUtilisateurs($user);

        return $this->render('BookBundle:Log:moncompte.html.twig', array('user' => $user,
                                                                        'paiement' => $result,
                                                                        'langue' => $l,));
    }

    private function getLangueByUser()
    {
        $user = $this->getUserByName();
        $user = $user[0]->getId();

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Langue');
        return $repository->findOneByUser($user);
    }

    public function allAvisAction($id)
    {

        $cooperative = $this->getCooperativeById($id);
        $user = $this->getUserByName();

        $avis = $this->avisCooperative($cooperative);
        $myavis = $this->myAvisCooperative($cooperative[0]->getId(), $user[0]->getId());
        
        return $this->render('BookBundle:Log:avis.html.twig', array(
                'cooperative' => $cooperative,
                'avis' => $avis,
                'myavis' => $myavis,
                'pcooperative' => 'active',
        ));
    }

    public function addAvisAction()
    {
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $note = $request->request->get('note_member');
            $avis = $request->request->get('avis');
            $cooperative = $request->request->get('cooperative');
            $cooperative_data = $this->getCooperativeById($cooperative);
            $utilisateur_data = $this->getUserByName();

            $avis_data = new Avis();
            $avis_data->setAvis($avis);
            $avis_data->setNote($note);
            $avis_data->setStatut(0);
            $avis_data->setCooperative($cooperative_data[0]);
            $avis_data->setUtilisateur($utilisateur_data[0]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($avis_data);
            $em->flush(); 

            $url = $this->generateUrl('book_all_avis', array('id' => $cooperative));
            return $this->redirect($url);

        }
        else
        {
            $url = $this->generateUrl('book_detailcooperative');
            return $this->redirect($url);
        }
    }

    public function updateAvisAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $note = $request->request->get('note_member');
            $avis = $request->request->get('avis');
            $id_avis = $request->request->get('id');
            
            $utilisateur_data = $this->getUserByName();

            $avis_selected = $em->getRepository('BtaxBundle:Avis')->find(array('id' => $id_avis,
                                                                                'utilisateur' => $utilisateur_data));

            if (!$avis_selected) {
                throw $this->createNotFoundException('Unable to find Place entity.');
            }

            $avis_selected->setNote($note);
            $avis_selected->setAvis($avis);
            $avis_selected->setStatut(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($avis_selected);
            $em->flush(); 

            $url = $this->generateUrl('book_all_avis', array('id' => $avis_selected->getCooperative()->getId()));
            return $this->redirect($url);

        }


        $url = $this->generateUrl('book_detailcooperative');
        return $this->redirect($url);


    }
}
