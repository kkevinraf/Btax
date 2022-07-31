<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class LinkAdminBtaxController extends Controller
{
    /*=====================================================================================
    Itineraire
    ======================================================================================*/  

    private function getAllItineraire($table)
    {
        return $localisation = $this->getDoctrine()
            ->getManager()
            ->getRepository('CooperativeBundle:'.$table)
            ->findAll();
    }

     private function getAllItineraireJoin()
    {
        return $localisation = $this->getDoctrine()
            ->getManager()
            ->getRepository('CooperativeBundle:Itineraire')
            ->findJoinItineraire();
    }

    public function listItineraireAction()
    {
        $getItineraireCoop = $this->getAllItineraire('ItineraireCoop');
        $getItineraire = $this->getAllItineraireJoin();
       
        return $this->render('BtaxBundle:Admin:Itineraire/index.html.twig', array(
            'Itineraires' => $getItineraire,
            'ItineraireCoops' => $getItineraireCoop,
            'p_itineraire' => 'active',
        ));
    }


    /*=====================================================================================
    End itineraire
    ======================================================================================*/ 

    /*=====================================================================================
    my account
    ======================================================================================*/  

    public function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $users = $repository->findOneById($user);
    }
   
    public function myAccountAction()
    {
        $user = $this->getUserByName();
        return $this->render('BtaxBundle:Admin:Setting/myaccount.html.twig', array(
            'user' => $user,
        ));
    }




    /*=====================================================================================
    End my account
    ======================================================================================*/ 
}
