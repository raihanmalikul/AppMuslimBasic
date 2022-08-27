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
                'slug'          => 'xxs-07'
            ],
            [
                'name'          => 'XS',
                'size_id'       => '06',
                'slug'          => 'xs-06'
            ],
            [
                'name'          => 'S',
                'size_id'       => '01',
                'slug'          => 's-01'
            ],
            [
                'name'          => 'M',
                'size_id'       => '05',
                'slug'          => 'm-05'
            ],
            [
                'name'          => 'L',
                'size_id'       => '02',
                'slug'          => 'l-02'
            ],
            [
                'name'          => 'XL',
                'size_id'       => '03',
                'slug'          => 'xl-03'
            ],
            [
                'name'          => '2XL',
                'size_id'       => '04',
                'slug'          => 'xxl-04'
            ],
            [
                'name'          => '3XL',
                'size_id'       => '08',
                'slug'          => 'xxxl-08'
            ]
        ];

        // Using Query Builder
        $this->db->table('m_size')->insertBatch($data);
    }
}
