<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/administrador')) {
            if (0 === strpos($pathinfo, '/administrador/clientes')) {
                // admin_clients
                if ($pathinfo === '/administrador/clientes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ClientsController::indexAction',  '_route' => 'admin_clients',);
                }

                // admin_clients_scatter_pricelistXorder
                if ($pathinfo === '/administrador/clientes/cotacoesXpedidos') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ClientsController::chartsAction',  '_route' => 'admin_clients_scatter_pricelistXorder',);
                }

            }

            // admin_dashboard
            if (rtrim($pathinfo, '/') === '/administrador') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_dashboard');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\DashboardController::indexAction',  '_route' => 'admin_dashboard',);
            }

            // admin_listas
            if ($pathinfo === '/administrador/listas') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ListsController::indexAction',  '_route' => 'admin_listas',);
            }

            // admin_cotacoes
            if ($pathinfo === '/administrador/cotacoes') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\PriceListController::indexAction',  '_route' => 'admin_cotacoes',);
            }

            // admin_produtos
            if ($pathinfo === '/administrador/produtos') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\ProductsController::indexAction',  '_route' => 'admin_produtos',);
            }

            if (0 === strpos($pathinfo, '/administrador/fornecedores')) {
                // admin_fornecedores
                if ($pathinfo === '/administrador/fornecedores') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SuppliersController::indexAction',  '_route' => 'admin_fornecedores',);
                }

                if (0 === strpos($pathinfo, '/administrador/fornecedores/co')) {
                    // admin_suppliers_scatter_pricelistXorder
                    if ($pathinfo === '/administrador/fornecedores/cotacoesXpedidos') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SuppliersController::chart1Action',  '_route' => 'admin_suppliers_scatter_pricelistXorder',);
                    }

                    // admin_suppliers_line_createdaccountsXtime
                    if ($pathinfo === '/administrador/fornecedores/contascriadasXtempo') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SuppliersController::chart2Action',  '_route' => 'admin_suppliers_line_createdaccountsXtime',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/varejista')) {
            // dashboard
            if (rtrim($pathinfo, '/') === '/varejista') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashboard');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\DashboardController::indexAction',  '_route' => 'dashboard',);
            }

            if (0 === strpos($pathinfo, '/varejista/listas')) {
                // listas
                if ($pathinfo === '/varejista/listas') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\ListsController::indexAction',  '_route' => 'listas',);
                }

                // novalista
                if ($pathinfo === '/varejista/listas/novalista') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\ListsController::addListAction',  '_route' => 'novalista',);
                }

            }

            // cotacoes
            if ($pathinfo === '/varejista/cotacoes') {
                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\PriceListController::indexAction',  '_route' => 'cotacoes',);
            }

            // produtos
            if ($pathinfo === '/varejista/produtos') {
                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\ProductsController::indexAction',  '_route' => 'produtos',);
            }

            // novoproduto
            if ($pathinfo === '/varejista/listas/novoproduto') {
                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\ProductsController::addProductAction',  '_route' => 'novoproduto',);
            }

            // fornecedores
            if ($pathinfo === '/varejista/fornecedores') {
                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\SuppliersController::indexAction',  '_route' => 'fornecedores',);
            }

            // novofornecedor
            if ($pathinfo === '/varejista/novofornecedor') {
                return array (  '_controller' => 'AppBundle\\Controller\\Retailer\\SuppliersController::addSupplierAction',  '_route' => 'novofornecedor',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
