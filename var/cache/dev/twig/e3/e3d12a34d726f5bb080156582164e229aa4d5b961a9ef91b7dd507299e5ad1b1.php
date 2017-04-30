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
        $__internal_50859cd8400b6239519e67e99c1599b8251b76ba71920aa593e7f62fd1859b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50859cd8400b6239519e67e99c1599b8251b76ba71920aa593e7f62fd1859b96->enter($__internal_50859cd8400b6239519e67e99c1599b8251b76ba71920aa593e7f62fd1859b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_05f52c63ce424330711d72e75a372e35aa36c1be72d7e39569f89675597cd6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f52c63ce424330711d72e75a372e35aa36c1be72d7e39569f89675597cd6f3->enter($__internal_05f52c63ce424330711d72e75a372e35aa36c1be72d7e39569f89675597cd6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50859cd8400b6239519e67e99c1599b8251b76ba71920aa593e7f62fd1859b96->leave($__internal_50859cd8400b6239519e67e99c1599b8251b76ba71920aa593e7f62fd1859b96_prof);

        
        $__internal_05f52c63ce424330711d72e75a372e35aa36c1be72d7e39569f89675597cd6f3->leave($__internal_05f52c63ce424330711d72e75a372e35aa36c1be72d7e39569f89675597cd6f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bae836da35635bbb6205288836b65e68819cd241c6671883fdc5ee26d9e816f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae836da35635bbb6205288836b65e68819cd241c6671883fdc5ee26d9e816f2->enter($__internal_bae836da35635bbb6205288836b65e68819cd241c6671883fdc5ee26d9e816f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0fd8ddfd125dcef1391cb10702102216cadbc581d5a64657dd32f707397f4748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd8ddfd125dcef1391cb10702102216cadbc581d5a64657dd32f707397f4748->enter($__internal_0fd8ddfd125dcef1391cb10702102216cadbc581d5a64657dd32f707397f4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0fd8ddfd125dcef1391cb10702102216cadbc581d5a64657dd32f707397f4748->leave($__internal_0fd8ddfd125dcef1391cb10702102216cadbc581d5a64657dd32f707397f4748_prof);

        
        $__internal_bae836da35635bbb6205288836b65e68819cd241c6671883fdc5ee26d9e816f2->leave($__internal_bae836da35635bbb6205288836b65e68819cd241c6671883fdc5ee26d9e816f2_prof);

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
