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
        // $name     = $this->request->getVar('name');
        // $email    = $this->request->getVar('email');
        // $pass     = $this->request->getVar('pass');
        // $con_pass = $this->request->getVar('con_pass');

        // if ($pass == $con_pass) {
        //     $token = base64_encode(random_bytes(32));
        //     $data = [
        //         'name'           => $name,
        //         'email'          => $email,
        //         'password'       => md5($pass),
        //         'remember_token' => $token
        //     ];

        //     $this->session->set($data);
        //     $hasil = $this->Login->save($data);

        //     if ($hasil) {
        //         $this->session->setFlashdata('msg', 'Login Berhasil');
        //         return redirect()->to('/');
        //     } else {
        //         $this->session->setFlashdata('msg', 'Login Gagal!');
        //         return redirect()->to('/login');
        //     }
        // } else {
        //     $this->session->setFlashdata('msg_err', 'Password dan Condirm Password tidak sama');
        //     return redirect()->to('/login');
        // }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        $data['title'] = "Register | Muslim Basic";
        return view('User/Pages/Register', $data);
    }

    public function actionRegis()
    {
        $name     = $this->request->getVar('name');
        $email    = $this->request->getVar('email');
        $pass     = $this->request->getVar('pass');
        $con_pass = $this->request->getVar('con_pass');

        if ($pass == $con_pass) {
            $token = base64_encode(random_bytes(32));
            $data = [
                'name'           => $name,
                'email'          => $email,
                'password'       => md5($pass),
                'remember_token' => $token
            ];

            $this->session->set($data);
            $results = $this->Login->save($data);

            if ($results) {
                $this->session->setFlashdata('msg', 'Login Berhasil!');
                return redirect()->to('/');
            } else {
                $this->session->setFlashdata('msg', 'Login Gagal!');
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('msg_err', 'Password dan Confirm Password tidak sama!');
            return redirect()->to('/login');
        }
    }

    public function forgotPass()
    {
        $data['title'] = "Forgot password | Muslim Basic";
        return view('User/Pages/ForgotPass', $data);
    }

    // public function actionForgotPass()
    // {
        
    // }
}
