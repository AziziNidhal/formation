<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_09bf39949fcc39b15d7155119da6102ba3eec24339f78cda91d1ef7715717457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37c63b1993dd1d9adb38a9f35e4ce22b3a2e88398b6e856b6b8108911a9d8595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c63b1993dd1d9adb38a9f35e4ce22b3a2e88398b6e856b6b8108911a9d8595->enter($__internal_37c63b1993dd1d9adb38a9f35e4ce22b3a2e88398b6e856b6b8108911a9d8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_27cf3d865703ee20d7903d1ad97740a79fa0e2e896a421e7e084ff95f1c606ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cf3d865703ee20d7903d1ad97740a79fa0e2e896a421e7e084ff95f1c606ce->enter($__internal_27cf3d865703ee20d7903d1ad97740a79fa0e2e896a421e7e084ff95f1c606ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c63b1993dd1d9adb38a9f35e4ce22b3a2e88398b6e856b6b8108911a9d8595->leave($__internal_37c63b1993dd1d9adb38a9f35e4ce22b3a2e88398b6e856b6b8108911a9d8595_prof);

        
        $__internal_27cf3d865703ee20d7903d1ad97740a79fa0e2e896a421e7e084ff95f1c606ce->leave($__internal_27cf3d865703ee20d7903d1ad97740a79fa0e2e896a421e7e084ff95f1c606ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16e41ef04e8a5c31d011ae5088293a6fdff6f50c8be375afa84ecae8f5d16292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e41ef04e8a5c31d011ae5088293a6fdff6f50c8be375afa84ecae8f5d16292->enter($__internal_16e41ef04e8a5c31d011ae5088293a6fdff6f50c8be375afa84ecae8f5d16292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6e7e5cb6302a94e05615d13a0b8a98866d4f93bfb7de483a753a2ee0a30d55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e7e5cb6302a94e05615d13a0b8a98866d4f93bfb7de483a753a2ee0a30d55f->enter($__internal_b6e7e5cb6302a94e05615d13a0b8a98866d4f93bfb7de483a753a2ee0a30d55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b6e7e5cb6302a94e05615d13a0b8a98866d4f93bfb7de483a753a2ee0a30d55f->leave($__internal_b6e7e5cb6302a94e05615d13a0b8a98866d4f93bfb7de483a753a2ee0a30d55f_prof);

        
        $__internal_16e41ef04e8a5c31d011ae5088293a6fdff6f50c8be375afa84ecae8f5d16292->leave($__internal_16e41ef04e8a5c31d011ae5088293a6fdff6f50c8be375afa84ecae8f5d16292_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/formation/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
