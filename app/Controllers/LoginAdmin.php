<?php

namespace App\Controllers;

use App\Models\LoginAdminModel;

class LoginAdmin extends BaseController
{
    protected $LoginAdmin;
    public function __construct()
    {
        $this->LoginAdmin = new LoginAdminModel();
    }

    public function index()
    {
        $data['title'] = "Sign In Admin | Muslim Basic";
        return view('Admin/Pages/Login', $data);
    }

    public function actionLogin()
    {
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $data     = $this->LoginAdmin->where('username', $username)->first();
        if ($data) {
            $user_valid = $data['user_valid'];
            if ($user_valid == 1) {
                $pass = $data['password'];
                if ($password == $pass) {
                    $id = $data['id'];
                    $dt = ['status_login' => '1'];

                    $this->LoginAdmin->set($dt);
                    $this->LoginAdmin->where('id', $id);
                    $update = $this->LoginAdmin->update();

                    if ($update) {
                        $ses_data = [
                            'id'            => $data['id'],
                            'name'          => $data['name'],
                            'username'      => $data['username'],
                            'userlevel'     => $data['userlevel'],
                            'image'         => $data['image'],
                            'logged_in'     => TRUE
                        ];

                        $this->session->set($ses_data);
                        $this->session->setFlashdata('msg', 'Login Berhasil');
                        return redirect()->to('/admin/dashboard');
                    } else {
                        $this->session->setFlashdata('msg_err', 'Update Gagal');
                        return redirect()->to('/LoginAdmin');
                    }
                } else {
                    $this->session->setFlashdata('msg_err', 'Username atau password salah');
                    return redirect()->to('/LoginAdmin');
                }
            } else {
                $this->session->setFlashdata('msg_err', 'User tidak aktif');
                return redirect()->to('/LoginAdmin');
            }
        } else {
            $this->session->setFlashdata('msg_err', 'Username atau password salah');
            return redirect()->to('/LoginAdmin');
        }
    }

    public function logout()
    {
        $id = $this->session->get("id");
        $dt = ['status_login' => '0'];
        $this->db->table('m_login_admin')->update($dt, array('id' => $id));
        $this->session->destroy();
        return redirect()->to('/LoginAdmin');
    }
}
