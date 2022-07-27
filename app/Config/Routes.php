<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Route User
 * --------------------------------------------------------------------
 */

use App\Controllers\Login;

$routes->get('/', 'Pages::dashboard');
$routes->get('/login', 'Login::login');
$routes->get('/logout', 'Login::logout');
$routes->get('/register', 'Login::register');
$routes->get('/Login/verify/(:alphanum)/(:any)', [[Login::class, 'verify'], '$2/$1']);
$routes->get('/forgotPass', 'Login::forgotPass');
$routes->get('/dashboard', 'Pages::dashboard', ['filter' => 'auth']);

/*
 * --------------------------------------------------------------------
 * Route Admin
 * --------------------------------------------------------------------
 */

$routes->get('/loginAdmin', 'LoginAdmin::index');
$routes->get('/admin/dashboard', 'PagesAdmin::dashboard', ['filter' => 'auth']);
$routes->get('/admin/allOrder', 'PagesAdmin::allOrder', ['filter' => 'auth']);
$routes->get('/admin/konfPay', 'PagesAdmin::konfPay', ['filter' => 'auth']);
$routes->get('/admin/allProduk', 'PagesAdmin::allProduk', ['filter' => 'auth']);
$routes->get('/admin/inventaris', 'PagesAdmin::inventaris', ['filter' => 'auth']);
$routes->get('/admin/kategori', 'PagesAdmin::kategori', ['filter' => 'auth']);
$routes->get('/admin/customerMData', 'PagesAdmin::customerMData', ['filter' => 'auth']);
$routes->get('/admin/historyOrder', 'PagesAdmin::historyOrder', ['filter' => 'auth']);
$routes->get('/admin/lprPenjualan', 'PagesAdmin::lprPenjualan', ['filter' => 'auth']);
$routes->get('/admin/lprPengiriman', 'PagesAdmin::lprPengiriman', ['filter' => 'auth']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
