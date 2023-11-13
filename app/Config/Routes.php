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


$routes->get('/productos', 'Productos::index');
$routes->get('/productosNuevo', 'Productos::nuevo');
$routes->get('productos/eliminados', 'Productos::eliminados');
$routes->post('/productos/insertar', 'Productos::insertar');
$routes->get('/productos/eliminar/(:any)', 'Productos::eliminar/$1');

$routes->get('/productos/reingresar/(:any)', 'Productos::reingresar/$1');
$routes->post('/productos/actualizar', 'Productos::actualizar');
$routes->get('/productos/editar/(:any)', 'Productos::editar/$1');

$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientesNuevo', 'Clientes::nuevo');
$routes->post('/clientes/insertar', 'Clientes::insertar');
$routes->get('/clientes/editar/(:any)', 'Clientes::editar/$1');
$routes->post('/clientes/actualizar', 'Clientes::actualizar');
$routes->get('/clientes/eliminar/(:any)', 'Clientes::eliminar/$1');
$routes->get('clientes/eliminados', 'Clientes::eliminados');
$routes->get('/clientes/reingresar/(:any)', 'Clientes::reingresar/$1');

$routes->get('/configuracion', 'Configuracion::index');

$routes->post('configuracion/actualizar', 'Configuracion::actualizar');
$routes->get('/configuracion/editar/(:any)', 'Configuracion::editar/$1');

$routes->get('/usuarios', 'Usuarios::index');
$routes->get('/loginP', 'Usuarios::login');

$routes->post('usuarios/validar', 'Usuarios::valida');

$routes->get('/usuariosNuevo', 'Usuarios::nuevo');
$routes->get('/cambiarPass', 'Usuarios::cambiaPassword');
$routes->post('/usuarios/insertar', 'Usuarios::insertar');
$routes->get('/usuarios/editar/(:any)', 'Usuarios::editar/$1');
$routes->get('/usuarios/editar/(:any)', 'Usuarios::editar/$1');
$routes->post('actualizar_pass', 'Usuarios::actualizar_pass');

$routes->post('/usuarios/actualizar', 'Usuarios::actualizar');
$routes->get('/usuarios/eliminar/(:any)', 'Usuarios::eliminar/$1');
$routes->get('usuarios/eliminados', 'Usuarios::eliminados');
$routes->get('/usuarios/reingresar/(:any)', 'Usuarios::reingresar/$1');






