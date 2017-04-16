<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10507f4f91de3a51855ef61cf50ab4a82ef13650592fcb0c3a4738e1b45c3cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10507f4f91de3a51855ef61cf50ab4a82ef13650592fcb0c3a4738e1b45c3cd5->enter($__internal_10507f4f91de3a51855ef61cf50ab4a82ef13650592fcb0c3a4738e1b45c3cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_04e3a29c6fef69ab286d85d0c0f683bfd6c908855e3799e40d029073ef848674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e3a29c6fef69ab286d85d0c0f683bfd6c908855e3799e40d029073ef848674->enter($__internal_04e3a29c6fef69ab286d85d0c0f683bfd6c908855e3799e40d029073ef848674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10507f4f91de3a51855ef61cf50ab4a82ef13650592fcb0c3a4738e1b45c3cd5->leave($__internal_10507f4f91de3a51855ef61cf50ab4a82ef13650592fcb0c3a4738e1b45c3cd5_prof);

        
        $__internal_04e3a29c6fef69ab286d85d0c0f683bfd6c908855e3799e40d029073ef848674->leave($__internal_04e3a29c6fef69ab286d85d0c0f683bfd6c908855e3799e40d029073ef848674_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8f6beb93472299ae3ca90e6b76a2c8387efaf3da28ed5b3d21b004bd4ddc458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f6beb93472299ae3ca90e6b76a2c8387efaf3da28ed5b3d21b004bd4ddc458->enter($__internal_c8f6beb93472299ae3ca90e6b76a2c8387efaf3da28ed5b3d21b004bd4ddc458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ac688ce953a5fd9dfcd1904fa89ff8ca1b9c19143a9444bd1de24944ebcdb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac688ce953a5fd9dfcd1904fa89ff8ca1b9c19143a9444bd1de24944ebcdb53->enter($__internal_4ac688ce953a5fd9dfcd1904fa89ff8ca1b9c19143a9444bd1de24944ebcdb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4ac688ce953a5fd9dfcd1904fa89ff8ca1b9c19143a9444bd1de24944ebcdb53->leave($__internal_4ac688ce953a5fd9dfcd1904fa89ff8ca1b9c19143a9444bd1de24944ebcdb53_prof);

        
        $__internal_c8f6beb93472299ae3ca90e6b76a2c8387efaf3da28ed5b3d21b004bd4ddc458->leave($__internal_c8f6beb93472299ae3ca90e6b76a2c8387efaf3da28ed5b3d21b004bd4ddc458_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30283629f7cc5ad44940a1922c29fa2d5878e0142057d9361a7d607d5406df9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30283629f7cc5ad44940a1922c29fa2d5878e0142057d9361a7d607d5406df9f->enter($__internal_30283629f7cc5ad44940a1922c29fa2d5878e0142057d9361a7d607d5406df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b486727b8d7b51788d9e2c3057d8e4488dd7ff1f521c12af071cba1c64106d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b486727b8d7b51788d9e2c3057d8e4488dd7ff1f521c12af071cba1c64106d0f->enter($__internal_b486727b8d7b51788d9e2c3057d8e4488dd7ff1f521c12af071cba1c64106d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b486727b8d7b51788d9e2c3057d8e4488dd7ff1f521c12af071cba1c64106d0f->leave($__internal_b486727b8d7b51788d9e2c3057d8e4488dd7ff1f521c12af071cba1c64106d0f_prof);

        
        $__internal_30283629f7cc5ad44940a1922c29fa2d5878e0142057d9361a7d607d5406df9f->leave($__internal_30283629f7cc5ad44940a1922c29fa2d5878e0142057d9361a7d607d5406df9f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9806d66fc9d2b345cf7fdda874707dea2ea420de14c145289c2f134f5ac12d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9806d66fc9d2b345cf7fdda874707dea2ea420de14c145289c2f134f5ac12d3->enter($__internal_f9806d66fc9d2b345cf7fdda874707dea2ea420de14c145289c2f134f5ac12d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bd786df85e685cb5189deb25d07f38229047aa5a3d4ab3309268c56cfb749eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd786df85e685cb5189deb25d07f38229047aa5a3d4ab3309268c56cfb749eb->enter($__internal_1bd786df85e685cb5189deb25d07f38229047aa5a3d4ab3309268c56cfb749eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1bd786df85e685cb5189deb25d07f38229047aa5a3d4ab3309268c56cfb749eb->leave($__internal_1bd786df85e685cb5189deb25d07f38229047aa5a3d4ab3309268c56cfb749eb_prof);

        
        $__internal_f9806d66fc9d2b345cf7fdda874707dea2ea420de14c145289c2f134f5ac12d3->leave($__internal_f9806d66fc9d2b345cf7fdda874707dea2ea420de14c145289c2f134f5ac12d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/formation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
