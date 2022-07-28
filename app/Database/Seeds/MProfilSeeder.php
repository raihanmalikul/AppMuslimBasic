<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MProfilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'              => 'BUTTON PANTS',
            'email'             => '',
            'phone'             => 3,
            'address'           => '',
            'province_id'       => '1.jpg',
            'city_id'           => 189000,
            'postal_code'       => '',
            'statud'            => 100,
            'image'             => 100,
            'created_at'        => TIme::now()
        ];

        // Using Query Builder
        $this->db->table('m_profil')->insert($data);
    }
}
