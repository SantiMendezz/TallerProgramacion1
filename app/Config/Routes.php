<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/principal', 'Home::index');
$routes->get('/tienda', 'Home::tienda');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/contactanos', 'Home::contactanos');
$routes->get('/terminosCondiciones', 'Home::terminosCondiciones');
$routes->get('/registrarse', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// rutas del login
// $routes->get('/login2', 'Home::login');

$routes->get('/login', 'Login_controller::create');
$routes->get('/enviarlogin', 'Login_controller::auth');

//-------Crud-------
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/cerrar', 'Login_controller::logout');
//CRUD usuario
$routes->get('/usuarios-baja', 'Dashboard::usuariosDeBaja',['filter' => 'auth']);
$routes->get('/ingreso', 'Dashboard::ingreso',['filter' => 'auth']);
$routes->post('/enviar-form-dash', 'Dashboard::formValidationDash');

$routes->post('/insertar', 'Usuario_controller::insertar');
$routes->get('borrar-usuario/(:num)', 'Dashboard::eliminar_usuario/$1');
$routes->get('editar-usuario/(:num)', 'Dashboard::muestra_usuarios_modifica/$1');
$routes->post('/edit-de-usuario', 'Dashboard::usuarios_modifica');
$routes->get('alta-usuario/(:num)', 'Dashboard::alzar_usuario/$1');

$routes->get('/user-list', 'Dashboard::list_usuarios');
$routes->get('/enviarlogin', 'Dashboard::auth');
//CRUD producto
$routes->get('/producto-list', 'Dashboard::list_productos');
$routes->get('muestra-editar-producto/(:num)', 'Dashboard::muestra_productos_modifica/$1');
$routes->post('/edicion-producto', 'Dashboard::productos_modifica');

$routes->get('/ingreso-producto', 'Dashboard::ingreso_producto');
$routes->post('/Producto-controller', 'Dashboard::store'); //Agregar nuevo producto

$routes->get('/productos-baja', 'Dashboard::productosEliminados');
$routes->get('bajar-producto/(:num)', 'Dashboard::eliminar_producto/$1');
$routes->get('alzar-usuario/(:num)', 'Dashboard::alzar_producto/$1');

//Carrito
$routes->get('/mostrar-carrito', 'Cart_controller::index');
$routes->post('/agregar-carrito', 'Cart_controller::add');
$routes->get('/actualizar-carrito', 'Cart_controller::actualiza_carrito');
$routes->get('/eliminar-carrito', 'Cart_controller::borrar_carrito');
$routes->get('/comprar', 'Cart_controller::comprar_carrito');

$routes->get('/venta-cabecera-list', 'Venta_controller::ventas_cabecera');
$routes->get('/venta-detalle-list', 'Venta_controller::ventas_detalle');

//Consulta
$routes->get('/consultas-list', 'Consultas_controller::consultas_mostrar');
$routes->post('/enviar-consulta', 'Consultas_controller::envio_consulta');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
