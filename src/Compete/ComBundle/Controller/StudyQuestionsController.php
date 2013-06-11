<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\StudyQuestions;
use Compete\ComBundle\Form\SearchQuestionsType;
use Compete\ComBundle\Form\StudyQuestionsType;

/**
 * StudyQuestions controller.
 *
 */
class StudyQuestionsController extends Controller
{
    /**
     * Lists all StudyQuestions entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:StudyQuestions')->findAll();

        return $this->render('CompeteComBundle:StudyQuestions:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new StudyQuestions entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new StudyQuestions();
        
        $form = $this->createForm(new StudyQuestionsType(), $entity);
        $form->bind($request);
        $entity->setCreatedAt(new \DateTime()); 
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('studyquestions_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:StudyQuestions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new StudyQuestions entity.
     *
     */
    public function newAction()
    {
        $entity = new StudyQuestions();
        $form   = $this->createForm(new StudyQuestionsType(), $entity);

        return $this->render('CompeteComBundle:StudyQuestions:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    
    
        /**
     * To search the existing questions.
     *
     */
    public function newSearchAction()
    {

         $em = $this->getDoctrine()->getManager();
         $gradeRepo = $em->getRepository('CompeteComBundle:Grades');
         $subjectsRepo = $em->getRepository('CompeteComBundle:Subjects');
         $grades=$gradeRepo->findAll();
         $subjects=$gradeRepo->findAll();
            return $this->render('CompeteComBundle:StudyQuestions:search.html.twig',
                    array('grades'=>$grades,'subjects'=>$subjects));

       // $entity = new StudyQuestions();
        //$form   = $this->createForm(new SearchQuestionsType(), $entity);
//        $grade=$em->getRepository('CompeteComBundle:Grades')->findOneById(3);
//        $entity->setGrade($grade);
//        return $this->render('CompeteComBundle:StudyQuestions:search.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
       
    }
    
            /**
     * Result of the existing questions.
     *
     */
    public function resultAction(Request $request)
    {
        
        $entity  = new StudyQuestions();
       
        $form = $this->createForm(new SearchQuestionsType(), $entity);
   
    
        if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);
        $data = $form->getData();
 
        // Need to do something with the data here
    }
    echo $_POST["search"];
    echo $data->getSubject();
    exit();
  //  echo $data."<br>";
       // echo "hiiii <br>";
        $request = $this->get('request');
        echo $request;
        $postData = $request->request->get('subject');
       // echo $postData."<br>hi";
        $name_value = $postData['subject'];
        //echo $_POST['subject']."<br>hi";
        exit();
        $em = $this->getDoctrine()->getManager();
        echo $_POST["search"];
    
         print_r($_POST);
        exit();
        $entity = $em->getRepository('CompeteComBundle:StudyQuestions')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyQuestions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:StudyQuestions:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        
            ));
    }
    /**
     * Finds and displays a StudyQuestions entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyQuestions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:StudyQuestions:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing StudyQuestions entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyQuestions entity.');
        }

        $editForm = $this->createForm(new StudyQuestionsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:StudyQuestions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing StudyQuestions entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:StudyQuestions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StudyQuestions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StudyQuestionsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('studyquestions_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:StudyQuestions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a StudyQuestions entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:StudyQuestions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find StudyQuestions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('studyquestions'));
    }

    /**
     * Creates a form to delete a StudyQuestions entity by id.
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
