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
        $__internal_c9f4d07e6cce45f7db5a7bc0074501389929c8bc146064baba869e3c2c46a7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f4d07e6cce45f7db5a7bc0074501389929c8bc146064baba869e3c2c46a7e8->enter($__internal_c9f4d07e6cce45f7db5a7bc0074501389929c8bc146064baba869e3c2c46a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_53804049befe6161b511d8d27b761e99da0eb42975a48737c090a271117d8235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53804049befe6161b511d8d27b761e99da0eb42975a48737c090a271117d8235->enter($__internal_53804049befe6161b511d8d27b761e99da0eb42975a48737c090a271117d8235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f4d07e6cce45f7db5a7bc0074501389929c8bc146064baba869e3c2c46a7e8->leave($__internal_c9f4d07e6cce45f7db5a7bc0074501389929c8bc146064baba869e3c2c46a7e8_prof);

        
        $__internal_53804049befe6161b511d8d27b761e99da0eb42975a48737c090a271117d8235->leave($__internal_53804049befe6161b511d8d27b761e99da0eb42975a48737c090a271117d8235_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8abcd940e19d14189c947b02c40a7ff917dc913651eb083a2e0f11251616f4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abcd940e19d14189c947b02c40a7ff917dc913651eb083a2e0f11251616f4db->enter($__internal_8abcd940e19d14189c947b02c40a7ff917dc913651eb083a2e0f11251616f4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8d9f3634e7565bd11ddd4a19072505a25693d49a844854c2163bf6a4410a7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d9f3634e7565bd11ddd4a19072505a25693d49a844854c2163bf6a4410a7b3->enter($__internal_b8d9f3634e7565bd11ddd4a19072505a25693d49a844854c2163bf6a4410a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8d9f3634e7565bd11ddd4a19072505a25693d49a844854c2163bf6a4410a7b3->leave($__internal_b8d9f3634e7565bd11ddd4a19072505a25693d49a844854c2163bf6a4410a7b3_prof);

        
        $__internal_8abcd940e19d14189c947b02c40a7ff917dc913651eb083a2e0f11251616f4db->leave($__internal_8abcd940e19d14189c947b02c40a7ff917dc913651eb083a2e0f11251616f4db_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a5fbda7872c7ad734a84eaaea9f252e6f5ed05a10118f0315c77ffe658ebd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a5fbda7872c7ad734a84eaaea9f252e6f5ed05a10118f0315c77ffe658ebd5->enter($__internal_06a5fbda7872c7ad734a84eaaea9f252e6f5ed05a10118f0315c77ffe658ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8003c29de7e2adf3cff52177aa4ba0f737c10fdef1f9e2b07c609f5030f234bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8003c29de7e2adf3cff52177aa4ba0f737c10fdef1f9e2b07c609f5030f234bb->enter($__internal_8003c29de7e2adf3cff52177aa4ba0f737c10fdef1f9e2b07c609f5030f234bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8003c29de7e2adf3cff52177aa4ba0f737c10fdef1f9e2b07c609f5030f234bb->leave($__internal_8003c29de7e2adf3cff52177aa4ba0f737c10fdef1f9e2b07c609f5030f234bb_prof);

        
        $__internal_06a5fbda7872c7ad734a84eaaea9f252e6f5ed05a10118f0315c77ffe658ebd5->leave($__internal_06a5fbda7872c7ad734a84eaaea9f252e6f5ed05a10118f0315c77ffe658ebd5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c549ac9fcc1c25124a5fe7dfaaafdd87a16bf9b3fea75d8c9760bfb39e223d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c549ac9fcc1c25124a5fe7dfaaafdd87a16bf9b3fea75d8c9760bfb39e223d->enter($__internal_67c549ac9fcc1c25124a5fe7dfaaafdd87a16bf9b3fea75d8c9760bfb39e223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e42c52de131a8bae57fb672c404ba3c7c559234a65c898fa9f638064df042b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42c52de131a8bae57fb672c404ba3c7c559234a65c898fa9f638064df042b95->enter($__internal_e42c52de131a8bae57fb672c404ba3c7c559234a65c898fa9f638064df042b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e42c52de131a8bae57fb672c404ba3c7c559234a65c898fa9f638064df042b95->leave($__internal_e42c52de131a8bae57fb672c404ba3c7c559234a65c898fa9f638064df042b95_prof);

        
        $__internal_67c549ac9fcc1c25124a5fe7dfaaafdd87a16bf9b3fea75d8c9760bfb39e223d->leave($__internal_67c549ac9fcc1c25124a5fe7dfaaafdd87a16bf9b3fea75d8c9760bfb39e223d_prof);

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
