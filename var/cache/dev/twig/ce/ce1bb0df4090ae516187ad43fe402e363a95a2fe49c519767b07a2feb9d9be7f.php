<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_06ea0b59d3dba35debe9668c5d2cede766dd2214812920938df42982b3b2985e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248b23e3fbbf9d6d8190e70823ad0a24e6a963aa2bb3e332085ae1c70d12859a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248b23e3fbbf9d6d8190e70823ad0a24e6a963aa2bb3e332085ae1c70d12859a->enter($__internal_248b23e3fbbf9d6d8190e70823ad0a24e6a963aa2bb3e332085ae1c70d12859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4e423a007faff3e00c0a42c8c3af1bfb33d3b8ded4c4859239ee9643bdefeeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e423a007faff3e00c0a42c8c3af1bfb33d3b8ded4c4859239ee9643bdefeeef->enter($__internal_4e423a007faff3e00c0a42c8c3af1bfb33d3b8ded4c4859239ee9643bdefeeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_248b23e3fbbf9d6d8190e70823ad0a24e6a963aa2bb3e332085ae1c70d12859a->leave($__internal_248b23e3fbbf9d6d8190e70823ad0a24e6a963aa2bb3e332085ae1c70d12859a_prof);

        
        $__internal_4e423a007faff3e00c0a42c8c3af1bfb33d3b8ded4c4859239ee9643bdefeeef->leave($__internal_4e423a007faff3e00c0a42c8c3af1bfb33d3b8ded4c4859239ee9643bdefeeef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/formation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
