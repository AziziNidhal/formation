<?php

/* AdminBundle:Admin:dashboard.html.twig */
class __TwigTemplate_b02958c83b1ccea435f01ef161fa15fbf3ca10ad063acbe9a7932fd6580fd8fa extends Twig_Template
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
        $__internal_27a3b1772b4c4c7f676799f74a9524437ec97d8805ceb94a9e02439cffc51c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a3b1772b4c4c7f676799f74a9524437ec97d8805ceb94a9e02439cffc51c11->enter($__internal_27a3b1772b4c4c7f676799f74a9524437ec97d8805ceb94a9e02439cffc51c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $__internal_c2f272e928b6330e2c07f561b12ac126ac6af47387710a6330953a8c8e1c8a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f272e928b6330e2c07f561b12ac126ac6af47387710a6330953a8c8e1c8a3a->enter($__internal_c2f272e928b6330e2c07f561b12ac126ac6af47387710a6330953a8c8e1c8a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a3b1772b4c4c7f676799f74a9524437ec97d8805ceb94a9e02439cffc51c11->leave($__internal_27a3b1772b4c4c7f676799f74a9524437ec97d8805ceb94a9e02439cffc51c11_prof);

        
        $__internal_c2f272e928b6330e2c07f561b12ac126ac6af47387710a6330953a8c8e1c8a3a->leave($__internal_c2f272e928b6330e2c07f561b12ac126ac6af47387710a6330953a8c8e1c8a3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74cbe01560d1b89c36f179972fafe7d35c3921c785f3cb1c8982ec1cb87e0a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cbe01560d1b89c36f179972fafe7d35c3921c785f3cb1c8982ec1cb87e0a93->enter($__internal_74cbe01560d1b89c36f179972fafe7d35c3921c785f3cb1c8982ec1cb87e0a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f3f88e079e0076d010a0b8cd3899963431da33ee24788525bf68bdf1d120a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3f88e079e0076d010a0b8cd3899963431da33ee24788525bf68bdf1d120a2a->enter($__internal_4f3f88e079e0076d010a0b8cd3899963431da33ee24788525bf68bdf1d120a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboad";
        
        $__internal_4f3f88e079e0076d010a0b8cd3899963431da33ee24788525bf68bdf1d120a2a->leave($__internal_4f3f88e079e0076d010a0b8cd3899963431da33ee24788525bf68bdf1d120a2a_prof);

        
        $__internal_74cbe01560d1b89c36f179972fafe7d35c3921c785f3cb1c8982ec1cb87e0a93->leave($__internal_74cbe01560d1b89c36f179972fafe7d35c3921c785f3cb1c8982ec1cb87e0a93_prof);

    }

    // line 6
    public function block_bread($context, array $blocks = array())
    {
        $__internal_5eed9f1c75c2b146337f5af75dd91ad0992115d6e98e29dcacfde7e9a294b44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eed9f1c75c2b146337f5af75dd91ad0992115d6e98e29dcacfde7e9a294b44d->enter($__internal_5eed9f1c75c2b146337f5af75dd91ad0992115d6e98e29dcacfde7e9a294b44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_bd86e4eed4110bb141ee10d6a44807ff9b73fa21e9f47aa93855415a30665360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd86e4eed4110bb141ee10d6a44807ff9b73fa21e9f47aa93855415a30665360->enter($__internal_bd86e4eed4110bb141ee10d6a44807ff9b73fa21e9f47aa93855415a30665360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        // line 7
        echo "

    <div class=\"row wrapper border-bottom white-bg page-heading\">
        <div class=\"col-sm-4\">
            <h2>Dashboard</h2>
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\">Admin</a>
                </li>
                <li class=\"active\">
                    <strong>Dashboard</strong>
                </li>
            </ol>
        </div>

    </div>

";
        
        $__internal_bd86e4eed4110bb141ee10d6a44807ff9b73fa21e9f47aa93855415a30665360->leave($__internal_bd86e4eed4110bb141ee10d6a44807ff9b73fa21e9f47aa93855415a30665360_prof);

        
        $__internal_5eed9f1c75c2b146337f5af75dd91ad0992115d6e98e29dcacfde7e9a294b44d->leave($__internal_5eed9f1c75c2b146337f5af75dd91ad0992115d6e98e29dcacfde7e9a294b44d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_772b404c5b1ee4d6932e244978baa52f1feba3bb580509b58fb21353d8794d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772b404c5b1ee4d6932e244978baa52f1feba3bb580509b58fb21353d8794d79->enter($__internal_772b404c5b1ee4d6932e244978baa52f1feba3bb580509b58fb21353d8794d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42ee27e253cc21b576552e3713909556f3e829b31ede4a9382ca081a9c03a2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ee27e253cc21b576552e3713909556f3e829b31ede4a9382ca081a9c03a2ab->enter($__internal_42ee27e253cc21b576552e3713909556f3e829b31ede4a9382ca081a9c03a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42ee27e253cc21b576552e3713909556f3e829b31ede4a9382ca081a9c03a2ab->leave($__internal_42ee27e253cc21b576552e3713909556f3e829b31ede4a9382ca081a9c03a2ab_prof);

        
        $__internal_772b404c5b1ee4d6932e244978baa52f1feba3bb580509b58fb21353d8794d79->leave($__internal_772b404c5b1ee4d6932e244978baa52f1feba3bb580509b58fb21353d8794d79_prof);

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
        return array (  108 => 30,  99 => 29,  78 => 14,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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
                    <a href=\"{{ path('admin_homepage') }}\">Admin</a>
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
