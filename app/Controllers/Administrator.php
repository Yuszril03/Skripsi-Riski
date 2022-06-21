<?php

namespace App\Controllers;

class Administrator extends BaseController
{
    public function index()
    {
        return view('Administrator/Home');
    }

    public function MitraWisata()
    {
        return view('Administrator/Mitra-Wisata');
    }
}
