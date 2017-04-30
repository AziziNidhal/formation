<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eaabd4af90dad35bb16695d9f93527c0ea8fcf4b889ea10f96dc5268c16fd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaabd4af90dad35bb16695d9f93527c0ea8fcf4b889ea10f96dc5268c16fd1f->enter($__internal_4eaabd4af90dad35bb16695d9f93527c0ea8fcf4b889ea10f96dc5268c16fd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4f368bdfff35780ece4027fa7c7052578121969c2ef4da778d737805b7cb7887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f368bdfff35780ece4027fa7c7052578121969c2ef4da778d737805b7cb7887->enter($__internal_4f368bdfff35780ece4027fa7c7052578121969c2ef4da778d737805b7cb7887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



        <style>

            p{
                text-decoration: underline;
            }

        </style>

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_4eaabd4af90dad35bb16695d9f93527c0ea8fcf4b889ea10f96dc5268c16fd1f->leave($__internal_4eaabd4af90dad35bb16695d9f93527c0ea8fcf4b889ea10f96dc5268c16fd1f_prof);

        
        $__internal_4f368bdfff35780ece4027fa7c7052578121969c2ef4da778d737805b7cb7887->leave($__internal_4f368bdfff35780ece4027fa7c7052578121969c2ef4da778d737805b7cb7887_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45607de82639342d2fe3a4ef636457010404ff0c2e67ac182767fd944fe953dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45607de82639342d2fe3a4ef636457010404ff0c2e67ac182767fd944fe953dc->enter($__internal_45607de82639342d2fe3a4ef636457010404ff0c2e67ac182767fd944fe953dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_115e880e27b09020276db415112d4c1bbafabca6912c1b01efad44f6cb196940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115e880e27b09020276db415112d4c1bbafabca6912c1b01efad44f6cb196940->enter($__internal_115e880e27b09020276db415112d4c1bbafabca6912c1b01efad44f6cb196940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_115e880e27b09020276db415112d4c1bbafabca6912c1b01efad44f6cb196940->leave($__internal_115e880e27b09020276db415112d4c1bbafabca6912c1b01efad44f6cb196940_prof);

        
        $__internal_45607de82639342d2fe3a4ef636457010404ff0c2e67ac182767fd944fe953dc->leave($__internal_45607de82639342d2fe3a4ef636457010404ff0c2e67ac182767fd944fe953dc_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d99691f5e432b29af91aeb33ae2f15b6016eda42f802041ec21fef4ca476442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d99691f5e432b29af91aeb33ae2f15b6016eda42f802041ec21fef4ca476442->enter($__internal_4d99691f5e432b29af91aeb33ae2f15b6016eda42f802041ec21fef4ca476442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_34358939c9f5433dc854ff3c496182a4aed455ae7e031d8746b7e653b25b2c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34358939c9f5433dc854ff3c496182a4aed455ae7e031d8746b7e653b25b2c18->enter($__internal_34358939c9f5433dc854ff3c496182a4aed455ae7e031d8746b7e653b25b2c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "

        ";
        
        $__internal_34358939c9f5433dc854ff3c496182a4aed455ae7e031d8746b7e653b25b2c18->leave($__internal_34358939c9f5433dc854ff3c496182a4aed455ae7e031d8746b7e653b25b2c18_prof);

        
        $__internal_4d99691f5e432b29af91aeb33ae2f15b6016eda42f802041ec21fef4ca476442->leave($__internal_4d99691f5e432b29af91aeb33ae2f15b6016eda42f802041ec21fef4ca476442_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dcecd66ebd8905b8d3d9742b5c40a5fcbb67b54589b5f9635fe314ce6da6aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcecd66ebd8905b8d3d9742b5c40a5fcbb67b54589b5f9635fe314ce6da6aa8->enter($__internal_4dcecd66ebd8905b8d3d9742b5c40a5fcbb67b54589b5f9635fe314ce6da6aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58dfce97cb1e9088c3d9e52bb81f654d816b857758f18303584d2b87b63e6101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dfce97cb1e9088c3d9e52bb81f654d816b857758f18303584d2b87b63e6101->enter($__internal_58dfce97cb1e9088c3d9e52bb81f654d816b857758f18303584d2b87b63e6101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
        ";
        
        $__internal_58dfce97cb1e9088c3d9e52bb81f654d816b857758f18303584d2b87b63e6101->leave($__internal_58dfce97cb1e9088c3d9e52bb81f654d816b857758f18303584d2b87b63e6101_prof);

        
        $__internal_4dcecd66ebd8905b8d3d9742b5c40a5fcbb67b54589b5f9635fe314ce6da6aa8->leave($__internal_4dcecd66ebd8905b8d3d9742b5c40a5fcbb67b54589b5f9635fe314ce6da6aa8_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fadd5044d03bf2ae854bdfdf403bb4e6f5d72e50e5effc97ecce95834997f403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadd5044d03bf2ae854bdfdf403bb4e6f5d72e50e5effc97ecce95834997f403->enter($__internal_fadd5044d03bf2ae854bdfdf403bb4e6f5d72e50e5effc97ecce95834997f403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_25475ae35510cd44081295451e00e20872a23e60d9908af7951a74221840d5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25475ae35510cd44081295451e00e20872a23e60d9908af7951a74221840d5cd->enter($__internal_25475ae35510cd44081295451e00e20872a23e60d9908af7951a74221840d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "
        ";
        
        $__internal_25475ae35510cd44081295451e00e20872a23e60d9908af7951a74221840d5cd->leave($__internal_25475ae35510cd44081295451e00e20872a23e60d9908af7951a74221840d5cd_prof);

        
        $__internal_fadd5044d03bf2ae854bdfdf403bb4e6f5d72e50e5effc97ecce95834997f403->leave($__internal_fadd5044d03bf2ae854bdfdf403bb4e6f5d72e50e5effc97ecce95834997f403_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 30,  141 => 29,  130 => 26,  121 => 25,  109 => 19,  100 => 18,  82 => 5,  70 => 32,  68 => 29,  65 => 28,  63 => 25,  56 => 22,  54 => 18,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">



        <style>

            p{
                text-decoration: underline;
            }

        </style>

        {% block stylesheets %}


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}

        {% endblock %}

        {% block javascripts %}

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/formation/app/Resources/views/base.html.twig");
    }
}
