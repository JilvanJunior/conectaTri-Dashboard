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
        $__internal_f5e812ba3df28cde7ea548a2035ff86e14d5b151aa47880013dc1602d04012bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e812ba3df28cde7ea548a2035ff86e14d5b151aa47880013dc1602d04012bd->enter($__internal_f5e812ba3df28cde7ea548a2035ff86e14d5b151aa47880013dc1602d04012bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $__internal_948ef218dbcfbb8f24ca770edc691b37702d6c1cf7523854ae4ede0fe299bf2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948ef218dbcfbb8f24ca770edc691b37702d6c1cf7523854ae4ede0fe299bf2b->enter($__internal_948ef218dbcfbb8f24ca770edc691b37702d6c1cf7523854ae4ede0fe299bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

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
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cotacoes");
        echo "\" class=\"nav-link  \"> Cotações Finalizadas</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cotacoes");
        echo "\" class=\"nav-link  \"> Pedidos enviados</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_pricelist_line_createdpricelistsXtime");
        echo "\" class=\"nav-link \"> Cotações Realizadas</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 153
        $this->displayBlock('menu_list', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Listas
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 159
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
        // line 171
        $this->displayBlock('menu_products', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Produtos
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 177
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
        // line 195
        $this->displayBlock('menu_suppliers', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Fornecedores
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_fornecedores");
        echo "\" class=\"nav-link  \"> Lista de Fornecedores </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_scatter_pricelistXorder");
        echo "\" class=\"nav-link \"> Fornecedores Com mais Pedidos por Cotação</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_line_createdaccountsXtime");
        echo "\" class=\"nav-link \"> Fornecedores Criados</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 216
        $this->displayBlock('menu_clients', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Clientes
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients");
        echo "\" class=\"nav-link  \"> Lista de Clientes </a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Enviar Mensagem</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients_scatter_pricelistXorder");
        echo "\" class=\"nav-link \"> Clientes Com mais Pedidos por Cotaçao</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients_scatter_orderXvalue");
        echo "\" class=\"nav-link \"> Clientes Com mais Pedidos por Valor</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients_line_createdaccountsXtime");
        echo "\" class=\"nav-link \">Clientes Cadastrados</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_clients_line_createdpricelistsXtime");
        echo "\" class=\"nav-link \">Clientes Ativos</a>
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
        // line 256
        $this->displayBlock('page', $context, $blocks);
        // line 257
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
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 292
        $this->displayBlock('script', $context, $blocks);
        // line 293
        echo "<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/pages/scripts/ecommerce-dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 304
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
        
        $__internal_f5e812ba3df28cde7ea548a2035ff86e14d5b151aa47880013dc1602d04012bd->leave($__internal_f5e812ba3df28cde7ea548a2035ff86e14d5b151aa47880013dc1602d04012bd_prof);

        
        $__internal_948ef218dbcfbb8f24ca770edc691b37702d6c1cf7523854ae4ede0fe299bf2b->leave($__internal_948ef218dbcfbb8f24ca770edc691b37702d6c1cf7523854ae4ede0fe299bf2b_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_110f4c75075a57ef1721d44d9db3736057c2b81a5cbcad7e17e0f431dda4904d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110f4c75075a57ef1721d44d9db3736057c2b81a5cbcad7e17e0f431dda4904d->enter($__internal_110f4c75075a57ef1721d44d9db3736057c2b81a5cbcad7e17e0f431dda4904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4910e4056a0863ae61dfb216101624b638b55fbd7c3d0d2a1295658054483f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4910e4056a0863ae61dfb216101624b638b55fbd7c3d0d2a1295658054483f9c->enter($__internal_4910e4056a0863ae61dfb216101624b638b55fbd7c3d0d2a1295658054483f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4910e4056a0863ae61dfb216101624b638b55fbd7c3d0d2a1295658054483f9c->leave($__internal_4910e4056a0863ae61dfb216101624b638b55fbd7c3d0d2a1295658054483f9c_prof);

        
        $__internal_110f4c75075a57ef1721d44d9db3736057c2b81a5cbcad7e17e0f431dda4904d->leave($__internal_110f4c75075a57ef1721d44d9db3736057c2b81a5cbcad7e17e0f431dda4904d_prof);

    }

    // line 27
    public function block_description($context, array $blocks = array())
    {
        $__internal_4a96263c67c2e4bf40a0667c3bdfc0ca69e571a647ac45142ed2d5e90353aca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a96263c67c2e4bf40a0667c3bdfc0ca69e571a647ac45142ed2d5e90353aca3->enter($__internal_4a96263c67c2e4bf40a0667c3bdfc0ca69e571a647ac45142ed2d5e90353aca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_86a203fa48a90d30fdacefb6a34af5077e78432a399e4a610f6c3704c11614f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a203fa48a90d30fdacefb6a34af5077e78432a399e4a610f6c3704c11614f9->enter($__internal_86a203fa48a90d30fdacefb6a34af5077e78432a399e4a610f6c3704c11614f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_86a203fa48a90d30fdacefb6a34af5077e78432a399e4a610f6c3704c11614f9->leave($__internal_86a203fa48a90d30fdacefb6a34af5077e78432a399e4a610f6c3704c11614f9_prof);

        
        $__internal_4a96263c67c2e4bf40a0667c3bdfc0ca69e571a647ac45142ed2d5e90353aca3->leave($__internal_4a96263c67c2e4bf40a0667c3bdfc0ca69e571a647ac45142ed2d5e90353aca3_prof);

    }

    // line 37
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_52f7182b0b29ed25260fea06577968a871ef6471129787dccf9dd322d0e6d10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f7182b0b29ed25260fea06577968a871ef6471129787dccf9dd322d0e6d10d->enter($__internal_52f7182b0b29ed25260fea06577968a871ef6471129787dccf9dd322d0e6d10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_f847387b5ca2bfe8859740cc85e1f9b7f3534e9ff9b16943b40f2de74543efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f847387b5ca2bfe8859740cc85e1f9b7f3534e9ff9b16943b40f2de74543efe8->enter($__internal_f847387b5ca2bfe8859740cc85e1f9b7f3534e9ff9b16943b40f2de74543efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        
        $__internal_f847387b5ca2bfe8859740cc85e1f9b7f3534e9ff9b16943b40f2de74543efe8->leave($__internal_f847387b5ca2bfe8859740cc85e1f9b7f3534e9ff9b16943b40f2de74543efe8_prof);

        
        $__internal_52f7182b0b29ed25260fea06577968a871ef6471129787dccf9dd322d0e6d10d->leave($__internal_52f7182b0b29ed25260fea06577968a871ef6471129787dccf9dd322d0e6d10d_prof);

    }

    // line 125
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_7e0e3c30fffc8fc269d8e240c11694c386a1792c62376bb25f14c3d6dd828e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0e3c30fffc8fc269d8e240c11694c386a1792c62376bb25f14c3d6dd828e49->enter($__internal_7e0e3c30fffc8fc269d8e240c11694c386a1792c62376bb25f14c3d6dd828e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_91024925d2711a0a867353e098c5a55409ee4aac292070be006546f7f500718f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91024925d2711a0a867353e098c5a55409ee4aac292070be006546f7f500718f->enter($__internal_91024925d2711a0a867353e098c5a55409ee4aac292070be006546f7f500718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        
        $__internal_91024925d2711a0a867353e098c5a55409ee4aac292070be006546f7f500718f->leave($__internal_91024925d2711a0a867353e098c5a55409ee4aac292070be006546f7f500718f_prof);

        
        $__internal_7e0e3c30fffc8fc269d8e240c11694c386a1792c62376bb25f14c3d6dd828e49->leave($__internal_7e0e3c30fffc8fc269d8e240c11694c386a1792c62376bb25f14c3d6dd828e49_prof);

    }

    // line 129
    public function block_menu_pricelist($context, array $blocks = array())
    {
        $__internal_806de1f1724b0b65aaa9c0825e04a00ffa4f4f610a73d1d0c9db8ad6a63d0331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806de1f1724b0b65aaa9c0825e04a00ffa4f4f610a73d1d0c9db8ad6a63d0331->enter($__internal_806de1f1724b0b65aaa9c0825e04a00ffa4f4f610a73d1d0c9db8ad6a63d0331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        $__internal_2d79461d2710c91747ffa64db28323364da7d58281c0f2a7972507523d059400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d79461d2710c91747ffa64db28323364da7d58281c0f2a7972507523d059400->enter($__internal_2d79461d2710c91747ffa64db28323364da7d58281c0f2a7972507523d059400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        
        $__internal_2d79461d2710c91747ffa64db28323364da7d58281c0f2a7972507523d059400->leave($__internal_2d79461d2710c91747ffa64db28323364da7d58281c0f2a7972507523d059400_prof);

        
        $__internal_806de1f1724b0b65aaa9c0825e04a00ffa4f4f610a73d1d0c9db8ad6a63d0331->leave($__internal_806de1f1724b0b65aaa9c0825e04a00ffa4f4f610a73d1d0c9db8ad6a63d0331_prof);

    }

    // line 153
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_a5237ed0ff96b9bccff295be5017913e35fa0062540f8892228162de18ca3219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5237ed0ff96b9bccff295be5017913e35fa0062540f8892228162de18ca3219->enter($__internal_a5237ed0ff96b9bccff295be5017913e35fa0062540f8892228162de18ca3219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_6a24cadd19f3edb9103714e0148a85879f015905cef4a51155939c1036ca7074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a24cadd19f3edb9103714e0148a85879f015905cef4a51155939c1036ca7074->enter($__internal_6a24cadd19f3edb9103714e0148a85879f015905cef4a51155939c1036ca7074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        
        $__internal_6a24cadd19f3edb9103714e0148a85879f015905cef4a51155939c1036ca7074->leave($__internal_6a24cadd19f3edb9103714e0148a85879f015905cef4a51155939c1036ca7074_prof);

        
        $__internal_a5237ed0ff96b9bccff295be5017913e35fa0062540f8892228162de18ca3219->leave($__internal_a5237ed0ff96b9bccff295be5017913e35fa0062540f8892228162de18ca3219_prof);

    }

    // line 171
    public function block_menu_products($context, array $blocks = array())
    {
        $__internal_9ce8e638532f653ddce09b88f023cd91ad98eb4f4f572107528b8c3da5d8520d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce8e638532f653ddce09b88f023cd91ad98eb4f4f572107528b8c3da5d8520d->enter($__internal_9ce8e638532f653ddce09b88f023cd91ad98eb4f4f572107528b8c3da5d8520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        $__internal_e2b6ba2f7ff160410a75ac659ed78ae36dec78c6ec9e3b26e372fcc0658cd768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b6ba2f7ff160410a75ac659ed78ae36dec78c6ec9e3b26e372fcc0658cd768->enter($__internal_e2b6ba2f7ff160410a75ac659ed78ae36dec78c6ec9e3b26e372fcc0658cd768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        
        $__internal_e2b6ba2f7ff160410a75ac659ed78ae36dec78c6ec9e3b26e372fcc0658cd768->leave($__internal_e2b6ba2f7ff160410a75ac659ed78ae36dec78c6ec9e3b26e372fcc0658cd768_prof);

        
        $__internal_9ce8e638532f653ddce09b88f023cd91ad98eb4f4f572107528b8c3da5d8520d->leave($__internal_9ce8e638532f653ddce09b88f023cd91ad98eb4f4f572107528b8c3da5d8520d_prof);

    }

    // line 195
    public function block_menu_suppliers($context, array $blocks = array())
    {
        $__internal_d70eceb5b29fb882aa0e803a719e8f190c929eddaaa456e88de9daf14eb81922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70eceb5b29fb882aa0e803a719e8f190c929eddaaa456e88de9daf14eb81922->enter($__internal_d70eceb5b29fb882aa0e803a719e8f190c929eddaaa456e88de9daf14eb81922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        $__internal_8bae9ff2f05395b0ea43b6ece8a57afb691415a38b4e87964f76ad321b1e45c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bae9ff2f05395b0ea43b6ece8a57afb691415a38b4e87964f76ad321b1e45c9->enter($__internal_8bae9ff2f05395b0ea43b6ece8a57afb691415a38b4e87964f76ad321b1e45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        
        $__internal_8bae9ff2f05395b0ea43b6ece8a57afb691415a38b4e87964f76ad321b1e45c9->leave($__internal_8bae9ff2f05395b0ea43b6ece8a57afb691415a38b4e87964f76ad321b1e45c9_prof);

        
        $__internal_d70eceb5b29fb882aa0e803a719e8f190c929eddaaa456e88de9daf14eb81922->leave($__internal_d70eceb5b29fb882aa0e803a719e8f190c929eddaaa456e88de9daf14eb81922_prof);

    }

    // line 216
    public function block_menu_clients($context, array $blocks = array())
    {
        $__internal_e5f94f6beaca5b0e58d58221edc6e7e79dce52216a37b0f6cb4356f7f23550b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f94f6beaca5b0e58d58221edc6e7e79dce52216a37b0f6cb4356f7f23550b4->enter($__internal_e5f94f6beaca5b0e58d58221edc6e7e79dce52216a37b0f6cb4356f7f23550b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        $__internal_9ca02d04215a108dcf843cb7d2540c53c879060b9e941bf20f736e6d46f5360b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca02d04215a108dcf843cb7d2540c53c879060b9e941bf20f736e6d46f5360b->enter($__internal_9ca02d04215a108dcf843cb7d2540c53c879060b9e941bf20f736e6d46f5360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        
        $__internal_9ca02d04215a108dcf843cb7d2540c53c879060b9e941bf20f736e6d46f5360b->leave($__internal_9ca02d04215a108dcf843cb7d2540c53c879060b9e941bf20f736e6d46f5360b_prof);

        
        $__internal_e5f94f6beaca5b0e58d58221edc6e7e79dce52216a37b0f6cb4356f7f23550b4->leave($__internal_e5f94f6beaca5b0e58d58221edc6e7e79dce52216a37b0f6cb4356f7f23550b4_prof);

    }

    // line 256
    public function block_page($context, array $blocks = array())
    {
        $__internal_f47c22853e123537327d399ccbc22175256c51f158b99ee5655b2546266365f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47c22853e123537327d399ccbc22175256c51f158b99ee5655b2546266365f0->enter($__internal_f47c22853e123537327d399ccbc22175256c51f158b99ee5655b2546266365f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_2a3f838b6014e5e316dd2d86796ccf76b63c6d2bf2a29a251e21bb1f4c0341c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3f838b6014e5e316dd2d86796ccf76b63c6d2bf2a29a251e21bb1f4c0341c3->enter($__internal_2a3f838b6014e5e316dd2d86796ccf76b63c6d2bf2a29a251e21bb1f4c0341c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " ";
        
        $__internal_2a3f838b6014e5e316dd2d86796ccf76b63c6d2bf2a29a251e21bb1f4c0341c3->leave($__internal_2a3f838b6014e5e316dd2d86796ccf76b63c6d2bf2a29a251e21bb1f4c0341c3_prof);

        
        $__internal_f47c22853e123537327d399ccbc22175256c51f158b99ee5655b2546266365f0->leave($__internal_f47c22853e123537327d399ccbc22175256c51f158b99ee5655b2546266365f0_prof);

    }

    // line 292
    public function block_script($context, array $blocks = array())
    {
        $__internal_f61d31c74a05c0518f03b80ab3b2350119ce64114b1b8238cb14f5a46f130cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61d31c74a05c0518f03b80ab3b2350119ce64114b1b8238cb14f5a46f130cd5->enter($__internal_f61d31c74a05c0518f03b80ab3b2350119ce64114b1b8238cb14f5a46f130cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_08f92bae0e50e2945c23696fddb9606afc1cc544997c0dcea0616488774c06ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f92bae0e50e2945c23696fddb9606afc1cc544997c0dcea0616488774c06ce->enter($__internal_08f92bae0e50e2945c23696fddb9606afc1cc544997c0dcea0616488774c06ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_08f92bae0e50e2945c23696fddb9606afc1cc544997c0dcea0616488774c06ce->leave($__internal_08f92bae0e50e2945c23696fddb9606afc1cc544997c0dcea0616488774c06ce_prof);

        
        $__internal_f61d31c74a05c0518f03b80ab3b2350119ce64114b1b8238cb14f5a46f130cd5->leave($__internal_f61d31c74a05c0518f03b80ab3b2350119ce64114b1b8238cb14f5a46f130cd5_prof);

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
        return array (  692 => 292,  674 => 256,  657 => 216,  640 => 195,  623 => 171,  606 => 153,  589 => 129,  572 => 125,  555 => 37,  538 => 27,  521 => 24,  497 => 304,  493 => 303,  489 => 302,  485 => 301,  479 => 298,  473 => 295,  469 => 293,  467 => 292,  461 => 289,  457 => 288,  453 => 287,  449 => 286,  445 => 285,  441 => 284,  435 => 281,  431 => 280,  427 => 279,  403 => 257,  401 => 256,  382 => 240,  376 => 237,  370 => 234,  364 => 231,  352 => 222,  343 => 216,  334 => 210,  328 => 207,  319 => 201,  310 => 195,  289 => 177,  280 => 171,  265 => 159,  256 => 153,  247 => 147,  238 => 141,  232 => 138,  226 => 135,  217 => 129,  211 => 126,  207 => 125,  158 => 79,  139 => 63,  135 => 62,  116 => 46,  112 => 45,  108 => 44,  102 => 41,  98 => 40,  94 => 38,  92 => 37,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  67 => 27,  61 => 24,  36 => 1,);
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
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_cotacoes') }}\" class=\"nav-link  \"> Cotações Finalizadas</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('admin_cotacoes') }}\" class=\"nav-link  \"> Pedidos enviados</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path('admin_pricelist_line_createdpricelistsXtime') }}\" class=\"nav-link \"> Cotações Realizadas</a>
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
                                            <a href=\"#\" class=\"nav-link  \"> Enviar Mensagem</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" dropdown-submenu  \">
                                            <a href=\"#\" class=\"nav-link  \"> <i class=\"fa fa-line-chart\"></i> Gráficos </a>
                                            <ul class=\"dropdown-menu\">
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path ('admin_clients_scatter_pricelistXorder') }}\" class=\"nav-link \"> Clientes Com mais Pedidos por Cotaçao</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path ('admin_clients_scatter_orderXvalue') }}\" class=\"nav-link \"> Clientes Com mais Pedidos por Valor</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path('admin_clients_line_createdaccountsXtime') }}\" class=\"nav-link \">Clientes Cadastrados</a>
                                                </li>
                                                <li aria-haspopup=\"true\" class=\" \">
                                                    <a href=\"{{ path('admin_clients_line_createdpricelistsXtime') }}\" class=\"nav-link \">Clientes Ativos</a>
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
