<?php

/* AdminBundle:Admin:dashboard.html.twig */
class __TwigTemplate_a72349e8723f947d8ecb0b503185114d90580c414139fc8fb9b230d79fb3f282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layoutAdmin.html.twig", "AdminBundle:Admin:dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bread' => array($this, 'block_bread'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f13268abafa8b415400e07cb1a05944f2475bd5aa10b5198c6e14beec7cadf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f13268abafa8b415400e07cb1a05944f2475bd5aa10b5198c6e14beec7cadf2->enter($__internal_6f13268abafa8b415400e07cb1a05944f2475bd5aa10b5198c6e14beec7cadf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $__internal_a594b83a6064f0848b55ace8b42fa02c66191a1b0796f7e75987de1179582dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a594b83a6064f0848b55ace8b42fa02c66191a1b0796f7e75987de1179582dce->enter($__internal_a594b83a6064f0848b55ace8b42fa02c66191a1b0796f7e75987de1179582dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f13268abafa8b415400e07cb1a05944f2475bd5aa10b5198c6e14beec7cadf2->leave($__internal_6f13268abafa8b415400e07cb1a05944f2475bd5aa10b5198c6e14beec7cadf2_prof);

        
        $__internal_a594b83a6064f0848b55ace8b42fa02c66191a1b0796f7e75987de1179582dce->leave($__internal_a594b83a6064f0848b55ace8b42fa02c66191a1b0796f7e75987de1179582dce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d3b3c73a1b51bfcac1bd53bf83e97358253e0a4313605dc3cd3c360f8b19b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d3b3c73a1b51bfcac1bd53bf83e97358253e0a4313605dc3cd3c360f8b19b0->enter($__internal_a1d3b3c73a1b51bfcac1bd53bf83e97358253e0a4313605dc3cd3c360f8b19b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cc932e857c681d6be1e1383d1a612cef69c8373a168917843b29ec638710261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc932e857c681d6be1e1383d1a612cef69c8373a168917843b29ec638710261->enter($__internal_1cc932e857c681d6be1e1383d1a612cef69c8373a168917843b29ec638710261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_1cc932e857c681d6be1e1383d1a612cef69c8373a168917843b29ec638710261->leave($__internal_1cc932e857c681d6be1e1383d1a612cef69c8373a168917843b29ec638710261_prof);

        
        $__internal_a1d3b3c73a1b51bfcac1bd53bf83e97358253e0a4313605dc3cd3c360f8b19b0->leave($__internal_a1d3b3c73a1b51bfcac1bd53bf83e97358253e0a4313605dc3cd3c360f8b19b0_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_9138f4733088f15ec469e0ef9df93bbcf3acc1c883f826d6f911ece97aabf81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9138f4733088f15ec469e0ef9df93bbcf3acc1c883f826d6f911ece97aabf81f->enter($__internal_9138f4733088f15ec469e0ef9df93bbcf3acc1c883f826d6f911ece97aabf81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_66359f21b55875181372b40ab6f8a88d0e9c69e8e3999e8027147a392ea54e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66359f21b55875181372b40ab6f8a88d0e9c69e8e3999e8027147a392ea54e65->enter($__internal_66359f21b55875181372b40ab6f8a88d0e9c69e8e3999e8027147a392ea54e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        // line 7
        echo "

    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Dashboard</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"index.html\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>

    </div>

";
        
        $__internal_66359f21b55875181372b40ab6f8a88d0e9c69e8e3999e8027147a392ea54e65->leave($__internal_66359f21b55875181372b40ab6f8a88d0e9c69e8e3999e8027147a392ea54e65_prof);

        
        $__internal_9138f4733088f15ec469e0ef9df93bbcf3acc1c883f826d6f911ece97aabf81f->leave($__internal_9138f4733088f15ec469e0ef9df93bbcf3acc1c883f826d6f911ece97aabf81f_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3b4c52a2e37b0ff86794a2ec58b22b9b7d4f6ac3a209a8eb009fb8300f0de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3b4c52a2e37b0ff86794a2ec58b22b9b7d4f6ac3a209a8eb009fb8300f0de2->enter($__internal_aa3b4c52a2e37b0ff86794a2ec58b22b9b7d4f6ac3a209a8eb009fb8300f0de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e823f555a6de4e402a57164d162d92299ae79ee401e853563cefcd530de1015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e823f555a6de4e402a57164d162d92299ae79ee401e853563cefcd530de1015->enter($__internal_3e823f555a6de4e402a57164d162d92299ae79ee401e853563cefcd530de1015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "



    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Je suis le tableau de bord

            </div>
        </div>
    </div>



";
        
        $__internal_3e823f555a6de4e402a57164d162d92299ae79ee401e853563cefcd530de1015->leave($__internal_3e823f555a6de4e402a57164d162d92299ae79ee401e853563cefcd530de1015_prof);

        
        $__internal_aa3b4c52a2e37b0ff86794a2ec58b22b9b7d4f6ac3a209a8eb009fb8300f0de2->leave($__internal_aa3b4c52a2e37b0ff86794a2ec58b22b9b7d4f6ac3a209a8eb009fb8300f0de2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  96 => 29,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/layoutAdmin.html.twig' %}

    {% block title %}Dashboad{% endblock %}


{% block bread %}


    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Dashboard</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"index.html\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>

    </div>

{% endblock %}




{% block body %}




    <div class=\"wrapper wrapper-content\">
        <div class=\"middle-box text-center animated fadeInRightBig\">
            <h3 class=\"font-bold\">This is page content</h3>
            <div class=\"error-desc\">
                Je suis le tableau de bord

            </div>
        </div>
    </div>



{% endblock %}", "AdminBundle:Admin:dashboard.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Admin/dashboard.html.twig");
    }
}
