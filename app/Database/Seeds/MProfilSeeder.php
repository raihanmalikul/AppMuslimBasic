<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MProfilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'          => 'BUTTON PANTS',
            'slug'          => '',
            'category_id'   => 3,
            'description'   => '',
            'image'         => '1.jpg',
            'price'         => 189000,
            'weight'        => '0.3 Kg',
            'stock'         => 100,
            'created_at'    => TIme::now()
        ];

        // Using Query Builder
        $this->db->table('m_profil')->insert($data);
    }
}
