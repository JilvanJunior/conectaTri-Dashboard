<?php

/* Admin/suppliers/index.html.twig */
class __TwigTemplate_ce706310c5ad93599fe67f0ba6117f646e6546cac160fc53a157baddbbf496f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/suppliers/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_suppliers' => array($this, 'block_menu_suppliers'),
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
        $__internal_0392e5c0ff10fc3a955f177a7c8a126451e652cb0eef80bcbe2b2f1bc25629e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0392e5c0ff10fc3a955f177a7c8a126451e652cb0eef80bcbe2b2f1bc25629e8->enter($__internal_0392e5c0ff10fc3a955f177a7c8a126451e652cb0eef80bcbe2b2f1bc25629e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/suppliers/index.html.twig"));

        $__internal_7a7148e66929100c671afa4413a4467cbe6d88822267ce399478d3dd8edda18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7148e66929100c671afa4413a4467cbe6d88822267ce399478d3dd8edda18f->enter($__internal_7a7148e66929100c671afa4413a4467cbe6d88822267ce399478d3dd8edda18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/suppliers/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0392e5c0ff10fc3a955f177a7c8a126451e652cb0eef80bcbe2b2f1bc25629e8->leave($__internal_0392e5c0ff10fc3a955f177a7c8a126451e652cb0eef80bcbe2b2f1bc25629e8_prof);

        
        $__internal_7a7148e66929100c671afa4413a4467cbe6d88822267ce399478d3dd8edda18f->leave($__internal_7a7148e66929100c671afa4413a4467cbe6d88822267ce399478d3dd8edda18f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fbf385e27f33b9beac7ac5b0f4a5d8185cd978c9b0c2f5c26e61416217e684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fbf385e27f33b9beac7ac5b0f4a5d8185cd978c9b0c2f5c26e61416217e684->enter($__internal_a2fbf385e27f33b9beac7ac5b0f4a5d8185cd978c9b0c2f5c26e61416217e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b15e743bea6434f9b38a52e33173ad46480a2d7d5974c754ca9bcd59433d9a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15e743bea6434f9b38a52e33173ad46480a2d7d5974c754ca9bcd59433d9a11->enter($__internal_b15e743bea6434f9b38a52e33173ad46480a2d7d5974c754ca9bcd59433d9a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fornecedores";
        
        $__internal_b15e743bea6434f9b38a52e33173ad46480a2d7d5974c754ca9bcd59433d9a11->leave($__internal_b15e743bea6434f9b38a52e33173ad46480a2d7d5974c754ca9bcd59433d9a11_prof);

        
        $__internal_a2fbf385e27f33b9beac7ac5b0f4a5d8185cd978c9b0c2f5c26e61416217e684->leave($__internal_a2fbf385e27f33b9beac7ac5b0f4a5d8185cd978c9b0c2f5c26e61416217e684_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_d5614f8907a86163e10c1a1e4226a712eac0c8516a065e09f590ae68aa108687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5614f8907a86163e10c1a1e4226a712eac0c8516a065e09f590ae68aa108687->enter($__internal_d5614f8907a86163e10c1a1e4226a712eac0c8516a065e09f590ae68aa108687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_7f41703a6f170fdb99a144415d839aedfcdbb8f59cd9a94bd79aceede0e032ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f41703a6f170fdb99a144415d839aedfcdbb8f59cd9a94bd79aceede0e032ca->enter($__internal_7f41703a6f170fdb99a144415d839aedfcdbb8f59cd9a94bd79aceede0e032ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_7f41703a6f170fdb99a144415d839aedfcdbb8f59cd9a94bd79aceede0e032ca->leave($__internal_7f41703a6f170fdb99a144415d839aedfcdbb8f59cd9a94bd79aceede0e032ca_prof);

        
        $__internal_d5614f8907a86163e10c1a1e4226a712eac0c8516a065e09f590ae68aa108687->leave($__internal_d5614f8907a86163e10c1a1e4226a712eac0c8516a065e09f590ae68aa108687_prof);

    }

    // line 5
    public function block_menu_suppliers($context, array $blocks = array())
    {
        $__internal_97e09d46e14c24a6f1943221838e2c57f6db755bd8eea41580ecec3cb0b61006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e09d46e14c24a6f1943221838e2c57f6db755bd8eea41580ecec3cb0b61006->enter($__internal_97e09d46e14c24a6f1943221838e2c57f6db755bd8eea41580ecec3cb0b61006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        $__internal_3ca4a8c5c49990d809ad7a832f5b30dcaa6ae28d3ef7604ba57a8d46f8e4a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca4a8c5c49990d809ad7a832f5b30dcaa6ae28d3ef7604ba57a8d46f8e4a2bb->enter($__internal_3ca4a8c5c49990d809ad7a832f5b30dcaa6ae28d3ef7604ba57a8d46f8e4a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        echo " active ";
        
        $__internal_3ca4a8c5c49990d809ad7a832f5b30dcaa6ae28d3ef7604ba57a8d46f8e4a2bb->leave($__internal_3ca4a8c5c49990d809ad7a832f5b30dcaa6ae28d3ef7604ba57a8d46f8e4a2bb_prof);

        
        $__internal_97e09d46e14c24a6f1943221838e2c57f6db755bd8eea41580ecec3cb0b61006->leave($__internal_97e09d46e14c24a6f1943221838e2c57f6db755bd8eea41580ecec3cb0b61006_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_9d5cb897d1ebc678080d49ec51cdce61d72de7694a768ef12acfa16eead4417c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5cb897d1ebc678080d49ec51cdce61d72de7694a768ef12acfa16eead4417c->enter($__internal_9d5cb897d1ebc678080d49ec51cdce61d72de7694a768ef12acfa16eead4417c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_c14211b8bedea5a270afa04be2b35b84c19787568974f47136cd3dd04fbee983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14211b8bedea5a270afa04be2b35b84c19787568974f47136cd3dd04fbee983->enter($__internal_c14211b8bedea5a270afa04be2b35b84c19787568974f47136cd3dd04fbee983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

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
        
        $__internal_c14211b8bedea5a270afa04be2b35b84c19787568974f47136cd3dd04fbee983->leave($__internal_c14211b8bedea5a270afa04be2b35b84c19787568974f47136cd3dd04fbee983_prof);

        
        $__internal_9d5cb897d1ebc678080d49ec51cdce61d72de7694a768ef12acfa16eead4417c->leave($__internal_9d5cb897d1ebc678080d49ec51cdce61d72de7694a768ef12acfa16eead4417c_prof);

    }

    // line 13
    public function block_page($context, array $blocks = array())
    {
        $__internal_371c05d9c6b1dbc7c9cd234d68f8364bc5f94a0f4520429ffe02aeb757618e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371c05d9c6b1dbc7c9cd234d68f8364bc5f94a0f4520429ffe02aeb757618e3e->enter($__internal_371c05d9c6b1dbc7c9cd234d68f8364bc5f94a0f4520429ffe02aeb757618e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_58c5a7c3cc5213977f9457accf18da910c9c60d0349579e3413001bb0a6e90c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c5a7c3cc5213977f9457accf18da910c9c60d0349579e3413001bb0a6e90c6->enter($__internal_58c5a7c3cc5213977f9457accf18da910c9c60d0349579e3413001bb0a6e90c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
                                <h1>Fornecedores
                                    <small>tabela de fornecedores cadastrados</small>
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
                                    <a href=\"#\">Fornecedores</a>
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
                                                    <span class=\"caption-subject bold uppercase\">Fornecedores</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Fornecedor</th>
                                                        <th>Representantes</th>
                                                        <th>Cotações Recebidas</th>
                                                        <th>Pedidos Recebidos</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Fornecedor</th>
                                                        <th>Representantes</th>
                                                        <th>Cotações Recebidas</th>
                                                        <th>Pedidos Recebidos</th>
                                                        <th></th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                        <td> Atacado Martins </td>
                                                        <td> 57 </td>
                                                        <td> 1895 </td>
                                                        <td> 900 </td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-eye\"></i> Ver
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-shopping-cart\"> Pedidos</i>
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
        
        $__internal_58c5a7c3cc5213977f9457accf18da910c9c60d0349579e3413001bb0a6e90c6->leave($__internal_58c5a7c3cc5213977f9457accf18da910c9c60d0349579e3413001bb0a6e90c6_prof);

        
        $__internal_371c05d9c6b1dbc7c9cd234d68f8364bc5f94a0f4520429ffe02aeb757618e3e->leave($__internal_371c05d9c6b1dbc7c9cd234d68f8364bc5f94a0f4520429ffe02aeb757618e3e_prof);

    }

    // line 128
    public function block_script($context, array $blocks = array())
    {
        $__internal_2d0f4aef92dc47307324eb5d8778a7f0e9586e087abb21c16d73176cc2095e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0f4aef92dc47307324eb5d8778a7f0e9586e087abb21c16d73176cc2095e33->enter($__internal_2d0f4aef92dc47307324eb5d8778a7f0e9586e087abb21c16d73176cc2095e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_2a1c06c32a3384bf4fa85b9a4a95e32cf51877c9274ddad6ee8b25e3f3ce5939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1c06c32a3384bf4fa85b9a4a95e32cf51877c9274ddad6ee8b25e3f3ce5939->enter($__internal_2a1c06c32a3384bf4fa85b9a4a95e32cf51877c9274ddad6ee8b25e3f3ce5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 129
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_2a1c06c32a3384bf4fa85b9a4a95e32cf51877c9274ddad6ee8b25e3f3ce5939->leave($__internal_2a1c06c32a3384bf4fa85b9a4a95e32cf51877c9274ddad6ee8b25e3f3ce5939_prof);

        
        $__internal_2d0f4aef92dc47307324eb5d8778a7f0e9586e087abb21c16d73176cc2095e33->leave($__internal_2d0f4aef92dc47307324eb5d8778a7f0e9586e087abb21c16d73176cc2095e33_prof);

    }

    public function getTemplateName()
    {
        return "Admin/suppliers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 133,  284 => 132,  280 => 131,  276 => 130,  271 => 129,  262 => 128,  165 => 40,  137 => 14,  128 => 13,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
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

{% block title %}Fornecedores{% endblock %}
{% block description %}{% endblock %}
{% block menu_suppliers %} active {% endblock %}

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
                                <h1>Fornecedores
                                    <small>tabela de fornecedores cadastrados</small>
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
                                    <a href=\"#\">Fornecedores</a>
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
                                                    <span class=\"caption-subject bold uppercase\">Fornecedores</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Fornecedor</th>
                                                        <th>Representantes</th>
                                                        <th>Cotações Recebidas</th>
                                                        <th>Pedidos Recebidos</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>CNPJ</th>
                                                        <th>Nome do Fornecedor</th>
                                                        <th>Representantes</th>
                                                        <th>Cotações Recebidas</th>
                                                        <th>Pedidos Recebidos</th>
                                                        <th></th>
                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                        <td> Atacado Martins </td>
                                                        <td> 57 </td>
                                                        <td> 1895 </td>
                                                        <td> 900 </td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-eye\"></i> Ver
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
                                                            </a>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                <i class=\"fa fa-shopping-cart\"> Pedidos</i>
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
{% endblock %}", "Admin/suppliers/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Admin\\suppliers\\index.html.twig");
    }
}
