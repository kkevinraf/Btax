<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class MembreBtaxController extends Controller
{
    /*=====================================================================================
    membre
    ======================================================================================*/  

    public function searchMembreAction()
    {

        $request = $this->get('request');

        if($request->getMethod() == 'POST')
        {
            $choice = $request->request->get('choice');
            $user = $request->request->get('user');

            $utilisateurs = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs')
                            ->findAllUser($choice, $user);

            return $this->render('BtaxBundle:Admin:Membre/index.html.twig', array(
            'utilisateurs' => $utilisateurs,
            'choice' => $choice,
            'user' => $user,
            ));
        }
    }

    public function detailsMembreAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $member = $em->getRepository('UtilisateursBundle:Utilisateurs')->find($id);

        if (!$member) {
            throw $this->createNotFoundException('Unable to find Cooperative entity.');
        }

        $reservation = $em->getRepository('BookBundle:ReservationUser')->findByUtilisateurs($id);

        return $this->render('BtaxBundle:Admin:Membre/show.html.twig', array(
            'entity'      => $member,
            'reservation' => $reservation,
        ));
    }


    /*=====================================================================================
    End itineraire
    ======================================================================================*/ 
}
