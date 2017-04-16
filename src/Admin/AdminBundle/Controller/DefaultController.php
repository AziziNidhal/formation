<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('AdminBundle:Default:index.html.twig');
    }




    public function testAction($nom,$id){


        return $this->render('AdminBundle:Default:test.html.twig',array("nom"=>$nom,"id"=>$id));

    }





    public function page1Action()
    {

        return $this->render('AdminBundle:Default:page1.html.twig');
    }

    public function page2Action()
    {

        return $this->render('AdminBundle:Default:page2.html.twig');
    }




}
