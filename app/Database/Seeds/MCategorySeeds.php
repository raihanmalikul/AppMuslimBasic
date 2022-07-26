<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MCategorySeeds extends Seeder
{
    public function run()
    {
        $data = [
            'name'          => 'GAMIS',
            'category_id'   => 1,
            'slug'          => '',
            'created_at'    => TIme::now()
        ];

        // Using Query Builder
        $this->db->table('m_category')->insert($data);
    }
}
