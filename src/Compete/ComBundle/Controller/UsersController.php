<?php

namespace Compete\ComBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Compete\ComBundle\Entity\Users;
use Compete\ComBundle\Form\UsersType;

//===================File System component to create a folder==========
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
//==================to handle the exceptions==
use Symfony\Component\Filesystem\Exception\IOException;
//============================================================

/**
 * Users controller.
 *
 */
class UsersController extends Controller
{
    /**
     * Lists all Users entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompeteComBundle:Users')->findAll();

        return $this->render('CompeteComBundle:Users:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Users entity.
     *
     */
    public function createAction(Request $request,$role)
    {
//        $entity  = new Users();
//        $form = $this->createForm(new UsersType(), $entity);
//        $form->bind($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('users_show', array('id' => $entity->getId())));
//        }
//
//        return $this->render('CompeteComBundle:Users:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
        
        $entity  = new Users();
		
        $form = $this->createForm(new UsersType(), $entity);
        $form->bind($request);

        $entity->setRole($role);
        
		//===============i want the picture from the url======
        $file = $form->get('picture');
		//return new Response($file->getData());
        if ($form->isValid()) {
		//===================================if the data is valid make a directory=================
		$fs = new Filesystem();
		if(!$fs->exists('/../../../../web/img/users'))
		{
	//	try {
               $fs->mkdir('/../../../../web/img/users' . mt_rand());
            
	//	     }
		}
		   $file->getData()->move( __DIR__.'/../../../../web/img/users',$entity->getId()."_".$file->getData()->getClientOriginalName());
		//================set the picture to===========
		    $entity->setPicture($file->getData()->getClientOriginalName());
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_show', array('id' => $entity->getId())));
        }

        return $this->render('CompeteComBundle:Users:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Users entity.
     *
     */
    public function newAction($role)
    {
        $entity = new Users();
        $form   = $this->createForm(new UsersType(), $entity);

        return $this->render('CompeteComBundle:Users:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'role' => $role
        ));
    }

    /**
     * Finds and displays a Users entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Users:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Users entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        
        $editForm=$this->createForm(new UsersType(), $entity);
  
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CompeteComBundle:Users:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Users entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompeteComBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UsersType(), $entity);
        $editForm->bind($request);
        $fs=new FileSystem();
		$finder = new Finder();
        $finder->files()->in(__DIR__.'/../../../../web/uploads');
		//foreach ($finder as $targetFile) {
		//if(
		//$fs->exists($file->getData()->getClientOriginalName()->remove());
		//)
		//{
        //$fs->remove($file->getData()->getClientOriginalName());	
         //}
		//}		
        if ($editForm->isValid()) {
		 $file = $editForm->get('picture');
		// if($editForm->get('picture'))
		 //{
		 //=======================
		 $file->getData()->move( __DIR__.'/../../../../web/img/users',$entity->getName()."_".$file->getData()->getClientOriginalName());
		//}
		//catch(IOException $e){
		//return new Response("failed");
		//}
		 $entity->setPicture($file->getData()->getClientOriginalName());
		// if($editForm->get('picture')){  return new Response("i uploaded a picture");}  
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_edit', array('id' => $id)));
        }

        return $this->render('CompeteComBundle:Users:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Users entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CompeteComBundle:Users')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Users entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('users'));
    }

    /**
     * Creates a form to delete a Users entity by id.
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
