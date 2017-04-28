<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b83fd227acfd76cb07876a1f963f7075a6fca85272eda87cdea60fd4e906eb24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f06f1b7408a3be10cb72e8f8bd12c069bd15b0071330d567b3038002f0eea2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06f1b7408a3be10cb72e8f8bd12c069bd15b0071330d567b3038002f0eea2ea->enter($__internal_f06f1b7408a3be10cb72e8f8bd12c069bd15b0071330d567b3038002f0eea2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c9a6ca03584d44a188429597ac9b737330950d8a5e7758218b3c58567e425bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a6ca03584d44a188429597ac9b737330950d8a5e7758218b3c58567e425bd6->enter($__internal_c9a6ca03584d44a188429597ac9b737330950d8a5e7758218b3c58567e425bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>INSPINIA | Login</title>

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"gray-bg\">

<div class=\"middle-box text-center loginscreen animated fadeInDown\">
    <div>
        <div>

            <h1 class=\"logo-name\">YY</h1>

        </div>
        <h3>Welcome to Tchesy+</h3>
        <p>

        <div>
            ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 38
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>

        ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 43
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 44
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 46
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "


        </p>




        ";
        // line 59
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "
        <p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>


";
        
        $__internal_f06f1b7408a3be10cb72e8f8bd12c069bd15b0071330d567b3038002f0eea2ea->leave($__internal_f06f1b7408a3be10cb72e8f8bd12c069bd15b0071330d567b3038002f0eea2ea_prof);

        
        $__internal_c9a6ca03584d44a188429597ac9b737330950d8a5e7758218b3c58567e425bd6->leave($__internal_c9a6ca03584d44a188429597ac9b737330950d8a5e7758218b3c58567e425bd6_prof);

    }

    // line 59
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06c218718b82b081e46dd1f984c2fb6f97bf26fa9d362cb648c2596d6ed538ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c218718b82b081e46dd1f984c2fb6f97bf26fa9d362cb648c2596d6ed538ad->enter($__internal_06c218718b82b081e46dd1f984c2fb6f97bf26fa9d362cb648c2596d6ed538ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_498f949e03586870c6816389f88de2d031920ede3e51210759aa3c889410bbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498f949e03586870c6816389f88de2d031920ede3e51210759aa3c889410bbc5->enter($__internal_498f949e03586870c6816389f88de2d031920ede3e51210759aa3c889410bbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 60
        echo "        ";
        
        $__internal_498f949e03586870c6816389f88de2d031920ede3e51210759aa3c889410bbc5->leave($__internal_498f949e03586870c6816389f88de2d031920ede3e51210759aa3c889410bbc5_prof);

        
        $__internal_06c218718b82b081e46dd1f984c2fb6f97bf26fa9d362cb648c2596d6ed538ad->leave($__internal_06c218718b82b081e46dd1f984c2fb6f97bf26fa9d362cb648c2596d6ed538ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  177 => 59,  159 => 68,  155 => 67,  147 => 61,  145 => 59,  135 => 51,  132 => 50,  126 => 49,  117 => 46,  112 => 45,  107 => 44,  102 => 43,  100 => 42,  96 => 40,  88 => 38,  82 => 35,  78 => 34,  73 => 33,  71 => 32,  51 => 15,  47 => 14,  42 => 12,  38 => 11,  26 => 1,);
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

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>INSPINIA | Login</title>

    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

</head>

<body class=\"gray-bg\">

<div class=\"middle-box text-center loginscreen animated fadeInDown\">
    <div>
        <div>

            <h1 class=\"logo-name\">YY</h1>

        </div>
        <h3>Welcome to Tchesy+</h3>
        <p>

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}



        </p>




        {% block fos_user_content %}
        {% endblock fos_user_content %}

        <p class=\"m-t\"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

</body>

</html>


", "@FOSUser/layout.html.twig", "/var/www/html/formation/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
