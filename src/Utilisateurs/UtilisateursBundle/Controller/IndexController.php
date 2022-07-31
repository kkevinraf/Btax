<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
    	$page = null;
        if($this->get('security.context')->isGranted('ROLE_ADMIN_BTAX'))
        {
        	$page = 'cooperative';
        }
        else
        {
        	if($this->get('security.context')->isGranted('ROLE_USER_BTAX'))
	        {
	        	die('btax user');
	        }
	        else
	        {
	        	if($this->get('security.context')->isGranted('ROLE_ADMIN_COOP'))
		        {
		        	$page = 'voiture';
		        }
		        else
		        {
		        	if($this->get('security.context')->isGranted('ROLE_USER_COOP'))
			        {
			        	die('user coop');
			        }
			        else
			        {
			        	if($this->get('security.context')->isGranted('ROLE_USER'))
				        {
				        	
				        	$user = $this->getUserByName();
				        	if($user != null)
				        	{
				        		$page = 'book_cooperative';
				        		$this->setLocaleSession($user);
				        	}
				        	else
				        	{
				        		$page = 'book_homepage';	
				        	}
				        }
				        else
				        {
				        	$page = 'book_homepage';
				        }
			        }
		        }
	        }
        }

       // die('tes');

       return $this->redirect($this->generateUrl($page));
    }

    private function setLocaleSession($id)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Langue');
        $l = $repository->findByUser($id);

        if($l == null)
        {
        	$langue = 'fr_FR';
        }
        else
        {
        	$langue = $l[0]->getLangue();
        }

        $this->get('session')->set('_locale', $langue);
        return $langue;
    }

    private function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user != 'anon.')
        {
        	$user = $user->getId();
        	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        	$users = $repository->findOneById($user);
        	return $users->getId();
        }
        else
        {
        	return null;
        }
        
    }

}
