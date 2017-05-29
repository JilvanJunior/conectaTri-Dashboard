<?php

/* dashboard/index.html.twig */
class __TwigTemplate_c2cd897feef0e4fd052925ab89d66d0a4f5680743863cdeb93e4de8eecfd20ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_971e7fd4cd0844c48b4cb9b85121ec67f40af2c8d4daccd976cf44c61e71107d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971e7fd4cd0844c48b4cb9b85121ec67f40af2c8d4daccd976cf44c61e71107d->enter($__internal_971e7fd4cd0844c48b4cb9b85121ec67f40af2c8d4daccd976cf44c61e71107d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_06bc4f4e722c24a708f1b42d23888e232f92be1959d695335eb2dd4fb0c5789b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc4f4e722c24a708f1b42d23888e232f92be1959d695335eb2dd4fb0c5789b->enter($__internal_06bc4f4e722c24a708f1b42d23888e232f92be1959d695335eb2dd4fb0c5789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971e7fd4cd0844c48b4cb9b85121ec67f40af2c8d4daccd976cf44c61e71107d->leave($__internal_971e7fd4cd0844c48b4cb9b85121ec67f40af2c8d4daccd976cf44c61e71107d_prof);

        
        $__internal_06bc4f4e722c24a708f1b42d23888e232f92be1959d695335eb2dd4fb0c5789b->leave($__internal_06bc4f4e722c24a708f1b42d23888e232f92be1959d695335eb2dd4fb0c5789b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a287badc240a77142da5644d27d5593a2a94cdfbcb5e74d4d2b3c6ba5ae5da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a287badc240a77142da5644d27d5593a2a94cdfbcb5e74d4d2b3c6ba5ae5da7->enter($__internal_8a287badc240a77142da5644d27d5593a2a94cdfbcb5e74d4d2b3c6ba5ae5da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26bd8331c80bea4f1ac78c9b36dd1f4d2c342587fa3c175df0d1cbe95cb1f229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bd8331c80bea4f1ac78c9b36dd1f4d2c342587fa3c175df0d1cbe95cb1f229->enter($__internal_26bd8331c80bea4f1ac78c9b36dd1f4d2c342587fa3c175df0d1cbe95cb1f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_26bd8331c80bea4f1ac78c9b36dd1f4d2c342587fa3c175df0d1cbe95cb1f229->leave($__internal_26bd8331c80bea4f1ac78c9b36dd1f4d2c342587fa3c175df0d1cbe95cb1f229_prof);

        
        $__internal_8a287badc240a77142da5644d27d5593a2a94cdfbcb5e74d4d2b3c6ba5ae5da7->leave($__internal_8a287badc240a77142da5644d27d5593a2a94cdfbcb5e74d4d2b3c6ba5ae5da7_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_e284a4139013443db685211b09d1063e40499e97d5eed5372f9d3229231cfff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e284a4139013443db685211b09d1063e40499e97d5eed5372f9d3229231cfff6->enter($__internal_e284a4139013443db685211b09d1063e40499e97d5eed5372f9d3229231cfff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_7f842e02981ac132a9e7d01eccdfcae075ba177c725ee0390e7fd0bf7b76b66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f842e02981ac132a9e7d01eccdfcae075ba177c725ee0390e7fd0bf7b76b66b->enter($__internal_7f842e02981ac132a9e7d01eccdfcae075ba177c725ee0390e7fd0bf7b76b66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_7f842e02981ac132a9e7d01eccdfcae075ba177c725ee0390e7fd0bf7b76b66b->leave($__internal_7f842e02981ac132a9e7d01eccdfcae075ba177c725ee0390e7fd0bf7b76b66b_prof);

        
        $__internal_e284a4139013443db685211b09d1063e40499e97d5eed5372f9d3229231cfff6->leave($__internal_e284a4139013443db685211b09d1063e40499e97d5eed5372f9d3229231cfff6_prof);

    }

    // line 5
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_e8a400b25e96e723547750fd05f6bceb94e52e4041c8e14f3b1496c713a97617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a400b25e96e723547750fd05f6bceb94e52e4041c8e14f3b1496c713a97617->enter($__internal_e8a400b25e96e723547750fd05f6bceb94e52e4041c8e14f3b1496c713a97617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_29508e44b2ee006c5ed6ef82656674bf2b6eba58aab6c5b0ad52f3225096eca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29508e44b2ee006c5ed6ef82656674bf2b6eba58aab6c5b0ad52f3225096eca9->enter($__internal_29508e44b2ee006c5ed6ef82656674bf2b6eba58aab6c5b0ad52f3225096eca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        echo " active ";
        
        $__internal_29508e44b2ee006c5ed6ef82656674bf2b6eba58aab6c5b0ad52f3225096eca9->leave($__internal_29508e44b2ee006c5ed6ef82656674bf2b6eba58aab6c5b0ad52f3225096eca9_prof);

        
        $__internal_e8a400b25e96e723547750fd05f6bceb94e52e4041c8e14f3b1496c713a97617->leave($__internal_e8a400b25e96e723547750fd05f6bceb94e52e4041c8e14f3b1496c713a97617_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_99fa0760299c0782b47014d48f0bb530c1ba64373db1a1b86f9b1d80ee2d8cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fa0760299c0782b47014d48f0bb530c1ba64373db1a1b86f9b1d80ee2d8cb2->enter($__internal_99fa0760299c0782b47014d48f0bb530c1ba64373db1a1b86f9b1d80ee2d8cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_0c6ef74533b192ba7fc4e9ec8fe3d7642e80fbd4ed87fa82e64fac2eb2caab96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6ef74533b192ba7fc4e9ec8fe3d7642e80fbd4ed87fa82e64fac2eb2caab96->enter($__internal_0c6ef74533b192ba7fc4e9ec8fe3d7642e80fbd4ed87fa82e64fac2eb2caab96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

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
        
        $__internal_0c6ef74533b192ba7fc4e9ec8fe3d7642e80fbd4ed87fa82e64fac2eb2caab96->leave($__internal_0c6ef74533b192ba7fc4e9ec8fe3d7642e80fbd4ed87fa82e64fac2eb2caab96_prof);

        
        $__internal_99fa0760299c0782b47014d48f0bb530c1ba64373db1a1b86f9b1d80ee2d8cb2->leave($__internal_99fa0760299c0782b47014d48f0bb530c1ba64373db1a1b86f9b1d80ee2d8cb2_prof);

    }

    // line 15
    public function block_page($context, array $blocks = array())
    {
        $__internal_b0451d52a1e90b18c535b8e7769d019dedf3ff42e548ef9e6e7869d4780772ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0451d52a1e90b18c535b8e7769d019dedf3ff42e548ef9e6e7869d4780772ff->enter($__internal_b0451d52a1e90b18c535b8e7769d019dedf3ff42e548ef9e6e7869d4780772ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_a6c5385e40e5f8e815467f996f59d56b76c7f7f67f52010383072def3eb64e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c5385e40e5f8e815467f996f59d56b76c7f7f67f52010383072def3eb64e70->enter($__internal_a6c5385e40e5f8e815467f996f59d56b76c7f7f67f52010383072def3eb64e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
                                    <small>cotações...</small>
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
                                                <div class=\"number\"> R\$168,492.54 </div>
                                                <div class=\"desc\"> Pedidos </div>
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
                                                <div class=\"number\"> 1,127,390 </div>
                                                <div class=\"desc\"> Cotações </div>
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
                                                <div class=\"number\"> R\$670.54 </div>
                                                <div class=\"desc\"> Pedido Médio </div>
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
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-share font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Visão Geral</span>
                                                    <span class=\"caption-helper\">report overview...</span>
                                                </div>
                                                <div class=\"actions\">
                                                    <div class=\"btn-group\">
                                                        <a class=\"btn blue btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Ações
                                                            <i class=\"fa fa-angle-down\"></i>
                                                        </a>
                                                        <ul class=\"dropdown-menu pull-right\">
                                                            <li>
                                                                <a href=\"javascript:;\"> All Project </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> AirAsia </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Cruise </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> HSBC </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Pending
                                                                    <span class=\"badge badge-danger\"> 4 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Completed
                                                                    <span class=\"badge badge-success\"> 12 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Overdue
                                                                    <span class=\"badge badge-warning\"> 9 </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tabbable-line\">
                                                    <ul class=\"nav nav-tabs\">
                                                        <li class=\"active\">
                                                            <a href=\"#overview_1\" data-toggle=\"tab\"> Opção 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_2\" data-toggle=\"tab\"> Opção 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_3\" data-toggle=\"tab\"> Opção 3 </a>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Orders
                                                                <i class=\"fa fa-angle-down\"></i>
                                                            </a>
                                                            <ul class=\"dropdown-menu pull-right\">
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-bell\"></i> Latest 10 Orders </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-info\"></i> Pending Orders </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-speech\"></i> Completed Orders </a>
                                                                </li>
                                                                <li class=\"divider\"></li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-settings\"></i> Rejected Orders </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"overview_1\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Product Name </th>
                                                                        <th> Price </th>
                                                                        <th> Sold </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Apple iPhone 4s - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$625.50 </td>
                                                                        <td> 809 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                                        </td>
                                                                        <td> \$915.50 </td>
                                                                        <td> 6709 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy Note 4 </a>
                                                                        </td>
                                                                        <td> \$925.50 </td>
                                                                        <td> 21245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Regatta Luca 3 in 1 Jacket </a>
                                                                        </td>
                                                                        <td> \$25.50 </td>
                                                                        <td> 1245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy Note 3 </a>
                                                                        </td>
                                                                        <td> \$925.50 </td>
                                                                        <td> 21245 </td>
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
                                                                        <th> Product Name </th>
                                                                        <th> Price </th>
                                                                        <th> Views </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Metronic - Responsive Admin + Frontend Theme </a>
                                                                        </td>
                                                                        <td> \$20.00 </td>
                                                                        <td> 11190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Regatta Luca 3 in 1 Jacket </a>
                                                                        </td>
                                                                        <td> \$25.50 </td>
                                                                        <td> 1245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Apple iPhone 4s - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$625.50 </td>
                                                                        <td> 809 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                                        </td>
                                                                        <td> \$915.50 </td>
                                                                        <td> 6709 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_3\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Customer Name </th>
                                                                        <th> Total Orders </th>
                                                                        <th> Total Amount </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> David Wilson </a>
                                                                        </td>
                                                                        <td> 3 </td>
                                                                        <td> \$625.50 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Amanda Nilson </a>
                                                                        </td>
                                                                        <td> 4 </td>
                                                                        <td> \$12625.50 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Jhon Doe </a>
                                                                        </td>
                                                                        <td> 2 </td>
                                                                        <td> \$125.00 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Bill Chang </a>
                                                                        </td>
                                                                        <td> 45 </td>
                                                                        <td> \$12,125.70 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_4\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Customer Name </th>
                                                                        <th> Date </th>
                                                                        <th> Amount </th>
                                                                        <th> Status </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> David Wilson </a>
                                                                        </td>
                                                                        <td> 3 Jan, 2013 </td>
                                                                        <td> \$625.50 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-warning\"> Pending </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Amanda Nilson </a>
                                                                        </td>
                                                                        <td> 13 Feb, 2013 </td>
                                                                        <td> \$12625.50 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-warning\"> Pending </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 Jun, 2013 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Jhon Doe </a>
                                                                        </td>
                                                                        <td> 20 Mar, 2013 </td>
                                                                        <td> \$125.00 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Bill Chang </a>
                                                                        </td>
                                                                        <td> 29 May, 2013 </td>
                                                                        <td> \$12,125.70 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-info\"> In Process </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 Jun, 2013 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
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
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-red\"></i>
                                                    <span class=\"caption-subject font-red bold uppercase\">Preços Cotados</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Preço Médio </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Pedidos </a>
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
                                                <div class=\"well margin-top-20\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-success\"> Tag 1: </span>
                                                            <h3>\$1,234,112.20</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-info\"> Tag 2: </span>
                                                            <h3>\$134,90.10</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-danger\"> Tag 3: </span>
                                                            <h3>\$1,134,90.10</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-warning\"> Tag 4: </span>
                                                            <h3>235090</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-sm-6\">
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-dark hide\"></i>
                                                    <span class=\"caption-subject font-green-steel bold uppercase\">Feeds</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> Cotações </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\"> Atividades </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <!--BEGIN TABS-->
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                                            <ul class=\"feeds\">
                                                                <li>
                                                                    <div class=\"col1\">
                                                                        <div class=\"cont\">
                                                                            <div class=\"cont-col1\">
                                                                                <div class=\"label label-sm label-success\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"cont-col2\">
                                                                                <div class=\"desc\"> Cotação <strong>Cotação Semanal</strong> encerrada</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col2\">
                                                                        <div class=\"date\"> Agora </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class=\"col1\">
                                                                        <div class=\"cont\">
                                                                            <div class=\"cont-col1\">
                                                                                <div class=\"label label-sm label-info\">
                                                                                    <i class=\"fa fa-bullhorn\"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"cont-col2\">
                                                                                <div class=\"desc\"> Pedido enviado. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col2\">
                                                                        <div class=\"date\"> 30 min </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                                            <ul class=\"feeds\">
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Cadastrada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Enviada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Enviada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Produto Cadastrado: <strong>Nescafé em pó</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Fornecedor Cadastrado: <strong>Aki</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 2 horas</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Fornecedor Cadastrado: <strong>Atacado Martins</strong> </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 2 horas </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
                                            </div>
                                        </div>
                                        <!-- END PORTLET-->
                                    </div>
                                    <div class=\"col-md-6 col-sm-6\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption caption-md\">
                                                    <i class=\"icon-bar-chart font-dark hide\"></i>
                                                    <span class=\"caption-subject font-green-steel bold uppercase\">Fornecedores</span>
                                                    <span class=\"caption-helper\">4 pendentes</span>
                                                </div>
                                                <div class=\"inputs\">
                                                    <div class=\"portlet-input input-inline input-small \">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"icon-magnifier\"></i>
                                                            <input type=\"text\" class=\"form-control form-control-solid input-circle\" placeholder=\"buscar...\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"scroller\" style=\"height: 338px;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                    <div class=\"general-item-list\">
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">1 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-success\"> </span> Concluído</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        <!-- BEGIN QUICK SIDEBAR -->
        <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
            <i class=\"icon-login\"></i>
        </a>
        <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
            <div class=\"page-quick-sidebar\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                            <span class=\"badge badge-danger\">2</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                            <span class=\"badge badge-success\">7</span>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-bell\"></i> Alerts </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-info\"></i> Notifications </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-speech\"></i> Activities </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-settings\"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                        <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                            <h3 class=\"list-heading\">Staff</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">8</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Bob Nilson</h4>
                                        <div class=\"media-heading-sub\"> Project Manager </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Nick Larson</h4>
                                        <div class=\"media-heading-sub\"> Art Director </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">3</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar4.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Hubert</h4>
                                        <div class=\"media-heading-sub\"> CTO </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ella Wong</h4>
                                        <div class=\"media-heading-sub\"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">Customers</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-warning\">2</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 970
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar6.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lara Kunis</h4>
                                        <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"label label-sm label-success\">new</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar7.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                        <div class=\"media-heading-sub\"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 989
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar8.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lisa Stone</h4>
                                        <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">7</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 1000
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar9.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Portalatin</h4>
                                        <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 1007
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar10.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Irina Savikova</h4>
                                        <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">4</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 1017
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar11.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Maria Gomez</h4>
                                        <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"page-quick-sidebar-item\">
                            <div class=\"page-quick-sidebar-chat-user\">
                                <div class=\"page-quick-sidebar-nav\">
                                    <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                        <i class=\"icon-arrow-left\"></i>Back</a>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-messages\">
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1034
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1061
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:16</span>
                                            <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-form\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn green\">
                                                <i class=\"icon-paper-clip\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                        <div class=\"page-quick-sidebar-alerts-list\">
                            <h3 class=\"list-heading\">General</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 4 pending tasks.
                                                    <span class=\"label label-sm label-warning \"> Take action
                                                                        <i class=\"fa fa-share\"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-danger\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> New order received with
                                                    <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                    <span class=\"label label-sm label-warning\"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 4 pending tasks.
                                                    <span class=\"label label-sm label-warning \"> Take action
                                                                        <i class=\"fa fa-share\"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-default\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> New order received with
                                                    <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-warning\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                    <span class=\"label label-sm label-default \"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                        <div class=\"page-quick-sidebar-settings-list\">
                            <h3 class=\"list-heading\">General Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li> Enable Notifications
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Allow Tracking
                                    <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Log Errors
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Auto Sumbit Issues
                                    <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Enable SMS Alerts
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                            </ul>
                            <h3 class=\"list-heading\">System Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li> Security Level
                                    <select class=\"form-control input-inline input-sm input-small\">
                                        <option value=\"1\">Normal</option>
                                        <option value=\"2\" selected>Medium</option>
                                        <option value=\"e\">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                <li> Secondary SMTP Port
                                    <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                <li> Notify On System Error
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Notify On SMTP Error
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                            </ul>
                            <div class=\"inner-content\">
                                <button class=\"btn btn-success\">
                                    <i class=\"icon-settings\"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
";
        
        $__internal_a6c5385e40e5f8e815467f996f59d56b76c7f7f67f52010383072def3eb64e70->leave($__internal_a6c5385e40e5f8e815467f996f59d56b76c7f7f67f52010383072def3eb64e70_prof);

        
        $__internal_b0451d52a1e90b18c535b8e7769d019dedf3ff42e548ef9e6e7869d4780772ff->leave($__internal_b0451d52a1e90b18c535b8e7769d019dedf3ff42e548ef9e6e7869d4780772ff_prof);

    }

    // line 1446
    public function block_script($context, array $blocks = array())
    {
        $__internal_a2734e1ec223eb87944eb4764d1e377024f9ad4b2ff8dc00b6a318117c00068e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2734e1ec223eb87944eb4764d1e377024f9ad4b2ff8dc00b6a318117c00068e->enter($__internal_a2734e1ec223eb87944eb4764d1e377024f9ad4b2ff8dc00b6a318117c00068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_d45f8ebb581217551cdea11af748dae1dac26effc1fd64321d8ce17b1198ff5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45f8ebb581217551cdea11af748dae1dac26effc1fd64321d8ce17b1198ff5c->enter($__internal_d45f8ebb581217551cdea11af748dae1dac26effc1fd64321d8ce17b1198ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 1447
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.sparkline.min.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "/\" type=\"text/javascript\"></script>
";
        
        $__internal_d45f8ebb581217551cdea11af748dae1dac26effc1fd64321d8ce17b1198ff5c->leave($__internal_d45f8ebb581217551cdea11af748dae1dac26effc1fd64321d8ce17b1198ff5c_prof);

        
        $__internal_a2734e1ec223eb87944eb4764d1e377024f9ad4b2ff8dc00b6a318117c00068e->leave($__internal_a2734e1ec223eb87944eb4764d1e377024f9ad4b2ff8dc00b6a318117c00068e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1701 => 1461,  1697 => 1460,  1693 => 1459,  1689 => 1458,  1685 => 1457,  1681 => 1456,  1677 => 1455,  1673 => 1454,  1669 => 1453,  1665 => 1452,  1661 => 1451,  1657 => 1450,  1653 => 1449,  1649 => 1448,  1644 => 1447,  1635 => 1446,  1286 => 1106,  1274 => 1097,  1262 => 1088,  1250 => 1079,  1238 => 1070,  1226 => 1061,  1214 => 1052,  1202 => 1043,  1190 => 1034,  1170 => 1017,  1157 => 1007,  1147 => 1000,  1133 => 989,  1122 => 981,  1108 => 970,  1092 => 957,  1082 => 950,  1069 => 940,  1059 => 933,  165 => 42,  137 => 16,  128 => 15,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

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
                                    <small>cotações...</small>
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
                                                <div class=\"number\"> R\$168,492.54 </div>
                                                <div class=\"desc\"> Pedidos </div>
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
                                                <div class=\"number\"> 1,127,390 </div>
                                                <div class=\"desc\"> Cotações </div>
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
                                                <div class=\"number\"> R\$670.54 </div>
                                                <div class=\"desc\"> Pedido Médio </div>
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
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-share font-blue\"></i>
                                                    <span class=\"caption-subject font-blue bold uppercase\">Visão Geral</span>
                                                    <span class=\"caption-helper\">report overview...</span>
                                                </div>
                                                <div class=\"actions\">
                                                    <div class=\"btn-group\">
                                                        <a class=\"btn blue btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Ações
                                                            <i class=\"fa fa-angle-down\"></i>
                                                        </a>
                                                        <ul class=\"dropdown-menu pull-right\">
                                                            <li>
                                                                <a href=\"javascript:;\"> All Project </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> AirAsia </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Cruise </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> HSBC </a>
                                                            </li>
                                                            <li class=\"divider\"> </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Pending
                                                                    <span class=\"badge badge-danger\"> 4 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Completed
                                                                    <span class=\"badge badge-success\"> 12 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"javascript:;\"> Overdue
                                                                    <span class=\"badge badge-warning\"> 9 </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"tabbable-line\">
                                                    <ul class=\"nav nav-tabs\">
                                                        <li class=\"active\">
                                                            <a href=\"#overview_1\" data-toggle=\"tab\"> Opção 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_2\" data-toggle=\"tab\"> Opção 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#overview_3\" data-toggle=\"tab\"> Opção 3 </a>
                                                        </li>
                                                        <li class=\"dropdown\">
                                                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Orders
                                                                <i class=\"fa fa-angle-down\"></i>
                                                            </a>
                                                            <ul class=\"dropdown-menu pull-right\">
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-bell\"></i> Latest 10 Orders </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-info\"></i> Pending Orders </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-speech\"></i> Completed Orders </a>
                                                                </li>
                                                                <li class=\"divider\"></li>
                                                                <li>
                                                                    <a href=\"#overview_4\" data-toggle=\"tab\">
                                                                        <i class=\"icon-settings\"></i> Rejected Orders </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"overview_1\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Product Name </th>
                                                                        <th> Price </th>
                                                                        <th> Sold </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Apple iPhone 4s - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$625.50 </td>
                                                                        <td> 809 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                                        </td>
                                                                        <td> \$915.50 </td>
                                                                        <td> 6709 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy Note 4 </a>
                                                                        </td>
                                                                        <td> \$925.50 </td>
                                                                        <td> 21245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Regatta Luca 3 in 1 Jacket </a>
                                                                        </td>
                                                                        <td> \$25.50 </td>
                                                                        <td> 1245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy Note 3 </a>
                                                                        </td>
                                                                        <td> \$925.50 </td>
                                                                        <td> 21245 </td>
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
                                                                        <th> Product Name </th>
                                                                        <th> Price </th>
                                                                        <th> Views </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Metronic - Responsive Admin + Frontend Theme </a>
                                                                        </td>
                                                                        <td> \$20.00 </td>
                                                                        <td> 11190 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Regatta Luca 3 in 1 Jacket </a>
                                                                        </td>
                                                                        <td> \$25.50 </td>
                                                                        <td> 1245 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Apple iPhone 4s - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$625.50 </td>
                                                                        <td> 809 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                                        </td>
                                                                        <td> \$915.50 </td>
                                                                        <td> 6709 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                                                        </td>
                                                                        <td> \$878.50 </td>
                                                                        <td> 784 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_3\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Customer Name </th>
                                                                        <th> Total Orders </th>
                                                                        <th> Total Amount </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> David Wilson </a>
                                                                        </td>
                                                                        <td> 3 </td>
                                                                        <td> \$625.50 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Amanda Nilson </a>
                                                                        </td>
                                                                        <td> 4 </td>
                                                                        <td> \$12625.50 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Jhon Doe </a>
                                                                        </td>
                                                                        <td> 2 </td>
                                                                        <td> \$125.00 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Bill Chang </a>
                                                                        </td>
                                                                        <td> 45 </td>
                                                                        <td> \$12,125.70 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"overview_4\">
                                                            <div class=\"table-responsive\">
                                                                <table class=\"table table-striped table-hover table-bordered\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th> Customer Name </th>
                                                                        <th> Date </th>
                                                                        <th> Amount </th>
                                                                        <th> Status </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> David Wilson </a>
                                                                        </td>
                                                                        <td> 3 Jan, 2013 </td>
                                                                        <td> \$625.50 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-warning\"> Pending </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Amanda Nilson </a>
                                                                        </td>
                                                                        <td> 13 Feb, 2013 </td>
                                                                        <td> \$12625.50 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-warning\"> Pending </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 Jun, 2013 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Jhon Doe </a>
                                                                        </td>
                                                                        <td> 20 Mar, 2013 </td>
                                                                        <td> \$125.00 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Bill Chang </a>
                                                                        </td>
                                                                        <td> 29 May, 2013 </td>
                                                                        <td> \$12,125.70 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-info\"> In Process </span>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\">
                                                                                <i class=\"fa fa-search\"></i> Ver </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href=\"javascript:;\"> Paul Strong </a>
                                                                        </td>
                                                                        <td> 1 Jun, 2013 </td>
                                                                        <td> \$890.85 </td>
                                                                        <td>
                                                                            <span class=\"label label-sm label-success\"> Success </span>
                                                                        </td>
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
                                    <div class=\"col-md-6\">
                                        <!-- Begin: life time stats -->
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-red\"></i>
                                                    <span class=\"caption-subject font-red bold uppercase\">Preços Cotados</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#portlet_ecommerce_tab_1\" data-toggle=\"tab\"> Preço Médio </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#portlet_ecommerce_tab_2\" id=\"statistics_orders_tab\" data-toggle=\"tab\"> Pedidos </a>
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
                                                <div class=\"well margin-top-20\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-success\"> Tag 1: </span>
                                                            <h3>\$1,234,112.20</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-info\"> Tag 2: </span>
                                                            <h3>\$134,90.10</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-danger\"> Tag 3: </span>
                                                            <h3>\$1,134,90.10</h3>
                                                        </div>
                                                        <div class=\"col-md-3 col-sm-3 col-xs-6 text-stat\">
                                                            <span class=\"label label-warning\"> Tag 4: </span>
                                                            <h3>235090</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: life time stats -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-sm-6\">
                                        <!-- BEGIN PORTLET-->
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title tabbable-line\">
                                                <div class=\"caption\">
                                                    <i class=\"icon-globe font-dark hide\"></i>
                                                    <span class=\"caption-subject font-green-steel bold uppercase\">Feeds</span>
                                                </div>
                                                <ul class=\"nav nav-tabs\">
                                                    <li class=\"active\">
                                                        <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> Cotações </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#tab_1_2\" data-toggle=\"tab\"> Atividades </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <!--BEGIN TABS-->
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                                                        <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                                            <ul class=\"feeds\">
                                                                <li>
                                                                    <div class=\"col1\">
                                                                        <div class=\"cont\">
                                                                            <div class=\"cont-col1\">
                                                                                <div class=\"label label-sm label-success\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"cont-col2\">
                                                                                <div class=\"desc\"> Cotação <strong>Cotação Semanal</strong> encerrada</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col2\">
                                                                        <div class=\"date\"> Agora </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class=\"col1\">
                                                                        <div class=\"cont\">
                                                                            <div class=\"cont-col1\">
                                                                                <div class=\"label label-sm label-info\">
                                                                                    <i class=\"fa fa-bullhorn\"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"cont-col2\">
                                                                                <div class=\"desc\"> Pedido enviado. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col2\">
                                                                        <div class=\"date\"> 30 min </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"tab_1_2\">
                                                        <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                                            <ul class=\"feeds\">
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Cadastrada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Enviada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Cotação Enviada: <strong>Cotação Semanal</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Produto Cadastrado: <strong>Nescafé em pó</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 15 min </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Fornecedor Cadastrado: <strong>Aki</strong>  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 2 horas</div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"javascript:;\">
                                                                        <div class=\"col1\">
                                                                            <div class=\"cont\">
                                                                                <div class=\"cont-col1\">
                                                                                    <div class=\"label label-sm label-success\">
                                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"cont-col2\">
                                                                                    <div class=\"desc\"> Fornecedor Cadastrado: <strong>Atacado Martins</strong> </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col2\">
                                                                            <div class=\"date\"> 2 horas </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
                                            </div>
                                        </div>
                                        <!-- END PORTLET-->
                                    </div>
                                    <div class=\"col-md-6 col-sm-6\">
                                        <div class=\"portlet light \">
                                            <div class=\"portlet-title\">
                                                <div class=\"caption caption-md\">
                                                    <i class=\"icon-bar-chart font-dark hide\"></i>
                                                    <span class=\"caption-subject font-green-steel bold uppercase\">Fornecedores</span>
                                                    <span class=\"caption-helper\">4 pendentes</span>
                                                </div>
                                                <div class=\"inputs\">
                                                    <div class=\"portlet-input input-inline input-small \">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"icon-magnifier\"></i>
                                                            <input type=\"text\" class=\"form-control form-control-solid input-circle\" placeholder=\"buscar...\"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <div class=\"scroller\" style=\"height: 338px;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                                    <div class=\"general-item-list\">
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">1 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-success\"> </span> Concluído</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                        <div class=\"item\">
                                                            <div class=\"item-head\">
                                                                <div class=\"item-details\">
                                                                    <a href=\"\" class=\"item-name primary-link\">Varejo Martins</a>
                                                                    <span class=\"item-label\">3 horas atrás</span>
                                                                </div>
                                                                <span class=\"item-status\">
                                                                            <span class=\"badge badge-empty badge-warning\"> </span> Pendente</span>
                                                            </div>
                                                            <div class=\"item-body\">
                                                                Marcelo Teixeira<br>
                                                                marcelo@martins.com.br<br>
                                                                (11) 5933-5317
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        <!-- BEGIN QUICK SIDEBAR -->
        <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
            <i class=\"icon-login\"></i>
        </a>
        <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
            <div class=\"page-quick-sidebar\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                            <span class=\"badge badge-danger\">2</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                            <span class=\"badge badge-success\">7</span>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-bell\"></i> Alerts </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-info\"></i> Notifications </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-speech\"></i> Activities </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                    <i class=\"icon-settings\"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                        <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                            <h3 class=\"list-heading\">Staff</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">8</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Bob Nilson</h4>
                                        <div class=\"media-heading-sub\"> Project Manager </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar1.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Nick Larson</h4>
                                        <div class=\"media-heading-sub\"> Art Director </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">3</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar4.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Hubert</h4>
                                        <div class=\"media-heading-sub\"> CTO </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar2.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ella Wong</h4>
                                        <div class=\"media-heading-sub\"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">Customers</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-warning\">2</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar6.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lara Kunis</h4>
                                        <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"label label-sm label-success\">new</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar7.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                        <div class=\"media-heading-sub\"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar8.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lisa Stone</h4>
                                        <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">7</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar9.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Portalatin</h4>
                                        <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar10.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Irina Savikova</h4>
                                        <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">4</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar11.jpg') }}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Maria Gomez</h4>
                                        <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                        <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"page-quick-sidebar-item\">
                            <div class=\"page-quick-sidebar-chat-user\">
                                <div class=\"page-quick-sidebar-nav\">
                                    <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                        <i class=\"icon-arrow-left\"></i>Back</a>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-messages\">
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar2.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar2.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:16</span>
                                            <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar2.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar2.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('/bundles/assets/layouts/layout/img/avatar3.jpg') }}\" />
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-form\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn green\">
                                                <i class=\"icon-paper-clip\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                        <div class=\"page-quick-sidebar-alerts-list\">
                            <h3 class=\"list-heading\">General</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 4 pending tasks.
                                                    <span class=\"label label-sm label-warning \"> Take action
                                                                        <i class=\"fa fa-share\"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-danger\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> New order received with
                                                    <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                    <span class=\"label label-sm label-warning\"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 4 pending tasks.
                                                    <span class=\"label label-sm label-warning \"> Take action
                                                                        <i class=\"fa fa-share\"></i>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-default\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> New order received with
                                                    <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-warning\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                    <span class=\"label label-sm label-default \"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                        <div class=\"page-quick-sidebar-settings-list\">
                            <h3 class=\"list-heading\">General Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li> Enable Notifications
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Allow Tracking
                                    <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Log Errors
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Auto Sumbit Issues
                                    <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Enable SMS Alerts
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                            </ul>
                            <h3 class=\"list-heading\">System Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li> Security Level
                                    <select class=\"form-control input-inline input-sm input-small\">
                                        <option value=\"1\">Normal</option>
                                        <option value=\"2\" selected>Medium</option>
                                        <option value=\"e\">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                <li> Secondary SMTP Port
                                    <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                <li> Notify On System Error
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                <li> Notify On SMTP Error
                                    <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                            </ul>
                            <div class=\"inner-content\">
                                <button class=\"btn btn-success\">
                                    <i class=\"icon-settings\"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
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

", "dashboard/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\dashboard\\index.html.twig");
    }
}
