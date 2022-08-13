<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class DProductSeeds extends Seeder
{
    public function run()
    {
        $data = [
            [
                "product_id" => "01",
                "category_id" => "03",
                "sub_code" => "sc01",
                "slug" => "butto-pants-01",
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "01",
                "category_id" => "02",
                "sub_code" => "sc02",
                "slug" => "ali-seris-01-02",
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "01",
                "category_id" => "01",
                "sub_code" => "sc03",
                "slug" => "thobe-premium-01",
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "06",
                "category_id" => "02",
                "sub_code" => "sc04",
                "slug" => "cardinal-cj-06",
                "is_valid" => 1,
                "created_at" => TIme::now()
            ]
        ];

        $this->db->table('d_product')->insertBatch($data);
    }
}
