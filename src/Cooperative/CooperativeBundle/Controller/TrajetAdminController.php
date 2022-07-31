<?php

namespace Cooperative\CooperativeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cooperative\CooperativeBundle\Entity\Trajet;
use Cooperative\CooperativeBundle\Form\TrajetType;

/**
 * Trajet controller.
 *
 */
class TrajetAdminController extends Controller
{
    public function getIdCooperativeByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->getIdCooperativeByName($user);
    }

    public function getEntityByCooperative($entity)
    {
        $id = $this->getIdCooperativeByName();
        $idC = $id[0]->getId();

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:'.$entity);
        return $repository->findByCooperative($id);
    }

    private function getAllItineraire()
    {

        $idCooperative = $this->getIdCooperativeByName();
        $idC = $idCooperative[0]->getId();

        return $localisation = $this->getDoctrine()
            ->getManager()
            ->getRepository('CooperativeBundle:Itineraire')
            ->findAllByCooperative($idC);

    }

    public function newAction()
    {
        $voitures = $this->getEntityByCooperative('Voiture');
        $itineraireCoops = $this->getEntityByCooperative('itineraireCoop');
        $itineraires = $this->getAllItineraire();

        return $this->render('CooperativeBundle:Admin:Trajet/new.html.twig', array(
                'Voitures' => $voitures,
                'Itineraires' => $itineraires,
                'ItineraireCoops' => $itineraireCoops,
                'p_trajet' => 'active',
        ));
    }

    public function getEntityById($id, $entity)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository($entity);
        return $cooperative = $repository->findById($id);
    }

    public function createAction()
    {
        $request = $this->getRequest();
        if($request->getMethod() == "POST")
        {
            $trajet = new Trajet();

            $itineraire = $request->request->get('itineraire');
            $date = $request->request->get('date');
            $heure = $request->request->get('heure');
            $voiture = $request->request->get('voiture');

            $entityItineraire =  $this->getEntityById($itineraire, 'CooperativeBundle:ItineraireCoop');
            $entityVoiture =  $this->getEntityById($voiture, 'CooperativeBundle:Voiture');

            $nbrPlace = $entityVoiture[0]->getnbrPlace();
            $place = $entityVoiture[0]->getPlace();
            $cooperative = $this->getIdCooperativeByName();


            $datee = new \Datetime($date);
            $time = new \Datetime($heure);
            //var_dump($time);

            $trajet->setDate($datee);
            $trajet->setPlaceRestante($nbrPlace);
            $trajet->setPlaces($place);
            $trajet->setHeure($time);
            $trajet->setStatut(1);
            $trajet->setVoiture($entityVoiture[0]);
            $trajet->setItinerairecoop($entityItineraire[0]);
            $trajet->setCooperative($cooperative[0]);
                
            $em = $this->getDoctrine()->getManager();
            $em->persist($trajet);
            $em->flush();    
            
            $url = $this->generateUrl('trajet');
            //die("ok");
            return $this->redirect($url);

        }
        $url = $this->generateUrl('trajet_new');
        return $this->redirect($url);
    }


    public function indexAction()
    {
        $localisations = $this->getLocalisation();
        return $this->render('CooperativeBundle:Admin:Trajet/index.html.twig',
            array(
                'localisations' => $localisations,
                'p_trajet' => 'active',
            ));
    }

    private function getLocalisation()
    {
        $em = $this->getDoctrine()->getManager();
        return $localisation = $em->getRepository('BtaxBundle:Localisation')->findAll();
    }
   
    private function getAllItineraireCoop()
    {
        $idCooperative = $this->getIdCooperativeByName();
        $idC = $idCooperative[0]->getId();

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
        return $result = $repository->getAllItineraireCoop($idC);
    }

    public function runSearchAction()
    {
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();

        if($request->getMethod() == 'POST')
        {
            $date = $request->request->get('date');
            $depart = $request->request->get('depart');
            $destination = $request->request->get('destination');
            $cooperative = $this->getIdCooperativeByName();
            $trajet = $em->getRepository('CooperativeBundle:Trajet')->getTrajetByAdmin($date, $depart, $destination, $cooperative[0]->getId());
            return $this->render('CooperativeBundle:Admin:Trajet/list.html.twig',
            array(
                'trajets' => $trajet,
                'p_trajet' => 'active',
            ));
        }
        else
        {
            die("Page 404");
        }
    }

    public function detailSearchAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $trajet = $em->getRepository('CooperativeBundle:Trajet')->findById($id);
        $reservation = $em->getRepository('BookBundle:Reservation')->findBy(array('trajet' => $id), array('numPlace' => 'DESC' ));
        if($trajet != null)
        {
            return $this->render('CooperativeBundle:Admin:Trajet/details.html.twig',
            array(
                'trajet' => $trajet,
                'reservations' => $reservation,
                'p_trajet' => 'active',
            ));
        }
        else
        {
            die('page introuvable');
        }
    }

}
