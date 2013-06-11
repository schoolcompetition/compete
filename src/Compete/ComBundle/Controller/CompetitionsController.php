<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\Competitions;
use Compete\ComBundle\Form\CompetitionsType;

/**
 * Competitions controller.
 *
 */
class CompetitionsController extends Controller
{
    /**
     * Lists all Competitions entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:Competitions')->findAll();

        return $this->render('CompeteComBundle:Competitions:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Competitions entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Competitions();
        $form = $this->createForm(new CompetitionsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('competitions_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:Competitions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Competitions entity.
     *
     */
    public function newAction()
    {
        $entity = new Competitions();
        $form   = $this->createForm(new CompetitionsType(), $entity);

        return $this->render('CompeteComBundle:Competitions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Competitions entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Competitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competitions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Competitions:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Competitions entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Competitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competitions entity.');
        }

        $editForm = $this->createForm(new CompetitionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Competitions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Competitions entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Competitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competitions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CompetitionsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('competitions_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:Competitions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Competitions entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:Competitions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Competitions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('competitions'));
    }

    /**
     * Creates a form to delete a Competitions entity by id.
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
