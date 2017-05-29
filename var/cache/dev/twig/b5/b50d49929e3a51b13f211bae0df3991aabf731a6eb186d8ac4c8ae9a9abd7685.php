<?php

/* Admin/pricelist/index.html.twig */
class __TwigTemplate_ffef4bfafb8eb733a1ccabcb16cb5cd82b41ff978efadd8fbe3f781441f2447b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/pricelist/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'menu_pricelist' => array($this, 'block_menu_pricelist'),
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
        $__internal_3f4e31454010d3dc39fb25b6b982b904179164dd8b27f3c76d98fb630b771f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4e31454010d3dc39fb25b6b982b904179164dd8b27f3c76d98fb630b771f24->enter($__internal_3f4e31454010d3dc39fb25b6b982b904179164dd8b27f3c76d98fb630b771f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/pricelist/index.html.twig"));

        $__internal_e1cc16b0ed335aefd6990c65e5e1a2f3e78185dcd1cf7ff2f0f1cc220f2262da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cc16b0ed335aefd6990c65e5e1a2f3e78185dcd1cf7ff2f0f1cc220f2262da->enter($__internal_e1cc16b0ed335aefd6990c65e5e1a2f3e78185dcd1cf7ff2f0f1cc220f2262da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/pricelist/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f4e31454010d3dc39fb25b6b982b904179164dd8b27f3c76d98fb630b771f24->leave($__internal_3f4e31454010d3dc39fb25b6b982b904179164dd8b27f3c76d98fb630b771f24_prof);

        
        $__internal_e1cc16b0ed335aefd6990c65e5e1a2f3e78185dcd1cf7ff2f0f1cc220f2262da->leave($__internal_e1cc16b0ed335aefd6990c65e5e1a2f3e78185dcd1cf7ff2f0f1cc220f2262da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf79324aa7273d9f5d96e879cb56a8fc8961b837c7d0ff72419658bc4f8ac65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf79324aa7273d9f5d96e879cb56a8fc8961b837c7d0ff72419658bc4f8ac65->enter($__internal_4bf79324aa7273d9f5d96e879cb56a8fc8961b837c7d0ff72419658bc4f8ac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f40cb4c260f798faeb5596222c55e57f2528a262d13815e4cc77f74deb8eff42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40cb4c260f798faeb5596222c55e57f2528a262d13815e4cc77f74deb8eff42->enter($__internal_f40cb4c260f798faeb5596222c55e57f2528a262d13815e4cc77f74deb8eff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cotações";
        
        $__internal_f40cb4c260f798faeb5596222c55e57f2528a262d13815e4cc77f74deb8eff42->leave($__internal_f40cb4c260f798faeb5596222c55e57f2528a262d13815e4cc77f74deb8eff42_prof);

        
        $__internal_4bf79324aa7273d9f5d96e879cb56a8fc8961b837c7d0ff72419658bc4f8ac65->leave($__internal_4bf79324aa7273d9f5d96e879cb56a8fc8961b837c7d0ff72419658bc4f8ac65_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_9339e0c6e8230ecf12a3cbca1ebb4fd81986f11010aaf82751b7e7851e68f416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9339e0c6e8230ecf12a3cbca1ebb4fd81986f11010aaf82751b7e7851e68f416->enter($__internal_9339e0c6e8230ecf12a3cbca1ebb4fd81986f11010aaf82751b7e7851e68f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_5482b4f9add0221c963300079707fc2987b292ef1823c33ee3e9bc7dd199945b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5482b4f9add0221c963300079707fc2987b292ef1823c33ee3e9bc7dd199945b->enter($__internal_5482b4f9add0221c963300079707fc2987b292ef1823c33ee3e9bc7dd199945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_5482b4f9add0221c963300079707fc2987b292ef1823c33ee3e9bc7dd199945b->leave($__internal_5482b4f9add0221c963300079707fc2987b292ef1823c33ee3e9bc7dd199945b_prof);

        
        $__internal_9339e0c6e8230ecf12a3cbca1ebb4fd81986f11010aaf82751b7e7851e68f416->leave($__internal_9339e0c6e8230ecf12a3cbca1ebb4fd81986f11010aaf82751b7e7851e68f416_prof);

    }

    // line 5
    public function block_menu_pricelist($context, array $blocks = array())
    {
        $__internal_7ecd070f0f0b80d5f9ee4691e3b092997ffb0d5a10b1a28e3eee4e3bb8630b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecd070f0f0b80d5f9ee4691e3b092997ffb0d5a10b1a28e3eee4e3bb8630b67->enter($__internal_7ecd070f0f0b80d5f9ee4691e3b092997ffb0d5a10b1a28e3eee4e3bb8630b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        $__internal_ab519d16e8e186901977b173516bcefbe9b72dbf4d5b3b6ebbfba7fd634ee1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab519d16e8e186901977b173516bcefbe9b72dbf4d5b3b6ebbfba7fd634ee1b5->enter($__internal_ab519d16e8e186901977b173516bcefbe9b72dbf4d5b3b6ebbfba7fd634ee1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_pricelist"));

        echo " active ";
        
        $__internal_ab519d16e8e186901977b173516bcefbe9b72dbf4d5b3b6ebbfba7fd634ee1b5->leave($__internal_ab519d16e8e186901977b173516bcefbe9b72dbf4d5b3b6ebbfba7fd634ee1b5_prof);

        
        $__internal_7ecd070f0f0b80d5f9ee4691e3b092997ffb0d5a10b1a28e3eee4e3bb8630b67->leave($__internal_7ecd070f0f0b80d5f9ee4691e3b092997ffb0d5a10b1a28e3eee4e3bb8630b67_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_68faaf1b441546534345266a014a5a17640164cc16ce68faef85be14aa8441cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68faaf1b441546534345266a014a5a17640164cc16ce68faef85be14aa8441cb->enter($__internal_68faaf1b441546534345266a014a5a17640164cc16ce68faef85be14aa8441cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_bb8e036abd64464ada496ab2bc6705f5cef307656ef9e3037945f9cc2840013c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e036abd64464ada496ab2bc6705f5cef307656ef9e3037945f9cc2840013c->enter($__internal_bb8e036abd64464ada496ab2bc6705f5cef307656ef9e3037945f9cc2840013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

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
        
        $__internal_bb8e036abd64464ada496ab2bc6705f5cef307656ef9e3037945f9cc2840013c->leave($__internal_bb8e036abd64464ada496ab2bc6705f5cef307656ef9e3037945f9cc2840013c_prof);

        
        $__internal_68faaf1b441546534345266a014a5a17640164cc16ce68faef85be14aa8441cb->leave($__internal_68faaf1b441546534345266a014a5a17640164cc16ce68faef85be14aa8441cb_prof);

    }

    // line 13
    public function block_page($context, array $blocks = array())
    {
        $__internal_347c0b363bc030d5a586297eea7fd1648d1d4f6c0fd50b9ac3c9952a6d872557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347c0b363bc030d5a586297eea7fd1648d1d4f6c0fd50b9ac3c9952a6d872557->enter($__internal_347c0b363bc030d5a586297eea7fd1648d1d4f6c0fd50b9ac3c9952a6d872557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_9614fc6f24e2a70f9390a43f5fcebbc8b12547d2530f6551cefc34ec2ba9f6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9614fc6f24e2a70f9390a43f5fcebbc8b12547d2530f6551cefc34ec2ba9f6c2->enter($__internal_9614fc6f24e2a70f9390a43f5fcebbc8b12547d2530f6551cefc34ec2ba9f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
                                <h1>Cotações
                                    <small>tabela de Cotações cadastradas</small>
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
                                    <a href=\"#\">Cotações</a>
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
                                                    <span class=\"caption-subject bold uppercase\">Cotações</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nome do Cliente</th>
                                                        <th>Nome da Cotação</th>
                                                        <th>Itens</th>
                                                        <th>Participantes</th>
                                                        <th>Validade</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Nome do Cliente</th>
                                                        <th>Nome da Cotação</th>
                                                        <th>Itens</th>
                                                        <th>Participantes</th>
                                                        <th>Validade</th>
                                                        <th></th>

                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>WeMind varejo</td>
                                                        <td>Cotação Semanal Bomboniere</td>
                                                        <td>35</td>
                                                        <td>
                                                            <ul>
                                                                <li><a href=\"#\">Atacado Martins</a></li>
                                                                <li><a href=\"#\">Aki</a></li>
                                                            </ul>
                                                        </td>
                                                        <td> 25/05/17 - 29/05/17</td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                    <i class=\"fa fa-eye\"></i> Detalhes
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
        
        $__internal_9614fc6f24e2a70f9390a43f5fcebbc8b12547d2530f6551cefc34ec2ba9f6c2->leave($__internal_9614fc6f24e2a70f9390a43f5fcebbc8b12547d2530f6551cefc34ec2ba9f6c2_prof);

        
        $__internal_347c0b363bc030d5a586297eea7fd1648d1d4f6c0fd50b9ac3c9952a6d872557->leave($__internal_347c0b363bc030d5a586297eea7fd1648d1d4f6c0fd50b9ac3c9952a6d872557_prof);

    }

    // line 126
    public function block_script($context, array $blocks = array())
    {
        $__internal_864554a9c5533a2dfd1f17dc003e784443d1bb65711f882e2b34ca3e8875f9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864554a9c5533a2dfd1f17dc003e784443d1bb65711f882e2b34ca3e8875f9f8->enter($__internal_864554a9c5533a2dfd1f17dc003e784443d1bb65711f882e2b34ca3e8875f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_56e2b92fbf9aec5a54be109438c3a2e05dfd06958eefd12d2a656f4dae7815cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e2b92fbf9aec5a54be109438c3a2e05dfd06958eefd12d2a656f4dae7815cf->enter($__internal_56e2b92fbf9aec5a54be109438c3a2e05dfd06958eefd12d2a656f4dae7815cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 127
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_56e2b92fbf9aec5a54be109438c3a2e05dfd06958eefd12d2a656f4dae7815cf->leave($__internal_56e2b92fbf9aec5a54be109438c3a2e05dfd06958eefd12d2a656f4dae7815cf_prof);

        
        $__internal_864554a9c5533a2dfd1f17dc003e784443d1bb65711f882e2b34ca3e8875f9f8->leave($__internal_864554a9c5533a2dfd1f17dc003e784443d1bb65711f882e2b34ca3e8875f9f8_prof);

    }

    public function getTemplateName()
    {
        return "Admin/pricelist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 131,  282 => 130,  278 => 129,  274 => 128,  269 => 127,  260 => 126,  165 => 40,  137 => 14,  128 => 13,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
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

{% block title %}Cotações{% endblock %}
{% block description %}{% endblock %}
{% block menu_pricelist %} active {% endblock %}

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
                                <h1>Cotações
                                    <small>tabela de Cotações cadastradas</small>
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
                                    <a href=\"#\">Cotações</a>
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
                                                    <span class=\"caption-subject bold uppercase\">Cotações</span>
                                                </div>
                                                <div class=\"tools\"> </div>
                                            </div>
                                            <div class=\"portlet-body\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nome do Cliente</th>
                                                        <th>Nome da Cotação</th>
                                                        <th>Itens</th>
                                                        <th>Participantes</th>
                                                        <th>Validade</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Nome do Cliente</th>
                                                        <th>Nome da Cotação</th>
                                                        <th>Itens</th>
                                                        <th>Participantes</th>
                                                        <th>Validade</th>
                                                        <th></th>

                                                    </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>WeMind varejo</td>
                                                        <td>Cotação Semanal Bomboniere</td>
                                                        <td>35</td>
                                                        <td>
                                                            <ul>
                                                                <li><a href=\"#\">Atacado Martins</a></li>
                                                                <li><a href=\"#\">Aki</a></li>
                                                            </ul>
                                                        </td>
                                                        <td> 25/05/17 - 29/05/17</td>
                                                        <td>
                                                            <a href=\"javascript:;\" class=\"btn btn-outline btn-circle btn-sm grey-salsa\">
                                                                    <i class=\"fa fa-eye\"></i> Detalhes
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
{% endblock %}", "Admin/pricelist/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\Admin\\pricelist\\index.html.twig");
    }
}
