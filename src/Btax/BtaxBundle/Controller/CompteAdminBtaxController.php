<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
class CompteAdminBtaxController extends Controller
{
    public function newAction()
    {
        return $this->render('BtaxBundle:Admin:Compte/new.html.twig');
    }

    public function createAction()
    {

        $request = $this->get('request');

        if($request->getMethod() == 'POST')
        {
            $nom = $request->request->get('username');
            $mail = $request->request->get('mail');
            $password = $request->request->get('password');

            $userManager = $this->container->get('fos_user.user_manager');
            $user = $userManager->createUser();

            $user->setEnabled(true);
            $role = array('ROLE_USER_BTAX');
            $user->setRoles($role);
            $user->setUsername($nom);
            $user->setPlainPassword($password);
            $user->setEmail($mail);
            $userManager->updateUser($user);

            return $this->redirect($this->generateUrl('btax_compte_index'));
        }

        return $this->render('BtaxBundle:Admin:Compte/new.html.twig');
        /*

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $user->setEnabled(true);
        $role = array('ROLE_USER_BTAX');
        $user->setRoles($role);
        $user->setUsername($entity->getNom());
        $user->setPlainPassword($entity->getNom());
        $user->setEmail($entity->getMail());
        $userManager->updateUser($user);
        */
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UtilisateursBundle:Utilisateurs')->findUserBtax();

        return $this->render('BtaxBundle:Admin:Compte/index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function getUserBydId($id)
    {
        $repository = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('UtilisateursBundle:Utilisateurs');
        return $result = $repository->findById($id);
    }    

}
