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
                "id" => 1,
                "name" => "BLACK",
                "color_id" => "01",
                "class_code" => "#111827",
                "slug" => "black-01",
                "created_at" => TIme::now()
            ],
            [
                "id" => 2,
                "name" => "HAZELNUT",
                "color_id" => "02",
                "class_code" => "#ae734e",
                "slug" => "hazelnut-02",
                "created_at" => TIme::now()
            ],
            [
                "id" => 3,
                "name" => "TARO",
                "color_id" => "03",
                "class_code" => "#a3a6e8",
                "slug" => "taro-03",
                "created_at" => TIme::now()
            ],
            [
                "id" => 4,
                "name" => "GREY",
                "color_id" => "04",
                "class_code" => "#808080",
                "slug" => "grey-04",
                "created_at" => TIme::now()
            ],
            [
                "id" => 5,
                "name" => "WHITE",
                "color_id" => "05",
                "class_code" => "#a7aab0",
                "slug" => "white-05",
                "created_at" => TIme::now()
            ],
            [
                "id" => 6,
                "name" => "ORANGE",
                "color_id" => "06",
                "class_code" => "#FFA500",
                "slug" => "orange-06",
                "created_at" => TIme::now()
            ],
            [
                "id" => 7,
                "name" => "OLIVE",
                "color_id" => "07",
                "class_code" => "#808000",
                "slug" => "olive-07",
                "created_at" => TIme::now()
            ],
            [
                "id" => 8,
                "name" => "ROSE BROWN",
                "color_id" => "08",
                "class_code" => "#bc8f8f",
                "slug" => "rose-brown-08",
                "created_at" => TIme::now()
            ],
            [
                "id" => 9,
                "name" => "BLUE",
                "color_id" => "09",
                "class_code" => "#0000FF",
                "slug" => "blue-09",
                "created_at" => TIme::now()
            ],
            [
                "id" => 10,
                "name" => "STUNE",
                "color_id" => 10,
                "class_code" => "#B7B09C",
                "slug" => "stune-10",
                "created_at" => TIme::now()
            ],
            [
                "id" => 11,
                "name" => "PINK",
                "color_id" => 11,
                "class_code" => "#FFC0CB",
                "slug" => "pink-11",
                "created_at" => TIme::now()
            ],
            [
                "id" => 12,
                "name" => "BROWN",
                "color_id" => 12,
                "class_code" => "#964B00",
                "slug" => "brown-12",
                "created_at" => TIme::now()
            ],
            [
                "id" => 13,
                "name" => "MAROON",
                "color_id" => 13,
                "class_code" => "#800000",
                "slug" => "maroon-13",
                "created_at" => TIme::now()
            ],
            [
                "id" => 14,
                "name" => "GREEN",
                "color_id" => 14,
                "class_code" => "#00FF00",
                "slug" => "green-14",
                "created_at" => TIme::now()
            ],
            [
                "id" => 15,
                "name" => "DARK GREY",
                "color_id" => 15,
                "class_code" => "#A9A9A9",
                "slug" => "dark-gray-15",
                "created_at" => TIme::now()
            ]

        ];

        // Using Query Builder
        $this->db->table('m_color')->insertBatch($data);
    }
}
