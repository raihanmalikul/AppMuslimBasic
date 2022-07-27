<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MCategorySeeds extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'GAMIS',
                'category_id'   => '01',
                'slug'          => 'gamis-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'KEMEJA',
                'category_id'   => '02',
                'slug'          => 'kemeja-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CELANA',
                'category_id'   => '03',
                'slug'          => 'celana-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'JILBAB',
                'category_id'   => '04',
                'slug'          => 'jibab-01',
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_category')->insertBatch($data);
    }
}
