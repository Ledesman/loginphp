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








