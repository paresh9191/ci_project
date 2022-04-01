<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');
// $routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);

$routes->get("test", "SiteController::test");

$routes->get("/about_us", "SiteController::about_us");

$routes->get("/xyz", "SiteController::xyz");



$routes->get('/users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');



// $routes->get('/', 'DemoModel::index');
// $routes->get('/demo', 'DemoModel::index');
// $routes->get('/dashboard/index', 'DemoModel::index');
// $routes->get('user-form', 'DemoModel::create');
// $routes->post('submit-form', 'DemoModel::store');
// $routes->get('edit-view/(:num)', 'DemoModel::singleUser/$1');
// $routes->post('update', 'DemoModel::update');
// $routes->get('delete/(:num)', 'DemoModel::delete/$1');



$routes->get('/users-list', 'DemoModel::index');
$routes->get('/register', 'Register::index');
$routes->post('/insert', 'Register::registerInsert');
$routes->post('/login', 'Login::auth');
$routes->post('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/SignUp', 'SignUp::index');
$routes->get('/SignUp', 'SignUp::index');
$routes->get('user-form', 'Dashboard::create');
$routes->post('submit-form', 'Dashboard::store');
$routes->get('data-view/(:num)', 'Dashboard::singleUser/$1');
$routes->post('update', 'Dashboard::update');
$routes->get('delete/(:num)', 'Dashboard::delete/$1');




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
