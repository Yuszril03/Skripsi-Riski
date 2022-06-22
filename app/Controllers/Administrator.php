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
}