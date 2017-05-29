<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1b6b4779f80e8f4017c487b4c27fce8d54d1d908d994f66d7caeba8e0e96479d extends Twig_Template
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
        $__internal_4d21f763e7c7f8c5074b25c794191074a3efe0eddcd9b5a179eb54cec77a8a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d21f763e7c7f8c5074b25c794191074a3efe0eddcd9b5a179eb54cec77a8a0e->enter($__internal_4d21f763e7c7f8c5074b25c794191074a3efe0eddcd9b5a179eb54cec77a8a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21c5dc3acee79c0795b07e500c709acbf6ce9366c35cdaf2c006807c13881a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c5dc3acee79c0795b07e500c709acbf6ce9366c35cdaf2c006807c13881a52->enter($__internal_21c5dc3acee79c0795b07e500c709acbf6ce9366c35cdaf2c006807c13881a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d21f763e7c7f8c5074b25c794191074a3efe0eddcd9b5a179eb54cec77a8a0e->leave($__internal_4d21f763e7c7f8c5074b25c794191074a3efe0eddcd9b5a179eb54cec77a8a0e_prof);

        
        $__internal_21c5dc3acee79c0795b07e500c709acbf6ce9366c35cdaf2c006807c13881a52->leave($__internal_21c5dc3acee79c0795b07e500c709acbf6ce9366c35cdaf2c006807c13881a52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb92da293232f1a9679577a94f026c671ef2cb7c038a9fe57399c46fa82a951d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb92da293232f1a9679577a94f026c671ef2cb7c038a9fe57399c46fa82a951d->enter($__internal_eb92da293232f1a9679577a94f026c671ef2cb7c038a9fe57399c46fa82a951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf4f1873d5f3ace262394040018fa3e31ee620927fa445fbaf51e4bc2d8bb5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4f1873d5f3ace262394040018fa3e31ee620927fa445fbaf51e4bc2d8bb5df->enter($__internal_bf4f1873d5f3ace262394040018fa3e31ee620927fa445fbaf51e4bc2d8bb5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bf4f1873d5f3ace262394040018fa3e31ee620927fa445fbaf51e4bc2d8bb5df->leave($__internal_bf4f1873d5f3ace262394040018fa3e31ee620927fa445fbaf51e4bc2d8bb5df_prof);

        
        $__internal_eb92da293232f1a9679577a94f026c671ef2cb7c038a9fe57399c46fa82a951d->leave($__internal_eb92da293232f1a9679577a94f026c671ef2cb7c038a9fe57399c46fa82a951d_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
