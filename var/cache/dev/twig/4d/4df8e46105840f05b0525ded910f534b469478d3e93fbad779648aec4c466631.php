<?php

/* AdminBundle:Admin:dashboard.html.twig */
class __TwigTemplate_b02958c83b1ccea435f01ef161fa15fbf3ca10ad063acbe9a7932fd6580fd8fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layoutAdmin.html.twig", "AdminBundle:Admin:dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bread' => array($this, 'block_bread'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d5be62baf36835fed6e13d7dfd4dcc0252175df242c7cc100a5333db37d7258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5be62baf36835fed6e13d7dfd4dcc0252175df242c7cc100a5333db37d7258->enter($__internal_9d5be62baf36835fed6e13d7dfd4dcc0252175df242c7cc100a5333db37d7258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $__internal_540a019faa9236615f22cffe0c944770a104d3cd8ce034de0f4c9ff21b722af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540a019faa9236615f22cffe0c944770a104d3cd8ce034de0f4c9ff21b722af7->enter($__internal_540a019faa9236615f22cffe0c944770a104d3cd8ce034de0f4c9ff21b722af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5be62baf36835fed6e13d7dfd4dcc0252175df242c7cc100a5333db37d7258->leave($__internal_9d5be62baf36835fed6e13d7dfd4dcc0252175df242c7cc100a5333db37d7258_prof);

        
        $__internal_540a019faa9236615f22cffe0c944770a104d3cd8ce034de0f4c9ff21b722af7->leave($__internal_540a019faa9236615f22cffe0c944770a104d3cd8ce034de0f4c9ff21b722af7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e31005d6d1355eb64a3a1de965688493f2c8d54bbc98b1b48e29fd4073cbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e31005d6d1355eb64a3a1de965688493f2c8d54bbc98b1b48e29fd4073cbd3->enter($__internal_d1e31005d6d1355eb64a3a1de965688493f2c8d54bbc98b1b48e29fd4073cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d42748e11dc156692fce04ea263e1c0f6c08b73f68cf5a7f595ebc2b384598d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42748e11dc156692fce04ea263e1c0f6c08b73f68cf5a7f595ebc2b384598d6->enter($__internal_d42748e11dc156692fce04ea263e1c0f6c08b73f68cf5a7f595ebc2b384598d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_d42748e11dc156692fce04ea263e1c0f6c08b73f68cf5a7f595ebc2b384598d6->leave($__internal_d42748e11dc156692fce04ea263e1c0f6c08b73f68cf5a7f595ebc2b384598d6_prof);

        
        $__internal_d1e31005d6d1355eb64a3a1de965688493f2c8d54bbc98b1b48e29fd4073cbd3->leave($__internal_d1e31005d6d1355eb64a3a1de965688493f2c8d54bbc98b1b48e29fd4073cbd3_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_eaf1ca307075ef823a341c1ba284ce7e838ff406ed834b42cc560a53b58ccdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf1ca307075ef823a341c1ba284ce7e838ff406ed834b42cc560a53b58ccdfd->enter($__internal_eaf1ca307075ef823a341c1ba284ce7e838ff406ed834b42cc560a53b58ccdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_2779257dbfd5070a2b04b8e0891fa3a829289710704e30ca29c3a557422d8a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2779257dbfd5070a2b04b8e0891fa3a829289710704e30ca29c3a557422d8a7c->enter($__internal_2779257dbfd5070a2b04b8e0891fa3a829289710704e30ca29c3a557422d8a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        // line 7
        echo "

    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Dashboard</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>

    </div>

";
        
        $__internal_2779257dbfd5070a2b04b8e0891fa3a829289710704e30ca29c3a557422d8a7c->leave($__internal_2779257dbfd5070a2b04b8e0891fa3a829289710704e30ca29c3a557422d8a7c_prof);

        
        $__internal_eaf1ca307075ef823a341c1ba284ce7e838ff406ed834b42cc560a53b58ccdfd->leave($__internal_eaf1ca307075ef823a341c1ba284ce7e838ff406ed834b42cc560a53b58ccdfd_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c3f1b07373a711697974541b0c3910cee579793b207b97de94444da9c4e1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c3f1b07373a711697974541b0c3910cee579793b207b97de94444da9c4e1cb->enter($__internal_e4c3f1b07373a711697974541b0c3910cee579793b207b97de94444da9c4e1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68622770418af881bfedba48029d6e9c2e4b285337ae19eecafc217a0c99fbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68622770418af881bfedba48029d6e9c2e4b285337ae19eecafc217a0c99fbc9->enter($__internal_68622770418af881bfedba48029d6e9c2e4b285337ae19eecafc217a0c99fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "



    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Je suis le tableau de bord

            </div>
        </div>
    </div>



";
        
        $__internal_68622770418af881bfedba48029d6e9c2e4b285337ae19eecafc217a0c99fbc9->leave($__internal_68622770418af881bfedba48029d6e9c2e4b285337ae19eecafc217a0c99fbc9_prof);

        
        $__internal_e4c3f1b07373a711697974541b0c3910cee579793b207b97de94444da9c4e1cb->leave($__internal_e4c3f1b07373a711697974541b0c3910cee579793b207b97de94444da9c4e1cb_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  99 => 29,  78 => 14,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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
            <h2>Dashboard</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"{{ path('admin_homepage') }}\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>

    </div>

{% endblock %}




{% block body %}




    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Je suis le tableau de bord

            </div>
        </div>
    </div>



{% endblock %}", "AdminBundle:Admin:dashboard.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/dashboard.html.twig");
    }
}
