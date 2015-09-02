<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Preventivi;
use AppBundle\Form\PreventiviType;

/**
 * Preventivi controller.
 *
 * @Route("/preventivi")
 */
class PreventiviController extends Controller
{

    /**
     * Lists all Preventivi entities.
     *
     * @Route("/", name="preventivi")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Preventivi')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Preventivi entity.
     *
     * @Route("/", name="preventivi_create")
     * @Method("POST")
     * @Template("AppBundle:Preventivi:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Preventivi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preventivi_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Preventivi entity.
     *
     * @param Preventivi $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Preventivi $entity)
    {
        $form = $this->createForm(new PreventiviType(), $entity, array(
            'action' => $this->generateUrl('preventivi_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Preventivi entity.
     *
     * @Route("/new", name="preventivi_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Preventivi();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Preventivi entity.
     *
     * @Route("/{id}", name="preventivi_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Preventivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preventivi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Preventivi entity.
     *
     * @Route("/{id}/edit", name="preventivi_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Preventivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preventivi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Preventivi entity.
    *
    * @param Preventivi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Preventivi $entity)
    {
        $form = $this->createForm(new PreventiviType(), $entity, array(
            'action' => $this->generateUrl('preventivi_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Preventivi entity.
     *
     * @Route("/{id}", name="preventivi_update")
     * @Method("PUT")
     * @Template("AppBundle:Preventivi:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Preventivi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preventivi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('preventivi_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Preventivi entity.
     *
     * @Route("/{id}", name="preventivi_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Preventivi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Preventivi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('preventivi'));
    }

    /**
     * Creates a form to delete a Preventivi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preventivi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
