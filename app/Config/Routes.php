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
$routes->setDefaultController('Administrator');
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
$routes->get('/', 'Administrator::index');
$routes->get('/Berita-Event', 'Administrator::BeritaEvent');
$routes->get('/tambahBerita-Event', 'Administrator::tambahBeritaEvent');
$routes->get('/detailBerita-Event', 'Administrator::detailBeritaEvent');
$routes->get('/editBerita-Event', 'Administrator::editBeritaEvent');
$routes->get('/Data-User', 'Administrator::DataUser');
$routes->get('/tambahData-User', 'Administrator::tambahDataUser');
$routes->get('/editData-User', 'Administrator::editDataUser');
$routes->get('/detailData-User', 'Administrator::detailDataUser');
$routes->get('/Reting-Komentar', 'Administrator::RetingKomentar');

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
