<?php

/* Retailer/lists/index.html.twig */
class __TwigTemplate_34cb60cb3eeff1c2bcaea0c9a8ce9284164db70b0c22ad49e64a3e0ebf0640ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Retailer/base.html.twig", "Retailer/lists/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_list' => array($this, 'block_menu_list'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Retailer/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58b00ee5a485c94ea33af26110bdcac2ab4d6b2fe12035fb60af61661d3c5799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b00ee5a485c94ea33af26110bdcac2ab4d6b2fe12035fb60af61661d3c5799->enter($__internal_58b00ee5a485c94ea33af26110bdcac2ab4d6b2fe12035fb60af61661d3c5799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/lists/index.html.twig"));

        $__internal_d12dbfc75771edda2ed6e6a8424fc46742479e10bf3f477c30e5c1ad1fd48936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12dbfc75771edda2ed6e6a8424fc46742479e10bf3f477c30e5c1ad1fd48936->enter($__internal_d12dbfc75771edda2ed6e6a8424fc46742479e10bf3f477c30e5c1ad1fd48936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/lists/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b00ee5a485c94ea33af26110bdcac2ab4d6b2fe12035fb60af61661d3c5799->leave($__internal_58b00ee5a485c94ea33af26110bdcac2ab4d6b2fe12035fb60af61661d3c5799_prof);

        
        $__internal_d12dbfc75771edda2ed6e6a8424fc46742479e10bf3f477c30e5c1ad1fd48936->leave($__internal_d12dbfc75771edda2ed6e6a8424fc46742479e10bf3f477c30e5c1ad1fd48936_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65031e39f8ed6de63f1e19cd0916b50cee1f9614aabb7b2bb03964be42efcd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65031e39f8ed6de63f1e19cd0916b50cee1f9614aabb7b2bb03964be42efcd22->enter($__internal_65031e39f8ed6de63f1e19cd0916b50cee1f9614aabb7b2bb03964be42efcd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc09c2587ebe772c6dfd8054bc7a5dfdaabf70fccda9f1b0848812cbd27f6783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc09c2587ebe772c6dfd8054bc7a5dfdaabf70fccda9f1b0848812cbd27f6783->enter($__internal_bc09c2587ebe772c6dfd8054bc7a5dfdaabf70fccda9f1b0848812cbd27f6783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas";
        
        $__internal_bc09c2587ebe772c6dfd8054bc7a5dfdaabf70fccda9f1b0848812cbd27f6783->leave($__internal_bc09c2587ebe772c6dfd8054bc7a5dfdaabf70fccda9f1b0848812cbd27f6783_prof);

        
        $__internal_65031e39f8ed6de63f1e19cd0916b50cee1f9614aabb7b2bb03964be42efcd22->leave($__internal_65031e39f8ed6de63f1e19cd0916b50cee1f9614aabb7b2bb03964be42efcd22_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_fa506a7384978b56afca623bdf3067e644719e7926915e66dd0e321854d18839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa506a7384978b56afca623bdf3067e644719e7926915e66dd0e321854d18839->enter($__internal_fa506a7384978b56afca623bdf3067e644719e7926915e66dd0e321854d18839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_41a9c30e1e9d47673b8c99aa39a93e55682ff780477cefdb822fbfbd72f7a537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a9c30e1e9d47673b8c99aa39a93e55682ff780477cefdb822fbfbd72f7a537->enter($__internal_41a9c30e1e9d47673b8c99aa39a93e55682ff780477cefdb822fbfbd72f7a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_41a9c30e1e9d47673b8c99aa39a93e55682ff780477cefdb822fbfbd72f7a537->leave($__internal_41a9c30e1e9d47673b8c99aa39a93e55682ff780477cefdb822fbfbd72f7a537_prof);

        
        $__internal_fa506a7384978b56afca623bdf3067e644719e7926915e66dd0e321854d18839->leave($__internal_fa506a7384978b56afca623bdf3067e644719e7926915e66dd0e321854d18839_prof);

    }

    // line 5
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_4d9f0e6db8ff4df120c6a60993c0dc877f30fdef788e02d2217b59cd4b86f4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9f0e6db8ff4df120c6a60993c0dc877f30fdef788e02d2217b59cd4b86f4db->enter($__internal_4d9f0e6db8ff4df120c6a60993c0dc877f30fdef788e02d2217b59cd4b86f4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_c5be222149396af6702c6725e9bf8139b45b89f5c80fe1c6f4dd1ffc3fa77f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5be222149396af6702c6725e9bf8139b45b89f5c80fe1c6f4dd1ffc3fa77f7f->enter($__internal_c5be222149396af6702c6725e9bf8139b45b89f5c80fe1c6f4dd1ffc3fa77f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        echo " active ";
        
        $__internal_c5be222149396af6702c6725e9bf8139b45b89f5c80fe1c6f4dd1ffc3fa77f7f->leave($__internal_c5be222149396af6702c6725e9bf8139b45b89f5c80fe1c6f4dd1ffc3fa77f7f_prof);

        
        $__internal_4d9f0e6db8ff4df120c6a60993c0dc877f30fdef788e02d2217b59cd4b86f4db->leave($__internal_4d9f0e6db8ff4df120c6a60993c0dc877f30fdef788e02d2217b59cd4b86f4db_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_eaf76b3b3f6838ded37e7703cf917ea5f461e9e6cd58eea8ce08e15151c15adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf76b3b3f6838ded37e7703cf917ea5f461e9e6cd58eea8ce08e15151c15adc->enter($__internal_eaf76b3b3f6838ded37e7703cf917ea5f461e9e6cd58eea8ce08e15151c15adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_9e0a3fb244dee0d46e049cd54ccd3b3860097dfe1c13626a92aa63d276534f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0a3fb244dee0d46e049cd54ccd3b3860097dfe1c13626a92aa63d276534f43->enter($__internal_9e0a3fb244dee0d46e049cd54ccd3b3860097dfe1c13626a92aa63d276534f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 8
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
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">Home</a>
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
        
        $__internal_9e0a3fb244dee0d46e049cd54ccd3b3860097dfe1c13626a92aa63d276534f43->leave($__internal_9e0a3fb244dee0d46e049cd54ccd3b3860097dfe1c13626a92aa63d276534f43_prof);

        
        $__internal_eaf76b3b3f6838ded37e7703cf917ea5f461e9e6cd58eea8ce08e15151c15adc->leave($__internal_eaf76b3b3f6838ded37e7703cf917ea5f461e9e6cd58eea8ce08e15151c15adc_prof);

    }

    public function getTemplateName()
    {
        return "Retailer/lists/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  105 => 8,  96 => 7,  78 => 5,  61 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Retailer/base.html.twig' %}

{% block title %}Listas{% endblock %}
{% block description %}{% endblock %}
{% block menu_list %} active {% endblock %}

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
                            <a href=\"{{ path('dashboard') }}\">Home</a>
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

{% endblock %}", "Retailer/lists/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Retailer\\lists\\index.html.twig");
    }
}
