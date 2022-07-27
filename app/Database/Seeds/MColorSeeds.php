<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MColorSeeds extends Seeder
{
    public function run()
    {
        $data = [
            'name'          => 'BLACK',
            'color_id'   => 1,
            'slug'          => '',
            'created_at'    => TIme::now()
        ];

        // Using Query Builder
        $this->db->table('m_color')->insert($data);
    }
}
