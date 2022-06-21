<?php

namespace App\Controllers;

class Administrator extends BaseController
{
    public function index()
    {
        return view('Administrator/Home');
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
}