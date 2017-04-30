<?php

/* AdminBundle:Admin:ajoutCategories.html.twig */
class __TwigTemplate_48b75c29d4507a0dd36db10902ac1201997ebfe2464700f36e6b132c79e5c521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layoutAdmin.html.twig", "AdminBundle:Admin:ajoutCategories.html.twig", 1);
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
        $__internal_a750aef94f21af35d07b963b875c25efc960d5698d0aa71cade83e749fc8f300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a750aef94f21af35d07b963b875c25efc960d5698d0aa71cade83e749fc8f300->enter($__internal_a750aef94f21af35d07b963b875c25efc960d5698d0aa71cade83e749fc8f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:ajoutCategories.html.twig"));

        $__internal_ba3438ede315426713120dde0ddf919d8b953b290fecfa6718eedd8c6c9b559d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3438ede315426713120dde0ddf919d8b953b290fecfa6718eedd8c6c9b559d->enter($__internal_ba3438ede315426713120dde0ddf919d8b953b290fecfa6718eedd8c6c9b559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:ajoutCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a750aef94f21af35d07b963b875c25efc960d5698d0aa71cade83e749fc8f300->leave($__internal_a750aef94f21af35d07b963b875c25efc960d5698d0aa71cade83e749fc8f300_prof);

        
        $__internal_ba3438ede315426713120dde0ddf919d8b953b290fecfa6718eedd8c6c9b559d->leave($__internal_ba3438ede315426713120dde0ddf919d8b953b290fecfa6718eedd8c6c9b559d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd4caab9ec325f69d98a186c0c21e5749d74a7a2a3d96ac2acc72efc3dc704d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4caab9ec325f69d98a186c0c21e5749d74a7a2a3d96ac2acc72efc3dc704d4->enter($__internal_bd4caab9ec325f69d98a186c0c21e5749d74a7a2a3d96ac2acc72efc3dc704d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_359c0abf53885d25ce5051e9adb92189329031c6081a8363259fcffe0b192b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359c0abf53885d25ce5051e9adb92189329031c6081a8363259fcffe0b192b5b->enter($__internal_359c0abf53885d25ce5051e9adb92189329031c6081a8363259fcffe0b192b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_359c0abf53885d25ce5051e9adb92189329031c6081a8363259fcffe0b192b5b->leave($__internal_359c0abf53885d25ce5051e9adb92189329031c6081a8363259fcffe0b192b5b_prof);

        
        $__internal_bd4caab9ec325f69d98a186c0c21e5749d74a7a2a3d96ac2acc72efc3dc704d4->leave($__internal_bd4caab9ec325f69d98a186c0c21e5749d74a7a2a3d96ac2acc72efc3dc704d4_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_d46b5d3b1f565c68aa99f1c1049b4e9f742363bd2389222911fca68898c5f85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46b5d3b1f565c68aa99f1c1049b4e9f742363bd2389222911fca68898c5f85a->enter($__internal_d46b5d3b1f565c68aa99f1c1049b4e9f742363bd2389222911fca68898c5f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_bdac8e6736e5448f7c343930a8605e7f9cb6d72fca1601ef79effb346044654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdac8e6736e5448f7c343930a8605e7f9cb6d72fca1601ef79effb346044654b->enter($__internal_bdac8e6736e5448f7c343930a8605e7f9cb6d72fca1601ef79effb346044654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        // line 7
        echo "

    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Ajout catégories</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">Admin</a>
                </li>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_gestionCategoriePage");
        echo "\">Catégories</a>
                </li>
                <li class=\"active\">
                    <strong>Ajout</strong>
                </li>
            </ol>
        </div>

    </div>

";
        
        $__internal_bdac8e6736e5448f7c343930a8605e7f9cb6d72fca1601ef79effb346044654b->leave($__internal_bdac8e6736e5448f7c343930a8605e7f9cb6d72fca1601ef79effb346044654b_prof);

        
        $__internal_d46b5d3b1f565c68aa99f1c1049b4e9f742363bd2389222911fca68898c5f85a->leave($__internal_d46b5d3b1f565c68aa99f1c1049b4e9f742363bd2389222911fca68898c5f85a_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_86eff1ad1d653763582d597e7e58f2719920dbf3c173723925ea23990b34b658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86eff1ad1d653763582d597e7e58f2719920dbf3c173723925ea23990b34b658->enter($__internal_86eff1ad1d653763582d597e7e58f2719920dbf3c173723925ea23990b34b658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e19d361620ed4067a20a6d560303578eae6d4f87f0306b7c69f47a4a1a204e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19d361620ed4067a20a6d560303578eae6d4f87f0306b7c69f47a4a1a204e94->enter($__internal_e19d361620ed4067a20a6d560303578eae6d4f87f0306b7c69f47a4a1a204e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "



    <div class=\"wrapper wrapper-content\" ng-controller=\"ajoutCatCtrl\">
        <div class=\" animated fadeInRightBig\">


            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Les coordonnées de la nouvelle catégorie</h5>
                    <div class=\"ibox-tools\">
                        <a class=\"collapse-link\">
                            <i class=\"fa fa-chevron-up\"></i>
                        </a>

                        <a class=\"close-link\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"ibox-content\" ng-init=\"chargementAjout = false\">

                    <div class=\"spiner-example\" ng-show=\"chargementAjout\">
                        <div class=\"sk-spinner sk-spinner-chasing-dots\">
                            <div class=\"sk-dot1\"></div>
                            <div class=\"sk-dot2\"></div>
                        </div>
                    </div>

                    <form method=\"get\" class=\"form-horizontal\" name=\"formAjoutCat\" ng-hide=\"chargementAjout\">
                        <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Nom :</label>

                            <div class=\"col-sm-10\"><input placeholder=\"Nom de la catégorie\" required pattern=\"[a-zA-Z0-9 ]*\" ng-model=\"txtNom\" type=\"text\" class=\"form-control\"></div>
                        </div>
                        <div class=\"hr-line-dashed\"></div>
                         <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Description :</label>

                            <div class=\"col-sm-10\"><textarea type=\"text\" ng-model=\"txtDesc\" placeholder=\"Description de la catégorie\" class=\"form-control\" rows=\"5\"></textarea></div>
                        </div>
                        <div class=\"hr-line-dashed\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-4 col-sm-offset-2\">
                                <button class=\"btn btn-primary\" type=\"submit\" ng-click=\"ajouterCategorie(formAjoutCat)\">Enregistrer</button>

                                <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_gestionCategoriePage");
        echo "\" class=\"btn btn-white\" type=\"submit\">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





        </div>
    </div>



";
        
        $__internal_e19d361620ed4067a20a6d560303578eae6d4f87f0306b7c69f47a4a1a204e94->leave($__internal_e19d361620ed4067a20a6d560303578eae6d4f87f0306b7c69f47a4a1a204e94_prof);

        
        $__internal_86eff1ad1d653763582d597e7e58f2719920dbf3c173723925ea23990b34b658->leave($__internal_86eff1ad1d653763582d597e7e58f2719920dbf3c173723925ea23990b34b658_prof);

    }

    // line 99
    public function block_angular($context, array $blocks = array())
    {
        $__internal_9f0d1c60c0140c4af73400078f44df7320c642da1571ae1f62ee7ae71ce2b1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0d1c60c0140c4af73400078f44df7320c642da1571ae1f62ee7ae71ce2b1ce->enter($__internal_9f0d1c60c0140c4af73400078f44df7320c642da1571ae1f62ee7ae71ce2b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        $__internal_6646384771b1851ff9027ea5f146e0c8bfae755c0371bbb13a8192582348d8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6646384771b1851ff9027ea5f146e0c8bfae755c0371bbb13a8192582348d8d0->enter($__internal_6646384771b1851ff9027ea5f146e0c8bfae755c0371bbb13a8192582348d8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        // line 100
        echo "    <script>


        appAdmin.controller(\"ajoutCatCtrl\",function(\$scope,\$http){



            \$scope.initFormulaire = function(){
                \$scope.txtNom = \"\";
                \$scope.txtDesc = \"\";
            }

            \$scope.initFormulaire();


            \$scope.ajouterCategorie = function(form){

                if(form.\$valid){


                    \$scope.chargementAjout = true;

                    \$scope.objToSend = {
                        nom:\$scope.txtNom,
                        desc:\$scope.txtDesc
                    }



                    \$http.post(\"http://172.16.128.8/formation/web/app_dev.php/Admin/Categories/ajoutCategorie\",\$scope.objToSend)
                            .then(function(response){



                                \$scope.chargementAjout = false;

                                if(response.data.success){
                                    toastr.success(response.data.message,\"Ajout Catégorie\");

                                    \$scope.initFormulaire();

                                }else{
                                    toastr.warning(response.data.message,\"Ajout Catégorie\");

                                }





                            })



                }else{

                    toastr.warning('Form non valid','Formulaire!')


                }




            }



        });


    </script>


";
        
        $__internal_6646384771b1851ff9027ea5f146e0c8bfae755c0371bbb13a8192582348d8d0->leave($__internal_6646384771b1851ff9027ea5f146e0c8bfae755c0371bbb13a8192582348d8d0_prof);

        
        $__internal_9f0d1c60c0140c4af73400078f44df7320c642da1571ae1f62ee7ae71ce2b1ce->leave($__internal_9f0d1c60c0140c4af73400078f44df7320c642da1571ae1f62ee7ae71ce2b1ce_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:ajoutCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 100,  189 => 99,  162 => 78,  115 => 33,  106 => 32,  85 => 17,  79 => 14,  70 => 7,  61 => 6,  43 => 3,  11 => 1,);
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
            <h2>Ajout catégories</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"{{ path('admin_homepage') }}\">Admin</a>
                </li>
                <li>
                    <a href=\"{{ path('admin_gestionCategoriePage') }}\">Catégories</a>
                </li>
                <li class=\"active\">
                    <strong>Ajout</strong>
                </li>
            </ol>
        </div>

    </div>

{% endblock %}




{% block body %}




    <div class=\"wrapper wrapper-content\" ng-controller=\"ajoutCatCtrl\">
        <div class=\" animated fadeInRightBig\">


            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Les coordonnées de la nouvelle catégorie</h5>
                    <div class=\"ibox-tools\">
                        <a class=\"collapse-link\">
                            <i class=\"fa fa-chevron-up\"></i>
                        </a>

                        <a class=\"close-link\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"ibox-content\" ng-init=\"chargementAjout = false\">

                    <div class=\"spiner-example\" ng-show=\"chargementAjout\">
                        <div class=\"sk-spinner sk-spinner-chasing-dots\">
                            <div class=\"sk-dot1\"></div>
                            <div class=\"sk-dot2\"></div>
                        </div>
                    </div>

                    <form method=\"get\" class=\"form-horizontal\" name=\"formAjoutCat\" ng-hide=\"chargementAjout\">
                        <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Nom :</label>

                            <div class=\"col-sm-10\"><input placeholder=\"Nom de la catégorie\" required pattern=\"[a-zA-Z0-9 ]*\" ng-model=\"txtNom\" type=\"text\" class=\"form-control\"></div>
                        </div>
                        <div class=\"hr-line-dashed\"></div>
                         <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Description :</label>

                            <div class=\"col-sm-10\"><textarea type=\"text\" ng-model=\"txtDesc\" placeholder=\"Description de la catégorie\" class=\"form-control\" rows=\"5\"></textarea></div>
                        </div>
                        <div class=\"hr-line-dashed\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-4 col-sm-offset-2\">
                                <button class=\"btn btn-primary\" type=\"submit\" ng-click=\"ajouterCategorie(formAjoutCat)\">Enregistrer</button>

                                <a href=\"{{ path('admin_gestionCategoriePage') }}\" class=\"btn btn-white\" type=\"submit\">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





        </div>
    </div>



{% endblock %}




{% block angular %}
    <script>


        appAdmin.controller(\"ajoutCatCtrl\",function(\$scope,\$http){



            \$scope.initFormulaire = function(){
                \$scope.txtNom = \"\";
                \$scope.txtDesc = \"\";
            }

            \$scope.initFormulaire();


            \$scope.ajouterCategorie = function(form){

                if(form.\$valid){


                    \$scope.chargementAjout = true;

                    \$scope.objToSend = {
                        nom:\$scope.txtNom,
                        desc:\$scope.txtDesc
                    }



                    \$http.post(\"http://172.16.128.8/formation/web/app_dev.php/Admin/Categories/ajoutCategorie\",\$scope.objToSend)
                            .then(function(response){



                                \$scope.chargementAjout = false;

                                if(response.data.success){
                                    toastr.success(response.data.message,\"Ajout Catégorie\");

                                    \$scope.initFormulaire();

                                }else{
                                    toastr.warning(response.data.message,\"Ajout Catégorie\");

                                }





                            })



                }else{

                    toastr.warning('Form non valid','Formulaire!')


                }




            }



        });


    </script>


{% endblock %}

", "AdminBundle:Admin:ajoutCategories.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/ajoutCategories.html.twig");
    }
}
