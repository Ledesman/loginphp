<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::login');
$routes->get('/salir', 'Home::salir');
$routes->get('/vistaCrear', 'Home::vistaCrear');
$routes->get('/contenido', 'Home::contenido');

$routes->get('/listado', 'Crud::index');
$routes->post('/actualizar', 'Crud::actualizar');
$routes->get('/obtenerNombre/(:any)', 'Crud::obtenerNombre/$1');
$routes->post('/crear', 'Crud::crear');
$routes->get('/eliminar/(:any)', 'Crud::eliminar/$1');


$routes->get('/unidades', 'Unidades::index');
$routes->get('/unidadesNuevo', 'Unidades::nuevo');
$routes->post('/unidades/insertar', 'Unidades::insertar');
$routes->get('/unidades/editar/(:any)', 'Unidades::editar/$1');
$routes->post('/unidades/actualizar', 'Unidades::actualizar');
$routes->get('/unidades/eliminar/(:any)', 'Unidades::eliminar/$1');
$routes->get('/eliminados', 'Unidades::eliminados');
$routes->get('/unidades/reingresar/(:any)', 'Unidades::reingresar/$1');


$routes->get('/categorias', 'Categorias::index');
$routes->get('/categoriasNuevo', 'Categorias::nuevo');
$routes->get('categorias/eliminados', 'Categorias::eliminados');
$routes->post('/categorias/insertar', 'Categorias::insertar');
$routes->get('/categorias/eliminar/(:any)', 'Categorias::eliminar/$1');

$routes->get('/categorias/reingresar/(:any)', 'Categorias::reingresar/$1');
$routes->post('/categorias/actualizar', 'Categorias::actualizar');
$routes->get('/categorias/editar/(:any)', 'Categorias::editar/$1');














