<?php

/* Admin/clients/index.html.twig */
class __TwigTemplate_24635c1dee8f0901c5231e9f863707c0dcdca7672cbb806634283484b5426602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/clients/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_clients' => array($this, 'block_menu_clients'),
            'page_plugins' => array($this, 'block_page_plugins'),
            'page' => array($this, 'block_page'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7640d5f6a8e9d0b148e2c63d1fb8dcdc3b7648d169a66dd6b55510c557bc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7640d5f6a8e9d0b148e2c63d1fb8dcdc3b7648d169a66dd6b55510c557bc6b->enter($__internal_1a7640d5f6a8e9d0b148e2c63d1fb8dcdc3b7648d169a66dd6b55510c557bc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/clients/index.html.twig"));

        $__internal_341d4d0f4178c716514c712a37b1f64f9c8cb7cb9e31bd4671a09c602b12ac66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341d4d0f4178c716514c712a37b1f64f9c8cb7cb9e31bd4671a09c602b12ac66->enter($__internal_341d4d0f4178c716514c712a37b1f64f9c8cb7cb9e31bd4671a09c602b12ac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7640d5f6a8e9d0b148e2c63d1fb8dcdc3b7648d169a66dd6b55510c557bc6b->leave($__internal_1a7640d5f6a8e9d0b148e2c63d1fb8dcdc3b7648d169a66dd6b55510c557bc6b_prof);

        
        $__internal_341d4d0f4178c716514c712a37b1f64f9c8cb7cb9e31bd4671a09c602b12ac66->leave($__internal_341d4d0f4178c716514c712a37b1f64f9c8cb7cb9e31bd4671a09c602b12ac66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81e5e62b65198a228793d2ed5e1d0b84d18269565ba65995bae4eed5bfe4007a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e5e62b65198a228793d2ed5e1d0b84d18269565ba65995bae4eed5bfe4007a->enter($__internal_81e5e62b65198a228793d2ed5e1d0b84d18269565ba65995bae4eed5bfe4007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81d09b0c81d3165a2f20673e0a44753e83f87385b1b8b4c2a4eff0d6d1f2ea8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d09b0c81d3165a2f20673e0a44753e83f87385b1b8b4c2a4eff0d6d1f2ea8a->enter($__internal_81d09b0c81d3165a2f20673e0a44753e83f87385b1b8b4c2a4eff0d6d1f2ea8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes";
        
        $__internal_81d09b0c81d3165a2f20673e0a44753e83f87385b1b8b4c2a4eff0d6d1f2ea8a->leave($__internal_81d09b0c81d3165a2f20673e0a44753e83f87385b1b8b4c2a4eff0d6d1f2ea8a_prof);

        
        $__internal_81e5e62b65198a228793d2ed5e1d0b84d18269565ba65995bae4eed5bfe4007a->leave($__internal_81e5e62b65198a228793d2ed5e1d0b84d18269565ba65995bae4eed5bfe4007a_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_45369feae7c78a5bfc3208ad07cda27cf469639590e572a54d2a81b937589df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45369feae7c78a5bfc3208ad07cda27cf469639590e572a54d2a81b937589df7->enter($__internal_45369feae7c78a5bfc3208ad07cda27cf469639590e572a54d2a81b937589df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_ff36d32a2f969cfec48a0092b904aa8add9a1ed9ec7125f0afd8faef2be85477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff36d32a2f969cfec48a0092b904aa8add9a1ed9ec7125f0afd8faef2be85477->enter($__internal_ff36d32a2f969cfec48a0092b904aa8add9a1ed9ec7125f0afd8faef2be85477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_ff36d32a2f969cfec48a0092b904aa8add9a1ed9ec7125f0afd8faef2be85477->leave($__internal_ff36d32a2f969cfec48a0092b904aa8add9a1ed9ec7125f0afd8faef2be85477_prof);

        
        $__internal_45369feae7c78a5bfc3208ad07cda27cf469639590e572a54d2a81b937589df7->leave($__internal_45369feae7c78a5bfc3208ad07cda27cf469639590e572a54d2a81b937589df7_prof);

    }

    // line 5
    public function block_menu_clients($context, array $blocks = array())
    {
        $__internal_3c4ff7664328c89b1115bd50c9d73594c5e1c66f5a8a2a00dddac54e3e8dd111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4ff7664328c89b1115bd50c9d73594c5e1c66f5a8a2a00dddac54e3e8dd111->enter($__internal_3c4ff7664328c89b1115bd50c9d73594c5e1c66f5a8a2a00dddac54e3e8dd111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        $__internal_e9c1d9b53751aa20206c5a5762441f0998efb5c01202195f1f576e05db8fa6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c1d9b53751aa20206c5a5762441f0998efb5c01202195f1f576e05db8fa6a8->enter($__internal_e9c1d9b53751aa20206c5a5762441f0998efb5c01202195f1f576e05db8fa6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        echo " active ";
        
        $__internal_e9c1d9b53751aa20206c5a5762441f0998efb5c01202195f1f576e05db8fa6a8->leave($__internal_e9c1d9b53751aa20206c5a5762441f0998efb5c01202195f1f576e05db8fa6a8_prof);

        
        $__internal_3c4ff7664328c89b1115bd50c9d73594c5e1c66f5a8a2a00dddac54e3e8dd111->leave($__internal_3c4ff7664328c89b1115bd50c9d73594c5e1c66f5a8a2a00dddac54e3e8dd111_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_a21491af82c97070418d4b47d0a5e685a61d862d8bc286bcabef97a98afe3e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21491af82c97070418d4b47d0a5e685a61d862d8bc286bcabef97a98afe3e6a->enter($__internal_a21491af82c97070418d4b47d0a5e685a61d862d8bc286bcabef97a98afe3e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_8aa783bda5c1dd81d71ec457892bd412caae3fc5d7fbfc1e9dc5c63937daa51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa783bda5c1dd81d71ec457892bd412caae3fc5d7fbfc1e9dc5c63937daa51d->enter($__internal_8aa783bda5c1dd81d71ec457892bd412caae3fc5d7fbfc1e9dc5c63937daa51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_8aa783bda5c1dd81d71ec457892bd412caae3fc5d7fbfc1e9dc5c63937daa51d->leave($__internal_8aa783bda5c1dd81d71ec457892bd412caae3fc5d7fbfc1e9dc5c63937daa51d_prof);

        
        $__internal_a21491af82c97070418d4b47d0a5e685a61d862d8bc286bcabef97a98afe3e6a->leave($__internal_a21491af82c97070418d4b47d0a5e685a61d862d8bc286bcabef97a98afe3e6a_prof);

    }

    // line 13
    public function block_page($context, array $blocks = array())
    {
        $__internal_2c4d2d29df063c75462f2d9ce5ba5aa9d68adc21539e27a2e342de7b382509ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4d2d29df063c75462f2d9ce5ba5aa9d68adc21539e27a2e342de7b382509ea->enter($__internal_2c4d2d29df063c75462f2d9ce5ba5aa9d68adc21539e27a2e342de7b382509ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_bb897a8e44d4c5d318bfe70b176efc45226284d70c6dabc1f4e3cdc4b55c67e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb897a8e44d4c5d318bfe70b176efc45226284d70c6dabc1f4e3cdc4b55c67e1->enter($__internal_bb897a8e44d4c5d318bfe70b176efc45226284d70c6dabc1f4e3cdc4b55c67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 14
        echo "    <div class=\"page-wrapper-row full-height\">
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
                                <h1>Clientes
                                    <small>tabela de Clientes cadastrados</small>
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
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <a href=\"#\">Clientes</a>
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
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption font-dark\">
                                                    <i class=\"fa fa-group font-dark\"></i>
                                                    <span class=\"caption-subject bold uppercase\">Clientes</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Cliente</th>
                                                        <th>Listas</th>
                                                        <th>Cotações Realizadas</th>
                                                        <th>Pedidos Enviados</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Cliente</th>
                                                        <th>Listas</th>
                                                        <th>Cotações Realizadas</th>
                                                        <th>Pedidos Enviados</th>
                                                        <th></th>

                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>43.214.055/0001-07</td>
                                                        <td>WeMind</td>
                                                        <td>40</td>
                                                        <td>200</td>
                                                        <td>178</td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-eye\"></i> Ver
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-edit\"> Editar</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
                                                            </a>
                                                            <br>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-shopping-cart\"> Pedidos</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-commenting-o\"> Mensagem</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
    </div>
";
        
        $__internal_bb897a8e44d4c5d318bfe70b176efc45226284d70c6dabc1f4e3cdc4b55c67e1->leave($__internal_bb897a8e44d4c5d318bfe70b176efc45226284d70c6dabc1f4e3cdc4b55c67e1_prof);

        
        $__internal_2c4d2d29df063c75462f2d9ce5ba5aa9d68adc21539e27a2e342de7b382509ea->leave($__internal_2c4d2d29df063c75462f2d9ce5ba5aa9d68adc21539e27a2e342de7b382509ea_prof);

    }

    // line 134
    public function block_script($context, array $blocks = array())
    {
        $__internal_dafc0a4c042baff4061a5a75cd1fbbf00f5844ab8210ef16755e2d8cb913202e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafc0a4c042baff4061a5a75cd1fbbf00f5844ab8210ef16755e2d8cb913202e->enter($__internal_dafc0a4c042baff4061a5a75cd1fbbf00f5844ab8210ef16755e2d8cb913202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_5a6e1632e74c11d4d01622a2ad0afe9cb87eeee973395a1015824af056bcc9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6e1632e74c11d4d01622a2ad0afe9cb87eeee973395a1015824af056bcc9c6->enter($__internal_5a6e1632e74c11d4d01622a2ad0afe9cb87eeee973395a1015824af056bcc9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 135
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_5a6e1632e74c11d4d01622a2ad0afe9cb87eeee973395a1015824af056bcc9c6->leave($__internal_5a6e1632e74c11d4d01622a2ad0afe9cb87eeee973395a1015824af056bcc9c6_prof);

        
        $__internal_dafc0a4c042baff4061a5a75cd1fbbf00f5844ab8210ef16755e2d8cb913202e->leave($__internal_dafc0a4c042baff4061a5a75cd1fbbf00f5844ab8210ef16755e2d8cb913202e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 139,  290 => 138,  286 => 137,  282 => 136,  277 => 135,  268 => 134,  165 => 40,  137 => 14,  128 => 13,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Admin/base.html.twig' %}

{% block title %}Clientes{% endblock %}
{% block description %}{% endblock %}
{% block menu_clients %} active {% endblock %}

{% block page_plugins %}
    <link href=\"{{ asset('/bundles/assets/global/plugins/datatables/datatables.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block page %}
    <div class=\"page-wrapper-row full-height\">
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
                                <h1>Clientes
                                    <small>tabela de Clientes cadastrados</small>
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
                                    <a href=\"#\">Clientes</a>
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
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption font-dark\">
                                                    <i class=\"fa fa-group font-dark\"></i>
                                                    <span class=\"caption-subject bold uppercase\">Clientes</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Cliente</th>
                                                        <th>Listas</th>
                                                        <th>Cotações Realizadas</th>
                                                        <th>Pedidos Enviados</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Cliente</th>
                                                        <th>Listas</th>
                                                        <th>Cotações Realizadas</th>
                                                        <th>Pedidos Enviados</th>
                                                        <th></th>

                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>43.214.055/0001-07</td>
                                                        <td>WeMind</td>
                                                        <td>40</td>
                                                        <td>200</td>
                                                        <td>178</td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-eye\"></i> Ver
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-edit\"> Editar</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
                                                            </a>
                                                            <br>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-shopping-cart\"> Pedidos</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-commenting-o\"> Mensagem</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
    </div>
{% endblock %}

{% block script %}
    <script src=\"{{ asset('bundles/assets/global/scripts/datatable.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/assets/pages/scripts/table-datatables-buttons.min.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "Admin/clients/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Admin\\clients\\index.html.twig");
    }
}
