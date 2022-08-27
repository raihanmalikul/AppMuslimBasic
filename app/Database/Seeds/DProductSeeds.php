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
                "is_valid" => 1
            ],
            [
                "product_id" => "02",
                "category_id" => "03",
                "sub_code" => "sc06",
                "slug" => "chino-pants-02",
                "is_valid" => 1
            ],
            [
                "product_id" => "03",
                "category_id" => "03",
                "sub_code" => "sc07",
                "slug" => "dean-culotte-03",
                "is_valid" => 1
            ],
            [
                "product_id" => "04",
                "category_id" => "03",
                "sub_code" => "sc08",
                "slug" => "flare-pants-04",
                "is_valid" => 1
            ],
            [
                "product_id" => "05",
                "category_id" => "03",
                "sub_code" => "sc09",
                "slug" => "gemma-pants-05",
                "is_valid" => 1
            ],
            [
                "product_id" => "01",
                "category_id" => "02",
                "sub_code" => "sc02",
                "slug" => "ali-seris-01",
                "is_valid" => 1
            ],
            [
                "product_id" => "02",
                "category_id" => "02",
                "sub_code" => "sc10",
                "slug" => "bukhori-seris-02",
                "is_valid" => 1
            ],
            [
                "product_id" => "06",
                "category_id" => "02",
                "sub_code" => "sc04",
                "slug" => "cardinal-cj-06",
                "is_valid" => 1
            ],
            [
                "product_id" => "01",
                "category_id" => "01",
                "sub_code" => "sc03",
                "slug" => "thobe-premium-01",
                "is_valid" => 1
            ],
            [
                "product_id" => "02",
                "category_id" => "01",
                "sub_code" => "sc05",
                "slug" => "salman-seris-02",
                "is_valid" => 1
            ]
        ];

        $this->db->table('d_product')->insertBatch($data);
    }
}
