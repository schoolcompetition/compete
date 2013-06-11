<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\StudyAnswers;
use Compete\ComBundle\Form\StudyAnswersType;

/**
 * StudyAnswers controller.
 *
 */
class StudyAnswersController extends Controller
{
    /**
     * Lists all StudyAnswers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:StudyAnswers')->findAll();

        return $this->render('CompeteComBundle:StudyAnswers:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new StudyAnswers entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new StudyAnswers();
        $form = $this->createForm(new StudyAnswersType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('studyanswers_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:StudyAnswers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new StudyAnswers entity.
     *
     */
    public function newAction()
    {
        $entity = new StudyAnswers();
        $form   = $this->createForm(new StudyAnswersType(), $entity);

        return $this->render('CompeteComBundle:StudyAnswers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a StudyAnswers entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyAnswers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyAnswers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:StudyAnswers:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing StudyAnswers entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyAnswers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyAnswers entity.');
        }

        $editForm = $this->createForm(new StudyAnswersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:StudyAnswers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing StudyAnswers entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyAnswers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyAnswers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StudyAnswersType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('studyanswers_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:StudyAnswers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a StudyAnswers entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:StudyAnswers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find StudyAnswers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('studyanswers'));
    }

    /**
     * Creates a form to delete a StudyAnswers entity by id.
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
