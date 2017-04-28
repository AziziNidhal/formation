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
        $__internal_967e1715c8b31d26f8d54342ce365f974d6898af13d39976c05d3da89d07f25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967e1715c8b31d26f8d54342ce365f974d6898af13d39976c05d3da89d07f25c->enter($__internal_967e1715c8b31d26f8d54342ce365f974d6898af13d39976c05d3da89d07f25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

        $__internal_0cbd7082b516abbcfd33e2ba769e63e5db6193fb884fc37722e25539b414a901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbd7082b516abbcfd33e2ba769e63e5db6193fb884fc37722e25539b414a901->enter($__internal_0cbd7082b516abbcfd33e2ba769e63e5db6193fb884fc37722e25539b414a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

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


    ";
        // line 20
        $this->displayBlock('style', $context, $blocks);
        // line 21
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
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/profile_small.jpg"), "html", null, true);
        echo "\" />
                             </span>
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">David Williams</strong>
                             </span> <span class=\"text-muted text-xs block\">Art Director <b class=\"caret\"></b></span> </span> </a>
                        <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                            <li><a href=\"profile.html\">Profile</a></li>
                            <li><a href=\"contacts.html\">Contacts</a></li>
                            <li><a href=\"mailbox.html\">Mailbox</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\">Logout</a></li>
                        </ul>
                    </div>
                    <div class=\"logo-element\">
                        IN+
                    </div>
                </li>

                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\"><i class=\"fa fa-diamond\"></i> <span class=\"nav-label\">Dashboard</span></a>
                </li>


                  <li>
                    <a href=\"#\"><i class=\"fa fa-th-large\"></i> <span class=\"nav-label\">Categories</span> <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level collapse\">
                        <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_gestionCategoriePage");
        echo "\">Gestion catégories</a></li>
                        <li><a href=\"";
        // line 61
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
                    <form role=\"search\" class=\"navbar-form-custom\" action=\"search_results.html\">
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Search for something...\" class=\"form-control\" name=\"top-search\" id=\"top-search\">
                        </div>
                    </form>
                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">Welcome .</span>
                    </li>



                    <li>
                        <a href=\"login.html\">
                            <i class=\"fa fa-sign-out\"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        ";
        // line 106
        $this->displayBlock('bread', $context, $blocks);
        // line 107
        echo "

        ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "



        <div class=\"footer\">
            <div class=\"pull-right\">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom and plugin javascript -->
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>



";
        // line 140
        $this->displayBlock('scripts', $context, $blocks);
        // line 141
        echo "

";
        // line 143
        $this->displayBlock('angular', $context, $blocks);
        // line 144
        echo "

</body>

</html>
";
        
        $__internal_967e1715c8b31d26f8d54342ce365f974d6898af13d39976c05d3da89d07f25c->leave($__internal_967e1715c8b31d26f8d54342ce365f974d6898af13d39976c05d3da89d07f25c_prof);

        
        $__internal_0cbd7082b516abbcfd33e2ba769e63e5db6193fb884fc37722e25539b414a901->leave($__internal_0cbd7082b516abbcfd33e2ba769e63e5db6193fb884fc37722e25539b414a901_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_66d5adefa103f3dce1f3321dc0ca14e95cfdbce1523379bff491a34ffe81b5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d5adefa103f3dce1f3321dc0ca14e95cfdbce1523379bff491a34ffe81b5e0->enter($__internal_66d5adefa103f3dce1f3321dc0ca14e95cfdbce1523379bff491a34ffe81b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a45987d7ae41cace3bc5438c2862d656189e924635227268077d54b65aa2edd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45987d7ae41cace3bc5438c2862d656189e924635227268077d54b65aa2edd3->enter($__internal_a45987d7ae41cace3bc5438c2862d656189e924635227268077d54b65aa2edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a45987d7ae41cace3bc5438c2862d656189e924635227268077d54b65aa2edd3->leave($__internal_a45987d7ae41cace3bc5438c2862d656189e924635227268077d54b65aa2edd3_prof);

        
        $__internal_66d5adefa103f3dce1f3321dc0ca14e95cfdbce1523379bff491a34ffe81b5e0->leave($__internal_66d5adefa103f3dce1f3321dc0ca14e95cfdbce1523379bff491a34ffe81b5e0_prof);

    }

    // line 20
    public function block_style($context, array $blocks = array())
    {
        $__internal_7d3d37231dab1818a91807d4fce83aebffa39f3c60b6aac6848b6f7815f9b3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3d37231dab1818a91807d4fce83aebffa39f3c60b6aac6848b6f7815f9b3e5->enter($__internal_7d3d37231dab1818a91807d4fce83aebffa39f3c60b6aac6848b6f7815f9b3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_6425d7bfd8398d380aabb931291ce98d473f8ad4c03726de34ded7d8d842b919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6425d7bfd8398d380aabb931291ce98d473f8ad4c03726de34ded7d8d842b919->enter($__internal_6425d7bfd8398d380aabb931291ce98d473f8ad4c03726de34ded7d8d842b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_6425d7bfd8398d380aabb931291ce98d473f8ad4c03726de34ded7d8d842b919->leave($__internal_6425d7bfd8398d380aabb931291ce98d473f8ad4c03726de34ded7d8d842b919_prof);

        
        $__internal_7d3d37231dab1818a91807d4fce83aebffa39f3c60b6aac6848b6f7815f9b3e5->leave($__internal_7d3d37231dab1818a91807d4fce83aebffa39f3c60b6aac6848b6f7815f9b3e5_prof);

    }

    // line 106
    public function block_bread($context, array $blocks = array())
    {
        $__internal_a92c241fea782ca1dd248db929ba9abcb4f139df054eeac342322acf7714eb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92c241fea782ca1dd248db929ba9abcb4f139df054eeac342322acf7714eb1e->enter($__internal_a92c241fea782ca1dd248db929ba9abcb4f139df054eeac342322acf7714eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_48533235fb41e3dd6bba4ae8313c600adc4b6a706bf2a802c41728885c768104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48533235fb41e3dd6bba4ae8313c600adc4b6a706bf2a802c41728885c768104->enter($__internal_48533235fb41e3dd6bba4ae8313c600adc4b6a706bf2a802c41728885c768104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        
        $__internal_48533235fb41e3dd6bba4ae8313c600adc4b6a706bf2a802c41728885c768104->leave($__internal_48533235fb41e3dd6bba4ae8313c600adc4b6a706bf2a802c41728885c768104_prof);

        
        $__internal_a92c241fea782ca1dd248db929ba9abcb4f139df054eeac342322acf7714eb1e->leave($__internal_a92c241fea782ca1dd248db929ba9abcb4f139df054eeac342322acf7714eb1e_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a973bf23c78d9302c6b03da88008174cddc548aee6115c22470d599be20c76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a973bf23c78d9302c6b03da88008174cddc548aee6115c22470d599be20c76e->enter($__internal_5a973bf23c78d9302c6b03da88008174cddc548aee6115c22470d599be20c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d00e42bfcd132d14ade02df7120dc71db4d97fb88b1655686efb01e1a6f5f17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00e42bfcd132d14ade02df7120dc71db4d97fb88b1655686efb01e1a6f5f17a->enter($__internal_d00e42bfcd132d14ade02df7120dc71db4d97fb88b1655686efb01e1a6f5f17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "
        ";
        
        $__internal_d00e42bfcd132d14ade02df7120dc71db4d97fb88b1655686efb01e1a6f5f17a->leave($__internal_d00e42bfcd132d14ade02df7120dc71db4d97fb88b1655686efb01e1a6f5f17a_prof);

        
        $__internal_5a973bf23c78d9302c6b03da88008174cddc548aee6115c22470d599be20c76e->leave($__internal_5a973bf23c78d9302c6b03da88008174cddc548aee6115c22470d599be20c76e_prof);

    }

    // line 140
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3589597cd6c6abbd55a54fb51336e5974d2b3b5383517f012f3c220d3de2fb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3589597cd6c6abbd55a54fb51336e5974d2b3b5383517f012f3c220d3de2fb59->enter($__internal_3589597cd6c6abbd55a54fb51336e5974d2b3b5383517f012f3c220d3de2fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_37cd5f2dd2cd45bf67759039702a3a27c040cc3bd0dc946eb011e705fb640fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cd5f2dd2cd45bf67759039702a3a27c040cc3bd0dc946eb011e705fb640fcd->enter($__internal_37cd5f2dd2cd45bf67759039702a3a27c040cc3bd0dc946eb011e705fb640fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_37cd5f2dd2cd45bf67759039702a3a27c040cc3bd0dc946eb011e705fb640fcd->leave($__internal_37cd5f2dd2cd45bf67759039702a3a27c040cc3bd0dc946eb011e705fb640fcd_prof);

        
        $__internal_3589597cd6c6abbd55a54fb51336e5974d2b3b5383517f012f3c220d3de2fb59->leave($__internal_3589597cd6c6abbd55a54fb51336e5974d2b3b5383517f012f3c220d3de2fb59_prof);

    }

    // line 143
    public function block_angular($context, array $blocks = array())
    {
        $__internal_95fe0a15db5cc177b8c6afd9f226546ceef6a1bfa37875b3b341d2d9ee7f3c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fe0a15db5cc177b8c6afd9f226546ceef6a1bfa37875b3b341d2d9ee7f3c96->enter($__internal_95fe0a15db5cc177b8c6afd9f226546ceef6a1bfa37875b3b341d2d9ee7f3c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        $__internal_419160f54ac3f44d8189bc26e65337fa885963112ca35e7bafd9c53f3d970a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419160f54ac3f44d8189bc26e65337fa885963112ca35e7bafd9c53f3d970a38->enter($__internal_419160f54ac3f44d8189bc26e65337fa885963112ca35e7bafd9c53f3d970a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        
        $__internal_419160f54ac3f44d8189bc26e65337fa885963112ca35e7bafd9c53f3d970a38->leave($__internal_419160f54ac3f44d8189bc26e65337fa885963112ca35e7bafd9c53f3d970a38_prof);

        
        $__internal_95fe0a15db5cc177b8c6afd9f226546ceef6a1bfa37875b3b341d2d9ee7f3c96->leave($__internal_95fe0a15db5cc177b8c6afd9f226546ceef6a1bfa37875b3b341d2d9ee7f3c96_prof);

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
        return array (  335 => 143,  318 => 140,  307 => 110,  298 => 109,  281 => 106,  264 => 20,  247 => 10,  232 => 144,  230 => 143,  226 => 141,  224 => 140,  217 => 136,  213 => 135,  207 => 132,  203 => 131,  199 => 130,  195 => 129,  176 => 112,  174 => 109,  170 => 107,  168 => 106,  120 => 61,  116 => 60,  106 => 53,  84 => 34,  69 => 21,  67 => 20,  61 => 17,  57 => 16,  52 => 14,  48 => 13,  44 => 11,  42 => 10,  31 => 1,);
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

    <title>
    {% block title %}{% endblock %}
    </title>

    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">


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
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">David Williams</strong>
                             </span> <span class=\"text-muted text-xs block\">Art Director <b class=\"caret\"></b></span> </span> </a>
                        <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                            <li><a href=\"profile.html\">Profile</a></li>
                            <li><a href=\"contacts.html\">Contacts</a></li>
                            <li><a href=\"mailbox.html\">Mailbox</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\">Logout</a></li>
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
                    <form role=\"search\" class=\"navbar-form-custom\" action=\"search_results.html\">
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Search for something...\" class=\"form-control\" name=\"top-search\" id=\"top-search\">
                        </div>
                    </form>
                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">Welcome .</span>
                    </li>



                    <li>
                        <a href=\"login.html\">
                            <i class=\"fa fa-sign-out\"></i> Log out
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
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
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



{% block scripts %}{% endblock %}


{% block angular %}{% endblock %}


</body>

</html>
", "layout/layoutAdmin.html.twig", "/var/www/html/formation/app/Resources/views/layout/layoutAdmin.html.twig");
    }
}
