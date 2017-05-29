<?php

/* Admin/base.html.twig */
class __TwigTemplate_ded1053311e75b7f8d595046997254c83ee9e14c65fbca980fe121ef353a3b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'page_plugins' => array($this, 'block_page_plugins'),
            'menu_dashboard' => array($this, 'block_menu_dashboard'),
            'menu_pricelist' => array($this, 'block_menu_pricelist'),
            'menu_list' => array($this, 'block_menu_list'),
            'menu_products' => array($this, 'block_menu_products'),
            'menu_suppliers' => array($this, 'block_menu_suppliers'),
            'menu_clients' => array($this, 'block_menu_clients'),
            'page' => array($this, 'block_page'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d95e9ec70cd10843497e61df8885d67f1619808ac8dfeebe3466aa479d85bfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95e9ec70cd10843497e61df8885d67f1619808ac8dfeebe3466aa479d85bfb7->enter($__internal_d95e9ec70cd10843497e61df8885d67f1619808ac8dfeebe3466aa479d85bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $__internal_35a1db2352cb7e01f64b735f4661b14585c4410e01c132a3c5d0504158fb9481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a1db2352cb7e01f64b735f4661b14585c4410e01c132a3c5d0504158fb9481->enter($__internal_35a1db2352cb7e01f64b735f4661b14585c4410e01c132a3c5d0504158fb9481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo " | Conecta Tri</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"";
        // line 27
        $this->displayBlock('description', $context, $blocks);
        echo "\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 37
        $this->displayBlock('page_plugins', $context, $blocks);
        // line 38
        echo "    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/css/themes/default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
<!-- END HEAD -->

<body class=\"page-container-bg-solid\">
<div class=\"page-wrapper\">
    <div class=\"page-wrapper-row\">
        <div class=\"page-wrapper-top\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header\">
                <!-- BEGIN HEADER TOP -->
                <div class=\"page-header-top\">
                    <div class=\"container\">
                        <!-- BEGIN LOGO -->
                        <div class=\"page-logo\">
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\">
                                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/logo-default.jpg"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href=\"javascript:;\" class=\"menu-toggler\"></a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class=\"top-menu\">
                            <ul class=\"nav navbar-nav pull-right\">
                                <li class=\"droddown dropdown-separator\">
                                    <span class=\"separator\"></span>
                                </li>
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class=\"dropdown dropdown-user dropdown-dark\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <img alt=\"\" class=\"img-circle\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar.png"), "html", null, true);
        echo "\">
                                        <span class=\"username username-hide-mobile\">Super Administrador</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-default\">
                                        <li>
                                            <a href=\"page_user_profile_1.html\">
                                                <i class=\"icon-user\"></i> Minha Conta </a>
                                        </li>
                                        <li>
                                            <a href=\"app_calendar.html\">
                                                <i class=\"icon-calendar\"></i> Calendário </a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"page_user_login_1.html\">
                                                <i class=\"icon-key\"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- END HEADER TOP -->
                <!-- BEGIN HEADER MENU -->
                <div class=\"page-header-menu\">
                    <div class=\"container\">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <form class=\"search-form\" action=\"page_general_search.html\" method=\"GET\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" name=\"query\">
                                <span class=\"input-group-btn\">
                                            <a href=\"javascript:;\" class=\"btn submit\">
                                                <i class=\"icon-magnifier\"></i>
                                            </a>
                                        </span>
                            </div>
                        </form>
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN MEGA MENU -->
                        <!-- DOC: Apply \"hor-menu-light\" class after the \"hor-menu\" class below to have a horizontal menu with white background -->
                        <!-- DOC: Remove data-hover=\"dropdown\" and data-close-others=\"true\" attributes below to disable the dropdown opening on mouse hover -->
                        <div class=\"hor-menu  \">
                            <ul class=\"nav navbar-nav\">
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 125
        $this->displayBlock('menu_dashboard', $context, $blocks);
        echo "\">
                                    <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\"> Dashboard
                                    </a>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 129
        $this->displayBlock('menu_pricelist', $context, $blocks);
        echo " \">
                                    <a href=\"javascript:;\"> Cotações
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cotacoes");
        echo "\" class=\"nav-link  \"> Cotações em Andamento</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"form_controls.html\" class=\"nav-link \"> KPI 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 147
        $this->displayBlock('menu_list', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Listas
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listas");
        echo "\" class=\"nav-link  \"> Lista de Listas</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Listas Criadas</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 165
        $this->displayBlock('menu_products', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Produtos
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_produtos");
        echo "\" class=\"nav-link  \"> Lista de Produtos</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Mais Cotados</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Vencedores</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Criados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 189
        $this->displayBlock('menu_suppliers', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Fornecedores
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_fornecedores");
        echo "\" class=\"nav-link  \"> Lista de Fornecedores </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_scatter_pricelistXorder");
        echo "\" class=\"nav-link \"> Fornecedores Com mais Pedidos por Cotação</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_line_createdaccountsXtime");
        echo "\" class=\"nav-link \"> Fornecedores Criados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 210
        $this->displayBlock('menu_clients', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Clientes
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients");
        echo "\" class=\"nav-link  \"> Lista de Clientes </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Enviar Notifição</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients_scatter_pricelistXorder");
        echo "\" class=\"nav-link \"> Clientes Com mais Pedidos por Cotaçao</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Clientes Com mais Pedidos por Valor</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Cadastrados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END MEGA MENU -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!-- END HEADER -->
        </div>
    </div>
    ";
        // line 247
        $this->displayBlock('page', $context, $blocks);
        // line 248
        echo "    <!-- END CONTAINER -->
</div>
</div>
<div class=\"page-wrapper-row\">
    <div class=\"page-wrapper-bottom\">
        <!-- BEGIN FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class=\"page-footer\">
            <div class=\"container\"> 2017 &copy; Theme By
                <a target=\"_blank\" href=\"#\">ConectaTri</a> &nbsp;|&nbsp;<a href=\"mailto:suporte@conectatri.com\">suporte@conectatri.com </a>- <a href=\"callto:+55(11)992995759\">(11) 99299-5759</a>
            </div>
        </div>
        <div class=\"scroll-to-top\">
            <i class=\"icon-arrow-up\"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
    </div>
</div>
</div>

<!--[if lt IE 9]>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 283
        $this->displayBlock('script', $context, $blocks);
        // line 284
        echo "<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/pages/scripts/ecommerce-dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    \$(document).ready(function()
    {
        \$('#clickmewow').click(function()
        {
            \$('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>";
        
        $__internal_d95e9ec70cd10843497e61df8885d67f1619808ac8dfeebe3466aa479d85bfb7->leave($__internal_d95e9ec70cd10843497e61df8885d67f1619808ac8dfeebe3466aa479d85bfb7_prof);

        
        $__internal_35a1db2352cb7e01f64b735f4661b14585c4410e01c132a3c5d0504158fb9481->leave($__internal_35a1db2352cb7e01f64b735f4661b14585c4410e01c132a3c5d0504158fb9481_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5307667de9250f98ee0581dab3eaff46236ab57c1acf87ae43fe787f79e1ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5307667de9250f98ee0581dab3eaff46236ab57c1acf87ae43fe787f79e1ccd->enter($__internal_a5307667de9250f98ee0581dab3eaff46236ab57c1acf87ae43fe787f79e1ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d2c763133dc63ff3382b4121e0c3a2503a273acd42282012197564e2bf68db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2c763133dc63ff3382b4121e0c3a2503a273acd42282012197564e2bf68db1->enter($__internal_2d2c763133dc63ff3382b4121e0c3a2503a273acd42282012197564e2bf68db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2d2c763133dc63ff3382b4121e0c3a2503a273acd42282012197564e2bf68db1->leave($__internal_2d2c763133dc63ff3382b4121e0c3a2503a273acd42282012197564e2bf68db1_prof);

        
        $__internal_a5307667de9250f98ee0581dab3eaff46236ab57c1acf87ae43fe787f79e1ccd->leave($__internal_a5307667de9250f98ee0581dab3eaff46236ab57c1acf87ae43fe787f79e1ccd_prof);

    }

    // line 27
    public function block_description($context, array $blocks = array())
    {
        $__internal_1370d4cefdd7db68dbf760519fdb2d825c42eee94ad5d66c198b42bfdcfee048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1370d4cefdd7db68dbf760519fdb2d825c42eee94ad5d66c198b42bfdcfee048->enter($__internal_1370d4cefdd7db68dbf760519fdb2d825c42eee94ad5d66c198b42bfdcfee048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_c9019fe8ead2113002bdc4dfa1fcd2a099e8f86edeb253e85db53a3d4bcd5a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9019fe8ead2113002bdc4dfa1fcd2a099e8f86edeb253e85db53a3d4bcd5a96->enter($__internal_c9019fe8ead2113002bdc4dfa1fcd2a099e8f86edeb253e85db53a3d4bcd5a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_c9019fe8ead2113002bdc4dfa1fcd2a099e8f86edeb253e85db53a3d4bcd5a96->leave($__internal_c9019fe8ead2113002bdc4dfa1fcd2a099e8f86edeb253e85db53a3d4bcd5a96_prof);

        
        $__internal_1370d4cefdd7db68dbf760519fdb2d825c42eee94ad5d66c198b42bfdcfee048->leave($__internal_1370d4cefdd7db68dbf760519fdb2d825c42eee94ad5d66c198b42bfdcfee048_prof);

    }

    // line 37
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_7bbc9413dc0053dffd3c30873c29659c075366a2cd1bcf8d53eb4e14b53d28b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbc9413dc0053dffd3c30873c29659c075366a2cd1bcf8d53eb4e14b53d28b3->enter($__internal_7bbc9413dc0053dffd3c30873c29659c075366a2cd1bcf8d53eb4e14b53d28b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_d528fe15b8e0ca2abf4b6b04171d4ecb4776a77e0a2238e4031c6579e8f9dc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d528fe15b8e0ca2abf4b6b04171d4ecb4776a77e0a2238e4031c6579e8f9dc8f->enter($__internal_d528fe15b8e0ca2abf4b6b04171d4ecb4776a77e0a2238e4031c6579e8f9dc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        
        $__internal_d528fe15b8e0ca2abf4b6b04171d4ecb4776a77e0a2238e4031c6579e8f9dc8f->leave($__internal_d528fe15b8e0ca2abf4b6b04171d4ecb4776a77e0a2238e4031c6579e8f9dc8f_prof);

        
        $__internal_7bbc9413dc0053dffd3c30873c29659c075366a2cd1bcf8d53eb4e14b53d28b3->leave($__internal_7bbc9413dc0053dffd3c30873c29659c075366a2cd1bcf8d53eb4e14b53d28b3_prof);

    }

    // line 125
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_dc0e51d5b0948d4e0372b6e0e769e49effbbb779a10e98507cbec4239bd5f0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0e51d5b0948d4e0372b6e0e769e49effbbb779a10e98507cbec4239bd5f0d3->enter($__internal_dc0e51d5b0948d4e0372b6e0e769e49effbbb779a10e98507cbec4239bd5f0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_4e17081aff49749694838a225e0b7b2171fa563fa83282a3d2b0b9db7ecd4632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e17081aff49749694838a225e0b7b2171fa563fa83282a3d2b0b9db7ecd4632->enter($__internal_4e17081aff49749694838a225e0b7b2171fa563fa83282a3d2b0b9db7ecd4632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        
        $__internal_4e17081aff49749694838a225e0b7b2171fa563fa83282a3d2b0b9db7ecd4632->leave($__internal_4e17081aff49749694838a225e0b7b2171fa563fa83282a3d2b0b9db7ecd4632_prof);

        
        $__internal_dc0e51d5b0948d4e0372b6e0e769e49effbbb779a10e98507cbec4239bd5f0d3->leave($__internal_dc0e51d5b0948d4e0372b6e0e769e49effbbb779a10e98507cbec4239bd5f0d3_prof);

    }

    // line 129
    public function block_menu_pricelist($context, array $blocks = array())
    {
        $__internal_f6a86676cc444ce440bc00fb564507d4beba1029b81db7e7ece33b618625d5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a86676cc444ce440bc00fb564507d4beba1029b81db7e7ece33b618625d5c9->enter($__internal_f6a86676cc444ce440bc00fb564507d4beba1029b81db7e7ece33b618625d5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        $__internal_49e1094556b2675315a5381213157e1cd79721090578a97767fa7e83c55d9b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e1094556b2675315a5381213157e1cd79721090578a97767fa7e83c55d9b94->enter($__internal_49e1094556b2675315a5381213157e1cd79721090578a97767fa7e83c55d9b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        
        $__internal_49e1094556b2675315a5381213157e1cd79721090578a97767fa7e83c55d9b94->leave($__internal_49e1094556b2675315a5381213157e1cd79721090578a97767fa7e83c55d9b94_prof);

        
        $__internal_f6a86676cc444ce440bc00fb564507d4beba1029b81db7e7ece33b618625d5c9->leave($__internal_f6a86676cc444ce440bc00fb564507d4beba1029b81db7e7ece33b618625d5c9_prof);

    }

    // line 147
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_97472de76e8e0d55a1b99ab3ca7c8377f9104331061965550fed9a76a7f988c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97472de76e8e0d55a1b99ab3ca7c8377f9104331061965550fed9a76a7f988c5->enter($__internal_97472de76e8e0d55a1b99ab3ca7c8377f9104331061965550fed9a76a7f988c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_9836344bc5f3fafaed936050f8180aa4f970930fd52a94ce6a2d0927c49a00dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9836344bc5f3fafaed936050f8180aa4f970930fd52a94ce6a2d0927c49a00dc->enter($__internal_9836344bc5f3fafaed936050f8180aa4f970930fd52a94ce6a2d0927c49a00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        
        $__internal_9836344bc5f3fafaed936050f8180aa4f970930fd52a94ce6a2d0927c49a00dc->leave($__internal_9836344bc5f3fafaed936050f8180aa4f970930fd52a94ce6a2d0927c49a00dc_prof);

        
        $__internal_97472de76e8e0d55a1b99ab3ca7c8377f9104331061965550fed9a76a7f988c5->leave($__internal_97472de76e8e0d55a1b99ab3ca7c8377f9104331061965550fed9a76a7f988c5_prof);

    }

    // line 165
    public function block_menu_products($context, array $blocks = array())
    {
        $__internal_2d814bf9bfee4f2d1b55627e1da3ecb322dabe5e2e25cce4234b3b33edd1aea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d814bf9bfee4f2d1b55627e1da3ecb322dabe5e2e25cce4234b3b33edd1aea6->enter($__internal_2d814bf9bfee4f2d1b55627e1da3ecb322dabe5e2e25cce4234b3b33edd1aea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        $__internal_cf79f7828de09fd6cc17e916e7119597265c2ee15466334318962d2ea37db6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf79f7828de09fd6cc17e916e7119597265c2ee15466334318962d2ea37db6f9->enter($__internal_cf79f7828de09fd6cc17e916e7119597265c2ee15466334318962d2ea37db6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        
        $__internal_cf79f7828de09fd6cc17e916e7119597265c2ee15466334318962d2ea37db6f9->leave($__internal_cf79f7828de09fd6cc17e916e7119597265c2ee15466334318962d2ea37db6f9_prof);

        
        $__internal_2d814bf9bfee4f2d1b55627e1da3ecb322dabe5e2e25cce4234b3b33edd1aea6->leave($__internal_2d814bf9bfee4f2d1b55627e1da3ecb322dabe5e2e25cce4234b3b33edd1aea6_prof);

    }

    // line 189
    public function block_menu_suppliers($context, array $blocks = array())
    {
        $__internal_76a365e62368eb272c04eb21f140b376b54e62da1d694b096d5543b48c2e7735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a365e62368eb272c04eb21f140b376b54e62da1d694b096d5543b48c2e7735->enter($__internal_76a365e62368eb272c04eb21f140b376b54e62da1d694b096d5543b48c2e7735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        $__internal_0ab4d55b944227681489b5e071f2f158f8d8940545f1ea6667a7e5d78fe30421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab4d55b944227681489b5e071f2f158f8d8940545f1ea6667a7e5d78fe30421->enter($__internal_0ab4d55b944227681489b5e071f2f158f8d8940545f1ea6667a7e5d78fe30421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        
        $__internal_0ab4d55b944227681489b5e071f2f158f8d8940545f1ea6667a7e5d78fe30421->leave($__internal_0ab4d55b944227681489b5e071f2f158f8d8940545f1ea6667a7e5d78fe30421_prof);

        
        $__internal_76a365e62368eb272c04eb21f140b376b54e62da1d694b096d5543b48c2e7735->leave($__internal_76a365e62368eb272c04eb21f140b376b54e62da1d694b096d5543b48c2e7735_prof);

    }

    // line 210
    public function block_menu_clients($context, array $blocks = array())
    {
        $__internal_5e05d48978de5615431b37fb5b31eb8b71af79827f3ee6218024202268447f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e05d48978de5615431b37fb5b31eb8b71af79827f3ee6218024202268447f63->enter($__internal_5e05d48978de5615431b37fb5b31eb8b71af79827f3ee6218024202268447f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        $__internal_5b803d65fbf8586992631d312fa50a6ad156e61852f659266427392531aa66a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b803d65fbf8586992631d312fa50a6ad156e61852f659266427392531aa66a5->enter($__internal_5b803d65fbf8586992631d312fa50a6ad156e61852f659266427392531aa66a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        
        $__internal_5b803d65fbf8586992631d312fa50a6ad156e61852f659266427392531aa66a5->leave($__internal_5b803d65fbf8586992631d312fa50a6ad156e61852f659266427392531aa66a5_prof);

        
        $__internal_5e05d48978de5615431b37fb5b31eb8b71af79827f3ee6218024202268447f63->leave($__internal_5e05d48978de5615431b37fb5b31eb8b71af79827f3ee6218024202268447f63_prof);

    }

    // line 247
    public function block_page($context, array $blocks = array())
    {
        $__internal_8fd60213508cbfe2f694f1c3df3675f03fb4285f1d79fbb44116decb692f80bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd60213508cbfe2f694f1c3df3675f03fb4285f1d79fbb44116decb692f80bb->enter($__internal_8fd60213508cbfe2f694f1c3df3675f03fb4285f1d79fbb44116decb692f80bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_f595a39f942735ff224d1ece3531659d49e8b02dbd66b6ab37e3c396d951a436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f595a39f942735ff224d1ece3531659d49e8b02dbd66b6ab37e3c396d951a436->enter($__internal_f595a39f942735ff224d1ece3531659d49e8b02dbd66b6ab37e3c396d951a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " ";
        
        $__internal_f595a39f942735ff224d1ece3531659d49e8b02dbd66b6ab37e3c396d951a436->leave($__internal_f595a39f942735ff224d1ece3531659d49e8b02dbd66b6ab37e3c396d951a436_prof);

        
        $__internal_8fd60213508cbfe2f694f1c3df3675f03fb4285f1d79fbb44116decb692f80bb->leave($__internal_8fd60213508cbfe2f694f1c3df3675f03fb4285f1d79fbb44116decb692f80bb_prof);

    }

    // line 283
    public function block_script($context, array $blocks = array())
    {
        $__internal_090717bcd5609c9470bb43fda77194ec0ebf91a115d1c3740bbc5da5132f8aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090717bcd5609c9470bb43fda77194ec0ebf91a115d1c3740bbc5da5132f8aeb->enter($__internal_090717bcd5609c9470bb43fda77194ec0ebf91a115d1c3740bbc5da5132f8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_8a06ec64891096179815f45b1671c81df3e7a020afeecf3832c58156bec30568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a06ec64891096179815f45b1671c81df3e7a020afeecf3832c58156bec30568->enter($__internal_8a06ec64891096179815f45b1671c81df3e7a020afeecf3832c58156bec30568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_8a06ec64891096179815f45b1671c81df3e7a020afeecf3832c58156bec30568->leave($__internal_8a06ec64891096179815f45b1671c81df3e7a020afeecf3832c58156bec30568_prof);

        
        $__internal_090717bcd5609c9470bb43fda77194ec0ebf91a115d1c3740bbc5da5132f8aeb->leave($__internal_090717bcd5609c9470bb43fda77194ec0ebf91a115d1c3740bbc5da5132f8aeb_prof);

    }

    public function getTemplateName()
    {
        return "Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  665 => 283,  647 => 247,  630 => 210,  613 => 189,  596 => 165,  579 => 147,  562 => 129,  545 => 125,  528 => 37,  511 => 27,  494 => 24,  470 => 295,  466 => 294,  462 => 293,  458 => 292,  452 => 289,  446 => 286,  442 => 284,  440 => 283,  434 => 280,  430 => 279,  426 => 278,  422 => 277,  418 => 276,  414 => 275,  408 => 272,  404 => 271,  400 => 270,  376 => 248,  374 => 247,  349 => 225,  337 => 216,  328 => 210,  319 => 204,  313 => 201,  304 => 195,  295 => 189,  274 => 171,  265 => 165,  250 => 153,  241 => 147,  226 => 135,  217 => 129,  211 => 126,  207 => 125,  158 => 79,  139 => 63,  135 => 62,  116 => 46,  112 => 45,  108 => 44,  102 => 41,  98 => 40,  94 => 38,  92 => 37,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  67 => 27,  61 => 24,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}{% endblock %} | Conecta Tri</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"{% block description %}{% endblock %}\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
{% block page_plugins %}{% endblock %}
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('/bundles/assets/global/css/components-rounded.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"{{ asset('/bundles/assets/layouts/layout3/css/layout.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('/bundles/assets/layouts/layout3/css/themes/default.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
    <link href=\"{{ asset('/bundles/assets/layouts/layout3/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
<!-- END HEAD -->

<body class=\"page-container-bg-solid\">
<div class=\"page-wrapper\">
    <div class=\"page-wrapper-row\">
        <div class=\"page-wrapper-top\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header\">
                <!-- BEGIN HEADER TOP -->
                <div class=\"page-header-top\">
                    <div class=\"container\">
                        <!-- BEGIN LOGO -->
                        <div class=\"page-logo\">
                            <a href=\"{{ path('admin_dashboard') }}\">
                                <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/logo-default.jpg') }}\" alt=\"logo\" class=\"logo-default\">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                        <a href=\"javascript:;\" class=\"menu-toggler\"></a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class=\"top-menu\">
                            <ul class=\"nav navbar-nav pull-right\">
                                <li class=\"droddown dropdown-separator\">
                                    <span class=\"separator\"></span>
                                </li>
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class=\"dropdown dropdown-user dropdown-dark\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <img alt=\"\" class=\"img-circle\" src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar.png') }}\">
                                        <span class=\"username username-hide-mobile\">Super Administrador</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-default\">
                                        <li>
                                            <a href=\"page_user_profile_1.html\">
                                                <i class=\"icon-user\"></i> Minha Conta </a>
                                        </li>
                                        <li>
                                            <a href=\"app_calendar.html\">
                                                <i class=\"icon-calendar\"></i> Calendário </a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"page_user_login_1.html\">
                                                <i class=\"icon-key\"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
                <!-- END HEADER TOP -->
                <!-- BEGIN HEADER MENU -->
                <div class=\"page-header-menu\">
                    <div class=\"container\">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <form class=\"search-form\" action=\"page_general_search.html\" method=\"GET\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" name=\"query\">
                                <span class=\"input-group-btn\">
                                            <a href=\"javascript:;\" class=\"btn submit\">
                                                <i class=\"icon-magnifier\"></i>
                                            </a>
                                        </span>
                            </div>
                        </form>
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN MEGA MENU -->
                        <!-- DOC: Apply \"hor-menu-light\" class after the \"hor-menu\" class below to have a horizontal menu with white background -->
                        <!-- DOC: Remove data-hover=\"dropdown\" and data-close-others=\"true\" attributes below to disable the dropdown opening on mouse hover -->
                        <div class=\"hor-menu  \">
                            <ul class=\"nav navbar-nav\">
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_dashboard %}{% endblock %}\">
                                    <a href=\"{{ path('admin_dashboard') }}\"> Dashboard
                                    </a>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_pricelist %}{% endblock %} \">
                                    <a href=\"javascript:;\"> Cotações
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_cotacoes') }}\" class=\"nav-link  \"> Cotações em Andamento</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"form_controls.html\" class=\"nav-link \"> KPI 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_list %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Listas
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_listas') }}\" class=\"nav-link  \"> Lista de Listas</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Listas Criadas</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_products %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Produtos
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_produtos') }}\" class=\"nav-link  \"> Lista de Produtos</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Mais Cotados</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Vencedores</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Produtos Criados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_suppliers %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Fornecedores
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_fornecedores') }}\" class=\"nav-link  \"> Lista de Fornecedores </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path('admin_suppliers_scatter_pricelistXorder') }}\" class=\"nav-link \"> Fornecedores Com mais Pedidos por Cotação</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path('admin_suppliers_line_createdaccountsXtime') }}\" class=\"nav-link \"> Fornecedores Criados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_clients %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Clientes
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_clients') }}\" class=\"nav-link  \"> Lista de Clientes </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Enviar Notifição</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path ('admin_clients_scatter_pricelistXorder') }}\" class=\"nav-link \"> Clientes Com mais Pedidos por Cotaçao</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Clientes Com mais Pedidos por Valor</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"#\" class=\"nav-link \"> Cadastrados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END MEGA MENU -->
                    </div>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!-- END HEADER -->
        </div>
    </div>
    {% block page %} {% endblock %}
    <!-- END CONTAINER -->
</div>
</div>
<div class=\"page-wrapper-row\">
    <div class=\"page-wrapper-bottom\">
        <!-- BEGIN FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class=\"page-footer\">
            <div class=\"container\"> 2017 &copy; Theme By
                <a target=\"_blank\" href=\"#\">ConectaTri</a> &nbsp;|&nbsp;<a href=\"mailto:suporte@conectatri.com\">suporte@conectatri.com </a>- <a href=\"callto:+55(11)992995759\">(11) 99299-5759</a>
            </div>
        </div>
        <div class=\"scroll-to-top\">
            <i class=\"icon-arrow-up\"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
    </div>
</div>
</div>

<!--[if lt IE 9]>
<script src=\"{{ asset('/bundles/assets/global/plugins/respond.min.js') }}\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/excanvas.min.js') }}\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/ie8.fix.min.js') }}\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"{{ asset('/bundles/assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{% block script %} {% endblock %}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"{{ asset('/bundles/assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ asset('/bundles/assets/pages/scripts/ecommerce-dashboard.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"{{ asset('/bundles/assets/layouts/layout3/scripts/layout.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/layouts/layout3/scripts/demo.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/layouts/global/scripts/quick-sidebar.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('/bundles/assets/layouts/global/scripts/quick-nav.min.js') }}\" type=\"text/javascript\"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    \$(document).ready(function()
    {
        \$('#clickmewow').click(function()
        {
            \$('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>", "Admin/base.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Admin\\base.html.twig");
    }
}
