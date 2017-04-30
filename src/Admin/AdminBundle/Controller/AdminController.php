<?php

namespace Admin\AdminBundle\Controller;

use Admin\AdminBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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


    /*



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


    */



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




    public function ajoutCategorieAction(Request $request){



        if($request->getMethod() == "POST"){


            $em = $this->getDoctrine()->getManager();

            $dataJson = json_decode($request->getContent() , true);


            $nom = $dataJson["nom"];

            $desc = $dataJson["desc"];


            $verifExsit = $em->getRepository("AdminBundle:Categorie")->findOneBy(array("nom"=>$nom));


            $rep = array();
            if(!$verifExsit){




                $categorie = new Categorie();

                $categorie->setNom($nom)->setDescription($desc);


                $em->persist($categorie);

                $em->flush();

                $rep["success"]=1;
                $rep["message"] = "Catégorie ajoutée avec succes";





            }else{
                $rep["success"]=0;
                $rep["message"] = "Catégorie existe déja";


            }



            return new JsonResponse($rep);




        }else{



            die("route non disponible");
        }




    }




    public function getCategoriesJsonAction(Request $request){

        $em = $this->getDoctrine()->getEntityManager();

        $dataJson = json_decode($request->getContent() , true);

        $creteria = $dataJson["txt"];

        $qb = $em->createQueryBuilder();


        $query = $qb->select("c")
        ->from("AdminBundle:Categorie","c");

        if(strlen($creteria) > 2){
            $query->where("c.nom like :criteria");
        }

        $query->orderBy("c.id","desc");

        if(strlen($creteria) > 2){
            $query->setParameter("criteria","%".$creteria."%");
        }

        $categories = $query->getQuery()->getResult();


        $reponse = array();
        foreach ($categories as $category){
            array_push(
                $reponse,
                array(
                    "id"=>$category->getId(),
                    "nom"=>$category->getNom(),
                    "desc"=>$category->getDescription(),
                )
            );

        }

        return new JsonResponse($reponse);

    }






}
