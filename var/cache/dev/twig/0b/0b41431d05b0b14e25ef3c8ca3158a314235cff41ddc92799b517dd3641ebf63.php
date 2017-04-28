<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33d244f06e3597a4611798c3ebdde8e315ef10d0cb27077d0c8e708c948f75a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b45ff777f8f4c48322fb1d9b81ee4a47327d9b8a25d92938500b26a175df7d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45ff777f8f4c48322fb1d9b81ee4a47327d9b8a25d92938500b26a175df7d07->enter($__internal_b45ff777f8f4c48322fb1d9b81ee4a47327d9b8a25d92938500b26a175df7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6a77f9cd83fe460e2d5bdff9310296053919f5756e7c28aa3f86e60b91892b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a77f9cd83fe460e2d5bdff9310296053919f5756e7c28aa3f86e60b91892b7f->enter($__internal_6a77f9cd83fe460e2d5bdff9310296053919f5756e7c28aa3f86e60b91892b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45ff777f8f4c48322fb1d9b81ee4a47327d9b8a25d92938500b26a175df7d07->leave($__internal_b45ff777f8f4c48322fb1d9b81ee4a47327d9b8a25d92938500b26a175df7d07_prof);

        
        $__internal_6a77f9cd83fe460e2d5bdff9310296053919f5756e7c28aa3f86e60b91892b7f->leave($__internal_6a77f9cd83fe460e2d5bdff9310296053919f5756e7c28aa3f86e60b91892b7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e6de80aed35dd183049b1a0348f7d9db8f48809df0ce0571a4f0c3a8e2b1d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6de80aed35dd183049b1a0348f7d9db8f48809df0ce0571a4f0c3a8e2b1d1a->enter($__internal_2e6de80aed35dd183049b1a0348f7d9db8f48809df0ce0571a4f0c3a8e2b1d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9996cbc2eaff659afda7067f4a0955f4104935d55743c26ff3d3c692ac22aaa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9996cbc2eaff659afda7067f4a0955f4104935d55743c26ff3d3c692ac22aaa1->enter($__internal_9996cbc2eaff659afda7067f4a0955f4104935d55743c26ff3d3c692ac22aaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9996cbc2eaff659afda7067f4a0955f4104935d55743c26ff3d3c692ac22aaa1->leave($__internal_9996cbc2eaff659afda7067f4a0955f4104935d55743c26ff3d3c692ac22aaa1_prof);

        
        $__internal_2e6de80aed35dd183049b1a0348f7d9db8f48809df0ce0571a4f0c3a8e2b1d1a->leave($__internal_2e6de80aed35dd183049b1a0348f7d9db8f48809df0ce0571a4f0c3a8e2b1d1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/formation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
