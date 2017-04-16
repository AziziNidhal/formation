<?php

/* ::base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_197b5b1c8f6659c5a52e5b9e4efc0550a8b4710b436d036e2bbe5e971eae6b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197b5b1c8f6659c5a52e5b9e4efc0550a8b4710b436d036e2bbe5e971eae6b75->enter($__internal_197b5b1c8f6659c5a52e5b9e4efc0550a8b4710b436d036e2bbe5e971eae6b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_71e0dfe7039ebea10b97b038ec2e27129723edc7378218390385f7dccf10510c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e0dfe7039ebea10b97b038ec2e27129723edc7378218390385f7dccf10510c->enter($__internal_71e0dfe7039ebea10b97b038ec2e27129723edc7378218390385f7dccf10510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        <style>

            p{
                text-decoration: underline;
            }

        </style>

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_197b5b1c8f6659c5a52e5b9e4efc0550a8b4710b436d036e2bbe5e971eae6b75->leave($__internal_197b5b1c8f6659c5a52e5b9e4efc0550a8b4710b436d036e2bbe5e971eae6b75_prof);

        
        $__internal_71e0dfe7039ebea10b97b038ec2e27129723edc7378218390385f7dccf10510c->leave($__internal_71e0dfe7039ebea10b97b038ec2e27129723edc7378218390385f7dccf10510c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae93b25b86d5d335b57ee6037e301c81da3b5f2c8f1c3d18012efd2219d61eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae93b25b86d5d335b57ee6037e301c81da3b5f2c8f1c3d18012efd2219d61eff->enter($__internal_ae93b25b86d5d335b57ee6037e301c81da3b5f2c8f1c3d18012efd2219d61eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_847c44fef68194f679935c8ee93e0d67d3c10135b0400c3ef5a92d2b67951c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847c44fef68194f679935c8ee93e0d67d3c10135b0400c3ef5a92d2b67951c6f->enter($__internal_847c44fef68194f679935c8ee93e0d67d3c10135b0400c3ef5a92d2b67951c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_847c44fef68194f679935c8ee93e0d67d3c10135b0400c3ef5a92d2b67951c6f->leave($__internal_847c44fef68194f679935c8ee93e0d67d3c10135b0400c3ef5a92d2b67951c6f_prof);

        
        $__internal_ae93b25b86d5d335b57ee6037e301c81da3b5f2c8f1c3d18012efd2219d61eff->leave($__internal_ae93b25b86d5d335b57ee6037e301c81da3b5f2c8f1c3d18012efd2219d61eff_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb9cb3e839203709b34093bb62a4d22f16c85c998c1520a5815d0ba59504d736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9cb3e839203709b34093bb62a4d22f16c85c998c1520a5815d0ba59504d736->enter($__internal_bb9cb3e839203709b34093bb62a4d22f16c85c998c1520a5815d0ba59504d736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_575bf923b0e1e01c752d2c3c86b17b5d7571aee21287c9579f29c7e2736a988d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575bf923b0e1e01c752d2c3c86b17b5d7571aee21287c9579f29c7e2736a988d->enter($__internal_575bf923b0e1e01c752d2c3c86b17b5d7571aee21287c9579f29c7e2736a988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "

        ";
        
        $__internal_575bf923b0e1e01c752d2c3c86b17b5d7571aee21287c9579f29c7e2736a988d->leave($__internal_575bf923b0e1e01c752d2c3c86b17b5d7571aee21287c9579f29c7e2736a988d_prof);

        
        $__internal_bb9cb3e839203709b34093bb62a4d22f16c85c998c1520a5815d0ba59504d736->leave($__internal_bb9cb3e839203709b34093bb62a4d22f16c85c998c1520a5815d0ba59504d736_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3801e5b39a897a4af1ee617ab3dae1d889d77a18fbdab2ac110273d3d43fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3801e5b39a897a4af1ee617ab3dae1d889d77a18fbdab2ac110273d3d43fb3->enter($__internal_7f3801e5b39a897a4af1ee617ab3dae1d889d77a18fbdab2ac110273d3d43fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c79f3949361ef38d680573ef51303c3ad410e33b5abdc8b04bd27f85cfb05965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79f3949361ef38d680573ef51303c3ad410e33b5abdc8b04bd27f85cfb05965->enter($__internal_c79f3949361ef38d680573ef51303c3ad410e33b5abdc8b04bd27f85cfb05965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
        ";
        
        $__internal_c79f3949361ef38d680573ef51303c3ad410e33b5abdc8b04bd27f85cfb05965->leave($__internal_c79f3949361ef38d680573ef51303c3ad410e33b5abdc8b04bd27f85cfb05965_prof);

        
        $__internal_7f3801e5b39a897a4af1ee617ab3dae1d889d77a18fbdab2ac110273d3d43fb3->leave($__internal_7f3801e5b39a897a4af1ee617ab3dae1d889d77a18fbdab2ac110273d3d43fb3_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02a37a9280bb33cd54b67c1a4694d227303ea5718e3c6006d6962a6e5dd00162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a37a9280bb33cd54b67c1a4694d227303ea5718e3c6006d6962a6e5dd00162->enter($__internal_02a37a9280bb33cd54b67c1a4694d227303ea5718e3c6006d6962a6e5dd00162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec48edccf278893751b74915fc045ea26e710440ea84e53a6f9c5950f768ea2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec48edccf278893751b74915fc045ea26e710440ea84e53a6f9c5950f768ea2d->enter($__internal_ec48edccf278893751b74915fc045ea26e710440ea84e53a6f9c5950f768ea2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "
        ";
        
        $__internal_ec48edccf278893751b74915fc045ea26e710440ea84e53a6f9c5950f768ea2d->leave($__internal_ec48edccf278893751b74915fc045ea26e710440ea84e53a6f9c5950f768ea2d_prof);

        
        $__internal_02a37a9280bb33cd54b67c1a4694d227303ea5718e3c6006d6962a6e5dd00162->leave($__internal_02a37a9280bb33cd54b67c1a4694d227303ea5718e3c6006d6962a6e5dd00162_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  136 => 27,  125 => 24,  116 => 23,  104 => 17,  95 => 16,  77 => 5,  65 => 30,  63 => 27,  60 => 26,  58 => 23,  51 => 20,  49 => 16,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>


        <style>

            p{
                text-decoration: underline;
            }

        </style>

        {% block stylesheets %}


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}

        {% endblock %}

        {% block javascripts %}

        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/formation/app/Resources/views/base.html.twig");
    }
}
