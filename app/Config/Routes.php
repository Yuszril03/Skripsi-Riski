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

//Login Mitra
$routes->get('/', 'Login::LoginMitra');


//Login Admin
$routes->get('/Masuk-Administrator', 'Login::LoginAdmin');
$routes->get('/Kata-Sandi', 'Administrator::KataSandi');
$routes->get('/Default-Kata-Sandi-Admin' . '/(:any)', 'Administrator::KataSandiDefault/$1');
$routes->get('/Ubah-Kata-Sandi-Admin' . '/(:any)', 'Administrator::KataSandiUbah/$1');
$routes->get('/Beranda-Admin', 'Administrator::index');
$routes->get('/Keluar-Admin', 'Administrator::Keluar');

//Wisata
$routes->get('/Mitra-Wisata', 'Administrator::MitraWisata');
$routes->get('/Tambah-Mitra-Wisata', 'Administrator::TambahMitraWisata');
$routes->get('/Edit-Mitra-Wisata' . '/(:any)' . '/(:any)', 'Administrator::EditMitraWisata/$1/$2');
$routes->get('/Detail-Mitra-Wisata' . '/(:any)' . '/(:any)', 'Administrator::DetailMitraWisata/$1/$2');

//Hotel
$routes->get('/Mitra-Hotel', 'Administrator::MitraHotel');
$routes->get('/Tambah-Mitra-Hotel', 'Administrator::TambahMitraHotel');
$routes->get('/Edit-Mitra-Hotel' . '/(:any)' . '/(:any)', 'Administrator::EditMitraHotel/$1/$2');
$routes->get('/Detail-Mitra-Hotel' . '/(:any)' . '/(:any)', 'Administrator::DetailMitraHotel/$1/$2');


//Rental
$routes->get('/Mitra-Rental', 'Administrator::MitraRental');
$routes->get('/Tambah-Mitra-Rental', 'Administrator::TambahMitraRental');
$routes->get('/Edit-Mitra-Rental' . '/(:any)' . '/(:any)', 'Administrator::EditMitraRental/$1/$2');
$routes->get('/Detail-Mitra-Rental' . '/(:any)' . '/(:any)', 'Administrator::DetailMitraRental/$1/$2');

//Pemesanan
$routes->get('/Pemesanan-Wisata', 'Administrator::PemesananWisata');
$routes->get('/Pemesanan-Rental', 'Administrator::PemesananRental');
$routes->get('/Pemesanan-Hotel', 'Administrator::PemesananHotel');



// $routes->get('/', 'Login::LoginMitra');

//Berita & Event
$routes->get('/Data-Kegiatan', 'Administrator::BeritaEvent');
$routes->get('/Tambah-Data-Kegiatan', 'Administrator::tambahBeritaEvent');
$routes->get('/Detail-Data-Kegiatan' . '/(:any)', 'Administrator::detailBeritaEvent/$1');
$routes->get('/Edit-Data-Kegiatan' . '/(:any)', 'Administrator::editBeritaEvent/$1');

//Data User
$routes->get('/Data-Customer', 'Administrator::DataCustomer');
$routes->get('/Tambah-Data-Customer', 'Administrator::tambahDataCustomer');
$routes->get('/Edit-Data-Customer' . '/(:any)', 'Administrator::editDataCustomer/$1');
$routes->get('/Detail-Data-Customer' . '/(:any)', 'Administrator::detailDataCustomer/$1');

//Review
$routes->get('/Reting-Komentar', 'Administrator::RetingKomentar');
$routes->get('/detailReting-Komentar', 'Administrator::detailRetingKomentar');



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
