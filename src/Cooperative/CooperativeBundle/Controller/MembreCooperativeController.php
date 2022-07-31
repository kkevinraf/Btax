<?php

namespace Cooperative\CooperativeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class MembreCooperativeController extends Controller
{
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

            return $this->render('CooperativeBundle:Admin:Membre/index.html.twig', array(
            'utilisateurs' => $utilisateurs,
            'choice' => $choice,
            'user' => $user,
            'p_membre' => 'active',
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

        return $this->render('CooperativeBundle:Admin:Membre/show.html.twig', array(
            'entity'      => $member,
            'reservation' => $reservation,
            'p_membre' => 'active',
        ));
    }


    public function avisMembreAction()
    {
        $cooperative = $this->getIdCooperativeByName();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Avis');
        $avis = $repository->findBy(
            array(
                'cooperative' => $cooperative[0]->getId(),
                'statut' => '1',
            ));
        return $this->render('CooperativeBundle:Admin:Setting/avis.html.twig', array(
            'avis'      => $avis,
        ));
    } 

    public function avisSignaleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository('BtaxBundle:Avis')->findOneById($id);
        $avis->setStatut(2);
        $em->persist($avis);
        $em->flush();
        return $this->redirect($this->generateUrl('membre_avis_cooperative'));
    }

    private function getIdCooperativeByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->getIdCooperativeByName($user);
    }
}
