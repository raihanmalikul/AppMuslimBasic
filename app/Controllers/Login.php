<?php

namespace App\Controllers;
use App\Models\LoginAdminModel;

class Login extends BaseController
{
    protected $LoginAdmin;
    public function __construct()
    {
        $this->LoginAdmin = new LoginAdminModel(); 
    }

    public function login()
    {
        $data['title'] = "Login | Muslim Basic";
        return view('User/Pages/Login', $data);
    }
}
