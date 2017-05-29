<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_395b1ce59036f2f07933fb345c24f32cf12192374b59a62d378102d0bd0bb38c extends Twig_Template
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
        $__internal_c19285feb17cd0f2c1e9532a1c2e39bed13e94e361332c48e4680d2b538f8561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19285feb17cd0f2c1e9532a1c2e39bed13e94e361332c48e4680d2b538f8561->enter($__internal_c19285feb17cd0f2c1e9532a1c2e39bed13e94e361332c48e4680d2b538f8561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b8f1f8df87a23e323f456d817a34e1460611fe14a6779ce272e4f3c567ccc19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f1f8df87a23e323f456d817a34e1460611fe14a6779ce272e4f3c567ccc19b->enter($__internal_b8f1f8df87a23e323f456d817a34e1460611fe14a6779ce272e4f3c567ccc19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c19285feb17cd0f2c1e9532a1c2e39bed13e94e361332c48e4680d2b538f8561->leave($__internal_c19285feb17cd0f2c1e9532a1c2e39bed13e94e361332c48e4680d2b538f8561_prof);

        
        $__internal_b8f1f8df87a23e323f456d817a34e1460611fe14a6779ce272e4f3c567ccc19b->leave($__internal_b8f1f8df87a23e323f456d817a34e1460611fe14a6779ce272e4f3c567ccc19b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
