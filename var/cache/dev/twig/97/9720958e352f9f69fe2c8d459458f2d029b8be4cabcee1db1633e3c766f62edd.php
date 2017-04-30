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
        $__internal_995227e88d9d7170e44ceadc21f5eaaf8f184214fa7d2cc3597a15bc060ec2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995227e88d9d7170e44ceadc21f5eaaf8f184214fa7d2cc3597a15bc060ec2fd->enter($__internal_995227e88d9d7170e44ceadc21f5eaaf8f184214fa7d2cc3597a15bc060ec2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7173d783e2cf49f1da9eaef1ea5ccf1f1abb564fc40cc6aa7aa70d2eb6271950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7173d783e2cf49f1da9eaef1ea5ccf1f1abb564fc40cc6aa7aa70d2eb6271950->enter($__internal_7173d783e2cf49f1da9eaef1ea5ccf1f1abb564fc40cc6aa7aa70d2eb6271950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995227e88d9d7170e44ceadc21f5eaaf8f184214fa7d2cc3597a15bc060ec2fd->leave($__internal_995227e88d9d7170e44ceadc21f5eaaf8f184214fa7d2cc3597a15bc060ec2fd_prof);

        
        $__internal_7173d783e2cf49f1da9eaef1ea5ccf1f1abb564fc40cc6aa7aa70d2eb6271950->leave($__internal_7173d783e2cf49f1da9eaef1ea5ccf1f1abb564fc40cc6aa7aa70d2eb6271950_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39a642da479251b88e0d3d5d278993bd664a3d5fd49924e54cb7e1132f77c0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a642da479251b88e0d3d5d278993bd664a3d5fd49924e54cb7e1132f77c0ee->enter($__internal_39a642da479251b88e0d3d5d278993bd664a3d5fd49924e54cb7e1132f77c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b39402ae746a36151a532a1d43cefda214f6df71ba660526679915b99386d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b39402ae746a36151a532a1d43cefda214f6df71ba660526679915b99386d1b->enter($__internal_3b39402ae746a36151a532a1d43cefda214f6df71ba660526679915b99386d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3b39402ae746a36151a532a1d43cefda214f6df71ba660526679915b99386d1b->leave($__internal_3b39402ae746a36151a532a1d43cefda214f6df71ba660526679915b99386d1b_prof);

        
        $__internal_39a642da479251b88e0d3d5d278993bd664a3d5fd49924e54cb7e1132f77c0ee->leave($__internal_39a642da479251b88e0d3d5d278993bd664a3d5fd49924e54cb7e1132f77c0ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f823e80eac3af7f28e7accd59d654a5c3aad7e281c6cf0b0dbb5bfbcbbdfd05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f823e80eac3af7f28e7accd59d654a5c3aad7e281c6cf0b0dbb5bfbcbbdfd05a->enter($__internal_f823e80eac3af7f28e7accd59d654a5c3aad7e281c6cf0b0dbb5bfbcbbdfd05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d51433efde7c6291e28168f12bc714af60dc3e7e47224cce909d752e645c46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d51433efde7c6291e28168f12bc714af60dc3e7e47224cce909d752e645c46d->enter($__internal_7d51433efde7c6291e28168f12bc714af60dc3e7e47224cce909d752e645c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7d51433efde7c6291e28168f12bc714af60dc3e7e47224cce909d752e645c46d->leave($__internal_7d51433efde7c6291e28168f12bc714af60dc3e7e47224cce909d752e645c46d_prof);

        
        $__internal_f823e80eac3af7f28e7accd59d654a5c3aad7e281c6cf0b0dbb5bfbcbbdfd05a->leave($__internal_f823e80eac3af7f28e7accd59d654a5c3aad7e281c6cf0b0dbb5bfbcbbdfd05a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8c84d994ca22468ce6be8c9db9b00b8a78076030bed4042ee3a5db0f8c8a07c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c84d994ca22468ce6be8c9db9b00b8a78076030bed4042ee3a5db0f8c8a07c->enter($__internal_e8c84d994ca22468ce6be8c9db9b00b8a78076030bed4042ee3a5db0f8c8a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bb3d11e2c6a0ad012b98d5f2853ab26f36cc408a78613acf6e92c699d4c61ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb3d11e2c6a0ad012b98d5f2853ab26f36cc408a78613acf6e92c699d4c61ad->enter($__internal_4bb3d11e2c6a0ad012b98d5f2853ab26f36cc408a78613acf6e92c699d4c61ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4bb3d11e2c6a0ad012b98d5f2853ab26f36cc408a78613acf6e92c699d4c61ad->leave($__internal_4bb3d11e2c6a0ad012b98d5f2853ab26f36cc408a78613acf6e92c699d4c61ad_prof);

        
        $__internal_e8c84d994ca22468ce6be8c9db9b00b8a78076030bed4042ee3a5db0f8c8a07c->leave($__internal_e8c84d994ca22468ce6be8c9db9b00b8a78076030bed4042ee3a5db0f8c8a07c_prof);

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
