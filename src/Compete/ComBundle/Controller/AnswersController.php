<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\Answers;
use Compete\ComBundle\Form\AnswersType;

/**
 * Answers controller.
 *
 */
class AnswersController extends Controller
{
    /**
     * Lists all Answers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:Answers')->findAll();

        return $this->render('CompeteComBundle:Answers:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Answers entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Answers();
        $form = $this->createForm(new AnswersType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('answers_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:Answers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Answers entity.
     *
     */
    public function newAction()
    {
        $entity = new Answers();
        $form   = $this->createForm(new AnswersType(), $entity);

        return $this->render('CompeteComBundle:Answers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Answers entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Answers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Answers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Answers:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Answers entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Answers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Answers entity.');
        }

        $editForm = $this->createForm(new AnswersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Answers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Answers entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Answers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Answers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AnswersType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('answers_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:Answers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Answers entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:Answers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Answers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('answers'));
    }

    /**
     * Creates a form to delete a Answers entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
