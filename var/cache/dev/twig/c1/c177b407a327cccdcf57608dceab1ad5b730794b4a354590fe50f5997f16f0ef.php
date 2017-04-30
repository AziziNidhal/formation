<?php

/* layout/layoutAdmin.html.twig */
class __TwigTemplate_ee6d0fe0731c6a01636f76d9f423303981c21512d11af99666043ee7f43523aa extends Twig_Template
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
        $__internal_cbbae20ffb156f33ca85afa12e33c99c426fb3fc4303c669ace28e1ff431c1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbae20ffb156f33ca85afa12e33c99c426fb3fc4303c669ace28e1ff431c1fe->enter($__internal_cbbae20ffb156f33ca85afa12e33c99c426fb3fc4303c669ace28e1ff431c1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

        $__internal_0b0f2e66c8d046f19070112f8fcd0482f4ccab1441e212fde647922d6b5b1d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0f2e66c8d046f19070112f8fcd0482f4ccab1441e212fde647922d6b5b1d49->enter($__internal_0b0f2e66c8d046f19070112f8fcd0482f4ccab1441e212fde647922d6b5b1d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
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
        
        $__internal_cbbae20ffb156f33ca85afa12e33c99c426fb3fc4303c669ace28e1ff431c1fe->leave($__internal_cbbae20ffb156f33ca85afa12e33c99c426fb3fc4303c669ace28e1ff431c1fe_prof);

        
        $__internal_0b0f2e66c8d046f19070112f8fcd0482f4ccab1441e212fde647922d6b5b1d49->leave($__internal_0b0f2e66c8d046f19070112f8fcd0482f4ccab1441e212fde647922d6b5b1d49_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_df19e2c3b435ecf4ca5658545afc96f5e612850360e05666adbb109b488aad1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df19e2c3b435ecf4ca5658545afc96f5e612850360e05666adbb109b488aad1f->enter($__internal_df19e2c3b435ecf4ca5658545afc96f5e612850360e05666adbb109b488aad1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ee6166cc7a6f1ed50bd952a0d52d3c19c720abafd862b15ac9bbca014ad839a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee6166cc7a6f1ed50bd952a0d52d3c19c720abafd862b15ac9bbca014ad839a->enter($__internal_5ee6166cc7a6f1ed50bd952a0d52d3c19c720abafd862b15ac9bbca014ad839a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5ee6166cc7a6f1ed50bd952a0d52d3c19c720abafd862b15ac9bbca014ad839a->leave($__internal_5ee6166cc7a6f1ed50bd952a0d52d3c19c720abafd862b15ac9bbca014ad839a_prof);

        
        $__internal_df19e2c3b435ecf4ca5658545afc96f5e612850360e05666adbb109b488aad1f->leave($__internal_df19e2c3b435ecf4ca5658545afc96f5e612850360e05666adbb109b488aad1f_prof);

    }

    // line 35
    public function block_style($context, array $blocks = array())
    {
        $__internal_463d938cc79ef47b306eddc6acde3eda6e5fae813a09e04ce54d17b8cc2da4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463d938cc79ef47b306eddc6acde3eda6e5fae813a09e04ce54d17b8cc2da4af->enter($__internal_463d938cc79ef47b306eddc6acde3eda6e5fae813a09e04ce54d17b8cc2da4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0536b850a134f75c809983e7ae6118786a0267b51db7841c72282318c2269cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0536b850a134f75c809983e7ae6118786a0267b51db7841c72282318c2269cb9->enter($__internal_0536b850a134f75c809983e7ae6118786a0267b51db7841c72282318c2269cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_0536b850a134f75c809983e7ae6118786a0267b51db7841c72282318c2269cb9->leave($__internal_0536b850a134f75c809983e7ae6118786a0267b51db7841c72282318c2269cb9_prof);

        
        $__internal_463d938cc79ef47b306eddc6acde3eda6e5fae813a09e04ce54d17b8cc2da4af->leave($__internal_463d938cc79ef47b306eddc6acde3eda6e5fae813a09e04ce54d17b8cc2da4af_prof);

    }

    // line 116
    public function block_bread($context, array $blocks = array())
    {
        $__internal_058c36cb11b33ee32ac1b6d51b9ef76e2126ff5af060fe6559c867d24cbe63e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058c36cb11b33ee32ac1b6d51b9ef76e2126ff5af060fe6559c867d24cbe63e1->enter($__internal_058c36cb11b33ee32ac1b6d51b9ef76e2126ff5af060fe6559c867d24cbe63e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_ca41876681cc349567689c46717e708dd24fe230d6469e6f88c3bf6d4f24a12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca41876681cc349567689c46717e708dd24fe230d6469e6f88c3bf6d4f24a12b->enter($__internal_ca41876681cc349567689c46717e708dd24fe230d6469e6f88c3bf6d4f24a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        
        $__internal_ca41876681cc349567689c46717e708dd24fe230d6469e6f88c3bf6d4f24a12b->leave($__internal_ca41876681cc349567689c46717e708dd24fe230d6469e6f88c3bf6d4f24a12b_prof);

        
        $__internal_058c36cb11b33ee32ac1b6d51b9ef76e2126ff5af060fe6559c867d24cbe63e1->leave($__internal_058c36cb11b33ee32ac1b6d51b9ef76e2126ff5af060fe6559c867d24cbe63e1_prof);

    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        $__internal_82ca8c3b351ed46b10df3a74dfe54df1ece3ea04fdcc581069c9e8fe7bda7ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ca8c3b351ed46b10df3a74dfe54df1ece3ea04fdcc581069c9e8fe7bda7ec0->enter($__internal_82ca8c3b351ed46b10df3a74dfe54df1ece3ea04fdcc581069c9e8fe7bda7ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_123fa602aacecb990c63ee20aacec1673a35e202ffdeb05e731d60c69c135fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123fa602aacecb990c63ee20aacec1673a35e202ffdeb05e731d60c69c135fe5->enter($__internal_123fa602aacecb990c63ee20aacec1673a35e202ffdeb05e731d60c69c135fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "
        ";
        
        $__internal_123fa602aacecb990c63ee20aacec1673a35e202ffdeb05e731d60c69c135fe5->leave($__internal_123fa602aacecb990c63ee20aacec1673a35e202ffdeb05e731d60c69c135fe5_prof);

        
        $__internal_82ca8c3b351ed46b10df3a74dfe54df1ece3ea04fdcc581069c9e8fe7bda7ec0->leave($__internal_82ca8c3b351ed46b10df3a74dfe54df1ece3ea04fdcc581069c9e8fe7bda7ec0_prof);

    }

    // line 151
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ed750f0b50b96e476ea411a0591aa2c6d477ef3a53d79d6e2a979ad7b3a71f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed750f0b50b96e476ea411a0591aa2c6d477ef3a53d79d6e2a979ad7b3a71f3d->enter($__internal_ed750f0b50b96e476ea411a0591aa2c6d477ef3a53d79d6e2a979ad7b3a71f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_ed84b509989af299a1c761a7f0672a04a0462a9faa1c07b891e303f13cea626f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed84b509989af299a1c761a7f0672a04a0462a9faa1c07b891e303f13cea626f->enter($__internal_ed84b509989af299a1c761a7f0672a04a0462a9faa1c07b891e303f13cea626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_ed84b509989af299a1c761a7f0672a04a0462a9faa1c07b891e303f13cea626f->leave($__internal_ed84b509989af299a1c761a7f0672a04a0462a9faa1c07b891e303f13cea626f_prof);

        
        $__internal_ed750f0b50b96e476ea411a0591aa2c6d477ef3a53d79d6e2a979ad7b3a71f3d->leave($__internal_ed750f0b50b96e476ea411a0591aa2c6d477ef3a53d79d6e2a979ad7b3a71f3d_prof);

    }

    // line 169
    public function block_angular($context, array $blocks = array())
    {
        $__internal_bbfea3fae0bd749185e0bf2b6b1a46aedb72bddd08fad1fa72ee5633fe24b30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfea3fae0bd749185e0bf2b6b1a46aedb72bddd08fad1fa72ee5633fe24b30e->enter($__internal_bbfea3fae0bd749185e0bf2b6b1a46aedb72bddd08fad1fa72ee5633fe24b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        $__internal_5bb00bf0751a92c0c7a60dd72937219ba45502713bf27ddfc9ad038d7b6fb585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb00bf0751a92c0c7a60dd72937219ba45502713bf27ddfc9ad038d7b6fb585->enter($__internal_5bb00bf0751a92c0c7a60dd72937219ba45502713bf27ddfc9ad038d7b6fb585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        // line 170
        echo "


";
        
        $__internal_5bb00bf0751a92c0c7a60dd72937219ba45502713bf27ddfc9ad038d7b6fb585->leave($__internal_5bb00bf0751a92c0c7a60dd72937219ba45502713bf27ddfc9ad038d7b6fb585_prof);

        
        $__internal_bbfea3fae0bd749185e0bf2b6b1a46aedb72bddd08fad1fa72ee5633fe24b30e->leave($__internal_bbfea3fae0bd749185e0bf2b6b1a46aedb72bddd08fad1fa72ee5633fe24b30e_prof);

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
        return array (  388 => 170,  379 => 169,  362 => 151,  351 => 120,  342 => 119,  325 => 116,  308 => 35,  291 => 10,  276 => 174,  274 => 169,  255 => 152,  253 => 151,  246 => 147,  242 => 146,  238 => 145,  232 => 142,  228 => 141,  224 => 140,  220 => 139,  201 => 122,  199 => 119,  195 => 117,  193 => 116,  180 => 106,  147 => 76,  143 => 75,  133 => 68,  121 => 59,  111 => 52,  105 => 49,  90 => 36,  88 => 35,  74 => 24,  67 => 20,  61 => 17,  57 => 16,  52 => 14,  48 => 13,  44 => 11,  42 => 10,  31 => 1,);
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
<html ng-app=\"appAdmin\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>
    {% block title %}{% endblock %}
    </title>

    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">


    <link href=\"{{ asset('css/plugins/toastr/toastr.min.css') }}\" rel=\"stylesheet\">



    <script src=\"{{ asset('angular/angular.min.js') }}\"></script>


    <style>
        .clearP{
            padding: 20px;
        }


    </style>

    {% block style %}{% endblock %}


</head>

<body class=\"\">

<div id=\"wrapper\">

    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav metismenu\" id=\"side-menu\">
                <li class=\"nav-header\">
                    <div class=\"dropdown profile-element\"> <span>
                            <img alt=\"image\" class=\"img-circle\" src=\"{{ asset('img/profile_small.jpg') }}\" />
                             </span>
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">{{ app.user }}</strong>
                             </span> <span class=\"text-muted text-xs block\">Art Director <b class=\"caret\"></b></span> </span> </a>
                        <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                            <li><a href=\"profile.html\">Profile</a></li>
                            <li><a href=\"contacts.html\">Contacts</a></li>
                            <li><a href=\"mailbox.html\">Mailbox</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
                        </ul>
                    </div>
                    <div class=\"logo-element\">
                        IN+
                    </div>
                </li>

                <li>
                    <a href=\"{{ path('admin_homepage') }}\"><i class=\"fa fa-diamond\"></i> <span class=\"nav-label\">Dashboard</span></a>
                </li>


                  <li>
                    <a href=\"#\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Categories</span> <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level collapse\">
                        <li><a href=\"{{ path('admin_gestionCategoriePage') }}\">Gestion catégories</a></li>
                        <li><a href=\"{{ path('admin_ajoutCategoriePage') }}\">Ajout catégories</a></li>

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
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            <i class=\"fa fa-sign-out\"></i> Déconnexion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        {% block bread %}{% endblock %}


        {% block body %}

        {% endblock %}




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
<script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}\"></script>
<script src=\"{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}\"></script>

<!-- Custom and plugin javascript -->
<script src=\"{{ asset('js/inspinia.js') }}\"></script>
<script src=\"{{ asset('js/plugins/pace/pace.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins/toastr/toastr.min.js') }}\"></script>



{% block scripts %}{% endblock %}


<script>

    var appAdmin = angular.module(\"appAdmin\" , [])


    .config(function(\$interpolateProvider) {
        \$interpolateProvider.startSymbol('%%');
        \$interpolateProvider.endSymbol('%%');
    });



</script>


{% block angular %}



{% endblock %}


</body>

</html>
", "layout/layoutAdmin.html.twig", "/var/www/html/formation/app/Resources/views/layout/layoutAdmin.html.twig");
    }
}
