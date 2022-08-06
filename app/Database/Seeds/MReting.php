<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MReting extends Seeder
{
    public function run()
    {
        $data = [
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 2,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 3,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 4,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 5,
                "created_at" => TIme::now()
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "description" => "",
                "score" => 4,
                "created_at" => TIme::now()
            ],

        ];

        $this->db->table("m_rating")->insertBatch($data);
    }
}
