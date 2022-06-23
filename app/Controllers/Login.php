<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function LoginAdmin()
    {
        return view('Login-Admin');
    }
    public function LoginMitra()
    {
        return view('Login-Mitra');
    }

   
}
