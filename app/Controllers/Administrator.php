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
}
