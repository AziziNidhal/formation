<?php

/* AdminBundle:Admin:ajoutCategories.html.twig */
class __TwigTemplate_c93a645a8a8711013addc9c09022ef3fd688f9219c8cf2dd69d6f76e43be28ac extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_462108b4ef82a66e5d1af22e62d855528d2f5c75606e5eda4bb1d1915eb2e431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462108b4ef82a66e5d1af22e62d855528d2f5c75606e5eda4bb1d1915eb2e431->enter($__internal_462108b4ef82a66e5d1af22e62d855528d2f5c75606e5eda4bb1d1915eb2e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:ajoutCategories.html.twig"));

        $__internal_0a88668b365051008171ae14174182c349def1afecdaa2852ddb019e2d410ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a88668b365051008171ae14174182c349def1afecdaa2852ddb019e2d410ede->enter($__internal_0a88668b365051008171ae14174182c349def1afecdaa2852ddb019e2d410ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:ajoutCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462108b4ef82a66e5d1af22e62d855528d2f5c75606e5eda4bb1d1915eb2e431->leave($__internal_462108b4ef82a66e5d1af22e62d855528d2f5c75606e5eda4bb1d1915eb2e431_prof);

        
        $__internal_0a88668b365051008171ae14174182c349def1afecdaa2852ddb019e2d410ede->leave($__internal_0a88668b365051008171ae14174182c349def1afecdaa2852ddb019e2d410ede_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c40e8cbc11054b8968861fbccf78e412467e8fee6a89e86778b9951f4a8124ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40e8cbc11054b8968861fbccf78e412467e8fee6a89e86778b9951f4a8124ef->enter($__internal_c40e8cbc11054b8968861fbccf78e412467e8fee6a89e86778b9951f4a8124ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aab0b532cc632e52c9e0bfd3052f1ce4311e146969d5611d9b8f24df551e7d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab0b532cc632e52c9e0bfd3052f1ce4311e146969d5611d9b8f24df551e7d2e->enter($__internal_aab0b532cc632e52c9e0bfd3052f1ce4311e146969d5611d9b8f24df551e7d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_aab0b532cc632e52c9e0bfd3052f1ce4311e146969d5611d9b8f24df551e7d2e->leave($__internal_aab0b532cc632e52c9e0bfd3052f1ce4311e146969d5611d9b8f24df551e7d2e_prof);

        
        $__internal_c40e8cbc11054b8968861fbccf78e412467e8fee6a89e86778b9951f4a8124ef->leave($__internal_c40e8cbc11054b8968861fbccf78e412467e8fee6a89e86778b9951f4a8124ef_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_9611285dac345115d990364bb3fb84891e82f6e299afe44bdc401f9587007a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9611285dac345115d990364bb3fb84891e82f6e299afe44bdc401f9587007a64->enter($__internal_9611285dac345115d990364bb3fb84891e82f6e299afe44bdc401f9587007a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_0a6919a698c8a93be40df618e80143123dce109590994581f39f950858359057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6919a698c8a93be40df618e80143123dce109590994581f39f950858359057->enter($__internal_0a6919a698c8a93be40df618e80143123dce109590994581f39f950858359057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

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
        
        $__internal_0a6919a698c8a93be40df618e80143123dce109590994581f39f950858359057->leave($__internal_0a6919a698c8a93be40df618e80143123dce109590994581f39f950858359057_prof);

        
        $__internal_9611285dac345115d990364bb3fb84891e82f6e299afe44bdc401f9587007a64->leave($__internal_9611285dac345115d990364bb3fb84891e82f6e299afe44bdc401f9587007a64_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6bc2c481ee13f7baea75b4deeb8071047b6cda247fe7c9b657eebc85c4dcb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bc2c481ee13f7baea75b4deeb8071047b6cda247fe7c9b657eebc85c4dcb9d->enter($__internal_a6bc2c481ee13f7baea75b4deeb8071047b6cda247fe7c9b657eebc85c4dcb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24f78833aff38cab7fc7d0a1712685bb2c0da96887aa8365a70ed7504f606074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f78833aff38cab7fc7d0a1712685bb2c0da96887aa8365a70ed7504f606074->enter($__internal_24f78833aff38cab7fc7d0a1712685bb2c0da96887aa8365a70ed7504f606074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "



    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Ajout Catégories

            </div>
        </div>
    </div>



";
        
        $__internal_24f78833aff38cab7fc7d0a1712685bb2c0da96887aa8365a70ed7504f606074->leave($__internal_24f78833aff38cab7fc7d0a1712685bb2c0da96887aa8365a70ed7504f606074_prof);

        
        $__internal_a6bc2c481ee13f7baea75b4deeb8071047b6cda247fe7c9b657eebc85c4dcb9d->leave($__internal_a6bc2c481ee13f7baea75b4deeb8071047b6cda247fe7c9b657eebc85c4dcb9d_prof);

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
        return array (  114 => 33,  105 => 32,  84 => 17,  78 => 14,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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




    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Ajout Catégories

            </div>
        </div>
    </div>



{% endblock %}", "AdminBundle:Admin:ajoutCategories.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/ajoutCategories.html.twig");
    }
}
