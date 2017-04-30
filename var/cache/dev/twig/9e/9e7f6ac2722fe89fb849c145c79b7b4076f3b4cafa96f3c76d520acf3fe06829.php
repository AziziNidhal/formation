<?php

/* AdminBundle:Admin:gestionCategories.html.twig */
class __TwigTemplate_d67b492aebafcd5f8ab65d887049fd9f778babe4069922cd9ffcb861388774ee extends Twig_Template
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
        $__internal_09fe346084e7d6ffaad55845de923a1b8ecdec31402fe516917168db46ae7cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fe346084e7d6ffaad55845de923a1b8ecdec31402fe516917168db46ae7cd8->enter($__internal_09fe346084e7d6ffaad55845de923a1b8ecdec31402fe516917168db46ae7cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:gestionCategories.html.twig"));

        $__internal_e184b0d062e0d500deb3f571332c471c7a10c2157784bb985dbea081e6da2eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e184b0d062e0d500deb3f571332c471c7a10c2157784bb985dbea081e6da2eb4->enter($__internal_e184b0d062e0d500deb3f571332c471c7a10c2157784bb985dbea081e6da2eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:gestionCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fe346084e7d6ffaad55845de923a1b8ecdec31402fe516917168db46ae7cd8->leave($__internal_09fe346084e7d6ffaad55845de923a1b8ecdec31402fe516917168db46ae7cd8_prof);

        
        $__internal_e184b0d062e0d500deb3f571332c471c7a10c2157784bb985dbea081e6da2eb4->leave($__internal_e184b0d062e0d500deb3f571332c471c7a10c2157784bb985dbea081e6da2eb4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b24380fe4261789d59e9150cf1e4fddc75556d90ea0a6bd9b57cfc120737fee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24380fe4261789d59e9150cf1e4fddc75556d90ea0a6bd9b57cfc120737fee7->enter($__internal_b24380fe4261789d59e9150cf1e4fddc75556d90ea0a6bd9b57cfc120737fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99d963f4486c385d5fbdf75b002c07629ccd4bb7c404defcc04ee5306465e9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d963f4486c385d5fbdf75b002c07629ccd4bb7c404defcc04ee5306465e9b3->enter($__internal_99d963f4486c385d5fbdf75b002c07629ccd4bb7c404defcc04ee5306465e9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_99d963f4486c385d5fbdf75b002c07629ccd4bb7c404defcc04ee5306465e9b3->leave($__internal_99d963f4486c385d5fbdf75b002c07629ccd4bb7c404defcc04ee5306465e9b3_prof);

        
        $__internal_b24380fe4261789d59e9150cf1e4fddc75556d90ea0a6bd9b57cfc120737fee7->leave($__internal_b24380fe4261789d59e9150cf1e4fddc75556d90ea0a6bd9b57cfc120737fee7_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_6521db0092d7868a0d2997cfe3bc703c76d1cdec8ccaf149c100db8e1bfecc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6521db0092d7868a0d2997cfe3bc703c76d1cdec8ccaf149c100db8e1bfecc76->enter($__internal_6521db0092d7868a0d2997cfe3bc703c76d1cdec8ccaf149c100db8e1bfecc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_11498a9261bfce8e3f71bc6dcdba79cfc6c477204b828372c3784f4cb6173e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11498a9261bfce8e3f71bc6dcdba79cfc6c477204b828372c3784f4cb6173e12->enter($__internal_11498a9261bfce8e3f71bc6dcdba79cfc6c477204b828372c3784f4cb6173e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

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
        
        $__internal_11498a9261bfce8e3f71bc6dcdba79cfc6c477204b828372c3784f4cb6173e12->leave($__internal_11498a9261bfce8e3f71bc6dcdba79cfc6c477204b828372c3784f4cb6173e12_prof);

        
        $__internal_6521db0092d7868a0d2997cfe3bc703c76d1cdec8ccaf149c100db8e1bfecc76->leave($__internal_6521db0092d7868a0d2997cfe3bc703c76d1cdec8ccaf149c100db8e1bfecc76_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b8fcadca7204c219e03268770e43e1f26d6ac6d07fcfb7b8c09a092496038df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8fcadca7204c219e03268770e43e1f26d6ac6d07fcfb7b8c09a092496038df->enter($__internal_8b8fcadca7204c219e03268770e43e1f26d6ac6d07fcfb7b8c09a092496038df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84ebb331ceaced92525ca412424a278f241e4c2c0d377f98443e8c9555ff0514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ebb331ceaced92525ca412424a278f241e4c2c0d377f98443e8c9555ff0514->enter($__internal_84ebb331ceaced92525ca412424a278f241e4c2c0d377f98443e8c9555ff0514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-close\"></i> Supprimer</a>
                            </div>
                        </div>

                    </div>
                </div>

             </div>





        </div>
    </div>



";
        
        $__internal_84ebb331ceaced92525ca412424a278f241e4c2c0d377f98443e8c9555ff0514->leave($__internal_84ebb331ceaced92525ca412424a278f241e4c2c0d377f98443e8c9555ff0514_prof);

        
        $__internal_8b8fcadca7204c219e03268770e43e1f26d6ac6d07fcfb7b8c09a092496038df->leave($__internal_8b8fcadca7204c219e03268770e43e1f26d6ac6d07fcfb7b8c09a092496038df_prof);

    }

    // line 97
    public function block_angular($context, array $blocks = array())
    {
        $__internal_864cffef091f8e9990f5ad15b9248062c6d0c3eeb459c8e048630c225e9fad1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864cffef091f8e9990f5ad15b9248062c6d0c3eeb459c8e048630c225e9fad1d->enter($__internal_864cffef091f8e9990f5ad15b9248062c6d0c3eeb459c8e048630c225e9fad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        $__internal_329ea514b1c2996feda740e0572702453ffde8abe6e7ca802dfea8118c2b130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ea514b1c2996feda740e0572702453ffde8abe6e7ca802dfea8118c2b130d->enter($__internal_329ea514b1c2996feda740e0572702453ffde8abe6e7ca802dfea8118c2b130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        // line 98
        echo "    <script>


        appAdmin.controller(\"gestionCatCtrl\",function(\$scope,\$http){
            \$scope.categories=[];
            \$scope.txtSearch=\"\";
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

            \$scope.getCategories();












        });


    </script>


";
        
        $__internal_329ea514b1c2996feda740e0572702453ffde8abe6e7ca802dfea8118c2b130d->leave($__internal_329ea514b1c2996feda740e0572702453ffde8abe6e7ca802dfea8118c2b130d_prof);

        
        $__internal_864cffef091f8e9990f5ad15b9248062c6d0c3eeb459c8e048630c225e9fad1d->leave($__internal_864cffef091f8e9990f5ad15b9248062c6d0c3eeb459c8e048630c225e9fad1d_prof);

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
        return array (  194 => 98,  185 => 97,  141 => 60,  109 => 30,  100 => 29,  79 => 14,  70 => 7,  61 => 6,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/layoutAdmin.html.twig' %}

    {% block title %}Dashboad{% endblock %}


{% block bread %}


    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Gestion catégories</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"{{ path('admin_homepage') }}\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Gestion Catégories</strong>
                </li>
            </ol>
        </div>

    </div>

{% endblock %}




{% block body %}




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

                            <img alt=\"image\" class=\"img-circle\" src=\"{{ asset('img/a2.jpg') }}\">


                            <h3 class=\"m-b-xs\"><strong ng-bind=\"categorie.nom\"></strong></h3>

                            <address class=\"m-t-md\">
                            <span ng-bind=\"categorie.desc | limitTo:50\"></span>
                            <span ng-if=\"categorie.desc.length > 50\">...</span>
                            </address>


                        </a>
                        <div class=\"contact-box-footer\">
                            <div class=\"m-t-xs btn-group\">
                                <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-pencil\"></i> Modifier </a>
                                <a class=\"btn btn-xs btn-white\"><i class=\"fa fa-close\"></i> Supprimer</a>
                            </div>
                        </div>

                    </div>
                </div>

             </div>





        </div>
    </div>



{% endblock %}



{% block angular %}
    <script>


        appAdmin.controller(\"gestionCatCtrl\",function(\$scope,\$http){
            \$scope.categories=[];
            \$scope.txtSearch=\"\";
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

            \$scope.getCategories();












        });


    </script>


{% endblock %}


", "AdminBundle:Admin:gestionCategories.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/gestionCategories.html.twig");
    }
}
