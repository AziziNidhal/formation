<?php

/* AdminBundle:Default:page2.html.twig */
class __TwigTemplate_6291f54ba5784327a9ddaef6052ce17887438f884e2abfd05d48e0f9618b7545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:page2.html.twig", 1);
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
        $__internal_fb93fa78aa72ee982b39d174519c29913f6ca0c06c459b25d12cb3a3bf6ec85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb93fa78aa72ee982b39d174519c29913f6ca0c06c459b25d12cb3a3bf6ec85d->enter($__internal_fb93fa78aa72ee982b39d174519c29913f6ca0c06c459b25d12cb3a3bf6ec85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:page2.html.twig"));

        $__internal_f2387483a88781a55127ebeb971439e8c74e6830b7823298e973ecffb799f509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2387483a88781a55127ebeb971439e8c74e6830b7823298e973ecffb799f509->enter($__internal_f2387483a88781a55127ebeb971439e8c74e6830b7823298e973ecffb799f509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:page2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb93fa78aa72ee982b39d174519c29913f6ca0c06c459b25d12cb3a3bf6ec85d->leave($__internal_fb93fa78aa72ee982b39d174519c29913f6ca0c06c459b25d12cb3a3bf6ec85d_prof);

        
        $__internal_f2387483a88781a55127ebeb971439e8c74e6830b7823298e973ecffb799f509->leave($__internal_f2387483a88781a55127ebeb971439e8c74e6830b7823298e973ecffb799f509_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e78c11173fc0812b8801c08ca21255b8c2eeffcf488ca8046c74d4f467100754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78c11173fc0812b8801c08ca21255b8c2eeffcf488ca8046c74d4f467100754->enter($__internal_e78c11173fc0812b8801c08ca21255b8c2eeffcf488ca8046c74d4f467100754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a3b841009ec02c2fa923a426c2b2dd304717fcf964265a4ce73e66506071dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3b841009ec02c2fa923a426c2b2dd304717fcf964265a4ce73e66506071dd4->enter($__internal_5a3b841009ec02c2fa923a426c2b2dd304717fcf964265a4ce73e66506071dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
      <style>

          p{
              color:green;
          }

      </style>

  ";
        
        $__internal_5a3b841009ec02c2fa923a426c2b2dd304717fcf964265a4ce73e66506071dd4->leave($__internal_5a3b841009ec02c2fa923a426c2b2dd304717fcf964265a4ce73e66506071dd4_prof);

        
        $__internal_e78c11173fc0812b8801c08ca21255b8c2eeffcf488ca8046c74d4f467100754->leave($__internal_e78c11173fc0812b8801c08ca21255b8c2eeffcf488ca8046c74d4f467100754_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_599897efae8d82ae1fafd71e3ea6a4390c448991088babc8805fb83a27f9acae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599897efae8d82ae1fafd71e3ea6a4390c448991088babc8805fb83a27f9acae->enter($__internal_599897efae8d82ae1fafd71e3ea6a4390c448991088babc8805fb83a27f9acae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0e42ef96205fc76800b75f761d4caa66e78341bfb4f5683a187eae7322470df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e42ef96205fc76800b75f761d4caa66e78341bfb4f5683a187eae7322470df->enter($__internal_e0e42ef96205fc76800b75f761d4caa66e78341bfb4f5683a187eae7322470df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 20
        echo "page2
";
        
        $__internal_e0e42ef96205fc76800b75f761d4caa66e78341bfb4f5683a187eae7322470df->leave($__internal_e0e42ef96205fc76800b75f761d4caa66e78341bfb4f5683a187eae7322470df_prof);

        
        $__internal_599897efae8d82ae1fafd71e3ea6a4390c448991088babc8805fb83a27f9acae->leave($__internal_599897efae8d82ae1fafd71e3ea6a4390c448991088babc8805fb83a27f9acae_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b7c7394835d2c238d4eb3acfdd85aec0b4ec3cdc89cc8fb3852b27fe8825fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b7c7394835d2c238d4eb3acfdd85aec0b4ec3cdc89cc8fb3852b27fe8825fc->enter($__internal_20b7c7394835d2c238d4eb3acfdd85aec0b4ec3cdc89cc8fb3852b27fe8825fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11e88dd92b05999576718ad12f8abbab731bde726be4cf4ca3251c0fe9d4b78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e88dd92b05999576718ad12f8abbab731bde726be4cf4ca3251c0fe9d4b78c->enter($__internal_11e88dd92b05999576718ad12f8abbab731bde726be4cf4ca3251c0fe9d4b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <p>
        salut je suis page 2


    </p>

";
        
        $__internal_11e88dd92b05999576718ad12f8abbab731bde726be4cf4ca3251c0fe9d4b78c->leave($__internal_11e88dd92b05999576718ad12f8abbab731bde726be4cf4ca3251c0fe9d4b78c_prof);

        
        $__internal_20b7c7394835d2c238d4eb3acfdd85aec0b4ec3cdc89cc8fb3852b27fe8825fc->leave($__internal_20b7c7394835d2c238d4eb3acfdd85aec0b4ec3cdc89cc8fb3852b27fe8825fc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  90 => 25,  79 => 20,  70 => 19,  51 => 6,  42 => 5,  11 => 1,);
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
              color:green;
          }

      </style>

  {% endblock %}



{% block title %}
page2
{% endblock %}



{% block body %}

    <p>
        salut je suis page 2


    </p>

{% endblock %}", "AdminBundle:Default:page2.html.twig", "/var/www/html/formation/src/Admin/AdminBundle/Resources/views/Default/page2.html.twig");
    }
}
