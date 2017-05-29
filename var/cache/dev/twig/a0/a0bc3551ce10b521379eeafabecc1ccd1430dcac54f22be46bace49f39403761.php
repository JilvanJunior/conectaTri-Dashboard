<?php

/* Retailer/products/addProducts.html.twig */
class __TwigTemplate_1bdd3f3d9905f5123f63a335cb5fe2a15ecfac6b955272b0183367cfb7ebfceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Retailer/base.html.twig", "Retailer/products/addProducts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_products' => array($this, 'block_menu_products'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Retailer/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc6d5b88b9c7344a2c2388a8f71088a502822ec1debd1fd31acfe4521a124ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc6d5b88b9c7344a2c2388a8f71088a502822ec1debd1fd31acfe4521a124ef->enter($__internal_2bc6d5b88b9c7344a2c2388a8f71088a502822ec1debd1fd31acfe4521a124ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/products/addProducts.html.twig"));

        $__internal_3651323a5133c2933df6d9945cb1c6004a8193cbd1219fb18d7ef78bd8a4c332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3651323a5133c2933df6d9945cb1c6004a8193cbd1219fb18d7ef78bd8a4c332->enter($__internal_3651323a5133c2933df6d9945cb1c6004a8193cbd1219fb18d7ef78bd8a4c332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Retailer/products/addProducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc6d5b88b9c7344a2c2388a8f71088a502822ec1debd1fd31acfe4521a124ef->leave($__internal_2bc6d5b88b9c7344a2c2388a8f71088a502822ec1debd1fd31acfe4521a124ef_prof);

        
        $__internal_3651323a5133c2933df6d9945cb1c6004a8193cbd1219fb18d7ef78bd8a4c332->leave($__internal_3651323a5133c2933df6d9945cb1c6004a8193cbd1219fb18d7ef78bd8a4c332_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ff5824a16333585369aada84a9feb04e3323ee49786c9f027e45b7d690d0922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff5824a16333585369aada84a9feb04e3323ee49786c9f027e45b7d690d0922->enter($__internal_6ff5824a16333585369aada84a9feb04e3323ee49786c9f027e45b7d690d0922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0b634c48490f5895f0756b67b5806c64cab5e1d05aa5e9c08badb37ffceb7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b634c48490f5895f0756b67b5806c64cab5e1d05aa5e9c08badb37ffceb7e9->enter($__internal_e0b634c48490f5895f0756b67b5806c64cab5e1d05aa5e9c08badb37ffceb7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Adicionar Produtos";
        
        $__internal_e0b634c48490f5895f0756b67b5806c64cab5e1d05aa5e9c08badb37ffceb7e9->leave($__internal_e0b634c48490f5895f0756b67b5806c64cab5e1d05aa5e9c08badb37ffceb7e9_prof);

        
        $__internal_6ff5824a16333585369aada84a9feb04e3323ee49786c9f027e45b7d690d0922->leave($__internal_6ff5824a16333585369aada84a9feb04e3323ee49786c9f027e45b7d690d0922_prof);

    }

    // line 4
    public function block_menu_products($context, array $blocks = array())
    {
        $__internal_b7485a1843b39d44bada62de83f1095efb33b62dc5c0deff11ec692e84189da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7485a1843b39d44bada62de83f1095efb33b62dc5c0deff11ec692e84189da1->enter($__internal_b7485a1843b39d44bada62de83f1095efb33b62dc5c0deff11ec692e84189da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        $__internal_fa13a3d05899b435c3a3a4fc41a4724aa3a0695f0ac737ba2748b85fe58c7283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa13a3d05899b435c3a3a4fc41a4724aa3a0695f0ac737ba2748b85fe58c7283->enter($__internal_fa13a3d05899b435c3a3a4fc41a4724aa3a0695f0ac737ba2748b85fe58c7283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_products"));

        echo " active ";
        
        $__internal_fa13a3d05899b435c3a3a4fc41a4724aa3a0695f0ac737ba2748b85fe58c7283->leave($__internal_fa13a3d05899b435c3a3a4fc41a4724aa3a0695f0ac737ba2748b85fe58c7283_prof);

        
        $__internal_b7485a1843b39d44bada62de83f1095efb33b62dc5c0deff11ec692e84189da1->leave($__internal_b7485a1843b39d44bada62de83f1095efb33b62dc5c0deff11ec692e84189da1_prof);

    }

    // line 6
    public function block_page($context, array $blocks = array())
    {
        $__internal_9b47d8fa6afdaf09cc8fb530f299a60d89134dcd673b496ca64c498bd4cfc700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b47d8fa6afdaf09cc8fb530f299a60d89134dcd673b496ca64c498bd4cfc700->enter($__internal_9b47d8fa6afdaf09cc8fb530f299a60d89134dcd673b496ca64c498bd4cfc700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_79ac67a32b8461b3ddb8934d69a66362bd40b7d0c1b8eb3ffe55a176aa45c114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ac67a32b8461b3ddb8934d69a66362bd40b7d0c1b8eb3ffe55a176aa45c114->enter($__internal_79ac67a32b8461b3ddb8934d69a66362bd40b7d0c1b8eb3ffe55a176aa45c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 7
        echo "
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
                                <h1>Form Layouts
                                    <small>form layouts</small>
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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <a href=\"#\">More</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Form Stuff</span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class=\"page-content-inner\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"tabbable-line boxless tabbable-reversed\">
                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane active\" id=\"tab_0\">
                                                    <div class=\"portlet box green\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Bottom </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon input-circle-left\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control input-circle-right\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control input-circle-left\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon input-circle-right\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner input-circle\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <span class=\"form-control-static\"> email@example.com </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn btn-circle green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn btn-circle grey-salsa btn-outline\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet box blue-hoki\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Top </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-actions top\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet box yellow\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Top & Bottom </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-actions top\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions fluid\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">form actions on top...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-4\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">form actions without bg color</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <div class=\"portlet-input input-inline input-small\">
                                                                    <div class=\"input-icon right\">
                                                                        <i class=\"icon-magnifier\"></i>
                                                                        <input type=\"text\" class=\"form-control input-circle\" placeholder=\"search...\"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"portlet box red\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Left Aligned </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"portlet box purple\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Right Aligned </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top right\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions right\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"portlet box yellow\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Actions Buttons </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top\">
                                                                            <div class=\"btn-set pull-left\">
                                                                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                <button type=\"button\" class=\"btn blue\">Other Action</button>
                                                                            </div>
                                                                            <div class=\"btn-set pull-right\">
                                                                                <button type=\"button\" class=\"btn default\">Action 1</button>
                                                                                <button type=\"button\" class=\"btn red\">Action 2</button>
                                                                                <button type=\"button\" class=\"btn yellow\">Action 3</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions\">
                                                                            <div class=\"btn-set pull-left\">
                                                                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                <button type=\"button\" class=\"btn blue\">Other Action</button>
                                                                            </div>
                                                                            <div class=\"btn-set pull-right\">
                                                                                <button type=\"button\" class=\"btn default\">Action 1</button>
                                                                                <button type=\"button\" class=\"btn red\">Action 2</button>
                                                                                <button type=\"button\" class=\"btn yellow\">Action 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_1\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions right\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions right\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions left\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_2\">
                                                    <div class=\"portlet box green\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Option 1</option>
                                                                                        <option value=\"1\">Option 2</option>
                                                                                        <option value=\"1\">Option 3</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_3\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_4\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-default btn-sm\">
                                                                    <i class=\"fa fa-pencil\"></i> Edit </a>
                                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-default btn-sm\">
                                                                    <i class=\"fa fa-plus\"></i> Add </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <div class=\"portlet-input input-inline input-small\">
                                                                    <div class=\"input-icon right\">
                                                                        <i class=\"icon-magnifier\"></i>
                                                                        <input type=\"text\" class=\"form-control input-circle\" placeholder=\"search...\"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_5\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-check\"></i> Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_6\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_7\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
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
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
";
        
        $__internal_79ac67a32b8461b3ddb8934d69a66362bd40b7d0c1b8eb3ffe55a176aa45c114->leave($__internal_79ac67a32b8461b3ddb8934d69a66362bd40b7d0c1b8eb3ffe55a176aa45c114_prof);

        
        $__internal_9b47d8fa6afdaf09cc8fb530f299a60d89134dcd673b496ca64c498bd4cfc700->leave($__internal_9b47d8fa6afdaf09cc8fb530f299a60d89134dcd673b496ca64c498bd4cfc700_prof);

    }

    public function getTemplateName()
    {
        return "Retailer/products/addProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  87 => 7,  78 => 6,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Adicionar Produtos{% endblock %}
{% block menu_products %} active {% endblock %}

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
                                <h1>Form Layouts
                                    <small>form layouts</small>
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
                                    <a href=\"#\">More</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Form Stuff</span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class=\"page-content-inner\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"tabbable-line boxless tabbable-reversed\">
                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane active\" id=\"tab_0\">
                                                    <div class=\"portlet box green\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Bottom </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon input-circle-left\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control input-circle-right\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control input-circle-left\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon input-circle-right\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control input-circle\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner input-circle\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <span class=\"form-control-static\"> email@example.com </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn btn-circle green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn btn-circle grey-salsa btn-outline\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet box blue-hoki\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Top </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-actions top\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet box yellow\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Actions On Top & Bottom </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-actions top\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions fluid\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">form actions on top...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-4\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">form actions without bg color</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <div class=\"portlet-input input-inline input-small\">
                                                                    <div class=\"input-icon right\">
                                                                        <i class=\"icon-magnifier\"></i>
                                                                        <input type=\"text\" class=\"form-control input-circle\" placeholder=\"search...\"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Text</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                            <span class=\"help-block\"> A block of help text. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Email Address</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                        <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-envelope\"></i>
                                                                                        </span>
                                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Password</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-group\">
                                                                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                <span class=\"input-group-addon\">
                                                                                            <i class=\"fa fa-user\"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Left Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon\">
                                                                                <i class=\"fa fa-bell-o\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Right Icon</label>
                                                                        <div class=\"col-md-4\">
                                                                            <div class=\"input-icon right\">
                                                                                <i class=\"fa fa-microphone\"></i>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"col-md-3 control-label\">Input With Spinner</label>
                                                                        <div class=\"col-md-4\">
                                                                            <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"col-md-3 control-label\">Static Control</label>
                                                                        <div class=\"col-md-4\">
                                                                            <p class=\"form-control-static\"> email@example.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"portlet box red\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Left Aligned </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"portlet box purple\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Right Aligned </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top right\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions right\">
                                                                            <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"portlet box yellow\">
                                                                <div class=\"portlet-title\">
                                                                    <div class=\"caption\">
                                                                        <i class=\"fa fa-gift\"></i>Actions Buttons </div>
                                                                    <div class=\"tools\">
                                                                        <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                        <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                        <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                        <a href=\"javascript:;\" class=\"remove\"> </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"portlet-body form\">
                                                                    <!-- BEGIN FORM-->
                                                                    <form action=\"#\">
                                                                        <div class=\"form-actions top\">
                                                                            <div class=\"btn-set pull-left\">
                                                                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                <button type=\"button\" class=\"btn blue\">Other Action</button>
                                                                            </div>
                                                                            <div class=\"btn-set pull-right\">
                                                                                <button type=\"button\" class=\"btn default\">Action 1</button>
                                                                                <button type=\"button\" class=\"btn red\">Action 2</button>
                                                                                <button type=\"button\" class=\"btn yellow\">Action 3</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-body\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Text</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text\">
                                                                                <span class=\"help-block\"> A block of help text. </span>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Email Address</label>
                                                                                <div class=\"input-group\">
                                                                                            <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-envelope\"></i>
                                                                                            </span>
                                                                                    <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Password</label>
                                                                                <div class=\"input-group\">
                                                                                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                                                                    <span class=\"input-group-addon\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                            </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Left Icon</label>
                                                                                <div class=\"input-icon\">
                                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Left icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Right Icon</label>
                                                                                <div class=\"input-icon right\">
                                                                                    <i class=\"fa fa-microphone\"></i>
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Right icon\"> </div>
                                                                            </div>
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Input With Spinner</label>
                                                                                <input type=\"password\" class=\"form-control spinner\" placeholder=\"Password\"> </div>
                                                                            <div class=\"form-group last\">
                                                                                <label class=\"control-label\">Static Control</label>
                                                                                <p class=\"form-control-static\"> email@example.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-actions\">
                                                                            <div class=\"btn-set pull-left\">
                                                                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                <button type=\"button\" class=\"btn blue\">Other Action</button>
                                                                            </div>
                                                                            <div class=\"btn-set pull-right\">
                                                                                <button type=\"button\" class=\"btn default\">Action 1</button>
                                                                                <button type=\"button\" class=\"btn red\">Action 2</button>
                                                                                <button type=\"button\" class=\"btn yellow\">Action 3</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_1\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions right\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions right\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"horizontal-form\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">First Name</label>
                                                                                <input type=\"text\" id=\"firstName\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                <span class=\"help-block\"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label\">Last Name</label>
                                                                                <input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Lim\">
                                                                                <span class=\"help-block\"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Gender</label>
                                                                                <select class=\"form-control\">
                                                                                    <option value=\"\">Male</option>
                                                                                    <option value=\"\">Female</option>
                                                                                </select>
                                                                                <span class=\"help-block\"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Date of Birth</label>
                                                                                <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Category</label>
                                                                                <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                    <option value=\"Category 1\">Category 1</option>
                                                                                    <option value=\"Category 2\">Category 2</option>
                                                                                    <option value=\"Category 3\">Category 5</option>
                                                                                    <option value=\"Category 4\">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label\">Membership</label>
                                                                                <div class=\"radio-list\">
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked> Option 1 </label>
                                                                                    <label class=\"radio-inline\">
                                                                                        <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12 \">
                                                                            <div class=\"form-group\">
                                                                                <label>Street</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>City</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>State</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Post Code</label>
                                                                                <input type=\"text\" class=\"form-control\"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label>Country</label>
                                                                                <select class=\"form-control\"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions left\">
                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                    <button type=\"submit\" class=\"btn blue\">
                                                                        <i class=\"fa fa-check\"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_2\">
                                                    <div class=\"portlet box green\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Option 1</option>
                                                                                        <option value=\"1\">Option 2</option>
                                                                                        <option value=\"1\">Option 3</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal\">
                                                                <div class=\"form-body\">
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Chee Kin\">
                                                                                    <span class=\"help-block\"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group has-error\">
                                                                                <label class=\"control-label col-md-3\">Last Name</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select name=\"foo\" class=\"form-control\">
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">Abc</option>
                                                                                        <option value=\"1\">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option value=\"\">Male</option>
                                                                                        <option value=\"\">Female</option>
                                                                                    </select>
                                                                                    <span class=\"help-block\"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\" data-placeholder=\"Choose a Category\" tabindex=\"1\">
                                                                                        <option value=\"Category 1\">Category 1</option>
                                                                                        <option value=\"Category 2\">Category 2</option>
                                                                                        <option value=\"Category 3\">Category 5</option>
                                                                                        <option value=\"Category 4\">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <div class=\"radio-list\">
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                        <label class=\"radio-inline\">
                                                                                            <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 1</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address 2</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <input type=\"text\" class=\"form-control\"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <select class=\"form-control\">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_3\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-red-sunglo\"></i>
                                                                <span class=\"caption-subject font-red-sunglo bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"tools\">
                                                                <a href=\"\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"\" class=\"reload\"> </a>
                                                                <a href=\"\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form class=\"form-horizontal\" role=\"form\">
                                                                <div class=\"form-body\">
                                                                    <h2 class=\"margin-bottom-20\"> View User Info - Bob Nilson </h2>
                                                                    <h3 class=\"form-section\">Person Info</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">First Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Last Name:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Gender:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Date of Birth:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Category:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Membership:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class=\"form-section\">Address</h3>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Address:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">City:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">State:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Post Code:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"form-group\">
                                                                                <label class=\"control-label col-md-3\">Country:</label>
                                                                                <div class=\"col-md-9\">
                                                                                    <p class=\"form-control-static\"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-6\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-pencil\"></i> Edit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-6\"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_4\">
                                                    <div class=\"portlet box blue\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-default btn-sm\">
                                                                    <i class=\"fa fa-pencil\"></i> Edit </a>
                                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-default btn-sm\">
                                                                    <i class=\"fa fa-plus\"></i> Add </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-green-haze\"></i>
                                                                <span class=\"caption-subject font-green-haze bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">some info...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <div class=\"portlet-input input-inline input-small\">
                                                                    <div class=\"input-icon right\">
                                                                        <i class=\"icon-magnifier\"></i>
                                                                        <input type=\"text\" class=\"form-control input-circle\" placeholder=\"search...\"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-row-seperated\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-pencil\"></i> 1Edit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_5\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-offset-3 col-md-9\">
                                                                                    <button type=\"submit\" class=\"btn green\">
                                                                                        <i class=\"fa fa-check\"></i> Submit</button>
                                                                                    <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-equalizer font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_6\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-row-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane\" id=\"tab_7\">
                                                    <div class=\"portlet box blue \">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"fa fa-gift\"></i>Form Sample </div>
                                                            <div class=\"tools\">
                                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light bordered form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class=\"portlet light  form-fit\">
                                                        <div class=\"portlet-title\">
                                                            <div class=\"caption\">
                                                                <i class=\"icon-user font-blue-hoki\"></i>
                                                                <span class=\"caption-subject font-blue-hoki bold uppercase\">Form Sample</span>
                                                                <span class=\"caption-helper\">demo form...</span>
                                                            </div>
                                                            <div class=\"actions\">
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-cloud-upload\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-wrench\"></i>
                                                                </a>
                                                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                                    <i class=\"icon-trash\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"portlet-body form\">
                                                            <!-- BEGIN FORM-->
                                                            <form action=\"#\" class=\"form-horizontal form-bordered form-label-stripped\">
                                                                <div class=\"form-body\">
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">First Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"small\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Last Name</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" placeholder=\"medium\" class=\"form-control\" />
                                                                            <span class=\"help-block\"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Gender</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\">
                                                                                <option value=\"\">Male</option>
                                                                                <option value=\"\">Female</option>
                                                                            </select>
                                                                            <span class=\"help-block\"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Date of Birth</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Category</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_category\">
                                                                                <option value=\"Category 1\">Category 1</option>
                                                                                <option value=\"Category 2\">Category 2</option>
                                                                                <option value=\"Category 3\">Category 5</option>
                                                                                <option value=\"Category 4\">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Multi-Value Select</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control select2_sample1\" multiple>
                                                                                <optgroup label=\"NFC EAST\">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC NORTH\">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC SOUTH\">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"NFC WEST\">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC EAST\">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC NORTH\">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC SOUTH\">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label=\"AFC WEST\">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Membership</label>
                                                                        <div class=\"col-md-9\">
                                                                            <div class=\"radio-list\">
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option1\" /> Free </label>
                                                                                <label>
                                                                                    <input type=\"radio\" name=\"optionsRadios2\" value=\"option2\" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Street</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">City</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">State</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group\">
                                                                        <label class=\"control-label col-md-3\">Post Code</label>
                                                                        <div class=\"col-md-9\">
                                                                            <input type=\"text\" class=\"form-control\"> </div>
                                                                    </div>
                                                                    <div class=\"form-group last\">
                                                                        <label class=\"control-label col-md-3\">Country</label>
                                                                        <div class=\"col-md-9\">
                                                                            <select class=\"form-control\"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"form-actions\">
                                                                    <div class=\"row\">
                                                                        <div class=\"col-md-offset-3 col-md-9\">
                                                                            <button type=\"submit\" class=\"btn green\">
                                                                                <i class=\"fa fa-check\"></i> Submit</button>
                                                                            <button type=\"button\" class=\"btn default\">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
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
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
{% endblock %}", "Retailer/products/addProducts.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Retailer\\products\\addProducts.html.twig");
    }
}
