<?php

/* AdminBundle:Admin:gestionCategories.html.twig */
class __TwigTemplate_86d8a04ed41026c9a74711510dee83752e797114e0080fb50c5d6b8310137706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layoutAdmin.html.twig", "AdminBundle:Admin:gestionCategories.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bread' => array($this, 'block_bread'),
            'body' => array($this, 'block_body'),
            'angular' => array($this, 'block_angular'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Dashboad";
    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        // line 7
        echo "

    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Gestion catégories</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Gestion Catégories</strong>
                </li>
            </ol>
        </div>

    </div>

";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "



    <div class=\"wrapper wrapper-content\" ng-controller=\"gestionCatCtrl\">
        <div class=\" text-center animated fadeInRightBig\">



            <div class=\"row\" ng-init=\"txtSearch=''\">

                <div class=\"form-group\">

                    <div class=\"col-sm-1\"></div>
                    <div class=\"col-sm-10\"><input placeholder=\"Chercher des catégories\" ng-model=\"txtSearch\" ng-change=\"getCategories(txtSearch)\" type=\"text\" class=\"form-control\"></div>

                </div>

            </div>


            <div class=\"clearP\"></div>


            <div class=\"row\">
                <div class=\"col-lg-3\" ng-repeat=\"categorie in categories\" >
                    <div class=\"contact-box center-version\" style=\"height: 280px!important;\">

                        <a href=\"#\">

                            <img alt=\"image\" class=\"img-circle\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/a2.jpg"), "html", null, true);
        echo "\">


                            <h3 class=\"m-b-xs\"><strong ng-bind=\"categorie.nom\"></strong></h3>

                            <address class=\"m-t-md\">
                            <span ng-bind=\"categorie.desc | limitTo:50\"></span>
                            <span ng-if=\"categorie.desc.length > 50\">...</span>
                            </address>


                        </a>
                        <div class=\"contact-box-footer\">
                            <div class=\"m-t-xs btn-group\">
                                <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-pencil\"></i> Modifier </a>
                                <a class=\"btn btn-xs btn-white\" ng-click=\"openModalDel(categorie.id,categorie.nom)\" ><i class=\"fa fa-close\"></i> Supprimer</a>

                            </div>
                        </div>

                    </div>
                </div>

             </div>





        </div>





        <div class=\"modal inmodal fade\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                        <h4 class=\"modal-title\">Suppression</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h3>
                            Vous etes sûr de <strong>supprimer</strong> la catégorie <span ng-bind=\"currentNameToDel\"></span>


                        </h3>



                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" ng-click=\"deleteCategorie(currentIdToDel)\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Annuler</button>
                    </div>
                </div>
            </div>
        </div>




    </div>



";
    }

    // line 131
    public function block_angular($context, array $blocks = array())
    {
        // line 132
        echo "    <script>


        appAdmin.controller(\"gestionCatCtrl\",function(\$scope,\$http){
            \$scope.categories=[];
            \$scope.txtSearch=\"\";

            \$scope.currentNameToDel = \"\";
            \$scope.currentIdToDel = 0;

            \$scope.getCategories = function(txtChange){





                if(txtChange == undefined){
                    \$scope.txtRecherche = \"\";
                }else{
                    \$scope.txtRecherche = txtChange;
                }


                \$scope.objToSend = {
                    txt : \$scope.txtRecherche
                }



                \$http.post(\"http://localhost/formation/web/app_dev.php/Admin/Categories/getCategoriesJson\",\$scope.objToSend)
                        .then(function (response) {

                            \$scope.categories = response.data;

                        });


            }

            \$scope.getCategories(\$scope.txtSearch);




            \$scope.openModalDel = function(id,nom){

                \$scope.currentNameToDel = nom;
                \$scope.currentIdToDel = id;
                \$(\"#modalDelete\").modal('show');
            }

            \$scope.deleteCategorie = function(id){


                \$scope.urlDel = \"http://localhost/formation/web/app_dev.php/Admin/Categories/deleteCategorieJson/\" + id ;

                \$http.post(\$scope.urlDel)
                        .then(function (reponse) {

                            if(reponse.data.success){
                                toastr.success(reponse.data.message,\"Suppression\");
                            }else{
                                toastr.error(reponse.data.message,\"Suppression\");
                            }

                            \$scope.getCategories(\$scope.txtSearch);
                            \$(\"#modalDelete\").modal('hide');

                        });




            }










        });


    </script>


";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:gestionCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 132,  171 => 131,  99 => 60,  67 => 30,  64 => 29,  49 => 14,  40 => 7,  37 => 6,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Admin:gestionCategories.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/gestionCategories.html.twig");
    }
}
