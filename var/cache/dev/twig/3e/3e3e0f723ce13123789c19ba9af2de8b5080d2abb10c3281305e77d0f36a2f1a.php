<?php

/* AdminBundle:Default:page1.html.twig */
class __TwigTemplate_0141c4993899454c49753216d1f233a5a7e5499e0b9ac25e1c673216d30413ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:page1.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa3be94085cb61206ed3420eaadf26a22e87a85f7953d9b17ea67367830f582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa3be94085cb61206ed3420eaadf26a22e87a85f7953d9b17ea67367830f582->enter($__internal_caa3be94085cb61206ed3420eaadf26a22e87a85f7953d9b17ea67367830f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:page1.html.twig"));

        $__internal_9eb83602a36e44cffda7e2466bb7369ab4ce1af16d0374a4805a5ca9714b5319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb83602a36e44cffda7e2466bb7369ab4ce1af16d0374a4805a5ca9714b5319->enter($__internal_9eb83602a36e44cffda7e2466bb7369ab4ce1af16d0374a4805a5ca9714b5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:page1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa3be94085cb61206ed3420eaadf26a22e87a85f7953d9b17ea67367830f582->leave($__internal_caa3be94085cb61206ed3420eaadf26a22e87a85f7953d9b17ea67367830f582_prof);

        
        $__internal_9eb83602a36e44cffda7e2466bb7369ab4ce1af16d0374a4805a5ca9714b5319->leave($__internal_9eb83602a36e44cffda7e2466bb7369ab4ce1af16d0374a4805a5ca9714b5319_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcfac85faaabb39ef1800fb396c8ed5c7bba26ab18753b4a81a5634b1acaebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfac85faaabb39ef1800fb396c8ed5c7bba26ab18753b4a81a5634b1acaebd9->enter($__internal_dcfac85faaabb39ef1800fb396c8ed5c7bba26ab18753b4a81a5634b1acaebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b9585d24ce8fa4a8c5169495a1f0118c5cc96b88a8ba0e43553607111bdf412b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9585d24ce8fa4a8c5169495a1f0118c5cc96b88a8ba0e43553607111bdf412b->enter($__internal_b9585d24ce8fa4a8c5169495a1f0118c5cc96b88a8ba0e43553607111bdf412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
      <style>

          p{
              color:red;
          }

      </style>

  ";
        
        $__internal_b9585d24ce8fa4a8c5169495a1f0118c5cc96b88a8ba0e43553607111bdf412b->leave($__internal_b9585d24ce8fa4a8c5169495a1f0118c5cc96b88a8ba0e43553607111bdf412b_prof);

        
        $__internal_dcfac85faaabb39ef1800fb396c8ed5c7bba26ab18753b4a81a5634b1acaebd9->leave($__internal_dcfac85faaabb39ef1800fb396c8ed5c7bba26ab18753b4a81a5634b1acaebd9_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_b419106ed19a0395bcf1d3f136fcd5a55b5b1fe5bfddfb8a8728d57055502be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b419106ed19a0395bcf1d3f136fcd5a55b5b1fe5bfddfb8a8728d57055502be9->enter($__internal_b419106ed19a0395bcf1d3f136fcd5a55b5b1fe5bfddfb8a8728d57055502be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_390b814bbef959aae438920eb496fd8a9c18d023b77a4280776817f4b65e6715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390b814bbef959aae438920eb496fd8a9c18d023b77a4280776817f4b65e6715->enter($__internal_390b814bbef959aae438920eb496fd8a9c18d023b77a4280776817f4b65e6715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 18
        echo "page1
";
        
        $__internal_390b814bbef959aae438920eb496fd8a9c18d023b77a4280776817f4b65e6715->leave($__internal_390b814bbef959aae438920eb496fd8a9c18d023b77a4280776817f4b65e6715_prof);

        
        $__internal_b419106ed19a0395bcf1d3f136fcd5a55b5b1fe5bfddfb8a8728d57055502be9->leave($__internal_b419106ed19a0395bcf1d3f136fcd5a55b5b1fe5bfddfb8a8728d57055502be9_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b4edb05d2925e416f03c0389cc54138de597eefe5d3bfab3543ba9859eefe4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4edb05d2925e416f03c0389cc54138de597eefe5d3bfab3543ba9859eefe4d->enter($__internal_7b4edb05d2925e416f03c0389cc54138de597eefe5d3bfab3543ba9859eefe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4ce50e7986c815e0b5deef385ede57b1b53cb02026ae8a277f0241555cd0871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ce50e7986c815e0b5deef385ede57b1b53cb02026ae8a277f0241555cd0871->enter($__internal_a4ce50e7986c815e0b5deef385ede57b1b53cb02026ae8a277f0241555cd0871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    <p>
        salut je suis page 1


    </p>

";
        
        $__internal_a4ce50e7986c815e0b5deef385ede57b1b53cb02026ae8a277f0241555cd0871->leave($__internal_a4ce50e7986c815e0b5deef385ede57b1b53cb02026ae8a277f0241555cd0871_prof);

        
        $__internal_7b4edb05d2925e416f03c0389cc54138de597eefe5d3bfab3543ba9859eefe4d->leave($__internal_7b4edb05d2925e416f03c0389cc54138de597eefe5d3bfab3543ba9859eefe4d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  90 => 21,  79 => 18,  70 => 17,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}


  {% block stylesheets %}

      <style>

          p{
              color:red;
          }

      </style>

  {% endblock %}


{% block title %}
page1
{% endblock %}

{% block body %}

    <p>
        salut je suis page 1


    </p>

{% endblock %}
", "AdminBundle:Default:page1.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Default/page1.html.twig");
    }
}
