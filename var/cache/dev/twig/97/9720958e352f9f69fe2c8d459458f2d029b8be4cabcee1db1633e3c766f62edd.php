<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
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
        $__internal_ea0f8f9516526db9d7868ee375fafad6969c8a5a4f7b62c32e880c22dbeb0c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0f8f9516526db9d7868ee375fafad6969c8a5a4f7b62c32e880c22dbeb0c72->enter($__internal_ea0f8f9516526db9d7868ee375fafad6969c8a5a4f7b62c32e880c22dbeb0c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_04c116c036b133be24125a7eda1632e4a0aa4346aa535e631a98e456296b1bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c116c036b133be24125a7eda1632e4a0aa4346aa535e631a98e456296b1bce->enter($__internal_04c116c036b133be24125a7eda1632e4a0aa4346aa535e631a98e456296b1bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0f8f9516526db9d7868ee375fafad6969c8a5a4f7b62c32e880c22dbeb0c72->leave($__internal_ea0f8f9516526db9d7868ee375fafad6969c8a5a4f7b62c32e880c22dbeb0c72_prof);

        
        $__internal_04c116c036b133be24125a7eda1632e4a0aa4346aa535e631a98e456296b1bce->leave($__internal_04c116c036b133be24125a7eda1632e4a0aa4346aa535e631a98e456296b1bce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7458c29a459f027a05fed35a7f65da20d2c96595915f171537586a8cc2b1298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7458c29a459f027a05fed35a7f65da20d2c96595915f171537586a8cc2b1298->enter($__internal_c7458c29a459f027a05fed35a7f65da20d2c96595915f171537586a8cc2b1298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b67036ae45b5b7b39d7da4c4480b477bb8b7133121a0a5d1f6591fcbd63af81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b67036ae45b5b7b39d7da4c4480b477bb8b7133121a0a5d1f6591fcbd63af81->enter($__internal_4b67036ae45b5b7b39d7da4c4480b477bb8b7133121a0a5d1f6591fcbd63af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b67036ae45b5b7b39d7da4c4480b477bb8b7133121a0a5d1f6591fcbd63af81->leave($__internal_4b67036ae45b5b7b39d7da4c4480b477bb8b7133121a0a5d1f6591fcbd63af81_prof);

        
        $__internal_c7458c29a459f027a05fed35a7f65da20d2c96595915f171537586a8cc2b1298->leave($__internal_c7458c29a459f027a05fed35a7f65da20d2c96595915f171537586a8cc2b1298_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e62ac21d5039f388a037209fcc02b834b8342d124622f531d215ee8d8813d6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62ac21d5039f388a037209fcc02b834b8342d124622f531d215ee8d8813d6a3->enter($__internal_e62ac21d5039f388a037209fcc02b834b8342d124622f531d215ee8d8813d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7530109b8b25a093ffa7b7ca5ab5755a1cafabd6cfba29a2bc1d76847271bf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7530109b8b25a093ffa7b7ca5ab5755a1cafabd6cfba29a2bc1d76847271bf11->enter($__internal_7530109b8b25a093ffa7b7ca5ab5755a1cafabd6cfba29a2bc1d76847271bf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7530109b8b25a093ffa7b7ca5ab5755a1cafabd6cfba29a2bc1d76847271bf11->leave($__internal_7530109b8b25a093ffa7b7ca5ab5755a1cafabd6cfba29a2bc1d76847271bf11_prof);

        
        $__internal_e62ac21d5039f388a037209fcc02b834b8342d124622f531d215ee8d8813d6a3->leave($__internal_e62ac21d5039f388a037209fcc02b834b8342d124622f531d215ee8d8813d6a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74cbee1637dc31eedf6dbb9d8d0fddfd3e1405a7436c278bef68333b4e948a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cbee1637dc31eedf6dbb9d8d0fddfd3e1405a7436c278bef68333b4e948a60->enter($__internal_74cbee1637dc31eedf6dbb9d8d0fddfd3e1405a7436c278bef68333b4e948a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97fabfea46e7729840fcd7aff73335b244274536447660465c838a7fb09dfff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fabfea46e7729840fcd7aff73335b244274536447660465c838a7fb09dfff7->enter($__internal_97fabfea46e7729840fcd7aff73335b244274536447660465c838a7fb09dfff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_97fabfea46e7729840fcd7aff73335b244274536447660465c838a7fb09dfff7->leave($__internal_97fabfea46e7729840fcd7aff73335b244274536447660465c838a7fb09dfff7_prof);

        
        $__internal_74cbee1637dc31eedf6dbb9d8d0fddfd3e1405a7436c278bef68333b4e948a60->leave($__internal_74cbee1637dc31eedf6dbb9d8d0fddfd3e1405a7436c278bef68333b4e948a60_prof);

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
