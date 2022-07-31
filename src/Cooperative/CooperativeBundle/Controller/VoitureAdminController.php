<?php

namespace Cooperative\CooperativeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cooperative\CooperativeBundle\Entity\Voiture;
use Cooperative\CooperativeBundle\Form\VoitureType;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Voiture controller.
 *
 */
class VoitureAdminController extends Controller
{

    public function getIdCooperativeByName()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BtaxBundle:Cooperative');
        return $cooperative = $repository->getIdCooperativeByName($user);
    }

    /**
     * Lists all Voiture entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $idCooperative = $this->getIdCooperativeByName();
        $idC = $idCooperative[0]->getId();

        $entities = $em->getRepository('CooperativeBundle:Voiture')->findByCooperative($idC);

        return $this->render('CooperativeBundle:Admin:Voiture/index.html.twig', array(
            'entities' => $entities,
            'p_voiture' => 'active',
        ));
    }
    /**
     * Creates a new Voiture entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Voiture();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);



        if ($form->isValid()) {

            $colonne = $request->request->get('colonne');
            $range = $request->request->get('range');
            $nbplace = $request->request->get('nbplace');
            $place = $request->request->get('arrayplace');
            $rplace = explode(',',$place);
            $colonne--;

            $arrayplace = $this->convertArray($rplace, $colonne);

            $u = $this->getIdCooperativeByName();
            $entity->setCooperative($u[0]);
            
            $entity->setNbrPlace($nbplace);
            $entity->setPlace($arrayplace);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('voiture_show', array('id' => $entity->getId())));
        }

        return $this->render('CooperativeBundle:Admin:Voiture/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'p_voiture' => 'active',
        ));
    }

    private function convertArray($place, $colonne)
    {
        $i = 0;
        $j = 0;
        $arrayplace = array();
        foreach ($place as $result) 
        {
            $arrayplace[$i][$j] = (int)$result;
            if($j < $colonne)
            {
                $j++;
            }
            else
            {
                $i++;
                $j=0;
            }
                
        }
        return $arrayplace;
    }

    /**
    * Creates a form to create a Voiture entity.
    *
    * @param Voiture $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Voiture $entity)
    {
        $form = $this->createForm(new VoitureType(), $entity, array(
            'action' => $this->generateUrl('voiture_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Voiture entity.
     *
     */
    public function newAction()
    {
        $entity = new Voiture();
        $form   = $this->createCreateForm($entity);

        return $this->render('CooperativeBundle:Admin:Voiture/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'p_voiture' => 'active',
        ));
    }

    /**
     * Finds and displays a Voiture entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CooperativeBundle:Voiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voiture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CooperativeBundle:Admin:Voiture/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),'p_voiture' => 'active',        ));
    }

    /**
     * Displays a form to edit an existing Voiture entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CooperativeBundle:Voiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voiture entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CooperativeBundle:Admin:Voiture/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'p_voiture' => 'active',
        ));
    }

    /**
    * Creates a form to edit a Voiture entity.
    *
    * @param Voiture $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Voiture $entity)
    {
        $form = $this->createForm(new VoitureType(), $entity, array(
            'action' => $this->generateUrl('voiture_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Voiture entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CooperativeBundle:Voiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voiture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('voiture_edit', array('id' => $id)));
        }

        return $this->render('CooperativeBundle:Admin:Voiture/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'p_voiture' => 'active',
        ));
    }
    /**
     * Deletes a Voiture entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CooperativeBundle:Voiture')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Voiture entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('voiture'));
    }

    /**
     * Creates a form to delete a Voiture entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voiture_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function generateSessionAction($cp)
    {
        $session = $this->getRequest()->getSession();
        $session->set('data_voiture', $cp);

        $response = new JsonResponse();
        return $response->setData(array('message' => 'done'));
    }

}
