<?php

namespace Book\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Book\BookBundle\Entity\Notification;

class NotificationController extends Controller
{

	public function indexAction()
	{

		$utilisateur = $this->getUserByName();

		$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BookBundle:Notification');
        $notification = $repository->findByUtilisateur($utilisateur);
        //echo '<br><br><br><br><br><br><br><br>'.$user = $this->container->get('security.context')->getToken()->getUser();

		return $this->render('BookBundle:Log:notification.html.twig', array('notification' => $notification,
            'pnotification' => 'active',));
	}

	public function searchRegisterAction($data)
    {

    	$notification = new Notification();

        $array = explode('_*',$data);
        $destination = $array[0];
        $destination_data = $this->getLocalisation($destination);

        $depart = $array[1];
        $depart_data = $this->getLocalisation($depart);
        
        $date = $array[2];

        $cooperative = $array[3];
        if($cooperative != '')
        {
        	$cooperative_data = $this->getCooperative($cooperative);
        	$notification->setCooperative($cooperative_data[0]);
        }
        

        $horaire = $array[4];


        $place = $array[5];
        $place_data = $this->getPlace($place);


        $nbrPlace = $array[6];

        $user = $this->getUserByName();


       $date = new \Datetime($date);
        $notification->setDate($date);
        $notification->setStatut(1);
        $notification->setNbrResult(0);	
        $notification->setUtilisateur($user[0]);
        $notification->setDestination($destination_data);
        $notification->setDepart($depart_data);
        
        $notification->setPlace($place_data);
        $notification->setNbrPlace($nbrPlace);
        $notification->setHoraire($horaire);

        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();

        $url = $this->generateUrl('book_notification');
        return $this->redirect($url);
    }

    private function getPlace($place)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CooperativeBundle:Place');
        return $cooperative = $repository->findOneByType_place($place);
    }

    private function getLocalisation($id)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Localisation');
        return $cooperative = $repository->findOneById($id);
    }

    private function getCooperative($name)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->getIdCooperativeByName($name);
    }

    public function getUserByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $users = $repository->findById($user);
    }

    public function notificationSearchAction($id)
    {
    	$repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BookBundle:Notification');
        $result = $repository->findOneById($id);

        if($result != null)
        {
    		$depart = $result->getDepart();
            $depart_data = $this->getLocalisation($depart);

            $destination = $result->getDestination();
            $destination_data = $this->getLocalisation($destination);

            $data = array();

            if($destination_data != null &&  $depart_data !=null)
            {
                $destination = $destination_data->getId();
                $depart = $depart_data->getId();

                $date = $result->getDate();

                $cooperative = $result->getCooperative();
                $horaire = $result->getHoraire();
                $place = $result->getPlace();
                
                $nbrPlace = $result->getNbrPlace();

                $data = $this->getItineraire($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);
               
            }

	        $searchform = "is-close";
	        $searchresult = "is-open";

	        //var_dump($data[0]->getItineraireCoop()->getItineraire()->getDepart());
	        return $this->render('BookBundle:Log:recherche.html.twig', array(
	            'searchform'   => $searchform,
	            'searchresult' => $searchresult,
	            'data' => $data,
	            'depart' => $request->request->get('depart'),
	            'destination' => $request->request->get('destination'),
                'pcooperative' => 'active',
	        ));
	    }
	    else
	    {
	    	die("notification non retrouvee");
	    }


    }

    public function getItineraire($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative)
    {
        
        $em = $this->getDoctrine()->getManager();
        return $entity = $em->getRepository('CooperativeBundle:Trajet')->getTrajetByUser($depart, $destination, $date, $horaire, $place, $nbrPlace, $cooperative);

    }

}

?>