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

}
