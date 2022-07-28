<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MProductSeeds extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'Salman Series',
                'slug'          => 'salman-series', // sluq adalah nama produk yang spasinya diganti dengan tanda '-' sesuaikan dengan data yang ada
                'product_id'    => '01', // urutkan jika category_id sama antar data yang lain
                'category_id'   => '01', // sesuaikan pada tabel kategory
                'description'   => '‼️OPEN PRE ORDER 11-15 JULI 2022‼️ Pengen gamisan tapi takut keliatan terlalu formal? Atau.. mau beli gamis tapi takut cuma ngegantung di lemari aja karena gamis identiknya cuma dipake pas jum’atan aja? Tenang aja kang bro, kan ada Salman Series by Muslim Basic😎 Solusi buat kang bro yang mau pake gamis tapi masih tetep mau keliatan CASUAL dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'salman01.jpg', // nama file sesuaikan dengan format nama kata pertama di gabungkan dengan color_id warnanya
                'price'         => 195000,
                'weight'        => 3000, // Berat kiriman dalam gram
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'Ali Series',
                'slug'          => 'ali-series', // sluq adalah nama produk yang spasinya diganti dengan tanda '-' sesuaikan dengan data yang ada
                'product_id'    => '01', // urutkan jika category_id sama antar data yang lain
                'category_id'   => '02', // sesuaikan pada tabel kategory
                'description'   => '‼️OPEN PRE ORDER 22-24 JUNI 2022‼️ Pengen pake kemeja tapi tetep keliatan fresh? Atau.. mau beli kemeja tapi takut gak dipake karna biasanya bahannya gak nyaman, gerah, kasar, dan kaku? Tenang aja kang bro, kan sekarang ada Ali Series by Muslim Basic😎 Solusi buat kang bro yang mau pake kemeja tapi masih tetep mau keliatan CASUAL, RAPIH dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'ali02.jpg', // nama file sesuaikan dengan format nama kata pertama di gabungkan dengan color_id warna warnanya
                'price'         => 185000,
                'weight'        => 3000, // Berat kiriman dalam gram
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'Salman Series 2',
                'slug'          => 'salman-series-2', // sluq adalah nama produk yang spasinya diganti dengan tanda '-' sesuaikan dengan data yang ada
                'product_id'    => '02', // urutkan jika category_id sama antar data yang lain
                'category_id'   => '01', // sesuaikan pada tabel kategory
                'description'   => '‼️OPEN PRE ORDER 11-15 JULI 2022‼️ Pengen gamisan tapi takut keliatan terlalu formal? Atau.. mau beli gamis tapi takut cuma ngegantung di lemari aja karena gamis identiknya cuma dipake pas jum’atan aja? Tenang aja kang bro, kan ada Salman Series by Muslim Basic😎 Solusi buat kang bro yang mau pake gamis tapi masih tetep mau keliatan CASUAL dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'salman02.jpg', // nama file sesuaikan dengan format nama kata pertama di gabungkan dengan color_id warnanya
                'price'         => 195000,
                'weight'        => 3000, // Berat kiriman dalam gram
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'Ali Series 2',
                'slug'          => 'ali-series-2', // sluq adalah nama produk yang spasinya diganti dengan tanda '-' sesuaikan dengan data yang ada
                'product_id'    => '01', // urutkan jika category_id sama antar data yang lain
                'category_id'   => '02', // sesuaikan pada tabel kategory
                'description'   => '‼️OPEN PRE ORDER 22-24 JUNI 2022‼️ Pengen pake kemeja tapi tetep keliatan fresh? Atau.. mau beli kemeja tapi takut gak dipake karna biasanya bahannya gak nyaman, gerah, kasar, dan kaku? Tenang aja kang bro, kan sekarang ada Ali Series by Muslim Basic😎 Solusi buat kang bro yang mau pake kemeja tapi masih tetep mau keliatan CASUAL, RAPIH dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'ali01.jpg', // nama file sesuaikan dengan format nama kata pertama di gabungkan dengan color_id warnanya
                'price'         => 185000,
                'weight'        => 3000, // Berat kiriman dalam gram
                'stock'         => 100,
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_product')->insertBatch($data);
    }
}
