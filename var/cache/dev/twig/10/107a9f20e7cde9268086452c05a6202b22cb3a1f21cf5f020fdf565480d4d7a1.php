<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a7a85a6b3af2ad98a1319b7fdc1c78c1cc9f4e125f74d72a4495ff618d5f6811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47efbf6e028a406afdbf44e86105ba693214e4a3c1cd3f887e5628791938e523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47efbf6e028a406afdbf44e86105ba693214e4a3c1cd3f887e5628791938e523->enter($__internal_47efbf6e028a406afdbf44e86105ba693214e4a3c1cd3f887e5628791938e523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_18e89e65e1c024decd926ba96c3c812f858f26f99110ab7fb920b90cc0bf1da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e89e65e1c024decd926ba96c3c812f858f26f99110ab7fb920b90cc0bf1da6->enter($__internal_18e89e65e1c024decd926ba96c3c812f858f26f99110ab7fb920b90cc0bf1da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47efbf6e028a406afdbf44e86105ba693214e4a3c1cd3f887e5628791938e523->leave($__internal_47efbf6e028a406afdbf44e86105ba693214e4a3c1cd3f887e5628791938e523_prof);

        
        $__internal_18e89e65e1c024decd926ba96c3c812f858f26f99110ab7fb920b90cc0bf1da6->leave($__internal_18e89e65e1c024decd926ba96c3c812f858f26f99110ab7fb920b90cc0bf1da6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01f75616f9a97a718866e1989a3f998e90408018af19390a35397649176ed83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f75616f9a97a718866e1989a3f998e90408018af19390a35397649176ed83a->enter($__internal_01f75616f9a97a718866e1989a3f998e90408018af19390a35397649176ed83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43a4cfba32712fd86656763014a695504c8f91f348cd68d157bc075040bac09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a4cfba32712fd86656763014a695504c8f91f348cd68d157bc075040bac09b->enter($__internal_43a4cfba32712fd86656763014a695504c8f91f348cd68d157bc075040bac09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_43a4cfba32712fd86656763014a695504c8f91f348cd68d157bc075040bac09b->leave($__internal_43a4cfba32712fd86656763014a695504c8f91f348cd68d157bc075040bac09b_prof);

        
        $__internal_01f75616f9a97a718866e1989a3f998e90408018af19390a35397649176ed83a->leave($__internal_01f75616f9a97a718866e1989a3f998e90408018af19390a35397649176ed83a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b613025ffd773024194f7db7d7a2f38fb58362cb70537ba45ddc3d12e6387a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b613025ffd773024194f7db7d7a2f38fb58362cb70537ba45ddc3d12e6387a79->enter($__internal_b613025ffd773024194f7db7d7a2f38fb58362cb70537ba45ddc3d12e6387a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4fba7866227ca1263a492da233166e253497a03d5f5942f46ee7ffa06c7de6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fba7866227ca1263a492da233166e253497a03d5f5942f46ee7ffa06c7de6b->enter($__internal_a4fba7866227ca1263a492da233166e253497a03d5f5942f46ee7ffa06c7de6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4fba7866227ca1263a492da233166e253497a03d5f5942f46ee7ffa06c7de6b->leave($__internal_a4fba7866227ca1263a492da233166e253497a03d5f5942f46ee7ffa06c7de6b_prof);

        
        $__internal_b613025ffd773024194f7db7d7a2f38fb58362cb70537ba45ddc3d12e6387a79->leave($__internal_b613025ffd773024194f7db7d7a2f38fb58362cb70537ba45ddc3d12e6387a79_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a1979e5a7dde7efe4a58ce580ee69f504f844274e2cd97f81881665591c401b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1979e5a7dde7efe4a58ce580ee69f504f844274e2cd97f81881665591c401b->enter($__internal_4a1979e5a7dde7efe4a58ce580ee69f504f844274e2cd97f81881665591c401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8433af86729890bfe2e70cfb38e71ff03fb397dd85a3345a25aaa5811a146f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8433af86729890bfe2e70cfb38e71ff03fb397dd85a3345a25aaa5811a146f47->enter($__internal_8433af86729890bfe2e70cfb38e71ff03fb397dd85a3345a25aaa5811a146f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8433af86729890bfe2e70cfb38e71ff03fb397dd85a3345a25aaa5811a146f47->leave($__internal_8433af86729890bfe2e70cfb38e71ff03fb397dd85a3345a25aaa5811a146f47_prof);

        
        $__internal_4a1979e5a7dde7efe4a58ce580ee69f504f844274e2cd97f81881665591c401b->leave($__internal_4a1979e5a7dde7efe4a58ce580ee69f504f844274e2cd97f81881665591c401b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
