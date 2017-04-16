<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7486e779ab0280d0026ae1809b690113e755a79b901a54ee3afad577ff1754c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7486e779ab0280d0026ae1809b690113e755a79b901a54ee3afad577ff1754c0->enter($__internal_7486e779ab0280d0026ae1809b690113e755a79b901a54ee3afad577ff1754c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b14b7c4b932a208e1bec8bdf438e785215f8cd9f8c51dfad1cd5c62dbafeddd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14b7c4b932a208e1bec8bdf438e785215f8cd9f8c51dfad1cd5c62dbafeddd9->enter($__internal_b14b7c4b932a208e1bec8bdf438e785215f8cd9f8c51dfad1cd5c62dbafeddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7486e779ab0280d0026ae1809b690113e755a79b901a54ee3afad577ff1754c0->leave($__internal_7486e779ab0280d0026ae1809b690113e755a79b901a54ee3afad577ff1754c0_prof);

        
        $__internal_b14b7c4b932a208e1bec8bdf438e785215f8cd9f8c51dfad1cd5c62dbafeddd9->leave($__internal_b14b7c4b932a208e1bec8bdf438e785215f8cd9f8c51dfad1cd5c62dbafeddd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a821b2eae7bad4636416c213b18ff9b57382e1c586cef87854da8f789487cbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a821b2eae7bad4636416c213b18ff9b57382e1c586cef87854da8f789487cbea->enter($__internal_a821b2eae7bad4636416c213b18ff9b57382e1c586cef87854da8f789487cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3799dbc33d60f5941e45ecb5b172ec394e529e34b61235b02b89c6dc532902de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3799dbc33d60f5941e45ecb5b172ec394e529e34b61235b02b89c6dc532902de->enter($__internal_3799dbc33d60f5941e45ecb5b172ec394e529e34b61235b02b89c6dc532902de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3799dbc33d60f5941e45ecb5b172ec394e529e34b61235b02b89c6dc532902de->leave($__internal_3799dbc33d60f5941e45ecb5b172ec394e529e34b61235b02b89c6dc532902de_prof);

        
        $__internal_a821b2eae7bad4636416c213b18ff9b57382e1c586cef87854da8f789487cbea->leave($__internal_a821b2eae7bad4636416c213b18ff9b57382e1c586cef87854da8f789487cbea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_70ad53e46c07a604cf4bc98c7fbd93606a5c2f387a1e3120aaeb025b34a0d5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ad53e46c07a604cf4bc98c7fbd93606a5c2f387a1e3120aaeb025b34a0d5a5->enter($__internal_70ad53e46c07a604cf4bc98c7fbd93606a5c2f387a1e3120aaeb025b34a0d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5300ca9a05f14f178b8e127709430743a6935c811af0cd7e318afda6d3452916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5300ca9a05f14f178b8e127709430743a6935c811af0cd7e318afda6d3452916->enter($__internal_5300ca9a05f14f178b8e127709430743a6935c811af0cd7e318afda6d3452916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5300ca9a05f14f178b8e127709430743a6935c811af0cd7e318afda6d3452916->leave($__internal_5300ca9a05f14f178b8e127709430743a6935c811af0cd7e318afda6d3452916_prof);

        
        $__internal_70ad53e46c07a604cf4bc98c7fbd93606a5c2f387a1e3120aaeb025b34a0d5a5->leave($__internal_70ad53e46c07a604cf4bc98c7fbd93606a5c2f387a1e3120aaeb025b34a0d5a5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e8e9c48ba3dedb559dee5dca406fdbcb042cded6ae7cfc615b92812409f1f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8e9c48ba3dedb559dee5dca406fdbcb042cded6ae7cfc615b92812409f1f89->enter($__internal_1e8e9c48ba3dedb559dee5dca406fdbcb042cded6ae7cfc615b92812409f1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57af84ea30edb54d98c7b550f4010875b2fa614ecf9d37ec481628a673e5f264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af84ea30edb54d98c7b550f4010875b2fa614ecf9d37ec481628a673e5f264->enter($__internal_57af84ea30edb54d98c7b550f4010875b2fa614ecf9d37ec481628a673e5f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_57af84ea30edb54d98c7b550f4010875b2fa614ecf9d37ec481628a673e5f264->leave($__internal_57af84ea30edb54d98c7b550f4010875b2fa614ecf9d37ec481628a673e5f264_prof);

        
        $__internal_1e8e9c48ba3dedb559dee5dca406fdbcb042cded6ae7cfc615b92812409f1f89->leave($__internal_1e8e9c48ba3dedb559dee5dca406fdbcb042cded6ae7cfc615b92812409f1f89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/formation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
