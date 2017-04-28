<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
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
        $__internal_be6105d0c237ca475900d7fd1592a1166eeee4662e9065f5c52b24bb632b3ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6105d0c237ca475900d7fd1592a1166eeee4662e9065f5c52b24bb632b3ccb->enter($__internal_be6105d0c237ca475900d7fd1592a1166eeee4662e9065f5c52b24bb632b3ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_52616ffa3820fa45cfd1e779336ff5e43bf7ea3cbcabd2127768227c0d7f8939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52616ffa3820fa45cfd1e779336ff5e43bf7ea3cbcabd2127768227c0d7f8939->enter($__internal_52616ffa3820fa45cfd1e779336ff5e43bf7ea3cbcabd2127768227c0d7f8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be6105d0c237ca475900d7fd1592a1166eeee4662e9065f5c52b24bb632b3ccb->leave($__internal_be6105d0c237ca475900d7fd1592a1166eeee4662e9065f5c52b24bb632b3ccb_prof);

        
        $__internal_52616ffa3820fa45cfd1e779336ff5e43bf7ea3cbcabd2127768227c0d7f8939->leave($__internal_52616ffa3820fa45cfd1e779336ff5e43bf7ea3cbcabd2127768227c0d7f8939_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efe8f9c6ca581556a4f99890c54b47703456bb8b7577ab01244ddbeb5c19e7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe8f9c6ca581556a4f99890c54b47703456bb8b7577ab01244ddbeb5c19e7e7->enter($__internal_efe8f9c6ca581556a4f99890c54b47703456bb8b7577ab01244ddbeb5c19e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5434c8862a0b1ae37a0804190b6f7b2cd46daf3285e13d1ae282cdc6693f2b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5434c8862a0b1ae37a0804190b6f7b2cd46daf3285e13d1ae282cdc6693f2b7d->enter($__internal_5434c8862a0b1ae37a0804190b6f7b2cd46daf3285e13d1ae282cdc6693f2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5434c8862a0b1ae37a0804190b6f7b2cd46daf3285e13d1ae282cdc6693f2b7d->leave($__internal_5434c8862a0b1ae37a0804190b6f7b2cd46daf3285e13d1ae282cdc6693f2b7d_prof);

        
        $__internal_efe8f9c6ca581556a4f99890c54b47703456bb8b7577ab01244ddbeb5c19e7e7->leave($__internal_efe8f9c6ca581556a4f99890c54b47703456bb8b7577ab01244ddbeb5c19e7e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_408e30694a55cb1b0a652c70aa3d4e771ab5a993b99edde6ce82f6e04db40ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408e30694a55cb1b0a652c70aa3d4e771ab5a993b99edde6ce82f6e04db40ded->enter($__internal_408e30694a55cb1b0a652c70aa3d4e771ab5a993b99edde6ce82f6e04db40ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_569f46cfb04ececcec57e912923dd80ba58b33d68462da50b415c402049af250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569f46cfb04ececcec57e912923dd80ba58b33d68462da50b415c402049af250->enter($__internal_569f46cfb04ececcec57e912923dd80ba58b33d68462da50b415c402049af250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_569f46cfb04ececcec57e912923dd80ba58b33d68462da50b415c402049af250->leave($__internal_569f46cfb04ececcec57e912923dd80ba58b33d68462da50b415c402049af250_prof);

        
        $__internal_408e30694a55cb1b0a652c70aa3d4e771ab5a993b99edde6ce82f6e04db40ded->leave($__internal_408e30694a55cb1b0a652c70aa3d4e771ab5a993b99edde6ce82f6e04db40ded_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aab49777b6cd50cc6a90f12dcceb042558d64ce522bf79a111e91a6f2ef512ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab49777b6cd50cc6a90f12dcceb042558d64ce522bf79a111e91a6f2ef512ac->enter($__internal_aab49777b6cd50cc6a90f12dcceb042558d64ce522bf79a111e91a6f2ef512ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d93f9561a653cdd02fae436b72558bb19fcce9266d4a90cfad66d7e978c1e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d93f9561a653cdd02fae436b72558bb19fcce9266d4a90cfad66d7e978c1e23->enter($__internal_4d93f9561a653cdd02fae436b72558bb19fcce9266d4a90cfad66d7e978c1e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4d93f9561a653cdd02fae436b72558bb19fcce9266d4a90cfad66d7e978c1e23->leave($__internal_4d93f9561a653cdd02fae436b72558bb19fcce9266d4a90cfad66d7e978c1e23_prof);

        
        $__internal_aab49777b6cd50cc6a90f12dcceb042558d64ce522bf79a111e91a6f2ef512ac->leave($__internal_aab49777b6cd50cc6a90f12dcceb042558d64ce522bf79a111e91a6f2ef512ac_prof);

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
