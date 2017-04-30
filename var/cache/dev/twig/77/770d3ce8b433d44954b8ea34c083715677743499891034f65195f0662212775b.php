<?php

/* etudiant/show.html.twig */
class __TwigTemplate_1ec52b1db1d12d22547c3593a7a10baa83a62315e05f38768d4e0cae6de6ff4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/show.html.twig", 1);
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
        $__internal_bd5562e197d056536f1fa7370a84d60cce799db64c43fcda1c40895834e9defd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5562e197d056536f1fa7370a84d60cce799db64c43fcda1c40895834e9defd->enter($__internal_bd5562e197d056536f1fa7370a84d60cce799db64c43fcda1c40895834e9defd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/show.html.twig"));

        $__internal_73f0c4564f2b3a4b80ea7e64961b7ae22d463f7044f463e20cd032e4665de7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f0c4564f2b3a4b80ea7e64961b7ae22d463f7044f463e20cd032e4665de7d7->enter($__internal_73f0c4564f2b3a4b80ea7e64961b7ae22d463f7044f463e20cd032e4665de7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5562e197d056536f1fa7370a84d60cce799db64c43fcda1c40895834e9defd->leave($__internal_bd5562e197d056536f1fa7370a84d60cce799db64c43fcda1c40895834e9defd_prof);

        
        $__internal_73f0c4564f2b3a4b80ea7e64961b7ae22d463f7044f463e20cd032e4665de7d7->leave($__internal_73f0c4564f2b3a4b80ea7e64961b7ae22d463f7044f463e20cd032e4665de7d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6453bc544c4c3c11e7a9ecc0c5a8426e6d4db45c6a6de56b899205725f14983d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6453bc544c4c3c11e7a9ecc0c5a8426e6d4db45c6a6de56b899205725f14983d->enter($__internal_6453bc544c4c3c11e7a9ecc0c5a8426e6d4db45c6a6de56b899205725f14983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c97856f2584eeba0aa7d8ae0de01997ff89847942fd8b9fdab7b76d843fdc86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97856f2584eeba0aa7d8ae0de01997ff89847942fd8b9fdab7b76d843fdc86e->enter($__internal_c97856f2584eeba0aa7d8ae0de01997ff89847942fd8b9fdab7b76d843fdc86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etudiant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Naissance</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_edit", array("id" => $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c97856f2584eeba0aa7d8ae0de01997ff89847942fd8b9fdab7b76d843fdc86e->leave($__internal_c97856f2584eeba0aa7d8ae0de01997ff89847942fd8b9fdab7b76d843fdc86e_prof);

        
        $__internal_6453bc544c4c3c11e7a9ecc0c5a8426e6d4db45c6a6de56b899205725f14983d->leave($__internal_6453bc544c4c3c11e7a9ecc0c5a8426e6d4db45c6a6de56b899205725f14983d_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Etudiant</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ etudiant.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ etudiant.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ etudiant.prenom }}</td>
            </tr>
            <tr>
                <th>Naissance</th>
                <td>{% if etudiant.naissance %}{{ etudiant.naissance|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('etudiant_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('etudiant_edit', { 'id': etudiant.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "etudiant/show.html.twig", "/var/www/html/formation/app/Resources/views/etudiant/show.html.twig");
    }
}
