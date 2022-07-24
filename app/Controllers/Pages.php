<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data['title'] = "Home | Muslim Basic";
        return view('User/Pages/Home', $data);
    }
}
