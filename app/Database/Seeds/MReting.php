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
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Bahannya enak lembut",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "lambat pemesanannya",
                "score" => 2
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Sesuai dengan gambara barangnya",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Tidak bisa menghubungi admin via web ini",
                "score" => 3
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "esuai dengan gambara barangnya",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "esuai dengan gambara barangnya",
                "score" => 4
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Baranya bagus",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Cepat pemesanannya",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Cepat pemerosesannnya",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Sesui dengan gambar",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Barangnya bagus",
                "score" => 5
            ],
            [
                "customer_id" => "raihangamerindo@gmail.com",
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "sub_code" => "sc04",
                "color_id" => "02",
                "size_id" => "02",
                "description" => "Cepat sampai",
                "score" => 4
            ],

        ];

        $this->db->table("m_rating")->insertBatch($data);
    }
}
