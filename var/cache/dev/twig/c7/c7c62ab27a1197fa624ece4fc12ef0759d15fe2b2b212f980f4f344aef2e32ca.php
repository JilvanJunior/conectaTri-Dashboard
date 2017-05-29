<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_007ddbb7d0eba1c1746c036d4424e8bf49612a9d4c91bfa659b14afcb64fe551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_38da070bfec9395ffc5393b3db556bb873ecf1a778bfbf7e97b1d160300c1d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38da070bfec9395ffc5393b3db556bb873ecf1a778bfbf7e97b1d160300c1d96->enter($__internal_38da070bfec9395ffc5393b3db556bb873ecf1a778bfbf7e97b1d160300c1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56d562b87d453bc132d44d75d17bc9946785fe47b186c9c166f97d9729b81da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d562b87d453bc132d44d75d17bc9946785fe47b186c9c166f97d9729b81da9->enter($__internal_56d562b87d453bc132d44d75d17bc9946785fe47b186c9c166f97d9729b81da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38da070bfec9395ffc5393b3db556bb873ecf1a778bfbf7e97b1d160300c1d96->leave($__internal_38da070bfec9395ffc5393b3db556bb873ecf1a778bfbf7e97b1d160300c1d96_prof);

        
        $__internal_56d562b87d453bc132d44d75d17bc9946785fe47b186c9c166f97d9729b81da9->leave($__internal_56d562b87d453bc132d44d75d17bc9946785fe47b186c9c166f97d9729b81da9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7dd609bcc393b69f37e8b22b9f0153359f365bc4e2c26b3d065d239ac701b803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd609bcc393b69f37e8b22b9f0153359f365bc4e2c26b3d065d239ac701b803->enter($__internal_7dd609bcc393b69f37e8b22b9f0153359f365bc4e2c26b3d065d239ac701b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28c0e8d72eafbe2f52551380acbaf3aafebc18b2548aeb96eb135d4621f19ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c0e8d72eafbe2f52551380acbaf3aafebc18b2548aeb96eb135d4621f19ccb->enter($__internal_28c0e8d72eafbe2f52551380acbaf3aafebc18b2548aeb96eb135d4621f19ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_28c0e8d72eafbe2f52551380acbaf3aafebc18b2548aeb96eb135d4621f19ccb->leave($__internal_28c0e8d72eafbe2f52551380acbaf3aafebc18b2548aeb96eb135d4621f19ccb_prof);

        
        $__internal_7dd609bcc393b69f37e8b22b9f0153359f365bc4e2c26b3d065d239ac701b803->leave($__internal_7dd609bcc393b69f37e8b22b9f0153359f365bc4e2c26b3d065d239ac701b803_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4b7ab8e05e7583f825553a49ed3b5530ede3c741be1a3ee4609d5a24841e8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b7ab8e05e7583f825553a49ed3b5530ede3c741be1a3ee4609d5a24841e8b6->enter($__internal_c4b7ab8e05e7583f825553a49ed3b5530ede3c741be1a3ee4609d5a24841e8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_841d5eff9ef4f2802171461bd3978978281a166415cd4918768d45bcd070e4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841d5eff9ef4f2802171461bd3978978281a166415cd4918768d45bcd070e4c5->enter($__internal_841d5eff9ef4f2802171461bd3978978281a166415cd4918768d45bcd070e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_841d5eff9ef4f2802171461bd3978978281a166415cd4918768d45bcd070e4c5->leave($__internal_841d5eff9ef4f2802171461bd3978978281a166415cd4918768d45bcd070e4c5_prof);

        
        $__internal_c4b7ab8e05e7583f825553a49ed3b5530ede3c741be1a3ee4609d5a24841e8b6->leave($__internal_c4b7ab8e05e7583f825553a49ed3b5530ede3c741be1a3ee4609d5a24841e8b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15eb2bee48b50c2eedb7207605f2c71335b168c0e128b69e9ec082b47ef0cc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15eb2bee48b50c2eedb7207605f2c71335b168c0e128b69e9ec082b47ef0cc90->enter($__internal_15eb2bee48b50c2eedb7207605f2c71335b168c0e128b69e9ec082b47ef0cc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_966517478b7718ffe0abea0a93cf7940aba6dc7398710ad13fe8220db417c366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966517478b7718ffe0abea0a93cf7940aba6dc7398710ad13fe8220db417c366->enter($__internal_966517478b7718ffe0abea0a93cf7940aba6dc7398710ad13fe8220db417c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_966517478b7718ffe0abea0a93cf7940aba6dc7398710ad13fe8220db417c366->leave($__internal_966517478b7718ffe0abea0a93cf7940aba6dc7398710ad13fe8220db417c366_prof);

        
        $__internal_15eb2bee48b50c2eedb7207605f2c71335b168c0e128b69e9ec082b47ef0cc90->leave($__internal_15eb2bee48b50c2eedb7207605f2c71335b168c0e128b69e9ec082b47ef0cc90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
