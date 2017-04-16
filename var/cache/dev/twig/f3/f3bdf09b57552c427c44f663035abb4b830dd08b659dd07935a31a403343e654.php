<?php

/* AdminBundle:Admin:gestionCategories.html.twig */
class __TwigTemplate_7dd8d4e4a9eb6a6e55badd90a0ca2636120cb20479709cf1e7d6ca75e51dabbb extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce64cb4ceb04a614046573b14a7608847c9ec1c65c48cba3e9f4d7dc16fad73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce64cb4ceb04a614046573b14a7608847c9ec1c65c48cba3e9f4d7dc16fad73f->enter($__internal_ce64cb4ceb04a614046573b14a7608847c9ec1c65c48cba3e9f4d7dc16fad73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:gestionCategories.html.twig"));

        $__internal_b1da3e23345d8cc9e8f6b9d7b1f884214c3ce4a02afc8e01701d83a5c7bcdaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1da3e23345d8cc9e8f6b9d7b1f884214c3ce4a02afc8e01701d83a5c7bcdaa3->enter($__internal_b1da3e23345d8cc9e8f6b9d7b1f884214c3ce4a02afc8e01701d83a5c7bcdaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:gestionCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce64cb4ceb04a614046573b14a7608847c9ec1c65c48cba3e9f4d7dc16fad73f->leave($__internal_ce64cb4ceb04a614046573b14a7608847c9ec1c65c48cba3e9f4d7dc16fad73f_prof);

        
        $__internal_b1da3e23345d8cc9e8f6b9d7b1f884214c3ce4a02afc8e01701d83a5c7bcdaa3->leave($__internal_b1da3e23345d8cc9e8f6b9d7b1f884214c3ce4a02afc8e01701d83a5c7bcdaa3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_978691653185b27530adde0b74a96a0254d974cbe4d23f6f87f8d47218804e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978691653185b27530adde0b74a96a0254d974cbe4d23f6f87f8d47218804e24->enter($__internal_978691653185b27530adde0b74a96a0254d974cbe4d23f6f87f8d47218804e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d476445ef8550a9775cbb2182b970ee7b75a3d090e6d2849f5c348fc0fa0210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d476445ef8550a9775cbb2182b970ee7b75a3d090e6d2849f5c348fc0fa0210->enter($__internal_1d476445ef8550a9775cbb2182b970ee7b75a3d090e6d2849f5c348fc0fa0210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_1d476445ef8550a9775cbb2182b970ee7b75a3d090e6d2849f5c348fc0fa0210->leave($__internal_1d476445ef8550a9775cbb2182b970ee7b75a3d090e6d2849f5c348fc0fa0210_prof);

        
        $__internal_978691653185b27530adde0b74a96a0254d974cbe4d23f6f87f8d47218804e24->leave($__internal_978691653185b27530adde0b74a96a0254d974cbe4d23f6f87f8d47218804e24_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_63ba3be6d9698b42d038a3cf548e31a68eeaf59675378c3c5c2bda5d93f2c06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ba3be6d9698b42d038a3cf548e31a68eeaf59675378c3c5c2bda5d93f2c06f->enter($__internal_63ba3be6d9698b42d038a3cf548e31a68eeaf59675378c3c5c2bda5d93f2c06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_336b3ea4b1d61487ea19c37c27051c836f74a1ea7e23454c84b12f978b8d0404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336b3ea4b1d61487ea19c37c27051c836f74a1ea7e23454c84b12f978b8d0404->enter($__internal_336b3ea4b1d61487ea19c37c27051c836f74a1ea7e23454c84b12f978b8d0404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

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
        
        $__internal_336b3ea4b1d61487ea19c37c27051c836f74a1ea7e23454c84b12f978b8d0404->leave($__internal_336b3ea4b1d61487ea19c37c27051c836f74a1ea7e23454c84b12f978b8d0404_prof);

        
        $__internal_63ba3be6d9698b42d038a3cf548e31a68eeaf59675378c3c5c2bda5d93f2c06f->leave($__internal_63ba3be6d9698b42d038a3cf548e31a68eeaf59675378c3c5c2bda5d93f2c06f_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_67269a10cf85cf7eb0097de2c54808047573714db8276010a4e8750ee6b9ead5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67269a10cf85cf7eb0097de2c54808047573714db8276010a4e8750ee6b9ead5->enter($__internal_67269a10cf85cf7eb0097de2c54808047573714db8276010a4e8750ee6b9ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e51b3e5832aed57c95dc714aa5acb05136a1bf9ba2c74912744a053e31a0971f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51b3e5832aed57c95dc714aa5acb05136a1bf9ba2c74912744a053e31a0971f->enter($__internal_e51b3e5832aed57c95dc714aa5acb05136a1bf9ba2c74912744a053e31a0971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "



    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Gestion Catégories

            </div>
        </div>
    </div>



";
        
        $__internal_e51b3e5832aed57c95dc714aa5acb05136a1bf9ba2c74912744a053e31a0971f->leave($__internal_e51b3e5832aed57c95dc714aa5acb05136a1bf9ba2c74912744a053e31a0971f_prof);

        
        $__internal_67269a10cf85cf7eb0097de2c54808047573714db8276010a4e8750ee6b9ead5->leave($__internal_67269a10cf85cf7eb0097de2c54808047573714db8276010a4e8750ee6b9ead5_prof);

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




    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Gestion Catégories

            </div>
        </div>
    </div>



{% endblock %}", "AdminBundle:Admin:gestionCategories.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/gestionCategories.html.twig");
    }
}
