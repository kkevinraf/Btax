<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class TrajetAdminBtaxController extends Controller
{
    private function getCooperative()
    {
        $em = $this->getDoctrine()->getManager();
        return $cooperative = $em->getRepository('BtaxBundle:Cooperative')->findAll();
    }

    private function getLocalisation()
    {
        $em = $this->getDoctrine()->getManager();
        return $localisation = $em->getRepository('BtaxBundle:Localisation')->findAll();
    }

    public function searchAction()
    {
        $localisations = $this->getLocalisation();
        $cooperatives = $this->getCooperative();
        return $this->render('BtaxBundle:Admin:Trajet/search.html.twig',
            array(
                'localisations' => $localisations,
                'cooperatives' => $cooperatives,
                'p_trajet' => 'active',
            ));
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
            $cooperative = $request->request->get('cooperative');

            $trajet = $em->getRepository('CooperativeBundle:Trajet')->getTrajetByAdmin($date, $depart, $destination, $cooperative);
            return $this->render('BtaxBundle:Admin:Trajet/list.html.twig',
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
        $reservation = $em->getRepository('BookBundle:Reservation')->findByTrajet($id);
        if($trajet != null)
        {
            return $this->render('BtaxBundle:Admin:Trajet/details.html.twig',
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
