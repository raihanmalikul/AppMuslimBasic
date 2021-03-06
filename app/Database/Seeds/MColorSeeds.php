<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MColorSeeds extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'BLACK',
                'color_id'      => '01',
                'slug'          => 'black-01',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HAZELNUT',
                'color_id'      => '02',
                'slug'          => 'hazelnut-02',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'TARO',
                'color_id'      => '03',
                'slug'          => 'taro-03',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'GREY',
                'color_id'      => '04',
                'slug'          => 'grey-04',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'WHITE',
                'color_id'      => '05',
                'slug'          => 'white-05',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ORANGE',
                'color_id'      => '06',
                'slug'          => 'orange-06',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'OLIVE',
                'color_id'      => '07',
                'slug'          => 'olive-07',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ROSE BROWN',
                'color_id'      => '08',
                'slug'          => 'rose-brown-08',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BLUE',
                'color_id'      => '09',
                'slug'          => 'blue-09',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'STUNE',
                'color_id'      => '10',
                'slug'          => 'stune-10',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'PINK',
                'color_id'      => '11',
                'slug'          => 'pink-11',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BROWN',
                'color_id'      => '12',
                'slug'          => 'brown-12',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'MAROON',
                'color_id'      => '13',
                'slug'          => 'maroon-13',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'GREEN',
                'color_id'      => '14',
                'slug'          => 'green-14',
                'created_at'    => TIme::now()
            ],

        ];

        // Using Query Builder
        $this->db->table('m_color')->insertBatch($data);
    }
}
