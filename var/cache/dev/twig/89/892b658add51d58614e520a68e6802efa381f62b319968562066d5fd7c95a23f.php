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
        $__internal_cc06ac3a8062751415ee165eef73a402df4c2b32cc412dfdba91497d3050b900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc06ac3a8062751415ee165eef73a402df4c2b32cc412dfdba91497d3050b900->enter($__internal_cc06ac3a8062751415ee165eef73a402df4c2b32cc412dfdba91497d3050b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/clients/index.html.twig"));

        $__internal_ae84a8cdc83cbbb03cc0ed60afaae72adbd3affe05539114f3d6e3f2e716b9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae84a8cdc83cbbb03cc0ed60afaae72adbd3affe05539114f3d6e3f2e716b9cc->enter($__internal_ae84a8cdc83cbbb03cc0ed60afaae72adbd3affe05539114f3d6e3f2e716b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc06ac3a8062751415ee165eef73a402df4c2b32cc412dfdba91497d3050b900->leave($__internal_cc06ac3a8062751415ee165eef73a402df4c2b32cc412dfdba91497d3050b900_prof);

        
        $__internal_ae84a8cdc83cbbb03cc0ed60afaae72adbd3affe05539114f3d6e3f2e716b9cc->leave($__internal_ae84a8cdc83cbbb03cc0ed60afaae72adbd3affe05539114f3d6e3f2e716b9cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_782cc25e5f40feefd3f0c5bca0a7ae97c3f9708217722b7557e3342fd34816e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782cc25e5f40feefd3f0c5bca0a7ae97c3f9708217722b7557e3342fd34816e4->enter($__internal_782cc25e5f40feefd3f0c5bca0a7ae97c3f9708217722b7557e3342fd34816e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba081a4b85c99c97555fe2029e3aa4a6463d39a4d95a8568734c8d175ed991fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba081a4b85c99c97555fe2029e3aa4a6463d39a4d95a8568734c8d175ed991fa->enter($__internal_ba081a4b85c99c97555fe2029e3aa4a6463d39a4d95a8568734c8d175ed991fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clientes";
        
        $__internal_ba081a4b85c99c97555fe2029e3aa4a6463d39a4d95a8568734c8d175ed991fa->leave($__internal_ba081a4b85c99c97555fe2029e3aa4a6463d39a4d95a8568734c8d175ed991fa_prof);

        
        $__internal_782cc25e5f40feefd3f0c5bca0a7ae97c3f9708217722b7557e3342fd34816e4->leave($__internal_782cc25e5f40feefd3f0c5bca0a7ae97c3f9708217722b7557e3342fd34816e4_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_1aa4648f8960c8e0bc585e4c5cf84a9a178e4f803712dc1c79fb60aad4632623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa4648f8960c8e0bc585e4c5cf84a9a178e4f803712dc1c79fb60aad4632623->enter($__internal_1aa4648f8960c8e0bc585e4c5cf84a9a178e4f803712dc1c79fb60aad4632623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_5dfbc37d3bce6ea6bc1236ea31f7bbc960405dc5f144ec9f383f0a1fc9302355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfbc37d3bce6ea6bc1236ea31f7bbc960405dc5f144ec9f383f0a1fc9302355->enter($__internal_5dfbc37d3bce6ea6bc1236ea31f7bbc960405dc5f144ec9f383f0a1fc9302355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_5dfbc37d3bce6ea6bc1236ea31f7bbc960405dc5f144ec9f383f0a1fc9302355->leave($__internal_5dfbc37d3bce6ea6bc1236ea31f7bbc960405dc5f144ec9f383f0a1fc9302355_prof);

        
        $__internal_1aa4648f8960c8e0bc585e4c5cf84a9a178e4f803712dc1c79fb60aad4632623->leave($__internal_1aa4648f8960c8e0bc585e4c5cf84a9a178e4f803712dc1c79fb60aad4632623_prof);

    }

    // line 5
    public function block_menu_clients($context, array $blocks = array())
    {
        $__internal_67f1af01de46f701bd7a698ee2e5deb2f268e80d73ad284262efafd0183d8aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f1af01de46f701bd7a698ee2e5deb2f268e80d73ad284262efafd0183d8aad->enter($__internal_67f1af01de46f701bd7a698ee2e5deb2f268e80d73ad284262efafd0183d8aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        $__internal_96c3d0c4a2894b39d4dd9a7872a4e4e4c8c86e0b8a5e9861c8869df46128d0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c3d0c4a2894b39d4dd9a7872a4e4e4c8c86e0b8a5e9861c8869df46128d0ac->enter($__internal_96c3d0c4a2894b39d4dd9a7872a4e4e4c8c86e0b8a5e9861c8869df46128d0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_clients"));

        echo " active ";
        
        $__internal_96c3d0c4a2894b39d4dd9a7872a4e4e4c8c86e0b8a5e9861c8869df46128d0ac->leave($__internal_96c3d0c4a2894b39d4dd9a7872a4e4e4c8c86e0b8a5e9861c8869df46128d0ac_prof);

        
        $__internal_67f1af01de46f701bd7a698ee2e5deb2f268e80d73ad284262efafd0183d8aad->leave($__internal_67f1af01de46f701bd7a698ee2e5deb2f268e80d73ad284262efafd0183d8aad_prof);

    }

    // line 7
    public function block_page_plugins($context, array $blocks = array())
    {
        $__internal_ad892375fed79a42b8516e674bf8c3575a5ac29829ea12e53f409ac6a26462f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad892375fed79a42b8516e674bf8c3575a5ac29829ea12e53f409ac6a26462f8->enter($__internal_ad892375fed79a42b8516e674bf8c3575a5ac29829ea12e53f409ac6a26462f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

        $__internal_8c5a71219ce9524523ac664565974255293cc79859f9c67d6fb49958a0cc8373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5a71219ce9524523ac664565974255293cc79859f9c67d6fb49958a0cc8373->enter($__internal_8c5a71219ce9524523ac664565974255293cc79859f9c67d6fb49958a0cc8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plugins"));

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
        
        $__internal_8c5a71219ce9524523ac664565974255293cc79859f9c67d6fb49958a0cc8373->leave($__internal_8c5a71219ce9524523ac664565974255293cc79859f9c67d6fb49958a0cc8373_prof);

        
        $__internal_ad892375fed79a42b8516e674bf8c3575a5ac29829ea12e53f409ac6a26462f8->leave($__internal_ad892375fed79a42b8516e674bf8c3575a5ac29829ea12e53f409ac6a26462f8_prof);

    }

    // line 13
    public function block_page($context, array $blocks = array())
    {
        $__internal_8556d2c7f25eccf49a34d31319688b7c79cffb070556dcb49c1c55fcbafc0916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8556d2c7f25eccf49a34d31319688b7c79cffb070556dcb49c1c55fcbafc0916->enter($__internal_8556d2c7f25eccf49a34d31319688b7c79cffb070556dcb49c1c55fcbafc0916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_b49921f134438bbc57881d01ced01575dd14752b722efc70788916b543693d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49921f134438bbc57881d01ced01575dd14752b722efc70788916b543693d3d->enter($__internal_b49921f134438bbc57881d01ced01575dd14752b722efc70788916b543693d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
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
        
        $__internal_b49921f134438bbc57881d01ced01575dd14752b722efc70788916b543693d3d->leave($__internal_b49921f134438bbc57881d01ced01575dd14752b722efc70788916b543693d3d_prof);

        
        $__internal_8556d2c7f25eccf49a34d31319688b7c79cffb070556dcb49c1c55fcbafc0916->leave($__internal_8556d2c7f25eccf49a34d31319688b7c79cffb070556dcb49c1c55fcbafc0916_prof);

    }

    // line 124
    public function block_script($context, array $blocks = array())
    {
        $__internal_5e61d33dd760ba49b8e2d6a72b8d704c80d75a983e172b730b7628860e75046b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e61d33dd760ba49b8e2d6a72b8d704c80d75a983e172b730b7628860e75046b->enter($__internal_5e61d33dd760ba49b8e2d6a72b8d704c80d75a983e172b730b7628860e75046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_85160ee4a214bd1cdfe15775870aed2ec61df1579f9bd7eae053f33aa0e302aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85160ee4a214bd1cdfe15775870aed2ec61df1579f9bd7eae053f33aa0e302aa->enter($__internal_85160ee4a214bd1cdfe15775870aed2ec61df1579f9bd7eae053f33aa0e302aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 125
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_85160ee4a214bd1cdfe15775870aed2ec61df1579f9bd7eae053f33aa0e302aa->leave($__internal_85160ee4a214bd1cdfe15775870aed2ec61df1579f9bd7eae053f33aa0e302aa_prof);

        
        $__internal_5e61d33dd760ba49b8e2d6a72b8d704c80d75a983e172b730b7628860e75046b->leave($__internal_5e61d33dd760ba49b8e2d6a72b8d704c80d75a983e172b730b7628860e75046b_prof);

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
        return array (  284 => 129,  280 => 128,  276 => 127,  272 => 126,  267 => 125,  258 => 124,  165 => 40,  137 => 14,  128 => 13,  116 => 10,  112 => 9,  107 => 8,  98 => 7,  80 => 5,  63 => 4,  45 => 3,  11 => 1,);
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
                                                                <i class=\"fa fa-line-chart\"> Cotações</i>
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
