<?php

/* lists/index.html.twig */
class __TwigTemplate_8ea0eb1068b92537c992535247a0259bc17a803b2edc071d6a4b85040ad73ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lists/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_list' => array($this, 'block_menu_list'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2f0f1e7753480d66dbe0b01e03efe70fa3d8ed583dd8ffa95237cea96288fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f0f1e7753480d66dbe0b01e03efe70fa3d8ed583dd8ffa95237cea96288fae->enter($__internal_f2f0f1e7753480d66dbe0b01e03efe70fa3d8ed583dd8ffa95237cea96288fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lists/index.html.twig"));

        $__internal_7c21b6935a470dae5b5736e6c7987954830fd635e7978962d71580ba15628f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c21b6935a470dae5b5736e6c7987954830fd635e7978962d71580ba15628f8c->enter($__internal_7c21b6935a470dae5b5736e6c7987954830fd635e7978962d71580ba15628f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lists/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f0f1e7753480d66dbe0b01e03efe70fa3d8ed583dd8ffa95237cea96288fae->leave($__internal_f2f0f1e7753480d66dbe0b01e03efe70fa3d8ed583dd8ffa95237cea96288fae_prof);

        
        $__internal_7c21b6935a470dae5b5736e6c7987954830fd635e7978962d71580ba15628f8c->leave($__internal_7c21b6935a470dae5b5736e6c7987954830fd635e7978962d71580ba15628f8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bdfafe65bdab0ed4fbc7a646d79eed53d2dfd9f453030c68c55a88c8dbc4765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdfafe65bdab0ed4fbc7a646d79eed53d2dfd9f453030c68c55a88c8dbc4765->enter($__internal_9bdfafe65bdab0ed4fbc7a646d79eed53d2dfd9f453030c68c55a88c8dbc4765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_894ab97d423b26487d897fd2250970b902591df2edf5b33baf8f60255750f50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894ab97d423b26487d897fd2250970b902591df2edf5b33baf8f60255750f50b->enter($__internal_894ab97d423b26487d897fd2250970b902591df2edf5b33baf8f60255750f50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas";
        
        $__internal_894ab97d423b26487d897fd2250970b902591df2edf5b33baf8f60255750f50b->leave($__internal_894ab97d423b26487d897fd2250970b902591df2edf5b33baf8f60255750f50b_prof);

        
        $__internal_9bdfafe65bdab0ed4fbc7a646d79eed53d2dfd9f453030c68c55a88c8dbc4765->leave($__internal_9bdfafe65bdab0ed4fbc7a646d79eed53d2dfd9f453030c68c55a88c8dbc4765_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_862641057c0ae09833b5ba2e554e8d76ecd88abd6ad703477f1c2f3401835328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862641057c0ae09833b5ba2e554e8d76ecd88abd6ad703477f1c2f3401835328->enter($__internal_862641057c0ae09833b5ba2e554e8d76ecd88abd6ad703477f1c2f3401835328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_3d18e831cc958a49c965b0143472cf1f3a15320d95ee77ea4389bc7f9764e9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d18e831cc958a49c965b0143472cf1f3a15320d95ee77ea4389bc7f9764e9fe->enter($__internal_3d18e831cc958a49c965b0143472cf1f3a15320d95ee77ea4389bc7f9764e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_3d18e831cc958a49c965b0143472cf1f3a15320d95ee77ea4389bc7f9764e9fe->leave($__internal_3d18e831cc958a49c965b0143472cf1f3a15320d95ee77ea4389bc7f9764e9fe_prof);

        
        $__internal_862641057c0ae09833b5ba2e554e8d76ecd88abd6ad703477f1c2f3401835328->leave($__internal_862641057c0ae09833b5ba2e554e8d76ecd88abd6ad703477f1c2f3401835328_prof);

    }

    // line 5
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_c9b70ed0806fa13a337382f751f0d1fd17ec6322616e16a84f0edb822476c198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b70ed0806fa13a337382f751f0d1fd17ec6322616e16a84f0edb822476c198->enter($__internal_c9b70ed0806fa13a337382f751f0d1fd17ec6322616e16a84f0edb822476c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_c0682d81897df1976f6f4a81b33587dbd6207e47906d699e982b24218801d1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0682d81897df1976f6f4a81b33587dbd6207e47906d699e982b24218801d1ba->enter($__internal_c0682d81897df1976f6f4a81b33587dbd6207e47906d699e982b24218801d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        echo " active ";
        
        $__internal_c0682d81897df1976f6f4a81b33587dbd6207e47906d699e982b24218801d1ba->leave($__internal_c0682d81897df1976f6f4a81b33587dbd6207e47906d699e982b24218801d1ba_prof);

        
        $__internal_c9b70ed0806fa13a337382f751f0d1fd17ec6322616e16a84f0edb822476c198->leave($__internal_c9b70ed0806fa13a337382f751f0d1fd17ec6322616e16a84f0edb822476c198_prof);

    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        $__internal_5ee414fa4ebf515e16967d5d03da525685ec12480474984a08abf5c8d5efca4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee414fa4ebf515e16967d5d03da525685ec12480474984a08abf5c8d5efca4d->enter($__internal_5ee414fa4ebf515e16967d5d03da525685ec12480474984a08abf5c8d5efca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_b5f031db804d970d8a05da4b7f0efb658b7acf49fd598b06d5a2eebcc1239c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f031db804d970d8a05da4b7f0efb658b7acf49fd598b06d5a2eebcc1239c69->enter($__internal_b5f031db804d970d8a05da4b7f0efb658b7acf49fd598b06d5a2eebcc1239c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
        
        $__internal_b5f031db804d970d8a05da4b7f0efb658b7acf49fd598b06d5a2eebcc1239c69->leave($__internal_b5f031db804d970d8a05da4b7f0efb658b7acf49fd598b06d5a2eebcc1239c69_prof);

        
        $__internal_5ee414fa4ebf515e16967d5d03da525685ec12480474984a08abf5c8d5efca4d->leave($__internal_5ee414fa4ebf515e16967d5d03da525685ec12480474984a08abf5c8d5efca4d_prof);

    }

    public function getTemplateName()
    {
        return "lists/index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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

{% endblock %}", "lists/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\lists\\index.html.twig");
    }
}
