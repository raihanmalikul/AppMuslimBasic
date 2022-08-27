<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MLoginAdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'         => 'raihan',
                'username'     => 'raihanmalikulmulki@gmail.com',
                'password'     => md5('123'),
                'userlevel'    => 1,
                'status_login' => 0,
                'image'        => '',
                'user_valid'   => 1
            ],
            [
                'name'         => 'Dedi',
                'username'     => 'dedi01@gmail.com',
                'password'     => md5('123'),
                'userlevel'    => 1,
                'status_login' => 0,
                'image'        => '',
                'user_valid'   => 1
            ],
            [
                'name'         => 'Aldo',
                'username'     => 'aldo01@gmail.com',
                'password'     => md5('123'),
                'userlevel'    => 1,
                'status_login' => 0,
                'image'        => '',
                'user_valid'   => 1
            ],
            [
                'name'         => 'Azmi',
                'username'     => 'azmi01@gmail.com',
                'password'     => md5('123'),
                'userlevel'    => 1,
                'status_login' => 0,
                'image'        => '',
                'user_valid'   => 1
            ],
            [
                'name'         => 'Ilham',
                'username'     => 'ilham01@gmail.com',
                'password'     => md5('123'),
                'userlevel'    => 1,
                'status_login' => 0,
                'image'        => '',
                'user_valid'   => 1
            ]
        ];

        // Using Query Builder
        $this->db->table('m_login_admin')->insertBatch($data);
    }
}
