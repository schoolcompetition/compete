<?php

namespace Compete\ComBundle\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CompeteComBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function roleAction()
    {
        if(isset($_GET["role"]))
        {
            if($_GET["role"]=="sch")
              return $this->redirect($this->generateUrl('schools_new', array('role' => "sch"))); 
        }
        return $this->render('CompeteComBundle:Default:role.html.twig');
    }
    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
 
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render('CompeteComBundle:Default:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    
        //return $this->render('CompeteComBundle:Default:login.html.twig');
    }
    
    
        
    public function authenticateAction()
    {

        return $this->render('CompeteComBundle:Default:login.html.twig');
    }
    
//    public function registerAction()
//    {
//        if($_GET["role"]=='a')
//            return $this->render('CompeteComBundle:Users:new.html.twig');
//    }
}
