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
            ],
            [
                'name'          => 'BUTTON PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '1.jpg',
                'price'         => 189000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CHINO PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '2.jpg',
                'price'         => 199000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'DEAN CULOTTE',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '3.jpg',
                'price'         => 189000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'FLARE PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '4.jpg',
                'price'         => 179000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'GEMMA PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '5.jpg',
                'price'         => 179000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'INNER PENTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '6.jpg',
                'price'         => 89000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIGH WAIST CULOTTE',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '7.jpg',
                'price'         => 189000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'KNIT JOGGER PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '8.jpg',
                'price'         => 199000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'LINEA PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '9.jpg',
                'price'         => 189000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'WIDE PANTS',
                'slug'          => '',
                'category_id'   => 3,
                'description'   => '',
                'image'         => '10.jpg',
                'price'         => 199000,
                'weight'        => 300,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ALI SERIS',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '11.jpg',
                'price'         => 159000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BUKHORI SERIS',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '12.jpg',
                'price'         => 150000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ANDREW SMITH LENGAN PANJANG ',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '13.jpg',
                'price'         => 200000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ANDREW SMITH LENGAN PENDEK ',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '14.jpg',
                'price'         => 180000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CARDINAL JEANS',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '15.jpg',
                'price'         => 200000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CARDINAL CJ',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '16.jpg',
                'price'         => 200000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CARDINAL KEMEJA',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '17.jpg',
                'price'         => 200000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'CARDINAL  CCSL',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '18.jpg',
                'price'         => 210000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ANDREW SMITH KEMEJA',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '19.jpg',
                'price'         => 210000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ANDREW SMITH',
                'slug'          => '',
                'category_id'   => 2,
                'description'   => '',
                'image'         => '20.jpg',
                'price'         => 200000,
                'weight'        => 350,
                'stock'         => 50,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'THOBE PREMIUM',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '21.jpg',
                'price'         => 289000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'SALMAN SERIS',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '22.jpg',
                'price'         => 200000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'THOBE SACHET',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '23.jpg',
                'price'         => 250000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'NOOR ABAY',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '24.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'BALQIS ABAYA',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '25.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'NONA ABAYA',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '26.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'jobb',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '27.jpg',
                'price'         => 200000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'SALT N PEPPER',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '28.jpg',
                'price'         => 200000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'ARJUNA WEDA',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '29.jpg',
                'price'         => 200000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'LOIS JEANS',
                'slug'          => '',
                'category_id'   => 1,
                'description'   => '',
                'image'         => '30.jpg',
                'price'         => 250000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIJAB SERIS',
                'slug'          => '',
                'category_id'   => 4,
                'description'   => '',
                'image'         => '31.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIJAB SERIS',
                'slug'          => '',
                'category_id'   => 4,
                'description'   => '',
                'image'         => '32.jpg',
                'price'         => 175000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIJAB SERIS',
                'slug'          => '',
                'category_id'   => 4,
                'description'   => '',
                'image'         => '33.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIJAB SERIS',
                'slug'          => '',
                'category_id'   => 4,
                'description'   => '',
                'image'         => '34.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ],
            [
                'name'          => 'HIJAB SERIS',
                'slug'          => '',
                'category_id'   => 4,
                'description'   => '',
                'image'         => '34.jpg',
                'price'         => 160000,
                'weight'        => 500,
                'stock'         => 100,
                'created_at'    => TIme::now()
            ]


        ];

        // Using Query Builder
        $this->db->table('m_product')->insertBatch($data);
    }
}
