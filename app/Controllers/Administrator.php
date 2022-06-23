<?php

namespace App\Controllers;

class Administrator extends BaseController
{
    public function index()
    {
        return view('Administrator/Home');
    }


    //Mitra Wisata
    public function MitraWisata()
    {
        return view('Administrator/Data-Mitra/Wisata/Mitra-Wisata');
    }
    public function TambahMitraWisata()
    {
        return view('Administrator/Data-Mitra/Wisata/Add-Wisata');
    }
    public function EditMitraWisata($id = false)
    {
        return view('Administrator/Data-Mitra/Wisata/Edit-Wisata');
    }
    public function DetailMitraWisata($id = false)
    {
        return view('Administrator/Data-Mitra/Wisata/Detail-Wisata');
    }

    //Mitra Hotel
    public function MitraHotel()
    {
        return view('Administrator/Data-Mitra/Hotel/Mitra-Hotel');
    }
    public function TambahMitraHotel()
    {
        return view('Administrator/Data-Mitra/Hotel/Add-Hotel');
    }
    public function EditMitraHotel($id = false)
    {
        return view('Administrator/Data-Mitra/Hotel/Edit-Hotel');
    }
    public function DetailMitraHotel($id = false)
    {
        return view('Administrator/Data-Mitra/Hotel/Detail-Hotel');
    }


    //Mitra Rental
    public function MitraRental()
    {
        return view('Administrator/Data-Mitra/Rental/Mitra-Rental');
    }
    public function TambahMitraRental()
    {
        return view('Administrator/Data-Mitra/Rental/Add-Rental');
    }
    public function EditMitraRental($id = false)
    {
        return view('Administrator/Data-Mitra/Rental/Edit-Rental');
    }

    public function DetailMitraRental($id = false)
    {
        return view('Administrator/Data-Mitra/Rental/Detail-Rental');
    }

    //Pemesanan
    public function PemesananWisata()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Wisata');
    }
    public function PemesananRental()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Rental');
    }
    public function PemesananHotel()
    {
        return view('Administrator/Data-Pemesanan/Pemesanan-Hotel');
    }

    public function BeritaEvent()
    {
        return view('Administrator/Berita-Event/Berita-Event');
    }
    public function tambahBeritaEvent()
    {
        return view('Administrator/Berita-Event/tambahBerita-Event');
    }
    public function detailBeritaEvent()
    {
        return view('Administrator/Berita-Event/detailBerita-Event');
    }
    public function editBeritaEvent()
    {
        return view('Administrator/Berita-Event/editBerita-Event');
    }
    public function DataUser()
    {
        return view('Administrator/Data-User/Data-User');
    }
    public function tambahDataUser()
    {
        return view('Administrator/Data-User/tambahData-User');
    }
    public function editDataUser()
    {
        return view('Administrator/Data-User/editData-User');
    }
    public function detailDataUser()
    {
        return view('Administrator/Data-User/detailData-User');
    }
    public function RetingKomentar()
    {
        return view('Administrator/Reting-Komentar/Reting-Komentar');
    }
    public function detailRetingKomentar()
    {
        return view('Administrator/Reting-Komentar/detailReting-Komentar');
    }
}
