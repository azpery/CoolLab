<?php

namespace CoolLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
      $message = "hello paralax world";
        return $this->render('CoolLabBundle:Default:index.html.twig',
         array('message'=>$message)
       );
    }
}
