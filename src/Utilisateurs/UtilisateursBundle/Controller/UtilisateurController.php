<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Btax\BtaxBundle\Entity\Cooperative;
use Utilisateurs\UtilisateursBundle\Entity\Langue;

class UtilisateurController extends Controller
{
    public function addAction(Request $request)
    {
        //return $this->render('UtilisateursBundle:Default:index.html.twig', array('name' => $name));

    	$request = $this->getRequest();
    	if($request->getMethod() == "POST")
    	{
    		$nom = $request->request->get('nom');
    		$mail = $request->request->get('email');
    		$password = $request->request->get('password');
            $langue = $request->request->get('langue');

            if($nom != null && $mail != null && $password != null && $langue != null)
            {

                $ifnom = $this->checkName($nom);
                $ifmail = $this->checkMail($mail);

                if($ifnom == 0 && $ifmail == 0)
                {
                    $userManager = $this->container->get('fos_user.user_manager');
                    $user = $userManager->createUser();

                    $user->setEnabled(true);
                    $role = array('ROLE_USER');
                    $user->setRoles($role);
                    $user->setUsername($nom);
                    $user->setPlainPassword($password);
                    $user->setEmail($mail);
                    $userManager->updateUser($user);

                    $this->get('session')->getFlashBag()->add('error', 'Inscription bien enregistre, connectez-vous :)');

                    $url = $this->generateUrl('fos_user_security_login');
                    $this->langueRegister($user->getId(), $langue);

                    $this->get('session')->set('_locale', $langue);

                    return $this->redirect($url);
                }
                else
                {
                    $this->get('session')->getFlashBag()->add('error', 'Adresse e-mail ou nom d\'utilisateur déjà utilise(é)');
                }

            }
            else
            {
                $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue, merci de reessayer svp');
            }
    	}
        else
        {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue, merci de reessayer svp');
        }

    	$url = $this->generateUrl('fos_user_registration_register');
    	return $this->redirect($url);
    }


    private function langueRegister($id, $langue)
    {
        $l = new Langue();
        $user = $this->getUtilisateur($id);


        $l->setLangue($langue);
        $l->setUser($user);

        $em = $this->getDoctrine()->getManager();
        $em->persist($l);
        $em->flush();

        return null;
    }

    private function checkName($name)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        $result = $repository->findByUsername($name);
        return count($result);
    }

    private function checkMail($mail)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        $result = $repository->findByEmail($mail);
        return count($result);
    }

    public function getUtilisateur($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $repository->findOneById($id);
    }
}

?>