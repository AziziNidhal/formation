<?php

/* layout/layoutAdmin.html.twig */
class __TwigTemplate_9fb628b4a79e94b465665aa0931e03268df1592fab0ae31b5430732f2f2cf4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'bread' => array($this, 'block_bread'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
            'angular' => array($this, 'block_angular'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"appAdmin\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>
    ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("angular/angular.min.js"), "html", null, true);
        echo "\"></script>


    <style>
        .clearP{
            padding: 20px;
        }


    </style>

    ";
        // line 35
        $this->displayBlock('style', $context, $blocks);
        // line 36
        echo "

</head>

<body class=\"\">

<div id=\"wrapper\">

    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav metismenu\" id=\"side-menu\">
                <li class=\"nav-header\">
                    <div class=\"dropdown profile-element\"> <span>
                            <img alt=\"image\" class=\"img-circle\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/profile_small.jpg"), "html", null, true);
        echo "\" />
                             </span>
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "user", array()), "html", null, true);
        echo "</strong>
                             </span> <span class=\"text-muted text-xs block\">Art Director <b class=\"caret\"></b></span> </span> </a>
                        <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                            <li><a href=\"profile.html\">Profile</a></li>
                            <li><a href=\"contacts.html\">Contacts</a></li>
                            <li><a href=\"mailbox.html\">Mailbox</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
                        </ul>
                    </div>
                    <div class=\"logo-element\">
                        IN+
                    </div>
                </li>

                <li>
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\"><i class=\"fa fa-diamond\"></i> <span class=\"nav-label\">Dashboard</span></a>
                </li>


                  <li>
                    <a href=\"#\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Categories</span> <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level collapse\">
                        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_gestionCategoriePage");
        echo "\">Gestion catégories</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajoutCategoriePage");
        echo "\">Ajout catégories</a></li>

                    </ul>
                </li>







            </ul>

        </div>
    </nav>

    <div id=\"page-wrapper\" class=\"gray-bg\">
        <div class=\"row border-bottom\">
            <nav class=\"navbar navbar-static-top  \" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>

                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">Bienvenu cher Admin .</span>
                    </li>


                    <li>
                        <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                            <i class=\"fa fa-sign-out\"></i> Déconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        ";
        // line 116
        $this->displayBlock('bread', $context, $blocks);
        // line 117
        echo "

        ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "



        <div class=\"footer\">
            <div class=\"pull-right\">
                Développé avec <strong>amour</strong>.
            </div>
            <div>
                <strong>Copyright</strong> Tchesy &copy; 2017
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom and plugin javascript -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>



";
        // line 151
        $this->displayBlock('scripts', $context, $blocks);
        // line 152
        echo "

<script>

    var appAdmin = angular.module(\"appAdmin\" , [])


    .config(function(\$interpolateProvider) {
        \$interpolateProvider.startSymbol('%%');
        \$interpolateProvider.endSymbol('%%');
    });



</script>


";
        // line 169
        $this->displayBlock('angular', $context, $blocks);
        // line 174
        echo "

</body>

</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 35
    public function block_style($context, array $blocks = array())
    {
    }

    // line 116
    public function block_bread($context, array $blocks = array())
    {
    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        // line 120
        echo "
        ";
    }

    // line 151
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 169
    public function block_angular($context, array $blocks = array())
    {
        // line 170
        echo "


";
    }

    public function getTemplateName()
    {
        return "layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 170,  307 => 169,  302 => 151,  297 => 120,  294 => 119,  289 => 116,  284 => 35,  279 => 10,  270 => 174,  268 => 169,  249 => 152,  247 => 151,  240 => 147,  236 => 146,  232 => 145,  226 => 142,  222 => 141,  218 => 140,  214 => 139,  195 => 122,  193 => 119,  189 => 117,  187 => 116,  174 => 106,  141 => 76,  137 => 75,  127 => 68,  115 => 59,  105 => 52,  99 => 49,  84 => 36,  82 => 35,  68 => 24,  61 => 20,  55 => 17,  51 => 16,  46 => 14,  42 => 13,  38 => 11,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/layoutAdmin.html.twig", "/var/www/html/formation/app/Resources/views/layout/layoutAdmin.html.twig");
    }
}
