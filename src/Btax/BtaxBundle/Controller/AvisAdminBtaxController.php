<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Link btax controller.
 *
 */
class AvisAdminBtaxController extends Controller
{
    public function toValidateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository('BtaxBundle:Avis')->findByStatut(0);
        return $this->render('BtaxBundle:Admin:Avis/tovalidate.html.twig',
            array(
                'avis' => $avis,
                'p_avis' => 'active',
            ));
    }

    public function toModerateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository('BtaxBundle:Avis')->findByStatut(2);
        return $this->render('BtaxBundle:Admin:Avis/tomoderate.html.twig',
            array(
                'avis' => $avis,
                'p_avis' => 'active',
            ));
    }

    public function validateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository('BtaxBundle:Avis')->findOneById($id);
        $avis->setStatut(1);
        $em->persist($avis);
        $em->flush();
        return $this->redirect($this->generateUrl('adminbtax_avis_tovalidate'));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository('BtaxBundle:Avis')->findOneById($id);
        $em->remove($avis);
        $em->flush();
        return $this->redirect($this->generateUrl('adminbtax_avis_tovalidate'));
    }
}
