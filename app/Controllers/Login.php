<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $Login;
    public function __construct()
    {
        $this->Login = new LoginModel(); 
    }

    public function login()
    {
        $data['title'] = "Login | Muslim Basic";
        return view('User/Pages/Login', $data);
    }

    public function actionLogin()
    {
        
    }

    public function logout()
    {
        
    }

    public function registrasi()
    {
        $data['title'] = "Registrasi | Muslim Basic";
        return view('User/Pages/Registrasi', $data);
    }

    public function actionRegis()
    {
        
    }
}
