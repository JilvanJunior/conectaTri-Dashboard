<?php

/* base.html.twig */
class __TwigTemplate_d729328c7e90570bce8f1b31d2d88b65b7ee333fe584c0b4c35aa3c5447c14ac extends Twig_Template
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
            'page' => array($this, 'block_page'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f87c41f910f1b1a04041dd10b8d7a330c0522bb45de16293c8a90c498dafafa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87c41f910f1b1a04041dd10b8d7a330c0522bb45de16293c8a90c498dafafa8->enter($__internal_f87c41f910f1b1a04041dd10b8d7a330c0522bb45de16293c8a90c498dafafa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7522bdac51cc52ad51b2767cb07bba7e92035ce738c1bffd551ae1ed16ba5bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7522bdac51cc52ad51b2767cb07bba7e92035ce738c1bffd551ae1ed16ba5bc3->enter($__internal_7522bdac51cc52ad51b2767cb07bba7e92035ce738c1bffd551ae1ed16ba5bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
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
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply \"dropdown-hoverable\" class after \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                                <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                                <li class=\"dropdown dropdown-extended dropdown-notification dropdown-dark\" id=\"header_notification_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <i class=\"icon-bell\"></i>
                                        <span class=\"badge badge-default\">7</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href=\"app_todo.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">just now</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-success\">
                                                                        <i class=\"fa fa-plus\"></i>
                                                                    </span> New user registered. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">3 mins</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Server #12 overloaded. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">10 mins</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-warning\">
                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                    </span> Server #2 not responding. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">14 hrs</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-info\">
                                                                        <i class=\"fa fa-bullhorn\"></i>
                                                                    </span> Application error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">2 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Database overloaded 68%. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">3 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> A user IP blocked. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">4 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-warning\">
                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">5 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-info\">
                                                                        <i class=\"fa fa-bullhorn\"></i>
                                                                    </span> System Error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">9 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Storage server failed. </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END NOTIFICATION DROPDOWN -->
                                <!-- BEGIN TODO DROPDOWN -->
                                <li class=\"dropdown dropdown-extended dropdown-tasks dropdown-dark\" id=\"header_task_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <i class=\"icon-calendar\"></i>
                                        <span class=\"badge badge-default\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu extended tasks\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href=\"app_todo_2.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">New release v1.2 </span>
                                                                    <span class=\"percent\">30%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">40% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Application deployment</span>
                                                                    <span class=\"percent\">65%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">65% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Mobile app release</span>
                                                                    <span class=\"percent\">98%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">98% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Database migration</span>
                                                                    <span class=\"percent\">10%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">10% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Web server upgrade</span>
                                                                    <span class=\"percent\">58%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">58% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Mobile development</span>
                                                                    <span class=\"percent\">85%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">85% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">New UI release</span>
                                                                    <span class=\"percent\">38%</span>
                                                                </span>
                                                        <span class=\"progress progress-striped\">
                                                                    <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">38% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END TODO DROPDOWN -->
                                <li class=\"droddown dropdown-separator\">
                                    <span class=\"separator\"></span>
                                </li>
                                <!-- BEGIN INBOX DROPDOWN -->
                                <li class=\"dropdown dropdown-extended dropdown-inbox dropdown-dark\" id=\"header_inbox_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <span class=\"circle\">3</span>
                                        <span class=\"corner\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>7 New</strong> Messages</h3>
                                            <a href=\"app_inbox.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Lisa Wong </span>
                                                                    <span class=\"time\">Just Now </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Richard Doe </span>
                                                                    <span class=\"time\">16 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Bob Nilson </span>
                                                                    <span class=\"time\">2 hrs </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Lisa Wong </span>
                                                                    <span class=\"time\">40 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Richard Doe </span>
                                                                    <span class=\"time\">46 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END INBOX DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class=\"dropdown dropdown-user dropdown-dark\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <img alt=\"\" class=\"img-circle\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/img/avatar9.jpg"), "html", null, true);
        echo "\">
                                        <span class=\"username username-hide-mobile\">Jilvan</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-default\">
                                        <li>
                                            <a href=\"page_user_profile_1.html\">
                                                <i class=\"icon-user\"></i> My Profile </a>
                                        </li>
                                        <li>
                                            <a href=\"app_calendar.html\">
                                                <i class=\"icon-calendar\"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href=\"app_inbox.html\">
                                                <i class=\"icon-envelope-open\"></i> My Inbox
                                                <span class=\"badge badge-danger\"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"app_todo_2.html\">
                                                <i class=\"icon-rocket\"></i> My Tasks
                                                <span class=\"badge badge-success\"> 7 </span>
                                            </a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"page_user_lock_1.html\">
                                                <i class=\"icon-lock\"></i> Lock Screen </a>
                                        </li>
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
        // line 427
        $this->displayBlock('menu_dashboard', $context, $blocks);
        echo "\">
                                    <a href=\"";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"> Dashboard
                                    </a>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 431
        $this->displayBlock('menu_pricelist', $context, $blocks);
        echo " \">
                                    <a href=\"javascript:;\"> Cotações
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Iniciar Cotação Remota</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Iniciar Cotação Presencial</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Acompanhar Cotações</a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 447
        $this->displayBlock('menu_list', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Listas
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("novalista");
        echo "\" class=\"nav-link  \"> Adicionar Lista</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 456
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listas");
        echo "\" class=\"nav-link  \"> Listas </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 460
        $this->displayBlock('menu_products', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Produtos
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 466
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("novoproduto");
        echo "\" class=\"nav-link  \"> Adicionar Produtos</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produtos");
        echo "\" class=\"nav-link  \"> Produtos </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown ";
        // line 473
        $this->displayBlock('menu_suppliers', $context, $blocks);
        echo "\">
                                    <a href=\"javascript:;\"> Fornecedores
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 479
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("novofornecedor");
        echo "\" class=\"nav-link  \"> Adicionar Fornecedor</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"";
        // line 482
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fornecedores");
        echo "\" class=\"nav-link  \"> Fornecedores</a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown\">
                                    <a href=\"javascript:;\"> Tribanco
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Conheça o Tribanco</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Peça o Seu Cartão  </a>
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
        // line 510
        $this->displayBlock('page', $context, $blocks);
        // line 511
        echo "    <!-- END CONTAINER -->
</div>
</div>
<div class=\"page-wrapper-row\">
    <div class=\"page-wrapper-bottom\">
        <!-- BEGIN FOOTER -->
        <!-- BEGIN PRE-FOOTER -->
        <div class=\"page-prefooter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Sobre Nós</h2>
                        <p> O conectaTri é uma plataforma...</p>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs12 footer-block\">
                        <h2>Assine nossa newsletter</h2>
                        <div class=\"subscribe-form\">
                            <form action=\"javascript:;\">
                                <div class=\"input-group\">
                                    <input type=\"text\" placeholder=\"novidades@conectatri.com\" class=\"form-control\">
                                    <span class=\"input-group-btn\">
                                                    <button class=\"btn\" type=\"submit\">Assinar</button>
                                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Siga-nos</h2>
                        <ul class=\"social-icons\">
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"rss\" class=\"rss\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"facebook\" class=\"facebook\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"twitter\" class=\"twitter\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"googleplus\" class=\"googleplus\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"linkedin\" class=\"linkedin\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"youtube\" class=\"youtube\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"vimeo\" class=\"vimeo\"></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Contato</h2>
                        <address class=\"margin-bottom-40\"> Telefone: (11) 5933-5317
                            <br> E-mail:
                            <a href=\"mailto:contato@conectatri.com\">contato@conectatri.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class=\"page-footer\">
            <div class=\"container\"> 2017 &copy; Theme By
                <a target=\"_blank\" href=\"#\">ConectaTri</a> &nbsp;|&nbsp;
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
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
";
        // line 604
        $this->displayBlock('script', $context, $blocks);
        // line 605
        echo "<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/pages/scripts/ecommerce-dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/layout3/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 616
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
        
        $__internal_f87c41f910f1b1a04041dd10b8d7a330c0522bb45de16293c8a90c498dafafa8->leave($__internal_f87c41f910f1b1a04041dd10b8d7a330c0522bb45de16293c8a90c498dafafa8_prof);

        
        $__internal_7522bdac51cc52ad51b2767cb07bba7e92035ce738c1bffd551ae1ed16ba5bc3->leave($__internal_7522bdac51cc52ad51b2767cb07bba7e92035ce738c1bffd551ae1ed16ba5bc3_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b4a452b40b04c00aaa6380c213efe71c2fbb559e8e3b3ad2733a188959340be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4a452b40b04c00aaa6380c213efe71c2fbb559e8e3b3ad2733a188959340be->enter($__internal_5b4a452b40b04c00aaa6380c213efe71c2fbb559e8e3b3ad2733a188959340be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34ab944755f85d680679d92451df19cffa79a1ec2206c586410c356aadbccce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ab944755f85d680679d92451df19cffa79a1ec2206c586410c356aadbccce1->enter($__internal_34ab944755f85d680679d92451df19cffa79a1ec2206c586410c356aadbccce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_34ab944755f85d680679d92451df19cffa79a1ec2206c586410c356aadbccce1->leave($__internal_34ab944755f85d680679d92451df19cffa79a1ec2206c586410c356aadbccce1_prof);

        
        $__internal_5b4a452b40b04c00aaa6380c213efe71c2fbb559e8e3b3ad2733a188959340be->leave($__internal_5b4a452b40b04c00aaa6380c213efe71c2fbb559e8e3b3ad2733a188959340be_prof);

    }

    // line 27
    public function block_description($context, array $blocks = array())
    {
        $__internal_161da7792084c12d72634ae72bd596349c1bf96dbd592d2257f23a49cd1ec6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161da7792084c12d72634ae72bd596349c1bf96dbd592d2257f23a49cd1ec6e2->enter($__internal_161da7792084c12d72634ae72bd596349c1bf96dbd592d2257f23a49cd1ec6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_2bd31c398a52dde3c8a4b55f14ada12eabe2136f0725fae7dfb40c798c7c6e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd31c398a52dde3c8a4b55f14ada12eabe2136f0725fae7dfb40c798c7c6e20->enter($__internal_2bd31c398a52dde3c8a4b55f14ada12eabe2136f0725fae7dfb40c798c7c6e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_2bd31c398a52dde3c8a4b55f14ada12eabe2136f0725fae7dfb40c798c7c6e20->leave($__internal_2bd31c398a52dde3c8a4b55f14ada12eabe2136f0725fae7dfb40c798c7c6e20_prof);

        
        $__internal_161da7792084c12d72634ae72bd596349c1bf96dbd592d2257f23a49cd1ec6e2->leave($__internal_161da7792084c12d72634ae72bd596349c1bf96dbd592d2257f23a49cd1ec6e2_prof);

    }

    // line 37
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_c218326ca57d150c065b4336e17a98a321d5088c08cd2b7c4224bd7736e2aff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c218326ca57d150c065b4336e17a98a321d5088c08cd2b7c4224bd7736e2aff0->enter($__internal_c218326ca57d150c065b4336e17a98a321d5088c08cd2b7c4224bd7736e2aff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_e8cac4ce93961af6ea89c167895e126be26497e8893d9cec8dbb0a5ffb8cad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cac4ce93961af6ea89c167895e126be26497e8893d9cec8dbb0a5ffb8cad7f->enter($__internal_e8cac4ce93961af6ea89c167895e126be26497e8893d9cec8dbb0a5ffb8cad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        
        $__internal_e8cac4ce93961af6ea89c167895e126be26497e8893d9cec8dbb0a5ffb8cad7f->leave($__internal_e8cac4ce93961af6ea89c167895e126be26497e8893d9cec8dbb0a5ffb8cad7f_prof);

        
        $__internal_c218326ca57d150c065b4336e17a98a321d5088c08cd2b7c4224bd7736e2aff0->leave($__internal_c218326ca57d150c065b4336e17a98a321d5088c08cd2b7c4224bd7736e2aff0_prof);

    }

    // line 427
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_c5ba358a132438245eb9315d77fe443626bed352f9936f271c39c3b2216286a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ba358a132438245eb9315d77fe443626bed352f9936f271c39c3b2216286a3->enter($__internal_c5ba358a132438245eb9315d77fe443626bed352f9936f271c39c3b2216286a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_fa40d27fc854abcfac8b20fa8e005e46bf1da1525f470e6c51e6e23f4ce77cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa40d27fc854abcfac8b20fa8e005e46bf1da1525f470e6c51e6e23f4ce77cf0->enter($__internal_fa40d27fc854abcfac8b20fa8e005e46bf1da1525f470e6c51e6e23f4ce77cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        
        $__internal_fa40d27fc854abcfac8b20fa8e005e46bf1da1525f470e6c51e6e23f4ce77cf0->leave($__internal_fa40d27fc854abcfac8b20fa8e005e46bf1da1525f470e6c51e6e23f4ce77cf0_prof);

        
        $__internal_c5ba358a132438245eb9315d77fe443626bed352f9936f271c39c3b2216286a3->leave($__internal_c5ba358a132438245eb9315d77fe443626bed352f9936f271c39c3b2216286a3_prof);

    }

    // line 431
    public function block_menu_pricelist($context, array $blocks = array())
    {
        $__internal_0696a0b95805f60f6084c1d319658e061f178187757ed1ba11aa2288999b438f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0696a0b95805f60f6084c1d319658e061f178187757ed1ba11aa2288999b438f->enter($__internal_0696a0b95805f60f6084c1d319658e061f178187757ed1ba11aa2288999b438f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        $__internal_b20a4aef773972239116aee12a197cfeab140fc37d921adfa75953646b0d37fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20a4aef773972239116aee12a197cfeab140fc37d921adfa75953646b0d37fa->enter($__internal_b20a4aef773972239116aee12a197cfeab140fc37d921adfa75953646b0d37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        
        $__internal_b20a4aef773972239116aee12a197cfeab140fc37d921adfa75953646b0d37fa->leave($__internal_b20a4aef773972239116aee12a197cfeab140fc37d921adfa75953646b0d37fa_prof);

        
        $__internal_0696a0b95805f60f6084c1d319658e061f178187757ed1ba11aa2288999b438f->leave($__internal_0696a0b95805f60f6084c1d319658e061f178187757ed1ba11aa2288999b438f_prof);

    }

    // line 447
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_c877135dd9c90b1d9cc7dffa07a7e48fb63c41c4e8bc609b122d90e2a1e1f5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c877135dd9c90b1d9cc7dffa07a7e48fb63c41c4e8bc609b122d90e2a1e1f5e0->enter($__internal_c877135dd9c90b1d9cc7dffa07a7e48fb63c41c4e8bc609b122d90e2a1e1f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_d68a069594c198048c924ce08113020d77a76520a02faec0ec3339c8f33bf86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68a069594c198048c924ce08113020d77a76520a02faec0ec3339c8f33bf86f->enter($__internal_d68a069594c198048c924ce08113020d77a76520a02faec0ec3339c8f33bf86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        
        $__internal_d68a069594c198048c924ce08113020d77a76520a02faec0ec3339c8f33bf86f->leave($__internal_d68a069594c198048c924ce08113020d77a76520a02faec0ec3339c8f33bf86f_prof);

        
        $__internal_c877135dd9c90b1d9cc7dffa07a7e48fb63c41c4e8bc609b122d90e2a1e1f5e0->leave($__internal_c877135dd9c90b1d9cc7dffa07a7e48fb63c41c4e8bc609b122d90e2a1e1f5e0_prof);

    }

    // line 460
    public function block_menu_products($context, array $blocks = array())
    {
        $__internal_2bc694b0f1f632e310942157a580b94528af57439b7cceec903eab79f22ea52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc694b0f1f632e310942157a580b94528af57439b7cceec903eab79f22ea52d->enter($__internal_2bc694b0f1f632e310942157a580b94528af57439b7cceec903eab79f22ea52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        $__internal_68eac6ccd52b7682e21f09f34aea70f82884bbeb2c56ab95b738a2e188a7df13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eac6ccd52b7682e21f09f34aea70f82884bbeb2c56ab95b738a2e188a7df13->enter($__internal_68eac6ccd52b7682e21f09f34aea70f82884bbeb2c56ab95b738a2e188a7df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        
        $__internal_68eac6ccd52b7682e21f09f34aea70f82884bbeb2c56ab95b738a2e188a7df13->leave($__internal_68eac6ccd52b7682e21f09f34aea70f82884bbeb2c56ab95b738a2e188a7df13_prof);

        
        $__internal_2bc694b0f1f632e310942157a580b94528af57439b7cceec903eab79f22ea52d->leave($__internal_2bc694b0f1f632e310942157a580b94528af57439b7cceec903eab79f22ea52d_prof);

    }

    // line 473
    public function block_menu_suppliers($context, array $blocks = array())
    {
        $__internal_5f2b19001436326a54fd742b929025db4ecadebbe349ce9542427698b14decd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2b19001436326a54fd742b929025db4ecadebbe349ce9542427698b14decd9->enter($__internal_5f2b19001436326a54fd742b929025db4ecadebbe349ce9542427698b14decd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        $__internal_3bf6fedacef7d2e728586d5ac494855fbb2e3a5aa26f581622c874422e432d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf6fedacef7d2e728586d5ac494855fbb2e3a5aa26f581622c874422e432d1e->enter($__internal_3bf6fedacef7d2e728586d5ac494855fbb2e3a5aa26f581622c874422e432d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        
        $__internal_3bf6fedacef7d2e728586d5ac494855fbb2e3a5aa26f581622c874422e432d1e->leave($__internal_3bf6fedacef7d2e728586d5ac494855fbb2e3a5aa26f581622c874422e432d1e_prof);

        
        $__internal_5f2b19001436326a54fd742b929025db4ecadebbe349ce9542427698b14decd9->leave($__internal_5f2b19001436326a54fd742b929025db4ecadebbe349ce9542427698b14decd9_prof);

    }

    // line 510
    public function block_page($context, array $blocks = array())
    {
        $__internal_bb645878d8d4360778b415e48304c68978108452b6c9435101d2c9f6f83d6641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb645878d8d4360778b415e48304c68978108452b6c9435101d2c9f6f83d6641->enter($__internal_bb645878d8d4360778b415e48304c68978108452b6c9435101d2c9f6f83d6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_6549e61105c4d27d803237e53347091f758f90374af78da497292787262231f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6549e61105c4d27d803237e53347091f758f90374af78da497292787262231f6->enter($__internal_6549e61105c4d27d803237e53347091f758f90374af78da497292787262231f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " ";
        
        $__internal_6549e61105c4d27d803237e53347091f758f90374af78da497292787262231f6->leave($__internal_6549e61105c4d27d803237e53347091f758f90374af78da497292787262231f6_prof);

        
        $__internal_bb645878d8d4360778b415e48304c68978108452b6c9435101d2c9f6f83d6641->leave($__internal_bb645878d8d4360778b415e48304c68978108452b6c9435101d2c9f6f83d6641_prof);

    }

    // line 604
    public function block_script($context, array $blocks = array())
    {
        $__internal_c72f3872b7e9971015eb7de885a01aba87a1b0c905fb8fe60927e5f365d81c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72f3872b7e9971015eb7de885a01aba87a1b0c905fb8fe60927e5f365d81c5e->enter($__internal_c72f3872b7e9971015eb7de885a01aba87a1b0c905fb8fe60927e5f365d81c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_9b08d27a7cc23326d363364497b81f1f7d6d2177762283700e39ec111835a471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b08d27a7cc23326d363364497b81f1f7d6d2177762283700e39ec111835a471->enter($__internal_9b08d27a7cc23326d363364497b81f1f7d6d2177762283700e39ec111835a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_9b08d27a7cc23326d363364497b81f1f7d6d2177762283700e39ec111835a471->leave($__internal_9b08d27a7cc23326d363364497b81f1f7d6d2177762283700e39ec111835a471_prof);

        
        $__internal_c72f3872b7e9971015eb7de885a01aba87a1b0c905fb8fe60927e5f365d81c5e->leave($__internal_c72f3872b7e9971015eb7de885a01aba87a1b0c905fb8fe60927e5f365d81c5e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  974 => 604,  956 => 510,  939 => 473,  922 => 460,  905 => 447,  888 => 431,  871 => 427,  854 => 37,  837 => 27,  820 => 24,  796 => 616,  792 => 615,  788 => 614,  784 => 613,  778 => 610,  772 => 607,  768 => 605,  766 => 604,  760 => 601,  756 => 600,  752 => 599,  748 => 598,  744 => 597,  740 => 596,  734 => 593,  730 => 592,  726 => 591,  644 => 511,  642 => 510,  611 => 482,  605 => 479,  596 => 473,  589 => 469,  583 => 466,  574 => 460,  567 => 456,  561 => 453,  552 => 447,  533 => 431,  527 => 428,  523 => 427,  458 => 365,  439 => 349,  425 => 338,  411 => 327,  397 => 316,  383 => 305,  138 => 63,  134 => 62,  115 => 46,  111 => 45,  107 => 44,  101 => 41,  97 => 40,  93 => 38,  91 => 37,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  66 => 27,  60 => 24,  35 => 1,);
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
                            <a href=\"{{ path('dashboard') }}\">
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
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply \"dropdown-hoverable\" class after \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                                <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                                <li class=\"dropdown dropdown-extended dropdown-notification dropdown-dark\" id=\"header_notification_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <i class=\"icon-bell\"></i>
                                        <span class=\"badge badge-default\">7</span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href=\"app_todo.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">just now</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-success\">
                                                                        <i class=\"fa fa-plus\"></i>
                                                                    </span> New user registered. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">3 mins</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Server #12 overloaded. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">10 mins</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-warning\">
                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                    </span> Server #2 not responding. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">14 hrs</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-info\">
                                                                        <i class=\"fa fa-bullhorn\"></i>
                                                                    </span> Application error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">2 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Database overloaded 68%. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">3 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> A user IP blocked. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">4 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-warning\">
                                                                        <i class=\"fa fa-bell-o\"></i>
                                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">5 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-info\">
                                                                        <i class=\"fa fa-bullhorn\"></i>
                                                                    </span> System Error. </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                        <span class=\"time\">9 days</span>
                                                        <span class=\"details\">
                                                                    <span class=\"label label-sm label-icon label-danger\">
                                                                        <i class=\"fa fa-bolt\"></i>
                                                                    </span> Storage server failed. </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END NOTIFICATION DROPDOWN -->
                                <!-- BEGIN TODO DROPDOWN -->
                                <li class=\"dropdown dropdown-extended dropdown-tasks dropdown-dark\" id=\"header_task_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <i class=\"icon-calendar\"></i>
                                        <span class=\"badge badge-default\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu extended tasks\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>12 pending</strong> tasks</h3>
                                            <a href=\"app_todo_2.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">New release v1.2 </span>
                                                                    <span class=\"percent\">30%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">40% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Application deployment</span>
                                                                    <span class=\"percent\">65%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">65% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Mobile app release</span>
                                                                    <span class=\"percent\">98%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">98% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Database migration</span>
                                                                    <span class=\"percent\">10%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">10% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Web server upgrade</span>
                                                                    <span class=\"percent\">58%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">58% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">Mobile development</span>
                                                                    <span class=\"percent\">85%</span>
                                                                </span>
                                                        <span class=\"progress\">
                                                                    <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">85% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"javascript:;\">
                                                                <span class=\"task\">
                                                                    <span class=\"desc\">New UI release</span>
                                                                    <span class=\"percent\">38%</span>
                                                                </span>
                                                        <span class=\"progress progress-striped\">
                                                                    <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                        <span class=\"sr-only\">38% Complete</span>
                                                                    </span>
                                                                </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END TODO DROPDOWN -->
                                <li class=\"droddown dropdown-separator\">
                                    <span class=\"separator\"></span>
                                </li>
                                <!-- BEGIN INBOX DROPDOWN -->
                                <li class=\"dropdown dropdown-extended dropdown-inbox dropdown-dark\" id=\"header_inbox_bar\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <span class=\"circle\">3</span>
                                        <span class=\"corner\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"external\">
                                            <h3>You have
                                                <strong>7 New</strong> Messages</h3>
                                            <a href=\"app_inbox.html\">view all</a>
                                        </li>
                                        <li>
                                            <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar2.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Lisa Wong </span>
                                                                    <span class=\"time\">Just Now </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar3.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Richard Doe </span>
                                                                    <span class=\"time\">16 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar1.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Bob Nilson </span>
                                                                    <span class=\"time\">2 hrs </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar2.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Lisa Wong </span>
                                                                    <span class=\"time\">40 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">
                                                                <span class=\"photo\">
                                                                    <img src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar3.jpg') }}\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                                    <span class=\"from\"> Richard Doe </span>
                                                                    <span class=\"time\">46 mins </span>
                                                                </span>
                                                        <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END INBOX DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <li class=\"dropdown dropdown-user dropdown-dark\">
                                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <img alt=\"\" class=\"img-circle\" src=\"{{ asset('/bundles/assets/layouts/layout3/img/avatar9.jpg') }}\">
                                        <span class=\"username username-hide-mobile\">Jilvan</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-default\">
                                        <li>
                                            <a href=\"page_user_profile_1.html\">
                                                <i class=\"icon-user\"></i> My Profile </a>
                                        </li>
                                        <li>
                                            <a href=\"app_calendar.html\">
                                                <i class=\"icon-calendar\"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href=\"app_inbox.html\">
                                                <i class=\"icon-envelope-open\"></i> My Inbox
                                                <span class=\"badge badge-danger\"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"app_todo_2.html\">
                                                <i class=\"icon-rocket\"></i> My Tasks
                                                <span class=\"badge badge-success\"> 7 </span>
                                            </a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"page_user_lock_1.html\">
                                                <i class=\"icon-lock\"></i> Lock Screen </a>
                                        </li>
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
                                    <a href=\"{{ path('dashboard') }}\"> Dashboard
                                    </a>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_pricelist %}{% endblock %} \">
                                    <a href=\"javascript:;\"> Cotações
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Iniciar Cotação Remota</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Iniciar Cotação Presencial</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Acompanhar Cotações</a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_list %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Listas
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('novalista') }}\" class=\"nav-link  \"> Adicionar Lista</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('listas') }}\" class=\"nav-link  \"> Listas </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_products %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Produtos
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('novoproduto') }}\" class=\"nav-link  \"> Adicionar Produtos</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('produtos') }}\" class=\"nav-link  \"> Produtos </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown {% block menu_suppliers %}{% endblock %}\">
                                    <a href=\"javascript:;\"> Fornecedores
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('novofornecedor') }}\" class=\"nav-link  \"> Adicionar Fornecedor</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"{{ path('fornecedores') }}\" class=\"nav-link  \"> Fornecedores</a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup=\"true\" class=\"menu-dropdown classic-menu-dropdown\">
                                    <a href=\"javascript:;\"> Tribanco
                                        <span class=\"arrow\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-left\">
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Conheça o Tribanco</a>
                                        </li>
                                        <li aria-haspopup=\"true\" class=\" \">
                                            <a href=\"#\" class=\"nav-link  \"> Peça o Seu Cartão  </a>
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
        <!-- BEGIN PRE-FOOTER -->
        <div class=\"page-prefooter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Sobre Nós</h2>
                        <p> O conectaTri é uma plataforma...</p>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs12 footer-block\">
                        <h2>Assine nossa newsletter</h2>
                        <div class=\"subscribe-form\">
                            <form action=\"javascript:;\">
                                <div class=\"input-group\">
                                    <input type=\"text\" placeholder=\"novidades@conectatri.com\" class=\"form-control\">
                                    <span class=\"input-group-btn\">
                                                    <button class=\"btn\" type=\"submit\">Assinar</button>
                                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Siga-nos</h2>
                        <ul class=\"social-icons\">
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"rss\" class=\"rss\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"facebook\" class=\"facebook\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"twitter\" class=\"twitter\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"googleplus\" class=\"googleplus\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"linkedin\" class=\"linkedin\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"youtube\" class=\"youtube\"></a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-original-title=\"vimeo\" class=\"vimeo\"></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12 footer-block\">
                        <h2>Contato</h2>
                        <address class=\"margin-bottom-40\"> Telefone: (11) 5933-5317
                            <br> E-mail:
                            <a href=\"mailto:contato@conectatri.com\">contato@conectatri.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class=\"page-footer\">
            <div class=\"container\"> 2017 &copy; Theme By
                <a target=\"_blank\" href=\"#\">ConectaTri</a> &nbsp;|&nbsp;
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

</html>", "base.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\base.html.twig");
    }
}
