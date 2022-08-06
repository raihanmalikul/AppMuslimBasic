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
                'name'          => 'XXS',
                'size_id'       => '07',
                'slug'          => 'xxs-07',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'XS',
                'size_id'       => '06',
                'slug'          => 'xs-06',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'S',
                'size_id'       => '01',
                'slug'          => 's-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'M',
                'size_id'       => '05',
                'slug'          => 'm-05',
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
                'name'          => '2XL',
                'size_id'       => '04',
                'slug'          => 'xxl-04',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => '3XL',
                'size_id'       => '08',
                'slug'          => 'xxxl-08',
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_size')->insertBatch($data);
    }
}
