<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Categorie;
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



    public function ajouterCategorieAction($nom,$description){

        $em = $this->getDoctrine()->getEntityManager();


        $verifCat = $em->getRepository("AdminBundle:Categorie")->findOneBy(array("nom"=>$nom));


        if(!$verifCat){



            $categorie = new Categorie();

            $categorie->setNom($nom)->setDescription($description);


            $em->persist($categorie);

            $em->flush();

            die("Ajoute avec succres");


        }


        die("Existe deja");

    }



    public function suppCategorieAction($nom){

        $em = $this->getDoctrine()->getEntityManager();


        $categorie = $em->getRepository("AdminBundle:Categorie")->findOneBy(array("nom"=>$nom));


        if($categorie){
            $em->remove($categorie);
            $em->flush();

            die("Supprimé avec succes");

        }

        die("N existe pas");



    }





}
