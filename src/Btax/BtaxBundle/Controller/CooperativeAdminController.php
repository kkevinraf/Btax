<?php

namespace Btax\BtaxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Btax\BtaxBundle\Entity\Cooperative;
use Btax\BtaxBundle\Form\CooperativeType;

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
 * Cooperative controller.
 *
 */
class CooperativeAdminController extends Controller
{

    public function getUserByName($name)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $u = $repository->findUserByUsername($user);
    }


    /**
     * Lists all Cooperative entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('BtaxBundle:Cooperative')->findAll();

       // $user = $this->getUser();

        return $this->render('BtaxBundle:Admin:Cooperative/index.html.twig', array(
            'entities' => $entities,
            'p_coop' => 'active',
        ));
    }
    /**
     * Creates a new Cooperative entity.
     *
     */

    public function addLoginCooperative()
    {

    }

    public function createAction(Request $request)
    {
        $entity = new Cooperative();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setDateInscription(new \Datetime());
            $entity->setLogo($entity->upload($entity->getLogo(), $entity->getNom()));

            $this->createLoginCooperative($entity);
            $login = $this->getCooperativeByName($entity->getNom());
            $entity->setLogin($login[0]);

            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cooperative_show', array('id' => $entity->getId())));
        }

        return $this->render('BtaxBundle:Admin:Cooperative/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function getCooperativeByName($nom)
    {
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('UtilisateursBundle:Utilisateurs');
        return $u = $repository->findUserByUsername($nom);
    }

    public function createLoginCooperative($entity)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $user->setEnabled(true);
        $role = array('ROLE_ADMIN_COOP');
        $user->setRoles($role);
        $user->setUsername($entity->getNom());
        $user->setPlainPassword($entity->getNom());
        $user->setEmail($entity->getMail());
        $userManager->updateUser($user);
    }

    /**
    * Creates a form to create a Cooperative entity.
    *
    * @param Cooperative $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Cooperative $entity)
    {
        $form = $this->createForm(new CooperativeType(), $entity, array(
            'action' => $this->generateUrl('cooperative_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cooperative entity.
     *
     */
    public function newAction()
    {
        $entity = new Cooperative();
        $form   = $this->createCreateForm($entity);

        return $this->render('BtaxBundle:Admin:Cooperative/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'p_coop' => 'active',
        ));
    }

    /**
     * Finds and displays a Cooperative entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Cooperative')->find($id);
        $avis = $em->getRepository('BtaxBundle:Avis')->findByCooperative($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperative entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BtaxBundle:Admin:Cooperative/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'avis' => $avis,
            'p_coop' => 'active',
        ));
    }

    /**
     * Displays a form to edit an existing Cooperative entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Cooperative')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperative entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BtaxBundle:Admin:Cooperative/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'p_coop' => 'active',
        ));
    }

    /**
    * Creates a form to edit a Cooperative entity.
    *
    * @param Cooperative $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cooperative $entity)
    {
        $form = $this->createForm(new CooperativeType(), $entity, array(
            'action' => $this->generateUrl('cooperative_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cooperative entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BtaxBundle:Cooperative')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperative entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cooperative_edit', array('id' => $id)));
        }

        return $this->render('BtaxBundle:Admin:Cooperative/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'p_coop' => 'active',
        ));
    }
    /**
     * Deletes a Cooperative entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BtaxBundle:Cooperative')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cooperative entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cooperative'));
    }

    /**
     * Creates a form to delete a Cooperative entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cooperative_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
