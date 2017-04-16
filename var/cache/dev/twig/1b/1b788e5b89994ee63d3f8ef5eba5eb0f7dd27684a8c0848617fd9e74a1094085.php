<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
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
        $__internal_f16c6a0c026c8abdcf842f0a727368a1ea629586ace7b15587ca7b3426038f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16c6a0c026c8abdcf842f0a727368a1ea629586ace7b15587ca7b3426038f57->enter($__internal_f16c6a0c026c8abdcf842f0a727368a1ea629586ace7b15587ca7b3426038f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6e2192cc314d3292a8179cffeabdfe6469b59728d1d55860aa5b7308bea2342f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2192cc314d3292a8179cffeabdfe6469b59728d1d55860aa5b7308bea2342f->enter($__internal_6e2192cc314d3292a8179cffeabdfe6469b59728d1d55860aa5b7308bea2342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16c6a0c026c8abdcf842f0a727368a1ea629586ace7b15587ca7b3426038f57->leave($__internal_f16c6a0c026c8abdcf842f0a727368a1ea629586ace7b15587ca7b3426038f57_prof);

        
        $__internal_6e2192cc314d3292a8179cffeabdfe6469b59728d1d55860aa5b7308bea2342f->leave($__internal_6e2192cc314d3292a8179cffeabdfe6469b59728d1d55860aa5b7308bea2342f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_759636d86d04954d54bb7aebeb0b810293a8976de36d181c63ab45553dd01b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759636d86d04954d54bb7aebeb0b810293a8976de36d181c63ab45553dd01b7c->enter($__internal_759636d86d04954d54bb7aebeb0b810293a8976de36d181c63ab45553dd01b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6959d4da16296cb62fcc103bf1e369bb7571f7090df16eddb704de1da20d0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6959d4da16296cb62fcc103bf1e369bb7571f7090df16eddb704de1da20d0a0->enter($__internal_b6959d4da16296cb62fcc103bf1e369bb7571f7090df16eddb704de1da20d0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6959d4da16296cb62fcc103bf1e369bb7571f7090df16eddb704de1da20d0a0->leave($__internal_b6959d4da16296cb62fcc103bf1e369bb7571f7090df16eddb704de1da20d0a0_prof);

        
        $__internal_759636d86d04954d54bb7aebeb0b810293a8976de36d181c63ab45553dd01b7c->leave($__internal_759636d86d04954d54bb7aebeb0b810293a8976de36d181c63ab45553dd01b7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a74a9aa06f15e991dd90857c350480cc762cec82af673de2ba73575fdf5af57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a74a9aa06f15e991dd90857c350480cc762cec82af673de2ba73575fdf5af57->enter($__internal_3a74a9aa06f15e991dd90857c350480cc762cec82af673de2ba73575fdf5af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ddff8daed1edbbbc18f4448103c7657d55ce62c3ab60e0380078f9264d67e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddff8daed1edbbbc18f4448103c7657d55ce62c3ab60e0380078f9264d67e2d->enter($__internal_3ddff8daed1edbbbc18f4448103c7657d55ce62c3ab60e0380078f9264d67e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ddff8daed1edbbbc18f4448103c7657d55ce62c3ab60e0380078f9264d67e2d->leave($__internal_3ddff8daed1edbbbc18f4448103c7657d55ce62c3ab60e0380078f9264d67e2d_prof);

        
        $__internal_3a74a9aa06f15e991dd90857c350480cc762cec82af673de2ba73575fdf5af57->leave($__internal_3a74a9aa06f15e991dd90857c350480cc762cec82af673de2ba73575fdf5af57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_885d19203f1a546baa655c7a7fb1c353a4444552a488fe97844ba55b330bc6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885d19203f1a546baa655c7a7fb1c353a4444552a488fe97844ba55b330bc6ae->enter($__internal_885d19203f1a546baa655c7a7fb1c353a4444552a488fe97844ba55b330bc6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1ddf6edc198c0906cfba9c4a49b94612a9ba0dd3d9b6edfa4b108dbb8980ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ddf6edc198c0906cfba9c4a49b94612a9ba0dd3d9b6edfa4b108dbb8980ff6->enter($__internal_d1ddf6edc198c0906cfba9c4a49b94612a9ba0dd3d9b6edfa4b108dbb8980ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1ddf6edc198c0906cfba9c4a49b94612a9ba0dd3d9b6edfa4b108dbb8980ff6->leave($__internal_d1ddf6edc198c0906cfba9c4a49b94612a9ba0dd3d9b6edfa4b108dbb8980ff6_prof);

        
        $__internal_885d19203f1a546baa655c7a7fb1c353a4444552a488fe97844ba55b330bc6ae->leave($__internal_885d19203f1a546baa655c7a7fb1c353a4444552a488fe97844ba55b330bc6ae_prof);

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
