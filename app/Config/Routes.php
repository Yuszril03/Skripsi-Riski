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
$routes->get('/Beranda-Mitra', 'Mitra::index');
$routes->get('/Default-Kata-Sandi-Mitra' . '/(:any)', 'Mitra::KataSandiDefaultMitra/$1');
$routes->get('/Ubah-Kata-Sandi-Mitra' . '/(:any)', 'Mitra::KataSandiUbahMitra/$1');
$routes->get('/Kata-Sandi-Mitra', 'Mitra::Katasandi');
$routes->get('/Keluar-Mitra', 'Mitra::Keluar');

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
$routes->get('/Detail-Pemesanan-Wisata' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)', 'Administrator::detailPemesananWisata/$1/$2/$3/$4');
$routes->get('/Pemesanan-Rental', 'Administrator::PemesananRental');
$routes->get('/Detail-Pemesanan-Rental' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)', 'Administrator::detailPemesananRental/$1/$2/$3/$4/$5');
$routes->get('/Pemesanan-Hotel', 'Administrator::PemesananHotel');
$routes->get('/Detail-Pemesanan-Hotel' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)', 'Administrator::detailPemesananHotel/$1/$2/$3/$4/$5');

//Version Android
$routes->get('/Data-Version-Android', 'Administrator::DataVersionAndroid');
$routes->get('/Tambah-Data-Version-Android', 'Administrator::tambahDataVersionAndroid');
$routes->get('/Edit-Data-Version' . '/(:any)', 'Administrator::editVersionAndroid/$1');

//Daftar Bank
$routes->get('/Daftar-Bank', 'Administrator::DaftarBank');
$routes->get('/Tambah-Rekening-Bank', 'Administrator::tambahBank');
$routes->get('/Edit-Data-Bank' . '/(:any)', 'Administrator::editBank/$1');
$routes->get('/Detail-Data-Bank' . '/(:any)', 'Administrator::detailBank/$1');


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

// Mitra
$routes->get('/Edit-profile', 'Mitra::Profile');

//Pemesanan wisata
$routes->get('/Data-Pemesanan-Tiket', 'Mitra::DataPemesananWisata');
$routes->get('/Detail-Pemesanan-Tiket' . '/(:any)', 'Mitra::DeteilPemesananWisata/$1');

//Pemesanan Kamar Hotel
$routes->get('/Pemesanan', 'Mitra::DataPemesananKamar');
$routes->get('/Detail-Pemesanan' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)', 'Mitra::DeteilPemesananKamar/$1/$2/$3/$4');

//Pemesanan Mobil Rental
$routes->get('/Pemesanan-rental', 'Mitra::DataPemesananRental');
$routes->get('/Detail-Pemesanan-Kendaraan' . '/(:any)' . '/(:any)' . '/(:any)' . '/(:any)', 'Mitra::DeteilPemesananMobil/$1/$2/$3/$4');

//Kamar Hotel
$routes->get('/Data-Kamar', 'Mitra::DataKamar');
$routes->get('/Detail-Kamar-Mitra' . '/(:any)', 'Mitra::DeteilkamarMitra/$1');

//Mobil Rental
$routes->get('/Data-Mobil-Rental', 'Mitra::DataMobilRental');
$routes->get('/Detail-Mobil' . '/(:any)', 'Mitra::DetailMobil/$1');

//scan QrCode
$routes->get('/Scan-QrCode-Wisata', 'Mitra::QrCodeWisata');
$routes->get('/Scan-QrCode-Hotel', 'Mitra::QrCodeHotel');
$routes->get('/Scan-QrCode-Rental', 'Mitra::QrCodeRental');

//Review
$routes->get('/Review-Wisata', 'Mitra::ReviewWisata');
$routes->get('/Review-Hotel', 'Mitra::ReviewKamarHotel');
$routes->get('/Review-Rental', 'Mitra::ReviewRentalMobil');





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
