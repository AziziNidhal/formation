<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_41e6df3f5bbefe567fb0b6e07cf1119ae691593a013f88af5c42ef2ed23f30c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e6df3f5bbefe567fb0b6e07cf1119ae691593a013f88af5c42ef2ed23f30c8->enter($__internal_41e6df3f5bbefe567fb0b6e07cf1119ae691593a013f88af5c42ef2ed23f30c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a9ba643a6280632090d4d1c5248740a2ce014517b4707298b84b7601871b683d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ba643a6280632090d4d1c5248740a2ce014517b4707298b84b7601871b683d->enter($__internal_a9ba643a6280632090d4d1c5248740a2ce014517b4707298b84b7601871b683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e6df3f5bbefe567fb0b6e07cf1119ae691593a013f88af5c42ef2ed23f30c8->leave($__internal_41e6df3f5bbefe567fb0b6e07cf1119ae691593a013f88af5c42ef2ed23f30c8_prof);

        
        $__internal_a9ba643a6280632090d4d1c5248740a2ce014517b4707298b84b7601871b683d->leave($__internal_a9ba643a6280632090d4d1c5248740a2ce014517b4707298b84b7601871b683d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff4a4553429ac267aa08f1162b427131c4879c57b453e8e59417c634510a00c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4a4553429ac267aa08f1162b427131c4879c57b453e8e59417c634510a00c1->enter($__internal_ff4a4553429ac267aa08f1162b427131c4879c57b453e8e59417c634510a00c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1ecb3a21aa263d6991276e6fee10563d7516dd311731697d0684371e6db65f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecb3a21aa263d6991276e6fee10563d7516dd311731697d0684371e6db65f3b->enter($__internal_1ecb3a21aa263d6991276e6fee10563d7516dd311731697d0684371e6db65f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ecb3a21aa263d6991276e6fee10563d7516dd311731697d0684371e6db65f3b->leave($__internal_1ecb3a21aa263d6991276e6fee10563d7516dd311731697d0684371e6db65f3b_prof);

        
        $__internal_ff4a4553429ac267aa08f1162b427131c4879c57b453e8e59417c634510a00c1->leave($__internal_ff4a4553429ac267aa08f1162b427131c4879c57b453e8e59417c634510a00c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcf5d61f424789606b7597e58c2feae81ce551ee4e5e704efa7eabd5aa5c39ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf5d61f424789606b7597e58c2feae81ce551ee4e5e704efa7eabd5aa5c39ea->enter($__internal_dcf5d61f424789606b7597e58c2feae81ce551ee4e5e704efa7eabd5aa5c39ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec5a34a55ffe51aa126c867e18f9111b57f2554f9aaa166ccda1f7f2baaa5955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5a34a55ffe51aa126c867e18f9111b57f2554f9aaa166ccda1f7f2baaa5955->enter($__internal_ec5a34a55ffe51aa126c867e18f9111b57f2554f9aaa166ccda1f7f2baaa5955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec5a34a55ffe51aa126c867e18f9111b57f2554f9aaa166ccda1f7f2baaa5955->leave($__internal_ec5a34a55ffe51aa126c867e18f9111b57f2554f9aaa166ccda1f7f2baaa5955_prof);

        
        $__internal_dcf5d61f424789606b7597e58c2feae81ce551ee4e5e704efa7eabd5aa5c39ea->leave($__internal_dcf5d61f424789606b7597e58c2feae81ce551ee4e5e704efa7eabd5aa5c39ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_770c06b62a544ce4acc0773aff2e45ebaf742492b1808d4b3bf35a8b82b560c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770c06b62a544ce4acc0773aff2e45ebaf742492b1808d4b3bf35a8b82b560c2->enter($__internal_770c06b62a544ce4acc0773aff2e45ebaf742492b1808d4b3bf35a8b82b560c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a20752892ddd5684d5045ddcc316df0bb6cc2f099fb4d1e041acd11b214eb5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20752892ddd5684d5045ddcc316df0bb6cc2f099fb4d1e041acd11b214eb5ac->enter($__internal_a20752892ddd5684d5045ddcc316df0bb6cc2f099fb4d1e041acd11b214eb5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a20752892ddd5684d5045ddcc316df0bb6cc2f099fb4d1e041acd11b214eb5ac->leave($__internal_a20752892ddd5684d5045ddcc316df0bb6cc2f099fb4d1e041acd11b214eb5ac_prof);

        
        $__internal_770c06b62a544ce4acc0773aff2e45ebaf742492b1808d4b3bf35a8b82b560c2->leave($__internal_770c06b62a544ce4acc0773aff2e45ebaf742492b1808d4b3bf35a8b82b560c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/formation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
