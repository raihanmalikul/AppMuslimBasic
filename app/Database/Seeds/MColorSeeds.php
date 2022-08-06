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
                'class_code'    => '#111827',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HAZELNUT',
                'color_id'      => '02',
                'slug'          => 'hazelnut-02',
                'class_code'    => '#ae734e',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'TARO',
                'color_id'      => '03',
                'slug'          => 'taro-03',
                'class_code'    => '#a3a6e8',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'GREY',
                'color_id'      => '04',
                'slug'          => 'grey-04',
                'class_code'    => '#808080',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'WHITE',
                'color_id'      => '05',
                'slug'          => 'white-05',
                'class_code'    => '#a7aab0',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ORANGE',
                'color_id'      => '06',
                'slug'          => 'orange-06',
                'class_code'    => '#FFA500',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'OLIVE',
                'color_id'      => '07',
                'slug'          => 'olive-07',
                'class_code'    => '#808000',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ROSE BROWN',
                'color_id'      => '08',
                'slug'          => 'rose-brown-08',
                'class_code'    => '#bc8f8f',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BLUE',
                'color_id'      => '09',
                'slug'          => 'blue-09',
                'class_code'    => '#0000FF',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'STUNE',
                'color_id'      => '10',
                'slug'          => 'stune-10',
                'class_code'    => '#B7B09C',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'PINK',
                'color_id'      => '11',
                'slug'          => 'pink-11',
                'class_code'    => '#FFC0CB',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BROWN',
                'color_id'      => '12',
                'slug'          => 'brown-12',
                'class_code'    => '#964B00',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'MAROON',
                'color_id'      => '13',
                'slug'          => 'maroon-13',
                'class_code'    => '#800000',
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'GREEN',
                'color_id'      => '14',
                'slug'          => 'green-14',
                'class_code'    => '#00FF00',
                'created_at'    => TIme::now()
            ],

        ];

        // Using Query Builder
        $this->db->table('m_color')->insertBatch($data);
    }
}
