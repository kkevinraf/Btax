<?php

namespace Cooperative\CooperativeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cooperative\CooperativeBundle\Entity\ItineraireCoop;
use Cooperative\CooperativeBundle\Entity\Itineraire;
use Cooperative\CooperativeBundle\Form\ItineraireCoopType;

use Btax\BtaxBundle\Entity\Localisation;
use Btax\BtaxBundle\Entity\Cooperative;

/**
 * Place controller.
 *
 */
class ItineraireCoopAdminController extends Controller
{
    public function getIdCooperativeByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->getIdCooperativeByName($user);
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

    private function getAllItineraireCoop()
    {
        $idCooperative = $this->getIdCooperativeByName();
        $idC = $idCooperative[0]->getId();

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:ItineraireCoop');
        return $result = $repository->getAllItineraireCoop($idC);
    }

    public function indexAction()
    {
        $getItineraire = $this->getAllItineraire();


        $getItineraireCoop = $this->getAllItineraireCoop();
    

       return $this->render('CooperativeBundle:Admin:ItineraireCoop/index.html.twig', array(
            'Itineraires' => $getItineraire,
            'ItineraireCoops' => $getItineraireCoop,
            'p_itineraire' => 'active',
        ));
    }


/*============================================================================
Ajout itineraire
==============================================================================*/
    /**
    * Creates a form to create a ItineraireCoop entity.
    *
    * @param ItineraireCoop $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ItineraireCoop $entity)
    {
        $form = $this->createForm(new ItineraireCoopType(), $entity, array(
            'action' => $this->generateUrl('itinerairecoop_create1'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }


    public function newAction()
    {
        $entity = new ItineraireCoop();
        $form   = $this->createCreateForm($entity);
        $localisations = $this->getLocalisations();

        $idCooperative = $this->getIdCooperativeByName();
        $idC = $idCooperative[0]->getId();

        $places = $this->getPlace($idC);
        

        return $this->render('CooperativeBundle:Admin:ItineraireCoop/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'localisations' => $localisations,
            'places' => $places,
            'p_itineraire' => 'active',
        ));
    }

    private function getLocalisations()
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('BtaxBundle:Localisation');

        return $repository->findAll();       
    }

    public function getPlace($cooperative)
    {
        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CooperativeBundle:Place');
        $places = $repository->findByCooperative($cooperative);

        return $places;
    }

    public function getEntityById($id, $table)
    {
        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository($table);

        return $result = $repository->findById($id);
    }

    public function newItineraire($depart, $destination)
    {
        $itineraire = new Itineraire();

        $itineraire->setDepart($depart);
        $itineraire->setDestination($destination);

        $em = $this->getDoctrine()->getManager();
        $em->persist($itineraire);
        $em->flush();
       return $itineraire->getId();
    }

    public function getIfExistItineraireCoop($itineraire, $place)
    {
        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CooperativeBundle:ItineraireCoop');
        $id = $repository->getIfExistItineraireCoop($itineraire, $place);
        return $id;
    }   
    
    public function getIfExistItineraire($depart, $destination)
    {
        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('CooperativeBundle:Itineraire');
        $id = $repository->getIfExistItineraire($depart, $destination);
        return $id;
    }

    public function create1Action()
    {
        $request = $this->getRequest();
        if($request->getMethod() == "POST")
        {
            $depart = $request->request->get('depart');
            $destination = $request->request->get('destination');         

            $places = $request->request->get('places');

            if($depart === $destination)
            {
                //revenir sur la vue
                $url = $this->generateUrl('itinerairecoop_new');
                return $this->redirect($url);
            }
            else
            {
                //===============Localisation=================//

                $entityLocalisation = "BtaxBundle:Localisation";
                $getDepart = $this->getEntityById($depart, $entityLocalisation);
                $getDestination = $this->getEntityById($destination, $entityLocalisation);

                //============= end localisation ==============//


                //===============Itineraire=================//

                $id_itineraire = $this->getIfExistItineraire($depart, $destination);

               

                if($id_itineraire === 0)
                {
                    $id_itineraire = $this->newItineraire($getDepart[0], $getDestination[0]);
                }

                $entityItineraire = "CooperativeBundle:Itineraire";
                $getItineraire = $this->getEntityById($id_itineraire, $entityItineraire);
                //var_dump($getItineraire);

                //============= end itineraire ==============//

                //=============== Cooperative =================//

                $idCooperative = $this->getIdCooperativeByName();
                $idC = $idCooperative[0]->getId();

                $entityCooperative = "BtaxBundle:Cooperative";
                $getCooperative = $this->getEntityById($idC, $entityCooperative);


                //============= end cooperative ==============//

               // var_dump('id_'.$id_itineraire);


                foreach ($places as $p)
                {
                    $idgetIfExistItineraireCoop = $this->getIfExistItineraireCoop($id_itineraire, $p);
                    if($idgetIfExistItineraireCoop === 0)
                    {
                        //echo $request->request->get('place'.$p);
                        //=============== Place =================//

                        $entityPlace = "CooperativeBundle:Place";
                        $getPlace = $this->getEntityById($p, $entityPlace);

                        //============= end place ==============//

                        $cooperativeitineraire = new ItineraireCoop();

                        $cooperativeitineraire->setCooperative($getCooperative[0]);
                        $cooperativeitineraire->setPlace($getPlace[0]);
                        $cooperativeitineraire->setPrix($request->request->get('place'.$p));
                        $cooperativeitineraire->setItineraire($getItineraire[0]);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($cooperativeitineraire);
                        $em->flush();
                    }
                }

                $url = $this->generateUrl('itinerairecoop');
                return $this->redirect($url);
            }
            
        }
        else
        {
            die("else");
        }
    }

/*=================================================================================
end of ajout
===================================================================================*/














}

