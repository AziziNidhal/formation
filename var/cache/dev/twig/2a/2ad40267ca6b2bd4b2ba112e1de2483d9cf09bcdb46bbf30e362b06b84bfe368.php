<?php

/* etudiant/index.html.twig */
class __TwigTemplate_79e541d07557df29861380883f43d600ca90389c0ea3e07646b7c381037e1be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
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
        $__internal_8a7868f75ab5149a25e54bb6a887d6a8ba3ff66ed43c16b6ac4bbb6b6e6248de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7868f75ab5149a25e54bb6a887d6a8ba3ff66ed43c16b6ac4bbb6b6e6248de->enter($__internal_8a7868f75ab5149a25e54bb6a887d6a8ba3ff66ed43c16b6ac4bbb6b6e6248de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_8159fdca66abb8a2fc092b46c04cc126984b87595a8d0352cc1e57cd55ac78e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8159fdca66abb8a2fc092b46c04cc126984b87595a8d0352cc1e57cd55ac78e8->enter($__internal_8159fdca66abb8a2fc092b46c04cc126984b87595a8d0352cc1e57cd55ac78e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7868f75ab5149a25e54bb6a887d6a8ba3ff66ed43c16b6ac4bbb6b6e6248de->leave($__internal_8a7868f75ab5149a25e54bb6a887d6a8ba3ff66ed43c16b6ac4bbb6b6e6248de_prof);

        
        $__internal_8159fdca66abb8a2fc092b46c04cc126984b87595a8d0352cc1e57cd55ac78e8->leave($__internal_8159fdca66abb8a2fc092b46c04cc126984b87595a8d0352cc1e57cd55ac78e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f75224d1029803feff1911646995ec01993eb84617c0c60a44ba88f3d5c6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f75224d1029803feff1911646995ec01993eb84617c0c60a44ba88f3d5c6c9->enter($__internal_d9f75224d1029803feff1911646995ec01993eb84617c0c60a44ba88f3d5c6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e311911e37fe75accc33295d0a97014a6e9311b6d54f485c579afa853216cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e311911e37fe75accc33295d0a97014a6e9311b6d54f485c579afa853216cdaf->enter($__internal_e311911e37fe75accc33295d0a97014a6e9311b6d54f485c579afa853216cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etudiants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiants"] ?? $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["etudiant"], "naissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etudiant"], "naissance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_show", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_edit", array("id" => $this->getAttribute($context["etudiant"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_new");
        echo "\">Create a new etudiant</a>
        </li>
    </ul>
";
        
        $__internal_e311911e37fe75accc33295d0a97014a6e9311b6d54f485c579afa853216cdaf->leave($__internal_e311911e37fe75accc33295d0a97014a6e9311b6d54f485c579afa853216cdaf_prof);

        
        $__internal_d9f75224d1029803feff1911646995ec01993eb84617c0c60a44ba88f3d5c6c9->leave($__internal_d9f75224d1029803feff1911646995ec01993eb84617c0c60a44ba88f3d5c6c9_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Etudiants list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etudiant in etudiants %}
            <tr>
                <td><a href=\"{{ path('etudiant_show', { 'id': etudiant.id }) }}\">{{ etudiant.id }}</a></td>
                <td>{{ etudiant.nom }}</td>
                <td>{{ etudiant.prenom }}</td>
                <td>{% if etudiant.naissance %}{{ etudiant.naissance|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('etudiant_show', { 'id': etudiant.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('etudiant_edit', { 'id': etudiant.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('etudiant_new') }}\">Create a new etudiant</a>
        </li>
    </ul>
{% endblock %}
", "etudiant/index.html.twig", "/var/www/html/formation/app/Resources/views/etudiant/index.html.twig");
    }
}
