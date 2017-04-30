<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_e878e9e173f6b7f6edd38cb2b46da3e034dd98f04ee79c002077e4d6479d8d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_162014ebdc61d716fbd2cd83f862588bc5776cf2ffac7c01a7eb9e792eafb021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162014ebdc61d716fbd2cd83f862588bc5776cf2ffac7c01a7eb9e792eafb021->enter($__internal_162014ebdc61d716fbd2cd83f862588bc5776cf2ffac7c01a7eb9e792eafb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_eb121e419fda80211bd49389ee64ba6321d99e7d7deb941fedd9dfddf5879058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb121e419fda80211bd49389ee64ba6321d99e7d7deb941fedd9dfddf5879058->enter($__internal_eb121e419fda80211bd49389ee64ba6321d99e7d7deb941fedd9dfddf5879058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form class=\"m-t\" role=\"form\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Username\"  required=\"required\" />

    <label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\"  name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary block full-width m-b\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


    <a href=\"#\"><small>Forgot password?</small></a>
    <p class=\"text-muted text-center\"><small>Do not have an account?</small></p>
    <a class=\"btn btn-sm btn-white btn-block\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Create an account</a>

</form>




";
        
        $__internal_162014ebdc61d716fbd2cd83f862588bc5776cf2ffac7c01a7eb9e792eafb021->leave($__internal_162014ebdc61d716fbd2cd83f862588bc5776cf2ffac7c01a7eb9e792eafb021_prof);

        
        $__internal_eb121e419fda80211bd49389ee64ba6321d99e7d7deb941fedd9dfddf5879058->leave($__internal_eb121e419fda80211bd49389ee64ba6321d99e7d7deb941fedd9dfddf5879058_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  75 => 21,  70 => 19,  63 => 15,  58 => 13,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"m-t\" role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Username\"  required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\"  name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary block full-width m-b\" value=\"{{ 'security.login.submit'|trans }}\" />


    <a href=\"#\"><small>Forgot password?</small></a>
    <p class=\"text-muted text-center\"><small>Do not have an account?</small></p>
    <a class=\"btn btn-sm btn-white btn-block\" href=\"{{ path('fos_user_registration_register') }}\">Create an account</a>

</form>




{#

  <form  action=\"index.html\">
    <div class=\"form-group\">
        <input type=\"email\" required=\"\">
    </div>
    <div class=\"form-group\">
        <input type=\"password\" required=\"\">
    </div>
    <button type=\"submit\" >Login</button>

</form>

#}", "@FOSUser/Security/login_content.html.twig", "/var/www/html/formation/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
