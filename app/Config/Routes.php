<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Inicio::index');

$routes->match(['get','post'],'/catalogo/(:num)', 'Inicio::catalogoProdutos');

$routes->match(['get','post'],'/cadastroPromocao', 'Promocao::cadastroPromocao');

$routes->match(['get','post'],'/cadastroProdutos', 'Produtos::cadastroProduto');
$routes->match(['get','post'],'/produto/(:num)', 'Produtos::visualizarProduto');
$routes->match(['get','post'],'/editarProduto/(:num)', 'Produtos::editarProduto');
$routes->match(['get','post'],'/excluirProduto/(:num)', 'Produtos::deleteProduto');

$routes->match(['get','post'],'/cadastroPromocao', 'Promocao::cadastroPromocao');
$routes->match(['get','post'],'/editarPromocao/(:num)', 'Promocao::editarPromocao');
$routes->match(['get','post'],'/excluirPromocao/(:num)', 'Promocao::deletePromocao');
$routes->match(['get','post'],'/promocaoProdutos/(:num)', 'Promocao::promocaoProdutos');
$routes->match(['get','post'],'/editarProdutoPromocao/(:num)', 'Promocao::editarProdutoPromocao');


$routes->match(['get','post'],'/login', 'Login::index');

$routes->match(['get','post'],'/cadastro', 'Clientes::cadastroUsuario');

$routes->match(['get','post'],'/administracao', 'Painel::index');

$routes->match(['get','post'],'/produtos', 'Painel::index');
$routes->match(['get','post'],'/promocoes', 'Painel::painelPromocoes');





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
