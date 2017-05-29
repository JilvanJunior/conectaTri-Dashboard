<?php

/* Retailer/base.html.twig */
class __TwigTemplate_d3d1b4e3c74c95e6591ee499e7e8ead33374f9252b2f935ac78e226fdc2e55aa extends Twig_Template
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
        $__internal_93a77ec7e78a943f8578bb592866382cb9980fdc7e77b03436c663f0f93c970b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a77ec7e78a943f8578bb592866382cb9980fdc7e77b03436c663f0f93c970b->enter($__internal_93a77ec7e78a943f8578bb592866382cb9980fdc7e77b03436c663f0f93c970b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/base.html.twig"));

        $__internal_f5c3c2b55342810930c09044730cd1281c7567b75473d3883edc0c7615fd54c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c3c2b55342810930c09044730cd1281c7567b75473d3883edc0c7615fd54c8->enter($__internal_f5c3c2b55342810930c09044730cd1281c7567b75473d3883edc0c7615fd54c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/base.html.twig"));

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
        
        $__internal_93a77ec7e78a943f8578bb592866382cb9980fdc7e77b03436c663f0f93c970b->leave($__internal_93a77ec7e78a943f8578bb592866382cb9980fdc7e77b03436c663f0f93c970b_prof);

        
        $__internal_f5c3c2b55342810930c09044730cd1281c7567b75473d3883edc0c7615fd54c8->leave($__internal_f5c3c2b55342810930c09044730cd1281c7567b75473d3883edc0c7615fd54c8_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_e83fb6fbfab3b0c0d1b9ecffb0c2796fe01b6665477a8da58d2cb7b4e03c3ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83fb6fbfab3b0c0d1b9ecffb0c2796fe01b6665477a8da58d2cb7b4e03c3ff7->enter($__internal_e83fb6fbfab3b0c0d1b9ecffb0c2796fe01b6665477a8da58d2cb7b4e03c3ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc6a14c1fe48e1d90f06ca8275ae064a92f21cfd7f75f0088d8a64847bc6e676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6a14c1fe48e1d90f06ca8275ae064a92f21cfd7f75f0088d8a64847bc6e676->enter($__internal_fc6a14c1fe48e1d90f06ca8275ae064a92f21cfd7f75f0088d8a64847bc6e676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc6a14c1fe48e1d90f06ca8275ae064a92f21cfd7f75f0088d8a64847bc6e676->leave($__internal_fc6a14c1fe48e1d90f06ca8275ae064a92f21cfd7f75f0088d8a64847bc6e676_prof);

        
        $__internal_e83fb6fbfab3b0c0d1b9ecffb0c2796fe01b6665477a8da58d2cb7b4e03c3ff7->leave($__internal_e83fb6fbfab3b0c0d1b9ecffb0c2796fe01b6665477a8da58d2cb7b4e03c3ff7_prof);

    }

    // line 27
    public function block_description($context, array $blocks = array())
    {
        $__internal_c21fb38458afdc1b377226f32bfaa2a08a06d5d95342f361168aa7903a3ab856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21fb38458afdc1b377226f32bfaa2a08a06d5d95342f361168aa7903a3ab856->enter($__internal_c21fb38458afdc1b377226f32bfaa2a08a06d5d95342f361168aa7903a3ab856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_1dd58f5341a8299f909291f152c0d110e7baa076c67e63d218b0ff7037eeacb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd58f5341a8299f909291f152c0d110e7baa076c67e63d218b0ff7037eeacb6->enter($__internal_1dd58f5341a8299f909291f152c0d110e7baa076c67e63d218b0ff7037eeacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_1dd58f5341a8299f909291f152c0d110e7baa076c67e63d218b0ff7037eeacb6->leave($__internal_1dd58f5341a8299f909291f152c0d110e7baa076c67e63d218b0ff7037eeacb6_prof);

        
        $__internal_c21fb38458afdc1b377226f32bfaa2a08a06d5d95342f361168aa7903a3ab856->leave($__internal_c21fb38458afdc1b377226f32bfaa2a08a06d5d95342f361168aa7903a3ab856_prof);

    }

    // line 37
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_b790381e1a495965686a67df62323f2c497c0ceae5c73101ab9d256f5e671dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b790381e1a495965686a67df62323f2c497c0ceae5c73101ab9d256f5e671dd8->enter($__internal_b790381e1a495965686a67df62323f2c497c0ceae5c73101ab9d256f5e671dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_7125063bb13754b87ec66752707b2e0b1d2a0d0d678652a75e9b2b8afab3496b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7125063bb13754b87ec66752707b2e0b1d2a0d0d678652a75e9b2b8afab3496b->enter($__internal_7125063bb13754b87ec66752707b2e0b1d2a0d0d678652a75e9b2b8afab3496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        
        $__internal_7125063bb13754b87ec66752707b2e0b1d2a0d0d678652a75e9b2b8afab3496b->leave($__internal_7125063bb13754b87ec66752707b2e0b1d2a0d0d678652a75e9b2b8afab3496b_prof);

        
        $__internal_b790381e1a495965686a67df62323f2c497c0ceae5c73101ab9d256f5e671dd8->leave($__internal_b790381e1a495965686a67df62323f2c497c0ceae5c73101ab9d256f5e671dd8_prof);

    }

    // line 427
    public function block_menu_dashboard($context, array $blocks = array())
    {
        $__internal_2d9de5213d81799cd490a2a11a88ecf3f9e21f9a8c796f4ea4b10d756fd28ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9de5213d81799cd490a2a11a88ecf3f9e21f9a8c796f4ea4b10d756fd28ec1->enter($__internal_2d9de5213d81799cd490a2a11a88ecf3f9e21f9a8c796f4ea4b10d756fd28ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        $__internal_7fbef43235548dcbab5cddc5f043b0855097f1dfc760e5aa0e231d8ee091bd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbef43235548dcbab5cddc5f043b0855097f1dfc760e5aa0e231d8ee091bd29->enter($__internal_7fbef43235548dcbab5cddc5f043b0855097f1dfc760e5aa0e231d8ee091bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_dashboard"));

        
        $__internal_7fbef43235548dcbab5cddc5f043b0855097f1dfc760e5aa0e231d8ee091bd29->leave($__internal_7fbef43235548dcbab5cddc5f043b0855097f1dfc760e5aa0e231d8ee091bd29_prof);

        
        $__internal_2d9de5213d81799cd490a2a11a88ecf3f9e21f9a8c796f4ea4b10d756fd28ec1->leave($__internal_2d9de5213d81799cd490a2a11a88ecf3f9e21f9a8c796f4ea4b10d756fd28ec1_prof);

    }

    // line 431
    public function block_menu_pricelist($context, array $blocks = array())
    {
        $__internal_841018af04ae378212592c4bdb214605a1adb8035d6d8f8a7349ffd73019abf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841018af04ae378212592c4bdb214605a1adb8035d6d8f8a7349ffd73019abf6->enter($__internal_841018af04ae378212592c4bdb214605a1adb8035d6d8f8a7349ffd73019abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        $__internal_984ada3f4aa713db799578debdc7e3311cfca6e09fa5b2ad3c02c4b9e07d80fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984ada3f4aa713db799578debdc7e3311cfca6e09fa5b2ad3c02c4b9e07d80fd->enter($__internal_984ada3f4aa713db799578debdc7e3311cfca6e09fa5b2ad3c02c4b9e07d80fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        
        $__internal_984ada3f4aa713db799578debdc7e3311cfca6e09fa5b2ad3c02c4b9e07d80fd->leave($__internal_984ada3f4aa713db799578debdc7e3311cfca6e09fa5b2ad3c02c4b9e07d80fd_prof);

        
        $__internal_841018af04ae378212592c4bdb214605a1adb8035d6d8f8a7349ffd73019abf6->leave($__internal_841018af04ae378212592c4bdb214605a1adb8035d6d8f8a7349ffd73019abf6_prof);

    }

    // line 447
    public function block_menu_list($context, array $blocks = array())
    {
        $__internal_a53c55662071a414c0a35c29820cef55039dd263cc1fda6d97dd3b8faa15ff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53c55662071a414c0a35c29820cef55039dd263cc1fda6d97dd3b8faa15ff68->enter($__internal_a53c55662071a414c0a35c29820cef55039dd263cc1fda6d97dd3b8faa15ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        $__internal_1311ea6137be135f929b7869e434726c51370c5f812e404e27cde627dd250d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1311ea6137be135f929b7869e434726c51370c5f812e404e27cde627dd250d6f->enter($__internal_1311ea6137be135f929b7869e434726c51370c5f812e404e27cde627dd250d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_list"));

        
        $__internal_1311ea6137be135f929b7869e434726c51370c5f812e404e27cde627dd250d6f->leave($__internal_1311ea6137be135f929b7869e434726c51370c5f812e404e27cde627dd250d6f_prof);

        
        $__internal_a53c55662071a414c0a35c29820cef55039dd263cc1fda6d97dd3b8faa15ff68->leave($__internal_a53c55662071a414c0a35c29820cef55039dd263cc1fda6d97dd3b8faa15ff68_prof);

    }

    // line 460
    public function block_menu_products($context, array $blocks = array())
    {
        $__internal_af1a707db3082628bc16e9d1bc44cbaa4164a0f024f332ed984297aaa3fa38e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1a707db3082628bc16e9d1bc44cbaa4164a0f024f332ed984297aaa3fa38e3->enter($__internal_af1a707db3082628bc16e9d1bc44cbaa4164a0f024f332ed984297aaa3fa38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        $__internal_8add0ecd33c65ad328a9b8f65cd207b800111df067f1dc9d4e021994667770c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8add0ecd33c65ad328a9b8f65cd207b800111df067f1dc9d4e021994667770c3->enter($__internal_8add0ecd33c65ad328a9b8f65cd207b800111df067f1dc9d4e021994667770c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        
        $__internal_8add0ecd33c65ad328a9b8f65cd207b800111df067f1dc9d4e021994667770c3->leave($__internal_8add0ecd33c65ad328a9b8f65cd207b800111df067f1dc9d4e021994667770c3_prof);

        
        $__internal_af1a707db3082628bc16e9d1bc44cbaa4164a0f024f332ed984297aaa3fa38e3->leave($__internal_af1a707db3082628bc16e9d1bc44cbaa4164a0f024f332ed984297aaa3fa38e3_prof);

    }

    // line 473
    public function block_menu_suppliers($context, array $blocks = array())
    {
        $__internal_fd2c13238eeb73372ebc91e3016a93243e6cb4007642e252bbc950d04f8057a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2c13238eeb73372ebc91e3016a93243e6cb4007642e252bbc950d04f8057a2->enter($__internal_fd2c13238eeb73372ebc91e3016a93243e6cb4007642e252bbc950d04f8057a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        $__internal_3c64185d995c37898d18b94145f7b9734fb7f50e61067396dbbed312f34f3a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c64185d995c37898d18b94145f7b9734fb7f50e61067396dbbed312f34f3a5d->enter($__internal_3c64185d995c37898d18b94145f7b9734fb7f50e61067396dbbed312f34f3a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_suppliers"));

        
        $__internal_3c64185d995c37898d18b94145f7b9734fb7f50e61067396dbbed312f34f3a5d->leave($__internal_3c64185d995c37898d18b94145f7b9734fb7f50e61067396dbbed312f34f3a5d_prof);

        
        $__internal_fd2c13238eeb73372ebc91e3016a93243e6cb4007642e252bbc950d04f8057a2->leave($__internal_fd2c13238eeb73372ebc91e3016a93243e6cb4007642e252bbc950d04f8057a2_prof);

    }

    // line 510
    public function block_page($context, array $blocks = array())
    {
        $__internal_b41cb9fda10ae88f23cc7050b3453b190d85972756c9d0fcd01fb01c391535f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41cb9fda10ae88f23cc7050b3453b190d85972756c9d0fcd01fb01c391535f7->enter($__internal_b41cb9fda10ae88f23cc7050b3453b190d85972756c9d0fcd01fb01c391535f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_260ff26910b12da54e530f1bd3b3f1570450a6f0bd051973e022179c5d7eb888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260ff26910b12da54e530f1bd3b3f1570450a6f0bd051973e022179c5d7eb888->enter($__internal_260ff26910b12da54e530f1bd3b3f1570450a6f0bd051973e022179c5d7eb888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " ";
        
        $__internal_260ff26910b12da54e530f1bd3b3f1570450a6f0bd051973e022179c5d7eb888->leave($__internal_260ff26910b12da54e530f1bd3b3f1570450a6f0bd051973e022179c5d7eb888_prof);

        
        $__internal_b41cb9fda10ae88f23cc7050b3453b190d85972756c9d0fcd01fb01c391535f7->leave($__internal_b41cb9fda10ae88f23cc7050b3453b190d85972756c9d0fcd01fb01c391535f7_prof);

    }

    // line 604
    public function block_script($context, array $blocks = array())
    {
        $__internal_853761df35564ba501236c3a23099a718c8c26d2bea562f2cf10627a1eeb37f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853761df35564ba501236c3a23099a718c8c26d2bea562f2cf10627a1eeb37f3->enter($__internal_853761df35564ba501236c3a23099a718c8c26d2bea562f2cf10627a1eeb37f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_60c5670956869bb9d4adca87880f87a31f0704df3262e4756c99b772c0f728be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c5670956869bb9d4adca87880f87a31f0704df3262e4756c99b772c0f728be->enter($__internal_60c5670956869bb9d4adca87880f87a31f0704df3262e4756c99b772c0f728be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_60c5670956869bb9d4adca87880f87a31f0704df3262e4756c99b772c0f728be->leave($__internal_60c5670956869bb9d4adca87880f87a31f0704df3262e4756c99b772c0f728be_prof);

        
        $__internal_853761df35564ba501236c3a23099a718c8c26d2bea562f2cf10627a1eeb37f3->leave($__internal_853761df35564ba501236c3a23099a718c8c26d2bea562f2cf10627a1eeb37f3_prof);

    }

    public function getTemplateName()
    {
        return "Retailer/base.html.twig";
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

</html>", "Retailer/base.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Retailer\\base.html.twig");
    }
}
