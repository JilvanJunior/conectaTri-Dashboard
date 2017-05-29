<?php

/* fornecedores/index.html.twig */
class __TwigTemplate_63c60ad343c39c322f045a90abf5b5f49cf034cef20bc92e94fcecc45cc490a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fornecedores/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63fef7c795fe990bce245560af1764b4137a589b2cc7373164dfdc88474a6f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fef7c795fe990bce245560af1764b4137a589b2cc7373164dfdc88474a6f56->enter($__internal_63fef7c795fe990bce245560af1764b4137a589b2cc7373164dfdc88474a6f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fornecedores/index.html.twig"));

        $__internal_4a53ef41bf80631bbb5dd5a0eecee2c6b8246dcb7b94102b0ff04fd71f0fd81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a53ef41bf80631bbb5dd5a0eecee2c6b8246dcb7b94102b0ff04fd71f0fd81d->enter($__internal_4a53ef41bf80631bbb5dd5a0eecee2c6b8246dcb7b94102b0ff04fd71f0fd81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fornecedores/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63fef7c795fe990bce245560af1764b4137a589b2cc7373164dfdc88474a6f56->leave($__internal_63fef7c795fe990bce245560af1764b4137a589b2cc7373164dfdc88474a6f56_prof);

        
        $__internal_4a53ef41bf80631bbb5dd5a0eecee2c6b8246dcb7b94102b0ff04fd71f0fd81d->leave($__internal_4a53ef41bf80631bbb5dd5a0eecee2c6b8246dcb7b94102b0ff04fd71f0fd81d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fc339365b72156178f694c4617a5c8ac3c4f15960bd253e4534e8dc6bb7c100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc339365b72156178f694c4617a5c8ac3c4f15960bd253e4534e8dc6bb7c100->enter($__internal_1fc339365b72156178f694c4617a5c8ac3c4f15960bd253e4534e8dc6bb7c100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e708ba535865bf88e550ea9e725a0cd2b83cba2e8058dd6527105fb9270dc350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e708ba535865bf88e550ea9e725a0cd2b83cba2e8058dd6527105fb9270dc350->enter($__internal_e708ba535865bf88e550ea9e725a0cd2b83cba2e8058dd6527105fb9270dc350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Teste";
        
        $__internal_e708ba535865bf88e550ea9e725a0cd2b83cba2e8058dd6527105fb9270dc350->leave($__internal_e708ba535865bf88e550ea9e725a0cd2b83cba2e8058dd6527105fb9270dc350_prof);

        
        $__internal_1fc339365b72156178f694c4617a5c8ac3c4f15960bd253e4534e8dc6bb7c100->leave($__internal_1fc339365b72156178f694c4617a5c8ac3c4f15960bd253e4534e8dc6bb7c100_prof);

    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        $__internal_dbb4b69e54f2a1901b37bdc481c081c2a4e8b01b7b1220c8c2f4eb79461eebe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb4b69e54f2a1901b37bdc481c081c2a4e8b01b7b1220c8c2f4eb79461eebe7->enter($__internal_dbb4b69e54f2a1901b37bdc481c081c2a4e8b01b7b1220c8c2f4eb79461eebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        $__internal_b90eef479097df477cf5e8f3841df7b8722f52967661db8041ff4932ce64122d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90eef479097df477cf5e8f3841df7b8722f52967661db8041ff4932ce64122d->enter($__internal_b90eef479097df477cf5e8f3841df7b8722f52967661db8041ff4932ce64122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 6
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
                                <a href=\"index.html\">Home</a>
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
                                    <div class=\"note note-success\">
                                        <p> Tente redimensionar a janela do seu navegador para ver as tabelas no modo responsivo. </p>
                                    </div>
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class=\"portlet box green\">
                                        <div class=\"portlet-title\">
                                            <div class=\"caption\">
                                                <i class=\"fa fa-cogs\"></i>Fornecedores </div>
                                            <div class=\"tools\">
                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                            </div>
                                        </div>
                                        <div class=\"portlet-body flip-scroll\">
                                            <table class=\"table table-bordered table-striped table-condensed flip-content\">
                                                <thead class=\"flip-content\">
                                                <tr>
                                                    <th width=\"20%\"> Nome do Fornecedor </th>
                                                    <th> Nome do Representante </th>
                                                    <th> E-mail</th>
                                                    <th class=\"numeric\"> CNPJ</th>
                                                    <th class=\"numeric\"> Telefone </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Luiz Cauã Guilherme Campos </td>
                                                    <td class=\"numeric\"> luiz.caua.campos@yogoothies.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Nicolas Joaquim Vinicius dos Santos </td>
                                                    <td class=\"numeric\"> nicolas.joaquim.santos@leonardocordeiro.com </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Otávio Isaac Cauê Lima </td>
                                                    <td class=\"numeric\"> otavio_isaac@imaxbrasil.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Victória Gessi </td>
                                                    <td class=\"numeric\"> vickgessi@matins.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Victória Gessi </td>
                                                    <td class=\"numeric\"> vickgessi@matins.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Pedro Henrique Bernardo Ribeiro</td>
                                                    <td class=\"numeric\"> pedro.henrique.ribeiro@sistectecnologia.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Vitor Luiz Raul Carvalho </td>
                                                    <td class=\"numeric\"> luan.rodrigo.paula@advogadostb.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Henrique Anthony Pereira </td>
                                                    <td class=\"numeric\"> henrique_a_pereira@decorsul.com </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Diego Samuel Nascimento </td>
                                                    <td class=\"numeric\"> diego_samuel@mourafiorito.com</td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Nathan Julio Benício Fernandes </td>
                                                    <td class=\"numeric\"> nathan.julio.fernandes@stembalagens.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Renato Vinicius Miguel Cardoso </td>
                                                    <td class=\"numeric\"> rvcardoso@delboux.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Heitor Kevin Antonio Costa </td>
                                                    <td class=\"numeric\"> heitor_kevin@pp33.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Miguel Eduardo Mendes </td>
                                                    <td class=\"numeric\"> miguel_e_mendes@maxilajes.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END SAMPLE TABLE PORTLET-->
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
        
        $__internal_b90eef479097df477cf5e8f3841df7b8722f52967661db8041ff4932ce64122d->leave($__internal_b90eef479097df477cf5e8f3841df7b8722f52967661db8041ff4932ce64122d_prof);

        
        $__internal_dbb4b69e54f2a1901b37bdc481c081c2a4e8b01b7b1220c8c2f4eb79461eebe7->leave($__internal_dbb4b69e54f2a1901b37bdc481c081c2a4e8b01b7b1220c8c2f4eb79461eebe7_prof);

    }

    public function getTemplateName()
    {
        return "fornecedores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Teste{% endblock %}

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
                                <a href=\"index.html\">Home</a>
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
                                    <div class=\"note note-success\">
                                        <p> Tente redimensionar a janela do seu navegador para ver as tabelas no modo responsivo. </p>
                                    </div>
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class=\"portlet box green\">
                                        <div class=\"portlet-title\">
                                            <div class=\"caption\">
                                                <i class=\"fa fa-cogs\"></i>Fornecedores </div>
                                            <div class=\"tools\">
                                                <a href=\"javascript:;\" class=\"collapse\"> </a>
                                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                                <a href=\"javascript:;\" class=\"reload\"> </a>
                                                <a href=\"javascript:;\" class=\"remove\"> </a>
                                            </div>
                                        </div>
                                        <div class=\"portlet-body flip-scroll\">
                                            <table class=\"table table-bordered table-striped table-condensed flip-content\">
                                                <thead class=\"flip-content\">
                                                <tr>
                                                    <th width=\"20%\"> Nome do Fornecedor </th>
                                                    <th> Nome do Representante </th>
                                                    <th> E-mail</th>
                                                    <th class=\"numeric\"> CNPJ</th>
                                                    <th class=\"numeric\"> Telefone </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Luiz Cauã Guilherme Campos </td>
                                                    <td class=\"numeric\"> luiz.caua.campos@yogoothies.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Nicolas Joaquim Vinicius dos Santos </td>
                                                    <td class=\"numeric\"> nicolas.joaquim.santos@leonardocordeiro.com </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Otávio Isaac Cauê Lima </td>
                                                    <td class=\"numeric\"> otavio_isaac@imaxbrasil.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Victória Gessi </td>
                                                    <td class=\"numeric\"> vickgessi@matins.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Victória Gessi </td>
                                                    <td class=\"numeric\"> vickgessi@matins.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Pedro Henrique Bernardo Ribeiro</td>
                                                    <td class=\"numeric\"> pedro.henrique.ribeiro@sistectecnologia.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Vitor Luiz Raul Carvalho </td>
                                                    <td class=\"numeric\"> luan.rodrigo.paula@advogadostb.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Henrique Anthony Pereira </td>
                                                    <td class=\"numeric\"> henrique_a_pereira@decorsul.com </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Diego Samuel Nascimento </td>
                                                    <td class=\"numeric\"> diego_samuel@mourafiorito.com</td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Rodrigo Lucas Rocha </td>
                                                    <td class=\"numeric\"> rodrigo-lucas92@arablock.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Nathan Julio Benício Fernandes </td>
                                                    <td class=\"numeric\"> nathan.julio.fernandes@stembalagens.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Renato Vinicius Miguel Cardoso </td>
                                                    <td class=\"numeric\"> rvcardoso@delboux.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Heitor Kevin Antonio Costa </td>
                                                    <td class=\"numeric\"> heitor_kevin@pp33.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                <tr>
                                                    <td> Atacado Martins </td>
                                                    <td> Miguel Eduardo Mendes </td>
                                                    <td class=\"numeric\"> miguel_e_mendes@maxilajes.com.br </td>
                                                    <td class=\"numeric\"> 43.214.055/0001-07</td>
                                                    <td class=\"numeric\"> (11) 5933-5317</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END SAMPLE TABLE PORTLET-->
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
{% endblock %}", "fornecedores/index.html.twig", "D:\\Github\\ConectaTri - Dashboard\\conectatri-dash\\app\\Resources\\views\\fornecedores\\index.html.twig");
    }
}
