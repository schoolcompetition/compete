<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Compete\ComBundle\Entity\TournamentQuestions;
use Compete\ComBundle\Form\TournamentQuestionsType;
use Compete\ComBundle\Entity\Answers;
use Compete\ComBundle\Entity\AnswersType;
use Symfony\Component\Form\FormBuilder;

/**
 * TournamentQuestions controller.
 *
 */
class TournamentQuestionsController extends Controller {

    /**
     * Lists all TournamentQuestions entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:TournamentQuestions')->findAll();

        return $this->render('CompeteComBundle:TournamentQuestions:index.html.twig', array(
                    'entities' => $entities,
                ));
    }

    /**
     * Creates a new TournamentQuestions entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TournamentQuestions();
        $form = $this->createForm(new TournamentQuestionsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $TournamentQuestions = $form->getData();
            $TournamentQuestions->setApproved($TournamentQuestions->getApproved() + 1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $answers = $TournamentQuestions->getAnswers();
            foreach ($answers as $answer) {
                if ($answer->getrightanswer()) {
                    $answer->setApprovedright($answer->getApprovedright() + 1);
                } else {
                    $answer->setApprovedright(0);
                }
                $answer->setQ($entity);
                $em->persist($answer);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('tournamentquestions_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:TournamentQuestions:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Displays a form to create a new TournamentQuestions entity.
     *
     */
    public function newAction() {
        $entity = new TournamentQuestions();
        $entity->addAnswer(new Answers());
        $form = $this->createForm(new TournamentQuestionsType(), $entity);

        return $this->render('CompeteComBundle:TournamentQuestions:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Finds and displays a TournamentQuestions entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:TournamentQuestions:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing TournamentQuestions entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
        }

        $editForm = $this->createForm(new TournamentQuestionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:TournamentQuestions:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Edits an existing TournamentQuestions entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TournamentQuestionsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tournamentquestions_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:TournamentQuestions:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a TournamentQuestions entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tournamentquestions'));
    }

    /**
     * Creates a form to delete a TournamentQuestions entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    /**
     * Lists all TournamentQuestions entities.
     *
     */
    public function listunapprovedAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:TournamentQuestions')->findByIs_active(array(0));

        return $this->render('CompeteComBundle:TournamentQuestions:indexunapproved.html.twig', array(
                    'entities' => $entities,
                ));
    }

// public function showunapprovedAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);
//        
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('CompeteComBundle:TournamentQuestions:showunapproved.html.twig', array(
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),        ));
//    }
//    public function approveAction(Request $request, $id) {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
//        }
//        $form = $this->createFormBuilder()
//                ->add('approveit', 'checkbox')
//                ->add('rightanswer', 'checkbox')
//                ->getForm()
//        ;
//
//
//        return $this->render('CompeteComBundle:TournamentQuestions:approve.html.twig', array(
//                    'form' => $form->createView(),
//                    'entity' => $entity
//                ));
//    }

    public function approveupdateAction(Request $request, $id) {
        $rightanswer = array();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:TournamentQuestions')->find($id);
        $answers=$em->getRepository('CompeteComBundle:Answers')->findByq($id);
        $choices=array();
        foreach($answers as $answer){
            $choices[$answer->getId()]=$answer->getChoice();
        }
        
        $anscount=count($answers);        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TournamentQuestions entity.');
        }
        $form = $this->createFormBuilder()
                ->add('approveit', 'checkbox')
                ->add('rightanswer', 'choice',array('choices'=> $choices,'multiple'=>true))
                ->getForm()
        ;
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            $data = $form->getData();
//            var_dump($data);
//            echo 'hh';
//            echo $entity->getApproved();
//            exit();
            if ($data['approveit']) {
                //    echo 'hh';
                //echo $entity->getApproved();
                //  exit();
                $entity->setApproved($entity->getApproved() + 1);
                if ($entity->getApproved() == 5) {
                    $entity->setIsactive(1);
                }
            }
            if (isset($data['rightanswer'])) {
                foreach ($data['rightanswer'] as $value) {
                $answerid = $value;
                $answer = $em->getRepository('CompeteComBundle:Answers')->find($answerid);
                $answer->setApprovedright($answer->getApprovedright() + 1);
                if($answer->getApprovedright()==5){
                    $answer->setIsright(1);
                }
            }}
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('tournamentquestions_unapproved'));

        }

        return $this->render('CompeteComBundle:TournamentQuestions:approve.html.twig', array(
                    'form' => $form->createView(),
                    'entity' => $entity
                ));
    }

}