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
                'size_id'       => '01',
                'slug'          => 's-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'L',
                'size_id'       => '02',
                'slug'          => 'l-02',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'XL',
                'size_id'       => '03',
                'slug'          => 'xl-03',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'XXL',
                'size_id'       => '04',
                'slug'          => 'xxl-04',
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_size')->insertBatch($data);
    }
}
