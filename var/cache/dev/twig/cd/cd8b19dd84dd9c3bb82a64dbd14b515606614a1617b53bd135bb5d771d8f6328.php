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
        $__internal_7842b99d081a83324a3c64dd3c6337a72c3c584b93678cc8499fec9581910be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7842b99d081a83324a3c64dd3c6337a72c3c584b93678cc8499fec9581910be7->enter($__internal_7842b99d081a83324a3c64dd3c6337a72c3c584b93678cc8499fec9581910be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d4735be0514fc4f2b933766b1ef4887c4da968752c8ced0ab769c37c2ae5f32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4735be0514fc4f2b933766b1ef4887c4da968752c8ced0ab769c37c2ae5f32d->enter($__internal_d4735be0514fc4f2b933766b1ef4887c4da968752c8ced0ab769c37c2ae5f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7842b99d081a83324a3c64dd3c6337a72c3c584b93678cc8499fec9581910be7->leave($__internal_7842b99d081a83324a3c64dd3c6337a72c3c584b93678cc8499fec9581910be7_prof);

        
        $__internal_d4735be0514fc4f2b933766b1ef4887c4da968752c8ced0ab769c37c2ae5f32d->leave($__internal_d4735be0514fc4f2b933766b1ef4887c4da968752c8ced0ab769c37c2ae5f32d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eef8c4bc0698f67e4a889d421a37d32ac190e0aec5af299d2f847d8c2ae2ee0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef8c4bc0698f67e4a889d421a37d32ac190e0aec5af299d2f847d8c2ae2ee0f->enter($__internal_eef8c4bc0698f67e4a889d421a37d32ac190e0aec5af299d2f847d8c2ae2ee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77cc3cc90d3e97cb3327f3b62faeab57d189c6e45fb8a0792499062479d49e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cc3cc90d3e97cb3327f3b62faeab57d189c6e45fb8a0792499062479d49e7f->enter($__internal_77cc3cc90d3e97cb3327f3b62faeab57d189c6e45fb8a0792499062479d49e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77cc3cc90d3e97cb3327f3b62faeab57d189c6e45fb8a0792499062479d49e7f->leave($__internal_77cc3cc90d3e97cb3327f3b62faeab57d189c6e45fb8a0792499062479d49e7f_prof);

        
        $__internal_eef8c4bc0698f67e4a889d421a37d32ac190e0aec5af299d2f847d8c2ae2ee0f->leave($__internal_eef8c4bc0698f67e4a889d421a37d32ac190e0aec5af299d2f847d8c2ae2ee0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b02d35c4eec155927a73a41cd36c43a09873f8ef2b9d49af46f3ee1d56092ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b02d35c4eec155927a73a41cd36c43a09873f8ef2b9d49af46f3ee1d56092ff->enter($__internal_4b02d35c4eec155927a73a41cd36c43a09873f8ef2b9d49af46f3ee1d56092ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7819301b8bb8ce593a5f86ebf4de591777334c030e4842732d0d493cfc175d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7819301b8bb8ce593a5f86ebf4de591777334c030e4842732d0d493cfc175d90->enter($__internal_7819301b8bb8ce593a5f86ebf4de591777334c030e4842732d0d493cfc175d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7819301b8bb8ce593a5f86ebf4de591777334c030e4842732d0d493cfc175d90->leave($__internal_7819301b8bb8ce593a5f86ebf4de591777334c030e4842732d0d493cfc175d90_prof);

        
        $__internal_4b02d35c4eec155927a73a41cd36c43a09873f8ef2b9d49af46f3ee1d56092ff->leave($__internal_4b02d35c4eec155927a73a41cd36c43a09873f8ef2b9d49af46f3ee1d56092ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_498d6e41a02750d42dc9d17a2f8a5a83c79f7d26d55ee34799a716952da446ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498d6e41a02750d42dc9d17a2f8a5a83c79f7d26d55ee34799a716952da446ec->enter($__internal_498d6e41a02750d42dc9d17a2f8a5a83c79f7d26d55ee34799a716952da446ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_804675f1fbe1f2520407a84b4c5daae6280f949e133e0a08936ee82ca73cd8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804675f1fbe1f2520407a84b4c5daae6280f949e133e0a08936ee82ca73cd8dd->enter($__internal_804675f1fbe1f2520407a84b4c5daae6280f949e133e0a08936ee82ca73cd8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_804675f1fbe1f2520407a84b4c5daae6280f949e133e0a08936ee82ca73cd8dd->leave($__internal_804675f1fbe1f2520407a84b4c5daae6280f949e133e0a08936ee82ca73cd8dd_prof);

        
        $__internal_498d6e41a02750d42dc9d17a2f8a5a83c79f7d26d55ee34799a716952da446ec->leave($__internal_498d6e41a02750d42dc9d17a2f8a5a83c79f7d26d55ee34799a716952da446ec_prof);

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
