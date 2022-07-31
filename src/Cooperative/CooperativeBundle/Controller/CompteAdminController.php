<?php

namespace Cooperative\CooperativeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Utilisateurs\UtilisateursBundle\Entity\Luser;


use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

/**
 * Compte controller.
 *
 */
class CompteAdminController extends Controller
{
	public function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $users = $repository->findOneById($user);
    }

    public function myaccountAction()
    {
    	$user = $this->getUserByName();
        return $this->render('CooperativeBundle:Admin:Setting/myaccount.html.twig', array(
            'user' => $user,
        ));
    }
}
