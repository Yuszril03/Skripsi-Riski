<?php

namespace App\Controllers;

class Mitra extends BaseController
{
    public function __construct()
    {

        $this->session = \Config\Services::session();
        // $this->session->stat();
    }
    public function index()
    {
        if (session()->get('Status') != TRUE) {
            return redirect()->to(base_url('/'));
        } else  if ((session()->get('Status') == TRUE || session()->get('Status') != TRUE) && session()->get('Jenis') == 'Admin') {
            return redirect()->to(base_url('/Masuk-Administrator'));
        } else  if (session()->get('Status') == TRUE && session()->get('Jenis') != 'Admin') {
            return view('Mitra/Home');
        }
    }
}
