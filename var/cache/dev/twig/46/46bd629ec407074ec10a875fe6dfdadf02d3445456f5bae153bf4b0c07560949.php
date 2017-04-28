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
        $__internal_7c899485f74e2d749e0d15a177e9aee588dfc0cdf7e66e5b515bd51e90a8bc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c899485f74e2d749e0d15a177e9aee588dfc0cdf7e66e5b515bd51e90a8bc26->enter($__internal_7c899485f74e2d749e0d15a177e9aee588dfc0cdf7e66e5b515bd51e90a8bc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fffc573057978617a0751e8d01418f9b1cc3d37e3f858ceafc77ed53fb55c652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffc573057978617a0751e8d01418f9b1cc3d37e3f858ceafc77ed53fb55c652->enter($__internal_fffc573057978617a0751e8d01418f9b1cc3d37e3f858ceafc77ed53fb55c652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        <style>

            p{
                text-decoration: underline;
            }

        </style>

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_7c899485f74e2d749e0d15a177e9aee588dfc0cdf7e66e5b515bd51e90a8bc26->leave($__internal_7c899485f74e2d749e0d15a177e9aee588dfc0cdf7e66e5b515bd51e90a8bc26_prof);

        
        $__internal_fffc573057978617a0751e8d01418f9b1cc3d37e3f858ceafc77ed53fb55c652->leave($__internal_fffc573057978617a0751e8d01418f9b1cc3d37e3f858ceafc77ed53fb55c652_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee0c96c0c5718db62086c244eb434962d0ed87af9489a9a49c632657786e5bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0c96c0c5718db62086c244eb434962d0ed87af9489a9a49c632657786e5bd3->enter($__internal_ee0c96c0c5718db62086c244eb434962d0ed87af9489a9a49c632657786e5bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87b3f4b1b89c7cc21fe98455d4c97e0bc53ce752526e97f34c8c520353b38e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b3f4b1b89c7cc21fe98455d4c97e0bc53ce752526e97f34c8c520353b38e1d->enter($__internal_87b3f4b1b89c7cc21fe98455d4c97e0bc53ce752526e97f34c8c520353b38e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87b3f4b1b89c7cc21fe98455d4c97e0bc53ce752526e97f34c8c520353b38e1d->leave($__internal_87b3f4b1b89c7cc21fe98455d4c97e0bc53ce752526e97f34c8c520353b38e1d_prof);

        
        $__internal_ee0c96c0c5718db62086c244eb434962d0ed87af9489a9a49c632657786e5bd3->leave($__internal_ee0c96c0c5718db62086c244eb434962d0ed87af9489a9a49c632657786e5bd3_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c263b180c6ca9e78bb9627f9c4f922872b1b45ccf98c08a4d1892cb2241f3ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c263b180c6ca9e78bb9627f9c4f922872b1b45ccf98c08a4d1892cb2241f3ca8->enter($__internal_c263b180c6ca9e78bb9627f9c4f922872b1b45ccf98c08a4d1892cb2241f3ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d773bad30d3c71364ed0fb0c6b002c08f9545242ceb3c2706c8b02babdce2a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d773bad30d3c71364ed0fb0c6b002c08f9545242ceb3c2706c8b02babdce2a24->enter($__internal_d773bad30d3c71364ed0fb0c6b002c08f9545242ceb3c2706c8b02babdce2a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "

        ";
        
        $__internal_d773bad30d3c71364ed0fb0c6b002c08f9545242ceb3c2706c8b02babdce2a24->leave($__internal_d773bad30d3c71364ed0fb0c6b002c08f9545242ceb3c2706c8b02babdce2a24_prof);

        
        $__internal_c263b180c6ca9e78bb9627f9c4f922872b1b45ccf98c08a4d1892cb2241f3ca8->leave($__internal_c263b180c6ca9e78bb9627f9c4f922872b1b45ccf98c08a4d1892cb2241f3ca8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfcdbf584147d8858ebe2aebc87c322cb42deb823e5c6790d4ce2a33b512df3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcdbf584147d8858ebe2aebc87c322cb42deb823e5c6790d4ce2a33b512df3f->enter($__internal_bfcdbf584147d8858ebe2aebc87c322cb42deb823e5c6790d4ce2a33b512df3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_591fa1e87c8095a652da62818466e24ef8dfc039586c8c3a355fd311f9992fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591fa1e87c8095a652da62818466e24ef8dfc039586c8c3a355fd311f9992fac->enter($__internal_591fa1e87c8095a652da62818466e24ef8dfc039586c8c3a355fd311f9992fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
        ";
        
        $__internal_591fa1e87c8095a652da62818466e24ef8dfc039586c8c3a355fd311f9992fac->leave($__internal_591fa1e87c8095a652da62818466e24ef8dfc039586c8c3a355fd311f9992fac_prof);

        
        $__internal_bfcdbf584147d8858ebe2aebc87c322cb42deb823e5c6790d4ce2a33b512df3f->leave($__internal_bfcdbf584147d8858ebe2aebc87c322cb42deb823e5c6790d4ce2a33b512df3f_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53e1c8122494e735ef5a9b33659b9816381f8236336e9ddff671ce2a7eff73bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e1c8122494e735ef5a9b33659b9816381f8236336e9ddff671ce2a7eff73bf->enter($__internal_53e1c8122494e735ef5a9b33659b9816381f8236336e9ddff671ce2a7eff73bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_987256bc7321e66cd4cd6743e36125f4e3601386da7390d344261f24e4ddd8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987256bc7321e66cd4cd6743e36125f4e3601386da7390d344261f24e4ddd8ca->enter($__internal_987256bc7321e66cd4cd6743e36125f4e3601386da7390d344261f24e4ddd8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "
        ";
        
        $__internal_987256bc7321e66cd4cd6743e36125f4e3601386da7390d344261f24e4ddd8ca->leave($__internal_987256bc7321e66cd4cd6743e36125f4e3601386da7390d344261f24e4ddd8ca_prof);

        
        $__internal_53e1c8122494e735ef5a9b33659b9816381f8236336e9ddff671ce2a7eff73bf->leave($__internal_53e1c8122494e735ef5a9b33659b9816381f8236336e9ddff671ce2a7eff73bf_prof);

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
        return array (  145 => 28,  136 => 27,  125 => 24,  116 => 23,  104 => 17,  95 => 16,  77 => 5,  65 => 30,  63 => 27,  60 => 26,  58 => 23,  51 => 20,  49 => 16,  35 => 5,  29 => 1,);
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
