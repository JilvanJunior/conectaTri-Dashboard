<?php

/* produtos/index.html.twig */
class __TwigTemplate_7d0d364a5c658c479cc8ce4d0e70273bd2fbd9897b8cf470ec9c6aaf7da2c1af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produtos/index.html.twig", 1);
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
        $__internal_d876d1ab46d438a276b81c03325b959162e7448399577e5c18a71d429e110bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d876d1ab46d438a276b81c03325b959162e7448399577e5c18a71d429e110bac->enter($__internal_d876d1ab46d438a276b81c03325b959162e7448399577e5c18a71d429e110bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produtos/index.html.twig"));

        $__internal_5c027786c67876d69fab56a2c35e25df95d4a0ecea73c6deedff3f141f3c42fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c027786c67876d69fab56a2c35e25df95d4a0ecea73c6deedff3f141f3c42fe->enter($__internal_5c027786c67876d69fab56a2c35e25df95d4a0ecea73c6deedff3f141f3c42fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produtos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d876d1ab46d438a276b81c03325b959162e7448399577e5c18a71d429e110bac->leave($__internal_d876d1ab46d438a276b81c03325b959162e7448399577e5c18a71d429e110bac_prof);

        
        $__internal_5c027786c67876d69fab56a2c35e25df95d4a0ecea73c6deedff3f141f3c42fe->leave($__internal_5c027786c67876d69fab56a2c35e25df95d4a0ecea73c6deedff3f141f3c42fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a58e3aae65543e89421210d6220c4c09d72003d7800b9f4523224b92a6364029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58e3aae65543e89421210d6220c4c09d72003d7800b9f4523224b92a6364029->enter($__internal_a58e3aae65543e89421210d6220c4c09d72003d7800b9f4523224b92a6364029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f28451664c68d15c8d737ae53e58dd0f10768588c0a9b1e8bd0cf26960221753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28451664c68d15c8d737ae53e58dd0f10768588c0a9b1e8bd0cf26960221753->enter($__internal_f28451664c68d15c8d737ae53e58dd0f10768588c0a9b1e8bd0cf26960221753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Teste";
        
        $__internal_f28451664c68d15c8d737ae53e58dd0f10768588c0a9b1e8bd0cf26960221753->leave($__internal_f28451664c68d15c8d737ae53e58dd0f10768588c0a9b1e8bd0cf26960221753_prof);

        
        $__internal_a58e3aae65543e89421210d6220c4c09d72003d7800b9f4523224b92a6364029->leave($__internal_a58e3aae65543e89421210d6220c4c09d72003d7800b9f4523224b92a6364029_prof);

    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        $__internal_8b3a51b3c73d56b637eca2584e5c2270851fee7f5cb7b817d9c3e79e3c9ed7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3a51b3c73d56b637eca2584e5c2270851fee7f5cb7b817d9c3e79e3c9ed7ae->enter($__internal_8b3a51b3c73d56b637eca2584e5c2270851fee7f5cb7b817d9c3e79e3c9ed7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_a7d7513b6f8fc56fc2bc84165f10bf51fb2da233015b26ce5093a49915f7645e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d7513b6f8fc56fc2bc84165f10bf51fb2da233015b26ce5093a49915f7645e->enter($__internal_a7d7513b6f8fc56fc2bc84165f10bf51fb2da233015b26ce5093a49915f7645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 6
        echo "    <div class=\"page-wrapper-middle\">
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
                            <h1>Produtos
                                <small>tabela de Produtos cadastrados</small>
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
                                <a href=\"#\">Produtos</a>
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
                                                <i class=\"fa fa-cogs\"></i>Produtos </div>
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
                                                    <th width=\"20%\"> Código </th>
                                                    <th> Nome do Produto </th>
                                                    <th> Tipo </th>
                                                    <th> Fabricante </th>
                                                    <th> Únidade de Medida </th>
                                                    <th> Peso </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
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
        
        $__internal_a7d7513b6f8fc56fc2bc84165f10bf51fb2da233015b26ce5093a49915f7645e->leave($__internal_a7d7513b6f8fc56fc2bc84165f10bf51fb2da233015b26ce5093a49915f7645e_prof);

        
        $__internal_8b3a51b3c73d56b637eca2584e5c2270851fee7f5cb7b817d9c3e79e3c9ed7ae->leave($__internal_8b3a51b3c73d56b637eca2584e5c2270851fee7f5cb7b817d9c3e79e3c9ed7ae_prof);

    }

    public function getTemplateName()
    {
        return "produtos/index.html.twig";
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
                            <h1>Produtos
                                <small>tabela de Produtos cadastrados</small>
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
                                <a href=\"#\">Produtos</a>
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
                                                <i class=\"fa fa-cogs\"></i>Produtos </div>
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
                                                    <th width=\"20%\"> Código </th>
                                                    <th> Nome do Produto </th>
                                                    <th> Tipo </th>
                                                    <th> Fabricante </th>
                                                    <th> Únidade de Medida </th>
                                                    <th> Peso </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td> &nbsp; </td>
                                                    <td> -0.01 </td>
                                                    <td> -0.36% </td>
                                                    <td> \$1.39 </td>
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

{% endblock %}", "produtos/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\produtos\\index.html.twig");
    }
}
