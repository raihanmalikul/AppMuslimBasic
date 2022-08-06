<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MLoginSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'         => 'Andi',
                'email'     => 'raihangamerindo@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Aldo',
                'email'     => 'aldodwrzy@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Azmi',
                'email'     => 'mraihanna.18@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Ilham',
                'email'     => 'ilhamferdiansyah737@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Dedi',
                'email'     => 'dedihidayat333@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Raihan',
                'email'     => 'raihanmalikulmulki@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Abdul',
                'email'     => 'raihanmalikul0@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ],
            [
                'name'         => 'Samsudin',
                'email'     => 'razorraih@gmail.com',
                'email_verified_at'     => '',
                'is_active'    => '',
                'password' => md5('123'),
                'remember_token'        => '',
                'created_at'   => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_login')->insertBatch($data);
    }
}
