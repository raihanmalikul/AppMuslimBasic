<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $username = $this->session->get("logged_in");
        // if (empty($username)) {
        //     $this->session->setFlashdata('msg_err', 'Anda Harus Login Terlebih Dahulu');
        //     return redirect()->to('/');
        // }
    }

    public function dashboard()
    {
        $data['title'] = "Home | Muslim Basic";
        return view('User/Pages/Home', $data);
    }

    public function productShow($slug = '')
    {
        $nameTitle = str_replace("-", " ", $slug);
        $data['title']  = ucwords(strtolower($nameTitle)) . " | Muslim Basic";
        $data['slug']   = $slug;

        return view('User/Pages/Product', $data);
    }

    public function checkout()
    {
        $data['title'] = "Checkout | Muslim Basic";
        return view('User/Pages/Checkout', $data);
    }
}
