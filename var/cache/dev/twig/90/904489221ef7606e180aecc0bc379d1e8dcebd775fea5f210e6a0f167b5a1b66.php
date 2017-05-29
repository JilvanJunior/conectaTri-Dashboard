<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3acac5513e4f808676fa14ae85cf19cecb8887283daf40c7a75bf9e29bc0c78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b2a596436ef2b66c5dcc97205aff9237c46ec293b046f2238e37468e597f0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2a596436ef2b66c5dcc97205aff9237c46ec293b046f2238e37468e597f0ce->enter($__internal_3b2a596436ef2b66c5dcc97205aff9237c46ec293b046f2238e37468e597f0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab3a1e1e702e1b09ee163a6138b23dee568b51175431d29a7de1434d448f4bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3a1e1e702e1b09ee163a6138b23dee568b51175431d29a7de1434d448f4bb5->enter($__internal_ab3a1e1e702e1b09ee163a6138b23dee568b51175431d29a7de1434d448f4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2a596436ef2b66c5dcc97205aff9237c46ec293b046f2238e37468e597f0ce->leave($__internal_3b2a596436ef2b66c5dcc97205aff9237c46ec293b046f2238e37468e597f0ce_prof);

        
        $__internal_ab3a1e1e702e1b09ee163a6138b23dee568b51175431d29a7de1434d448f4bb5->leave($__internal_ab3a1e1e702e1b09ee163a6138b23dee568b51175431d29a7de1434d448f4bb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b6492ba703a4dfe526e5e07893b1876b2256e3ebd69aa0942d0cc9840187a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6492ba703a4dfe526e5e07893b1876b2256e3ebd69aa0942d0cc9840187a9c->enter($__internal_0b6492ba703a4dfe526e5e07893b1876b2256e3ebd69aa0942d0cc9840187a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc6eeed1cc94da49bece459ba4ced3ace179c40c400d19303a30e821dc6ffeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6eeed1cc94da49bece459ba4ced3ace179c40c400d19303a30e821dc6ffeec->enter($__internal_dc6eeed1cc94da49bece459ba4ced3ace179c40c400d19303a30e821dc6ffeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc6eeed1cc94da49bece459ba4ced3ace179c40c400d19303a30e821dc6ffeec->leave($__internal_dc6eeed1cc94da49bece459ba4ced3ace179c40c400d19303a30e821dc6ffeec_prof);

        
        $__internal_0b6492ba703a4dfe526e5e07893b1876b2256e3ebd69aa0942d0cc9840187a9c->leave($__internal_0b6492ba703a4dfe526e5e07893b1876b2256e3ebd69aa0942d0cc9840187a9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cedbd41f005a174f1245f060684b3efb9f41d2569d3af6ed01d776de3a8e5d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedbd41f005a174f1245f060684b3efb9f41d2569d3af6ed01d776de3a8e5d34->enter($__internal_cedbd41f005a174f1245f060684b3efb9f41d2569d3af6ed01d776de3a8e5d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bef61c5cfcd7cd4f12d4fada3ac49a75ed4c61d6aef56276d78f3cbc2da3e524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef61c5cfcd7cd4f12d4fada3ac49a75ed4c61d6aef56276d78f3cbc2da3e524->enter($__internal_bef61c5cfcd7cd4f12d4fada3ac49a75ed4c61d6aef56276d78f3cbc2da3e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bef61c5cfcd7cd4f12d4fada3ac49a75ed4c61d6aef56276d78f3cbc2da3e524->leave($__internal_bef61c5cfcd7cd4f12d4fada3ac49a75ed4c61d6aef56276d78f3cbc2da3e524_prof);

        
        $__internal_cedbd41f005a174f1245f060684b3efb9f41d2569d3af6ed01d776de3a8e5d34->leave($__internal_cedbd41f005a174f1245f060684b3efb9f41d2569d3af6ed01d776de3a8e5d34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fb2d877da1d37ce15b39c41dbb07fda6b9c1fbeb2bb2671a942d8bb62ebb719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb2d877da1d37ce15b39c41dbb07fda6b9c1fbeb2bb2671a942d8bb62ebb719->enter($__internal_0fb2d877da1d37ce15b39c41dbb07fda6b9c1fbeb2bb2671a942d8bb62ebb719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3702e2543c749b2692a00453b4789fcd418c4c946215917c8e0fa1783da41c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3702e2543c749b2692a00453b4789fcd418c4c946215917c8e0fa1783da41c0c->enter($__internal_3702e2543c749b2692a00453b4789fcd418c4c946215917c8e0fa1783da41c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3702e2543c749b2692a00453b4789fcd418c4c946215917c8e0fa1783da41c0c->leave($__internal_3702e2543c749b2692a00453b4789fcd418c4c946215917c8e0fa1783da41c0c_prof);

        
        $__internal_0fb2d877da1d37ce15b39c41dbb07fda6b9c1fbeb2bb2671a942d8bb62ebb719->leave($__internal_0fb2d877da1d37ce15b39c41dbb07fda6b9c1fbeb2bb2671a942d8bb62ebb719_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
