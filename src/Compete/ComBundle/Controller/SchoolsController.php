<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Compete\ComBundle\Entity\Schools;
use Compete\ComBundle\Entity\Users;
use Compete\ComBundle\Form\SchoolsType;
use Compete\ComBundle\Form\UsersType;
use Compete\ComBundle\Form\AdminsType;
/**
 * Schools controller.
 *
 */
class SchoolsController extends Controller
{
    /**
     * Lists all Schools entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:Schools')->findAll();

        return $this->render('CompeteComBundle:Schools:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Schools entity.
     *
     */
    //used
    public function createAction(Request $request)
    {
        $entity  = new Schools();
        $entity1 = new Users();
        $form = $this->createForm(new SchoolsType(), $entity);
        $form1 = $this->createForm(new AdminsType(), $entity1);
        $form->bind($request);
        $form1->bind($request);
        $file= $form->get('picture');
        $file1= $form1->get('picture');
        if ($form->isValid()) {
            
            $fs = new Filesystem();
            if(!$fs->exists('/../../../../web/img/schools'))
		{
	//	try {
               $fs->mkdir('/../../../../web/img/schools' . mt_rand());
            
	//	     }
		}
		   $file->getData()->move( __DIR__.'/../../../../web/img/schools',$entity->getId()."_".$file->getData()->getClientOriginalName());
		//================set the picture to===========
            $entity->setPicture($file->getData()->getClientOriginalName());
           //---------------------------------------------------------- 
            
            
             if(!$fs->exists('/../../../../web/img/users'))
             {
                 $fs->mkdir('/../../../../web/img/users' . mt_rand());
             }
            $file1->getData()->move( __DIR__.'/../../../../web/img/users',$entity1->getId()."_".$file1->getData()->getClientOriginalName());
		//================set the picture to===========
            $entity1->setPicture($file1->getData()->getClientOriginalName());
            
            //-------------------------------------------------------
           $entity->setIsActive(0);
            $entity1->setRole("a");
            $entity1->setSchool($entity);
            $em = $this->getDoctrine()->getManager();
            $em1 = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $em1->persist($entity1);
            $em1->flush();

            return $this->redirect($this->generateUrl('schools_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:Schools:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Schools entity.
     *
     */
    //used
    public function newAction()
    {
        $entity = new schools();
        $entity1 = new users();
//        $data=array();
//        $data['name']=$entity->getName();
//        $data['Email']=$entity->getEmail();
//        $data['Upload picture']=$entity->getPicture();
//        $data['Password']=$entity->getPassword();
//        $data['Confirm password']="";
        $form   = $this->createForm(new schoolsType(), $entity);   
        $form1= $this->createForm(new AdminsType(), $entity1);   
        return $this->render('CompeteComBundle:Schools:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'entity1' => $entity1,
            'form1'   => $form1->createView(),
        ));
    }

    /**
     * Finds and displays a Schools entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Schools')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schools entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Schools:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Schools entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Schools')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schools entity.');
        }

        $editForm = $this->createForm(new SchoolsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        
        
        
        
        
        
        return $this->render('CompeteComBundle:Schools:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Schools entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Schools')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Schools entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SchoolsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('schools_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:Schools:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Schools entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:Schools')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Schools entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('schools'));
    }

    /**
     * Creates a form to delete a Schools entity by id.
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
