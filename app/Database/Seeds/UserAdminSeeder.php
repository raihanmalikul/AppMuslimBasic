<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'         => 'raihan',
            'username'     => 'raihanmalikulmulki@gmail.com',
            'password'     => md5('123'),
            'userlevel'    => 1,
            'status_login' => 0,
            'image'        => '',
            'user_valid'   => 1,
            'created_at'   => TIme::now()
        ];

        // Using Query Builder
        $this->db->table('login_admin')->insert($data);
    }
}
