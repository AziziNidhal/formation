<?php

/* layout/layoutAdmin.html.twig */
class __TwigTemplate_0c83922aa4d8f6339ef09a000938fcb305fb978a1b4bed75e0b8e9bd03ea1c4e extends Twig_Template
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
        $__internal_bcbd5b61b68ab17e54898672ece7e7a3d3d1ae1e1738873193857ea6112074a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbd5b61b68ab17e54898672ece7e7a3d3d1ae1e1738873193857ea6112074a7->enter($__internal_bcbd5b61b68ab17e54898672ece7e7a3d3d1ae1e1738873193857ea6112074a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

        $__internal_4f54e6290e4acdb61972240d1d69dc93a92998615a1c2e4ff9cbe0ea45c02ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54e6290e4acdb61972240d1d69dc93a92998615a1c2e4ff9cbe0ea45c02ace->enter($__internal_4f54e6290e4acdb61972240d1d69dc93a92998615a1c2e4ff9cbe0ea45c02ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layoutAdmin.html.twig"));

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
        
        $__internal_bcbd5b61b68ab17e54898672ece7e7a3d3d1ae1e1738873193857ea6112074a7->leave($__internal_bcbd5b61b68ab17e54898672ece7e7a3d3d1ae1e1738873193857ea6112074a7_prof);

        
        $__internal_4f54e6290e4acdb61972240d1d69dc93a92998615a1c2e4ff9cbe0ea45c02ace->leave($__internal_4f54e6290e4acdb61972240d1d69dc93a92998615a1c2e4ff9cbe0ea45c02ace_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b80528c201b13c65fcbf9ab548ab887c98f4c217c5c52463139d71e5fce3e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b80528c201b13c65fcbf9ab548ab887c98f4c217c5c52463139d71e5fce3e5d->enter($__internal_0b80528c201b13c65fcbf9ab548ab887c98f4c217c5c52463139d71e5fce3e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82176fa959b3267c4fbc014260d00077dc4169bf0f5041dbafe85222881f2254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82176fa959b3267c4fbc014260d00077dc4169bf0f5041dbafe85222881f2254->enter($__internal_82176fa959b3267c4fbc014260d00077dc4169bf0f5041dbafe85222881f2254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82176fa959b3267c4fbc014260d00077dc4169bf0f5041dbafe85222881f2254->leave($__internal_82176fa959b3267c4fbc014260d00077dc4169bf0f5041dbafe85222881f2254_prof);

        
        $__internal_0b80528c201b13c65fcbf9ab548ab887c98f4c217c5c52463139d71e5fce3e5d->leave($__internal_0b80528c201b13c65fcbf9ab548ab887c98f4c217c5c52463139d71e5fce3e5d_prof);

    }

    // line 20
    public function block_style($context, array $blocks = array())
    {
        $__internal_274cced451fa5d0d7142573f59111ee43eaadcd81cc772d8e963c4d21e0e90a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274cced451fa5d0d7142573f59111ee43eaadcd81cc772d8e963c4d21e0e90a0->enter($__internal_274cced451fa5d0d7142573f59111ee43eaadcd81cc772d8e963c4d21e0e90a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ef138f930095f79df2a0430dfc4569f258498ae4e28ca664bae8f45353003a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef138f930095f79df2a0430dfc4569f258498ae4e28ca664bae8f45353003a2c->enter($__internal_ef138f930095f79df2a0430dfc4569f258498ae4e28ca664bae8f45353003a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_ef138f930095f79df2a0430dfc4569f258498ae4e28ca664bae8f45353003a2c->leave($__internal_ef138f930095f79df2a0430dfc4569f258498ae4e28ca664bae8f45353003a2c_prof);

        
        $__internal_274cced451fa5d0d7142573f59111ee43eaadcd81cc772d8e963c4d21e0e90a0->leave($__internal_274cced451fa5d0d7142573f59111ee43eaadcd81cc772d8e963c4d21e0e90a0_prof);

    }

    // line 106
    public function block_bread($context, array $blocks = array())
    {
        $__internal_79f52362c74f9d4419c9a1b7807c4851d26535a1ff0b567b781e5b1da672b7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f52362c74f9d4419c9a1b7807c4851d26535a1ff0b567b781e5b1da672b7c6->enter($__internal_79f52362c74f9d4419c9a1b7807c4851d26535a1ff0b567b781e5b1da672b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        $__internal_1b75985c345136ce3e31ac21af76430209394133b47e9104629cdb27a406b796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b75985c345136ce3e31ac21af76430209394133b47e9104629cdb27a406b796->enter($__internal_1b75985c345136ce3e31ac21af76430209394133b47e9104629cdb27a406b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bread"));

        
        $__internal_1b75985c345136ce3e31ac21af76430209394133b47e9104629cdb27a406b796->leave($__internal_1b75985c345136ce3e31ac21af76430209394133b47e9104629cdb27a406b796_prof);

        
        $__internal_79f52362c74f9d4419c9a1b7807c4851d26535a1ff0b567b781e5b1da672b7c6->leave($__internal_79f52362c74f9d4419c9a1b7807c4851d26535a1ff0b567b781e5b1da672b7c6_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_93828f1ad9dda2ce3671d974e2233ff7639aba5dddad4e81a71e13df9895e50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93828f1ad9dda2ce3671d974e2233ff7639aba5dddad4e81a71e13df9895e50d->enter($__internal_93828f1ad9dda2ce3671d974e2233ff7639aba5dddad4e81a71e13df9895e50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46fad5799f06f374483864407354263013f2cf4f6bc4018caabe184f2cbf41d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fad5799f06f374483864407354263013f2cf4f6bc4018caabe184f2cbf41d1->enter($__internal_46fad5799f06f374483864407354263013f2cf4f6bc4018caabe184f2cbf41d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "
        ";
        
        $__internal_46fad5799f06f374483864407354263013f2cf4f6bc4018caabe184f2cbf41d1->leave($__internal_46fad5799f06f374483864407354263013f2cf4f6bc4018caabe184f2cbf41d1_prof);

        
        $__internal_93828f1ad9dda2ce3671d974e2233ff7639aba5dddad4e81a71e13df9895e50d->leave($__internal_93828f1ad9dda2ce3671d974e2233ff7639aba5dddad4e81a71e13df9895e50d_prof);

    }

    // line 140
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c71e7ae30ca28b3a5e27dbaa991c408e7dfc6965e1593252ce4ae73d9c699344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71e7ae30ca28b3a5e27dbaa991c408e7dfc6965e1593252ce4ae73d9c699344->enter($__internal_c71e7ae30ca28b3a5e27dbaa991c408e7dfc6965e1593252ce4ae73d9c699344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_4a861aa1f87aa07f035d39ff76363f55eadc965d5aa27f5562b94bdd1819ee6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a861aa1f87aa07f035d39ff76363f55eadc965d5aa27f5562b94bdd1819ee6c->enter($__internal_4a861aa1f87aa07f035d39ff76363f55eadc965d5aa27f5562b94bdd1819ee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_4a861aa1f87aa07f035d39ff76363f55eadc965d5aa27f5562b94bdd1819ee6c->leave($__internal_4a861aa1f87aa07f035d39ff76363f55eadc965d5aa27f5562b94bdd1819ee6c_prof);

        
        $__internal_c71e7ae30ca28b3a5e27dbaa991c408e7dfc6965e1593252ce4ae73d9c699344->leave($__internal_c71e7ae30ca28b3a5e27dbaa991c408e7dfc6965e1593252ce4ae73d9c699344_prof);

    }

    // line 143
    public function block_angular($context, array $blocks = array())
    {
        $__internal_92c9f306635776e61427e3e9f2dd8ee06afbf990eb998e011c01e2dcf6dddf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c9f306635776e61427e3e9f2dd8ee06afbf990eb998e011c01e2dcf6dddf66->enter($__internal_92c9f306635776e61427e3e9f2dd8ee06afbf990eb998e011c01e2dcf6dddf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        $__internal_766279778c7e1ddc97ef6a45d9346ff609563c75dc8802c9f2b3b6f001f53838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766279778c7e1ddc97ef6a45d9346ff609563c75dc8802c9f2b3b6f001f53838->enter($__internal_766279778c7e1ddc97ef6a45d9346ff609563c75dc8802c9f2b3b6f001f53838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        
        $__internal_766279778c7e1ddc97ef6a45d9346ff609563c75dc8802c9f2b3b6f001f53838->leave($__internal_766279778c7e1ddc97ef6a45d9346ff609563c75dc8802c9f2b3b6f001f53838_prof);

        
        $__internal_92c9f306635776e61427e3e9f2dd8ee06afbf990eb998e011c01e2dcf6dddf66->leave($__internal_92c9f306635776e61427e3e9f2dd8ee06afbf990eb998e011c01e2dcf6dddf66_prof);

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
