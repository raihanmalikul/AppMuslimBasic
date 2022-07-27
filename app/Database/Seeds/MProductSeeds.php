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
                'slug'          => 'salman-series',
                'product_id'    => '01',
                'category_id'   => '01',
                'description'   => '‼️OPEN PRE ORDER 11-15 JULI 2022‼️ Pengen gamisan tapi takut keliatan terlalu formal? Atau.. mau beli gamis tapi takut cuma ngegantung di lemari aja karena gamis identiknya cuma dipake pas jum’atan aja? Tenang aja kang bro, kan ada Salman Series by Muslim Basic😎 Solusi buat kang bro yang mau pake gamis tapi masih tetep mau keliatan CASUAL dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'salmanBlack.jpg',
                'price'         => 195000,
                'weight'        => 3000,
                'qty  '         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'Ali Series',
                'slug'          => 'ali-series',
                'product_id'    => '01',
                'category_id'   => '02',
                'description'   => '‼️OPEN PRE ORDER 22-24 JUNI 2022‼️ Pengen pake kemeja tapi tetep keliatan fresh? Atau.. mau beli kemeja tapi takut gak dipake karna biasanya bahannya gak nyaman, gerah, kasar, dan kaku? Tenang aja kang bro, kan sekarang ada Ali Series by Muslim Basic😎 Solusi buat kang bro yang mau pake kemeja tapi masih tetep mau keliatan CASUAL, RAPIH dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻',
                'image'         => 'aliWhite.jpg',
                'price'         => 185000,
                'weight'        => 3000,
                'qty  '         => 100,
                'created_at'    => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_product')->insertBatch($data);
    }
}
