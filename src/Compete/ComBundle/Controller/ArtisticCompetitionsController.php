<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\ArtisticCompetitions;
use Compete\ComBundle\Form\ArtisticCompetitionsType;

/**
 * ArtisticCompetitions controller.
 *
 */
class ArtisticCompetitionsController extends Controller
{
    /**
     * Lists all ArtisticCompetitions entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:ArtisticCompetitions')->findAll();

        return $this->render('CompeteComBundle:ArtisticCompetitions:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new ArtisticCompetitions entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ArtisticCompetitions();
        $form = $this->createForm(new ArtisticCompetitionsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('artisticcompetitions_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:ArtisticCompetitions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new ArtisticCompetitions entity.
     *
     */
    public function newAction()
    {
        $entity = new ArtisticCompetitions();
        $form   = $this->createForm(new ArtisticCompetitionsType(), $entity);

        return $this->render('CompeteComBundle:ArtisticCompetitions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArtisticCompetitions entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:ArtisticCompetitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ArtisticCompetitions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:ArtisticCompetitions:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ArtisticCompetitions entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:ArtisticCompetitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ArtisticCompetitions entity.');
        }

        $editForm = $this->createForm(new ArtisticCompetitionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:ArtisticCompetitions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ArtisticCompetitions entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:ArtisticCompetitions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ArtisticCompetitions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ArtisticCompetitionsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('artisticcompetitions_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:ArtisticCompetitions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArtisticCompetitions entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:ArtisticCompetitions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ArtisticCompetitions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('artisticcompetitions'));
    }

    /**
     * Creates a form to delete a ArtisticCompetitions entity by id.
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
