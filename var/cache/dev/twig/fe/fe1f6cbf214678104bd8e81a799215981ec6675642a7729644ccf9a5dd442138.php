<?php

/* etudiant/edit.html.twig */
class __TwigTemplate_f79e015467373e887141d04d5e81a93410fdabcbc8dc8914d2dcfba9b9b8772a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd7a68388be3baa072e24ff6a46c8219f597751d4e5ba25e7dd76a9b3ad3eb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7a68388be3baa072e24ff6a46c8219f597751d4e5ba25e7dd76a9b3ad3eb32->enter($__internal_fd7a68388be3baa072e24ff6a46c8219f597751d4e5ba25e7dd76a9b3ad3eb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/edit.html.twig"));

        $__internal_409604d0194087bac572f69c9301d7e06be528fb47b886c58c3de9613fb08a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409604d0194087bac572f69c9301d7e06be528fb47b886c58c3de9613fb08a11->enter($__internal_409604d0194087bac572f69c9301d7e06be528fb47b886c58c3de9613fb08a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7a68388be3baa072e24ff6a46c8219f597751d4e5ba25e7dd76a9b3ad3eb32->leave($__internal_fd7a68388be3baa072e24ff6a46c8219f597751d4e5ba25e7dd76a9b3ad3eb32_prof);

        
        $__internal_409604d0194087bac572f69c9301d7e06be528fb47b886c58c3de9613fb08a11->leave($__internal_409604d0194087bac572f69c9301d7e06be528fb47b886c58c3de9613fb08a11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a8f1e583c0570994fe29590788475c225e6fb51c7c5e6403ebe9d7331747716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8f1e583c0570994fe29590788475c225e6fb51c7c5e6403ebe9d7331747716->enter($__internal_8a8f1e583c0570994fe29590788475c225e6fb51c7c5e6403ebe9d7331747716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26d5187fa28c40fd3456cddeb22c60bb6cf680ff6925ef6ccecb094d91c64361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d5187fa28c40fd3456cddeb22c60bb6cf680ff6925ef6ccecb094d91c64361->enter($__internal_26d5187fa28c40fd3456cddeb22c60bb6cf680ff6925ef6ccecb094d91c64361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etudiant edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_26d5187fa28c40fd3456cddeb22c60bb6cf680ff6925ef6ccecb094d91c64361->leave($__internal_26d5187fa28c40fd3456cddeb22c60bb6cf680ff6925ef6ccecb094d91c64361_prof);

        
        $__internal_8a8f1e583c0570994fe29590788475c225e6fb51c7c5e6403ebe9d7331747716->leave($__internal_8a8f1e583c0570994fe29590788475c225e6fb51c7c5e6403ebe9d7331747716_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Etudiant edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('etudiant_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "etudiant/edit.html.twig", "/var/www/html/formation/app/Resources/views/etudiant/edit.html.twig");
    }
}
