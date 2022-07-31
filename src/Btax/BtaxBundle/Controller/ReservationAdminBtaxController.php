<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class ReservationAdminBtaxController extends Controller
{
    public function searchAction()
    {
        return $this->render('BtaxBundle:Admin:Reservation/search.html.twig', array('p_reservation' => 'active',));
    }

    public function searchAdvancedAction()
    {
        $localisation = $this->getLocalisation();
        return $this->render('BtaxBundle:Admin:Reservation/searchAdvanced.html.twig', array('localisation' => $localisation, 'p_reservation' => 'active',));
    }

    public function getLocalisation()
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BtaxBundle:Localisation')->findAll();
    }

    public function searchRunAction()
    {
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $table = $request->request->get('tab');
            if($table != "0")
            {
                $search = $request->request->get('search');
                if($table != 'email')
                {
                    $data = $this->getReservation($table, $search);  
                }
                else
                {
                    $data = $this->getReservationByMail($search); 
                }                
            }
            else
            {
                die("tous");
            }

            return $this->render('BtaxBundle:Admin:Reservation/result.html.twig', array(
                'data' => $data,
                'p_reservation' => 'active',
            ));
        }
        die("une erreur est survenue");
    }

    public function getReservation($table, $search)
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BookBundle:Reservation')->findBy(array($table => $search));
    }

    public function getReservationByMail($mail)
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BookBundle:Reservation')->getReservationByMail($mail);
    }

    public function searchAdvancedRunAction()
    {
        $request = $this->get('request');
        if($request->getMethod() == "POST")
        {
            $data = array();
            $d_debut = $request->request->get('date_debut');
            $d_fin = $request->request->get('date_fin');
            if($d_debut != null && $d_fin != null )
            {
                $depart = $request->request->get('depart');
                $destination = $request->request->get('destination');
                $data = $this->getReservationByDate($d_debut, $d_fin, $depart, $destination);
            }
            return $this->render('BtaxBundle:Admin:Reservation/result.html.twig', array(
                'data' => $data,
                'p_reservation' => 'active',
            ));
        }
        die("une erreur est survenue");
    }

    public function getReservationByDate($d_debut, $d_fin, $depart, $destination)
    {
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('BookBundle:Reservation')->getReservationByDate($d_debut, $d_fin, $depart, $destination);
    }

}
