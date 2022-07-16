<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        return view('User/Layout/template');
    }
    
    public function dashboard()
    {
        return view('User/Layout/template');
    }
}
