<?php

/* listas/index.html.twig */
class __TwigTemplate_1d3bb090be9095feb1abf1c63666ac8f6ddc3e7b33873b1047c3fe5ff1ea4e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listas/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb2ec173720de111936c42507addd59044b11c7ecc383db986adce1d4f1ab2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2ec173720de111936c42507addd59044b11c7ecc383db986adce1d4f1ab2e8->enter($__internal_cb2ec173720de111936c42507addd59044b11c7ecc383db986adce1d4f1ab2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listas/index.html.twig"));

        $__internal_2e2668ce37566a8b091aadea8f75b768d6789a6ecd8bb359f5b19b818041d4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2668ce37566a8b091aadea8f75b768d6789a6ecd8bb359f5b19b818041d4b1->enter($__internal_2e2668ce37566a8b091aadea8f75b768d6789a6ecd8bb359f5b19b818041d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2ec173720de111936c42507addd59044b11c7ecc383db986adce1d4f1ab2e8->leave($__internal_cb2ec173720de111936c42507addd59044b11c7ecc383db986adce1d4f1ab2e8_prof);

        
        $__internal_2e2668ce37566a8b091aadea8f75b768d6789a6ecd8bb359f5b19b818041d4b1->leave($__internal_2e2668ce37566a8b091aadea8f75b768d6789a6ecd8bb359f5b19b818041d4b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6426f22990d98bb703e2456113909f3539a5b27c351a6e5ef7860161ecc20c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6426f22990d98bb703e2456113909f3539a5b27c351a6e5ef7860161ecc20c3a->enter($__internal_6426f22990d98bb703e2456113909f3539a5b27c351a6e5ef7860161ecc20c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83e9da8de0b526dc3c7f59a7fc77f3b98b4d045db9bb1e0caa80ec507836ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e9da8de0b526dc3c7f59a7fc77f3b98b4d045db9bb1e0caa80ec507836ff3e->enter($__internal_83e9da8de0b526dc3c7f59a7fc77f3b98b4d045db9bb1e0caa80ec507836ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Teste";
        
        $__internal_83e9da8de0b526dc3c7f59a7fc77f3b98b4d045db9bb1e0caa80ec507836ff3e->leave($__internal_83e9da8de0b526dc3c7f59a7fc77f3b98b4d045db9bb1e0caa80ec507836ff3e_prof);

        
        $__internal_6426f22990d98bb703e2456113909f3539a5b27c351a6e5ef7860161ecc20c3a->leave($__internal_6426f22990d98bb703e2456113909f3539a5b27c351a6e5ef7860161ecc20c3a_prof);

    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        $__internal_6ce923343e41da57d7029ccd8c523ce3bc54be408ffbfdef2eb7d1c080c5c9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce923343e41da57d7029ccd8c523ce3bc54be408ffbfdef2eb7d1c080c5c9fd->enter($__internal_6ce923343e41da57d7029ccd8c523ce3bc54be408ffbfdef2eb7d1c080c5c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_39f0ee5324da3ea862eb4bf3e73ae804bac82c5fad9a2d73cd4d027e9c78ce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f0ee5324da3ea862eb4bf3e73ae804bac82c5fad9a2d73cd4d027e9c78ce4b->enter($__internal_39f0ee5324da3ea862eb4bf3e73ae804bac82c5fad9a2d73cd4d027e9c78ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 6
        echo "<div class=\"page-wrapper-middle\">
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Listas
                            <small>tabela de listas cadastradas</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"index.html\">Home</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <a href=\"#\">Listas</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Tabela</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"note note-success\">
                                    <p> Tente redimensionar a janela do seu navegador para ver as tabelas no modo responsivo. </p>
                                </div>
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class=\"portlet box green\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"fa fa-cogs\"></i>Listas</div>
                                        <div class=\"tools\">
                                            <a href=\"javascript:;\" class=\"collapse\"> </a>
                                            <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                            <a href=\"javascript:;\" class=\"reload\"> </a>
                                            <a href=\"javascript:;\" class=\"remove\"> </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body flip-scroll\">
                                        <table class=\"table table-bordered table-striped table-condensed flip-content\">
                                            <thead class=\"flip-content\">
                                            <tr>
                                                <th width=\"20%\"> Nome </th>
                                                <th> Descrição </th>
                                                <th> Departamento </th>
                                                <th> Ação </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td> Lista 1 </td>
                                                <td> Lorem ipsum dolor sit, amet</td>
                                                <td> Alimentos Perecíveis </td>
                                                <td> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
</div>

";
        
        $__internal_39f0ee5324da3ea862eb4bf3e73ae804bac82c5fad9a2d73cd4d027e9c78ce4b->leave($__internal_39f0ee5324da3ea862eb4bf3e73ae804bac82c5fad9a2d73cd4d027e9c78ce4b_prof);

        
        $__internal_6ce923343e41da57d7029ccd8c523ce3bc54be408ffbfdef2eb7d1c080c5c9fd->leave($__internal_6ce923343e41da57d7029ccd8c523ce3bc54be408ffbfdef2eb7d1c080c5c9fd_prof);

    }

    public function getTemplateName()
    {
        return "listas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Teste{% endblock %}

{% block page %}
<div class=\"page-wrapper-middle\">
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container\">
        <!-- BEGIN CONTENT -->
        <div class=\"page-content-wrapper\">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class=\"page-head\">
                <div class=\"container\">
                    <!-- BEGIN PAGE TITLE -->
                    <div class=\"page-title\">
                        <h1>Listas
                            <small>tabela de listas cadastradas</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class=\"page-content\">
                <div class=\"container\">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class=\"page-breadcrumb breadcrumb\">
                        <li>
                            <a href=\"index.html\">Home</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <a href=\"#\">Listas</a>
                            <i class=\"fa fa-circle\"></i>
                        </li>
                        <li>
                            <span>Tabela</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class=\"page-content-inner\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"note note-success\">
                                    <p> Tente redimensionar a janela do seu navegador para ver as tabelas no modo responsivo. </p>
                                </div>
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class=\"portlet box green\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"fa fa-cogs\"></i>Listas</div>
                                        <div class=\"tools\">
                                            <a href=\"javascript:;\" class=\"collapse\"> </a>
                                            <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                            <a href=\"javascript:;\" class=\"reload\"> </a>
                                            <a href=\"javascript:;\" class=\"remove\"> </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body flip-scroll\">
                                        <table class=\"table table-bordered table-striped table-condensed flip-content\">
                                            <thead class=\"flip-content\">
                                            <tr>
                                                <th width=\"20%\"> Nome </th>
                                                <th> Descrição </th>
                                                <th> Departamento </th>
                                                <th> Ação </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td> Lista 1 </td>
                                                <td> Lorem ipsum dolor sit, amet</td>
                                                <td> Alimentos Perecíveis </td>
                                                <td> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
</div>

{% endblock %}", "listas/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\listas\\index.html.twig");
    }
}
