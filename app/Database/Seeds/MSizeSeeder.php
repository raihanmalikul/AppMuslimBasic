<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MSizeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'S',
                'size_id'       => 1,
                'slug'          => '',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'L',
                'size_id'       => 2,
                'slug'          => '',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'XL',
                'size_id'       => 3,
                'slug'          => '',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'XXL',
                'size_id'       => 4,
                'slug'          => '',
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_size')->insertBatch($data);
    }
}
