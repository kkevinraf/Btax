<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Btax\BtaxBundle\Entity\Localisation;
use Btax\BtaxBundle\Form\LocalisationType;

/**
 * Localisation controller.
 *
 */
class LocalisationAdminController extends Controller
{

    /**
     * Lists all Localisation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BtaxBundle:Localisation')->findAll();

        return $this->render('BtaxBundle:Admin:Localisation/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Localisation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Localisation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setPhoto($entity->upload($entity->getPhoto(), $entity->getLocalisation()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('localisation'));
        }

        return $this->render('BtaxBundle:Admin:Localisation/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Localisation entity.
    *
    * @param Localisation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Localisation $entity)
    {
        $form = $this->createForm(new LocalisationType(), $entity, array(
            'action' => $this->generateUrl('localisation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Localisation entity.
     *
     */
    public function newAction()
    {
        $entity = new Localisation();
        $form   = $this->createCreateForm($entity);

        return $this->render('BtaxBundle:Admin:Localisation/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Localisation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Localisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Localisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BtaxBundle:Admin:Localisation/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Localisation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Localisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Localisation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BtaxBundle:Admin:Localisation/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Localisation entity.
    *
    * @param Localisation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Localisation $entity)
    {
        $form = $this->createForm(new LocalisationType(), $entity, array(
            'action' => $this->generateUrl('localisation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Localisation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Localisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Localisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('localisation_edit', array('id' => $id)));
        }

        return $this->render('BtaxBundle:Admin:Localisation/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Localisation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BtaxBundle:Localisation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Localisation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('localisation'));
    }

    /**
     * Creates a form to delete a Localisation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('localisation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
