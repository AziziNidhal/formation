<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{


    public function dashboardAction()
    {

        return $this->render('AdminBundle:Admin:dashboard.html.twig');
    }



    public function gestionCategoriePageAction()
    {

        return $this->render('AdminBundle:Admin:gestionCategories.html.twig');
    }




    public function ajoutCategoriePageAction()
    {

        return $this->render('AdminBundle:Admin:ajoutCategories.html.twig');
    }






}
