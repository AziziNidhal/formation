<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
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
        $__internal_d7b600fe9ebee84fc8cd225cd59999f3c3919206694c1c1e43ae766c556521c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b600fe9ebee84fc8cd225cd59999f3c3919206694c1c1e43ae766c556521c2->enter($__internal_d7b600fe9ebee84fc8cd225cd59999f3c3919206694c1c1e43ae766c556521c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0182450062d242ce09c84eaffb1e0281c46c7fe0d3decdc10e8d1064a9734738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0182450062d242ce09c84eaffb1e0281c46c7fe0d3decdc10e8d1064a9734738->enter($__internal_0182450062d242ce09c84eaffb1e0281c46c7fe0d3decdc10e8d1064a9734738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d7b600fe9ebee84fc8cd225cd59999f3c3919206694c1c1e43ae766c556521c2->leave($__internal_d7b600fe9ebee84fc8cd225cd59999f3c3919206694c1c1e43ae766c556521c2_prof);

        
        $__internal_0182450062d242ce09c84eaffb1e0281c46c7fe0d3decdc10e8d1064a9734738->leave($__internal_0182450062d242ce09c84eaffb1e0281c46c7fe0d3decdc10e8d1064a9734738_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_622055fab841273520cbb0f1d19c879d2a5bca73ef1cf8697a163fe16e825b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622055fab841273520cbb0f1d19c879d2a5bca73ef1cf8697a163fe16e825b9b->enter($__internal_622055fab841273520cbb0f1d19c879d2a5bca73ef1cf8697a163fe16e825b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ade0761205a0a89ec3d1450484178b00ce67a6f043867c918f7714beebd1ad10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade0761205a0a89ec3d1450484178b00ce67a6f043867c918f7714beebd1ad10->enter($__internal_ade0761205a0a89ec3d1450484178b00ce67a6f043867c918f7714beebd1ad10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ade0761205a0a89ec3d1450484178b00ce67a6f043867c918f7714beebd1ad10->leave($__internal_ade0761205a0a89ec3d1450484178b00ce67a6f043867c918f7714beebd1ad10_prof);

        
        $__internal_622055fab841273520cbb0f1d19c879d2a5bca73ef1cf8697a163fe16e825b9b->leave($__internal_622055fab841273520cbb0f1d19c879d2a5bca73ef1cf8697a163fe16e825b9b_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_575ab7031766df3d73d6026e80446f12ed295f24e96afd3ef0987bf70cc96de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575ab7031766df3d73d6026e80446f12ed295f24e96afd3ef0987bf70cc96de8->enter($__internal_575ab7031766df3d73d6026e80446f12ed295f24e96afd3ef0987bf70cc96de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2bfd7c61c5b521392fab5306bad24e60d4675e81ad9a7c6c00140b96677f0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bfd7c61c5b521392fab5306bad24e60d4675e81ad9a7c6c00140b96677f0ad->enter($__internal_d2bfd7c61c5b521392fab5306bad24e60d4675e81ad9a7c6c00140b96677f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "

        ";
        
        $__internal_d2bfd7c61c5b521392fab5306bad24e60d4675e81ad9a7c6c00140b96677f0ad->leave($__internal_d2bfd7c61c5b521392fab5306bad24e60d4675e81ad9a7c6c00140b96677f0ad_prof);

        
        $__internal_575ab7031766df3d73d6026e80446f12ed295f24e96afd3ef0987bf70cc96de8->leave($__internal_575ab7031766df3d73d6026e80446f12ed295f24e96afd3ef0987bf70cc96de8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_d637d48bca81331dc7eb7ece2c742367da887bf3a8e7e95bfcc2e286bbe63fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d637d48bca81331dc7eb7ece2c742367da887bf3a8e7e95bfcc2e286bbe63fe6->enter($__internal_d637d48bca81331dc7eb7ece2c742367da887bf3a8e7e95bfcc2e286bbe63fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8e18a443f678f10ea72d9a30d48d6d9be089f44e33b12c976b9a3083cd87da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e18a443f678f10ea72d9a30d48d6d9be089f44e33b12c976b9a3083cd87da0->enter($__internal_b8e18a443f678f10ea72d9a30d48d6d9be089f44e33b12c976b9a3083cd87da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
        ";
        
        $__internal_b8e18a443f678f10ea72d9a30d48d6d9be089f44e33b12c976b9a3083cd87da0->leave($__internal_b8e18a443f678f10ea72d9a30d48d6d9be089f44e33b12c976b9a3083cd87da0_prof);

        
        $__internal_d637d48bca81331dc7eb7ece2c742367da887bf3a8e7e95bfcc2e286bbe63fe6->leave($__internal_d637d48bca81331dc7eb7ece2c742367da887bf3a8e7e95bfcc2e286bbe63fe6_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2794b5eebe92195ac4232eaff0454416dc48b1a7c2c1595c818e206b4e4fadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2794b5eebe92195ac4232eaff0454416dc48b1a7c2c1595c818e206b4e4fadc->enter($__internal_a2794b5eebe92195ac4232eaff0454416dc48b1a7c2c1595c818e206b4e4fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_549a60b078124670659e55cece6dea04821e19e1d21463f90d92c02dd83ffbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549a60b078124670659e55cece6dea04821e19e1d21463f90d92c02dd83ffbc3->enter($__internal_549a60b078124670659e55cece6dea04821e19e1d21463f90d92c02dd83ffbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "
        ";
        
        $__internal_549a60b078124670659e55cece6dea04821e19e1d21463f90d92c02dd83ffbc3->leave($__internal_549a60b078124670659e55cece6dea04821e19e1d21463f90d92c02dd83ffbc3_prof);

        
        $__internal_a2794b5eebe92195ac4232eaff0454416dc48b1a7c2c1595c818e206b4e4fadc->leave($__internal_a2794b5eebe92195ac4232eaff0454416dc48b1a7c2c1595c818e206b4e4fadc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/var/www/html/formation/app/Resources/views/base.html.twig");
    }
}
