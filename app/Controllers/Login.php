<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {

        $this->session = \Config\Services::session();
        // $this->session->stat();
    }
    public function LoginAdmin()
    {
        if (session()->get('Status') == TRUE) {
            return redirect()->to(base_url('/Beranda-Admin'));
        } else {
            return view('Login-Admin');
        }
    }
    public function AuthAdmin()
    {
        $newSession = [
            'Id'  =>  $this->request->getVar('IDkey'),
            'Email'  => $this->request->getVar('Email'),
            'Status' => TRUE,
            'KataSandi' => $this->request->getVar('KataSandi'),
            'Nama' => $this->request->getVar('NamaAdmin'),
        ];
        $this->session->set($newSession);

        echo json_encode(10);
    }


    public function LoginMitra()
    {
        return view('Login-Mitra');
    }
}
