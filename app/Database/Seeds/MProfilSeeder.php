<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MProfilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'              => 'Andi',
                'email'             => 'raihangamerindo@gmail.com',
                'phone'             => '6381420548878',
                'address'           => 'Jl.sariasu no.188',
                'province_id'       => 6,
                'city_id'           => 151,
                'postal_code'       => 11220,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Aldo',
                'email'             => 'aldodwrzy@gmail.com',
                'phone'             => '6381420248888',
                'address'           => 'Jl.jepara.189',
                'province_id'       => 9,
                'city_id'           => 79,
                'postal_code'       => 4011,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Azmi',
                'email'             => 'mraihanna.18@gmail.com',
                'phone'             => '6382220248998',
                'address'           => 'Jl.bengan no.190',
                'province_id'       => 9,
                'city_id'           => 126,
                'postal_code'       => 44126,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Ilham',
                'email'             => 'ilhamferdiansyah737@gmail.com',
                'phone'             => '6381420248955',
                'address'           => 'Jl.sapi 2 no.191',
                'province_id'       => 9,
                'city_id'           => 107,
                'postal_code'       => 40512,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Dedi',
                'email'             => 'dedihidayat333@gmail.com',
                'phone'             => '6381320248998',
                'address'           => 'Jl.gunung merapi no.192',
                'province_id'       => 34,
                'city_id'           => 278,
                'postal_code'       => 20228,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Raihan',
                'email'             => 'raihanmalikulmulki@gmail.com',
                'phone'             => '6381499248998',
                'address'           => 'Jl.pengalengan no.193',
                'province_id'       => 9,
                'city_id'           => 109,
                'postal_code'       => 45116,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Abdul',
                'email'             => 'raihanmalikul0@gmail.com',
                'phone'             => '6381499248998',
                'address'           => 'Jl.langit no.194',
                'province_id'       => 11,
                'city_id'           => 444,
                'postal_code'       => 60119,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ],
            [
                'name'              => 'Samsudin',
                'email'             => 'razorraih@gmail.com',
                'phone'             => '6381450248998',
                'address'           => 'Jl.pelangi no.195',
                'province_id'       => 18,
                'city_id'           => 458,
                'postal_code'       => 35619,
                'status'            => 1,
                'image'             => '',
                'created_at'        => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_profil')->insertBatch($data);
    }
}
