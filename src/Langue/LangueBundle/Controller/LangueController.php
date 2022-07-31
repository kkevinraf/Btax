<?php

namespace Langue\LangueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateurs\UtilisateursBundle\Entity\Langue;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LangueController extends Controller
{

    public function updateHomeAction($langue)
    {
        if($langue != null)
        {
            $this->get('session')->set('_locale', $langue);
        }
        else
        {
            $this->get('session')->set('_locale', 'fr_FR');
        }

        $response = new JsonResponse();
        return $response->setData(array('message' => '1'));  
    }

    public function updateAction($langue)
    {
    	$user = $this->container->get('security.context')->getToken()->getUser();
    	if($user != 'anon.')
        {
        	$id = $user->getId();
        	$em = $this->getDoctrine()->getManager();
        	$l = $this->getLangue($id);
        	$this->get('session')->set('_locale', $langue);

        	if($l == null)
        	{
        		$this->langueRegister($id, $langue);
        	}
        	else
        	{
        		$l->setLangue($langue);
        		$em->flush();
        	}
        	
        }

        $response = new JsonResponse();
        return $response->setData(array('message' => '1'));

        //return $this->render('LangueBundle:Default:index.html.twig', array('name' => $name));
    }

    private function getLangue($user)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Langue');
        return $repository->findOneByUser($user);
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

    public function getUtilisateur($id)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $repository->findOneById($id);
    }

}
