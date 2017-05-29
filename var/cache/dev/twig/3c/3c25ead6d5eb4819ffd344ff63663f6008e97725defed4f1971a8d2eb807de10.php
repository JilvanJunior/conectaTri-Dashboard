<?php

/* Admin/dashboard/index.html.twig */
class __TwigTemplate_d6bdbef2d8fdd17342c9c50bf4ffddcfb36e27e4f5d65ac41e8ed5b0d736903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/dashboard/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_dashboard' => array($this, 'block_menu_dashboard'),
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
        $__internal_14b25b65b48059889afaa3e2f44269bc7b778015ca600f779dd5ac060b57cf9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b25b65b48059889afaa3e2f44269bc7b778015ca600f779dd5ac060b57cf9d->enter($__internal_14b25b65b48059889afaa3e2f44269bc7b778015ca600f779dd5ac060b57cf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/dashboard/index.html.twig"));

        $__internal_8858643e80c4ab9a6bf9571b2ddbaf6368cd55fb22da57c505c47396e674371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8858643e80c4ab9a6bf9571b2ddbaf6368cd55fb22da57c505c47396e674371d->enter($__internal_8858643e80c4ab9a6bf9571b2ddbaf6368cd55fb22da57c505c47396e674371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b25b65b48059889afaa3e2f44269bc7b778015ca600f779dd5ac060b57cf9d->leave($__internal_14b25b65b48059889afaa3e2f44269bc7b778015ca600f779dd5ac060b57cf9d_prof);

        
        $__internal_8858643e80c4ab9a6bf9571b2ddbaf6368cd55fb22da57c505c47396e674371d->leave($__internal_8858643e80c4ab9a6bf9571b2ddbaf6368cd55fb22da57c505c47396e674371d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc3c1fa6a97f80f67842916391d1b63cf2aee4223d84c3321d62189ce7a7415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc3c1fa6a97f80f67842916391d1b63cf2aee4223d84c3321d62189ce7a7415->enter($__internal_7dc3c1fa6a97f80f67842916391d1b63cf2aee4223d84c3321d62189ce7a7415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dffb60fdffe6cbbc30a790c70ffa32af493c4c5b08d5ae4842fbe8431969e92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffb60fdffe6cbbc30a790c70ffa32af493c4c5b08d5ae4842fbe8431969e92b->enter($__internal_dffb60fdffe6cbbc30a790c70ffa32af493c4c5b08d5ae4842fbe8431969e92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_dffb60fdffe6cbbc30a790c70ffa32af493c4c5b08d5ae4842fbe8431969e92b->leave($__internal_dffb60fdffe6cbbc30a790c70ffa32af493c4c5b08d5ae4842fbe8431969e92b_prof);

        
        $__internal_7dc3c1fa6a97f80f67842916391d1b63cf2aee4223d84c3321d62189ce7a7415->leave($__internal_7dc3c1fa6a97f80f67842916391d1b63cf2aee4223d84c3321d62189ce7a7415_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_a74a5bade8379b41c6ffeb8f9391b6b23bb7cd6809076f6cdb6726ee786bd196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74a5bade8379b41c6ffeb8f9391b6b23bb7cd6809076f6cdb6726ee786bd196->enter($__internal_a74a5bade8379b41c6ffeb8f9391b6b23bb7cd6809076f6cdb6726ee786bd196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_aac9a51da41a027c4836879324ebff7683cfa8187215b7a3cc066548edbff796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac9a51da41a027c4836879324ebff7683cfa8187215b7a3cc066548edbff796->enter($__internal_aac9a51da41a027c4836879324ebff7683cfa8187215b7a3cc066548edbff796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_aac9a51da41a027c4836879324ebff7683cfa8187215b7a3cc066548edbff796->leave($__internal_aac9a51da41a027c4836879324ebff7683cfa8187215b7a3cc066548edbff796_prof);

        
        $__internal_a74a5bade8379b41c6ffeb8f9391b6b23bb7cd6809076f6cdb6726ee786bd196->leave($__internal_a74a5bade8379b41c6ffeb8f9391b6b23bb7cd6809076f6cdb6726ee786bd196_prof);

    }

    // line 5
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_1741ea4f9575cff3de0a2eb276e672f65c11386701b3f00095a0fe54ff6d6f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1741ea4f9575cff3de0a2eb276e672f65c11386701b3f00095a0fe54ff6d6f36->enter($__internal_1741ea4f9575cff3de0a2eb276e672f65c11386701b3f00095a0fe54ff6d6f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_c087b613130821112ecdcd624d787a63b08aa2e77b6816d412a5f3979b03d965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c087b613130821112ecdcd624d787a63b08aa2e77b6816d412a5f3979b03d965->enter($__internal_c087b613130821112ecdcd624d787a63b08aa2e77b6816d412a5f3979b03d965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        echo " active ";
        
        $__internal_c087b613130821112ecdcd624d787a63b08aa2e77b6816d412a5f3979b03d965->leave($__internal_c087b613130821112ecdcd624d787a63b08aa2e77b6816d412a5f3979b03d965_prof);

        
        $__internal_1741ea4f9575cff3de0a2eb276e672f65c11386701b3f00095a0fe54ff6d6f36->leave($__internal_1741ea4f9575cff3de0a2eb276e672f65c11386701b3f00095a0fe54ff6d6f36_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_60d8140b8847d84fb2ea1300c0223ccf4caff4a91aa2146356e9b7fd4d4940a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d8140b8847d84fb2ea1300c0223ccf4caff4a91aa2146356e9b7fd4d4940a9->enter($__internal_60d8140b8847d84fb2ea1300c0223ccf4caff4a91aa2146356e9b7fd4d4940a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_7a7dc3dc1c6f960a154076e4e6148a80c8cfcc01173566adb4e7752a94d41fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7dc3dc1c6f960a154076e4e6148a80c8cfcc01173566adb4e7752a94d41fd8->enter($__internal_7a7dc3dc1c6f960a154076e4e6148a80c8cfcc01173566adb4e7752a94d41fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_7a7dc3dc1c6f960a154076e4e6148a80c8cfcc01173566adb4e7752a94d41fd8->leave($__internal_7a7dc3dc1c6f960a154076e4e6148a80c8cfcc01173566adb4e7752a94d41fd8_prof);

        
        $__internal_60d8140b8847d84fb2ea1300c0223ccf4caff4a91aa2146356e9b7fd4d4940a9->leave($__internal_60d8140b8847d84fb2ea1300c0223ccf4caff4a91aa2146356e9b7fd4d4940a9_prof);

    }

    // line 15
    public function block_page($context, array $blocks = array())
    {
        $__internal_025e1094885f59061fb30da400dd3b2159221ee008f2e2931bb28f27b856dd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025e1094885f59061fb30da400dd3b2159221ee008f2e2931bb28f27b856dd47->enter($__internal_025e1094885f59061fb30da400dd3b2159221ee008f2e2931bb28f27b856dd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_61c84acc1a58abd2f6f42fbf590e7c440a6ae532c24190f1ebe52c1a486a6ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c84acc1a58abd2f6f42fbf590e7c440a6ae532c24190f1ebe52c1a486a6ba9->enter($__internal_61c84acc1a58abd2f6f42fbf590e7c440a6ae532c24190f1ebe52c1a486a6ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 16
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
                                <h1>Dashboard
                                    <small>visão geral da plataforma</small>
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
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class=\"page-content-inner\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10\">
                                        <div class=\"dashboard-stat blue\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-briefcase fa-icon-medium\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 12.492 </div>
                                                <div class=\"desc\"> Fornecedores </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard-stat green-conecta\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 150.127 </div>
                                                <div class=\"desc\"> Cotações Em Andamento </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard-stat orange-conecta\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-group fa-icon-medium\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 90.587 </div>
                                                <div class=\"desc\"> Clientes Ativos </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-shopping-cart font-red\"></i>
                                                    <span class=\"caption-subject font-red bold uppercase\">Cotações</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Cotações Remotas </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\">Cotações Presenciais</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_1\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_2\">
                                                        <div id=\"statistics_2\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-list font-purple-wisteria\"></i>
                                                    <span class=\"caption-subject font-purple-wisteria bold uppercase\">Listas</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Listas Criadas </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_3\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-group font-orange-conecta\"></i>
                                                    <span class=\"caption-subject font-orange-conecta bold uppercase\">Clientes</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Clientes Cadastrados </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\">Clientes Ativos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_4\">
                                                        <div id=\"statistics_4\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_5\">
                                                        <div id=\"statistics_5\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-briefcase font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Fornecedores</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Fornecedores Criados </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Representantes Ativos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_6\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_2\">
                                                        <div id=\"statistics_7\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <!-- Begin: life time stats -->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Visão Geral</span>
                                                    <span class=\"caption-helper\"> produtos e fornecedores mais cotados</span>
                                                </div>
                                                <div class=\"actions\">
                                                    <div class=\"btn-group\">
                                                        <a class=\"btn blue btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Ações
                                                            <i class=\"fa fa-angle-down\"></i>
                                                        </a>
                                                        <ul class=\"dropdown-menu pull-right\">
                                                            <li>
                                                                <a href=\"javascript:;\"> Pesquisar Produtos </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Lista completa </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Pesquisar Fornecedores </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Lista Completa </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tabbable-line\">
                                                    <ul class=\"nav nav-tabs\">
                                                        <li class=\"active\">
                                                            <a href=\"#overview_1\" data-toggle=\"tab\"> Produtos Mais Cotados </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_2\" data-toggle=\"tab\"> Fornecedores Mais Cotados </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"overview_1\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Nome do Produto </th>
                                                                        <th> Menor Preço </th>
                                                                        <th> Fornecedor </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto</a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_2\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Fornecedor </th>
                                                                        <th> Representantes </th>
                                                                        <th> Cotações </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
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
";
        
        $__internal_61c84acc1a58abd2f6f42fbf590e7c440a6ae532c24190f1ebe52c1a486a6ba9->leave($__internal_61c84acc1a58abd2f6f42fbf590e7c440a6ae532c24190f1ebe52c1a486a6ba9_prof);

        
        $__internal_025e1094885f59061fb30da400dd3b2159221ee008f2e2931bb28f27b856dd47->leave($__internal_025e1094885f59061fb30da400dd3b2159221ee008f2e2931bb28f27b856dd47_prof);

    }

    // line 488
    public function block_script($context, array $blocks = array())
    {
        $__internal_b48cd870bf56a579d9edf472fda1d5bcbbd95cd62928bb133c737eaded1c6934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48cd870bf56a579d9edf472fda1d5bcbbd95cd62928bb133c737eaded1c6934->enter($__internal_b48cd870bf56a579d9edf472fda1d5bcbbd95cd62928bb133c737eaded1c6934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_4128ce78e673e9047f7491e18c6b349ce12ba19726305b468e054431e9c45f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4128ce78e673e9047f7491e18c6b349ce12ba19726305b468e054431e9c45f73->enter($__internal_4128ce78e673e9047f7491e18c6b349ce12ba19726305b468e054431e9c45f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 489
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "/\" type=\"text/javascript\"></script>
";
        
        $__internal_4128ce78e673e9047f7491e18c6b349ce12ba19726305b468e054431e9c45f73->leave($__internal_4128ce78e673e9047f7491e18c6b349ce12ba19726305b468e054431e9c45f73_prof);

        
        $__internal_b48cd870bf56a579d9edf472fda1d5bcbbd95cd62928bb133c737eaded1c6934->leave($__internal_b48cd870bf56a579d9edf472fda1d5bcbbd95cd62928bb133c737eaded1c6934_prof);

    }

    public function getTemplateName()
    {
        return "Admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 503,  682 => 502,  678 => 501,  674 => 500,  670 => 499,  666 => 498,  662 => 497,  658 => 496,  654 => 495,  650 => 494,  646 => 493,  642 => 492,  638 => 491,  634 => 490,  629 => 489,  620 => 488,  165 => 42,  137 => 16,  128 => 15,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/base.html.twig\" %}

{% block title %}Dashboard{% endblock %}
{% block description %}{% endblock %}
{% block menu_dashboard %} active {% endblock %}

{% block page_plugins %}
    <link href=\"{{ asset('/bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
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
                                <h1>Dashboard
                                    <small>visão geral da plataforma</small>
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
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class=\"page-content-inner\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10\">
                                        <div class=\"dashboard-stat blue\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-briefcase fa-icon-medium\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 12.492 </div>
                                                <div class=\"desc\"> Fornecedores </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard-stat green-conecta\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 150.127 </div>
                                                <div class=\"desc\"> Cotações Em Andamento </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard-stat orange-conecta\">
                                            <div class=\"visual\">
                                                <i class=\"fa fa-group fa-icon-medium\"></i>
                                            </div>
                                            <div class=\"details\">
                                                <div class=\"number\"> 90.587 </div>
                                                <div class=\"desc\"> Clientes Ativos </div>
                                            </div>
                                            <a class=\"more\" href=\"javascript:;\"> Ver Mais
                                                <i class=\"m-icon-swapright m-icon-white\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-shopping-cart font-red\"></i>
                                                    <span class=\"caption-subject font-red bold uppercase\">Cotações</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Cotações Remotas </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\">Cotações Presenciais</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_1\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_2\">
                                                        <div id=\"statistics_2\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-list font-purple-wisteria\"></i>
                                                    <span class=\"caption-subject font-purple-wisteria bold uppercase\">Listas</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Listas Criadas </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_3\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-group font-orange-conecta\"></i>
                                                    <span class=\"caption-subject font-orange-conecta bold uppercase\">Clientes</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Clientes Cadastrados </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\">Clientes Ativos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_4\">
                                                        <div id=\"statistics_4\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_5\">
                                                        <div id=\"statistics_5\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"fa fa-briefcase font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Fornecedores</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Fornecedores Criados </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Representantes Ativos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"portlet_ecommerce_tab_1\">
                                                        <div id=\"statistics_6\" class=\"chart\"> </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"portlet_ecommerce_tab_2\">
                                                        <div id=\"statistics_7\" class=\"chart\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <!-- Begin: life time stats -->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Visão Geral</span>
                                                    <span class=\"caption-helper\"> produtos e fornecedores mais cotados</span>
                                                </div>
                                                <div class=\"actions\">
                                                    <div class=\"btn-group\">
                                                        <a class=\"btn blue btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Ações
                                                            <i class=\"fa fa-angle-down\"></i>
                                                        </a>
                                                        <ul class=\"dropdown-menu pull-right\">
                                                            <li>
                                                                <a href=\"javascript:;\"> Pesquisar Produtos </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Lista completa </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Pesquisar Fornecedores </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Lista Completa </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tabbable-line\">
                                                    <ul class=\"nav nav-tabs\">
                                                        <li class=\"active\">
                                                            <a href=\"#overview_1\" data-toggle=\"tab\"> Produtos Mais Cotados </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_2\" data-toggle=\"tab\"> Fornecedores Mais Cotados </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"overview_1\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Nome do Produto </th>
                                                                        <th> Menor Preço </th>
                                                                        <th> Fornecedor </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto</a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Produto </a>
                                                                        </td>
                                                                        <td> R\$625,50 </td>
                                                                        <td> Atacado Martins </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_2\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Fornecedor </th>
                                                                        <th> Representantes </th>
                                                                        <th> Cotações </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Atacado Martins </a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 11.190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
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
{% endblock %}

{% block script %}
    <script src=\"{{ asset('/bundles/assets/global/plugins/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/flot/jquery.flot.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/flot/jquery.flot.resize.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/flot/jquery.flot.categories.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript') }}\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('/bundles/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}/\" type=\"text/javascript\"></script>
{% endblock %}

", "Admin/dashboard/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Admin\\dashboard\\index.html.twig");
    }
}
