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
                "slug" => "butto-pants-01",
                "color_id" => 10,
                "size_id" => "01",
                "image" => "butto-pants-01-03-10-01.jpg",
                "price" => 189000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "chino-pants-02",
                "color_id" => "06",
                "size_id" => "01",
                "image" => "chino-pants-02-03-06-01.jpg",
                "price" => 199000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "03",
                "slug" => "dean-culotte-03",
                "color_id" => 11,
                "size_id" => "01",
                "image" => "dean-culotte-03-03-11-01.jpg",
                "price" => 189000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "04",
                "slug" => "flare-pants-04",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "flare-pants-04-03-12-01.jpg",
                "price" => 179000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "05",
                "slug" => "gemma-pants-05",
                "color_id" => "09",
                "size_id" => "01",
                "image" => "gemma-pants-05-03-09-01.jpg",
                "price" => 179000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "06",
                "slug" => "inner-pents-06",
                "color_id" => "09",
                "size_id" => "01",
                "image" => "inner-pents-06-03-09-01.jpg",
                "price" => 89000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "07",
                "slug" => "high-waist-culotte-07",
                "color_id" => 10,
                "size_id" => "01",
                "image" => "high-waist-culotte-07-03-10-01.jpg",
                "price" => 189000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "08",
                "slug" => "knit-jogger-pants",
                "color_id" => "04",
                "size_id" => "01",
                "image" => "knit-jogger-pants-08-03-04-01.jpg",
                "price" => 199000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "09",
                "slug" => "linea-pants-09",
                "color_id" => "04",
                "size_id" => "01",
                "image" => "linea-pants-09-03-04-01.jpg",
                "price" => 189000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => 10,
                "slug" => "wide-pants-10-03",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "wide-pants-10-03-12-01.jpg",
                "price" => 199000,
                "weight" => 3000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "01",
                "slug" => "ali-seris-01-02",
                "color_id" => 13,
                "size_id" => "01",
                "image" => "ali-seris-01-02-13-01.jpg",
                "price" => 159000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "bukhori-seris-02",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "bukhori-seris-02-02-05-01.jpg",
                "price" => 150000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "03",
                "slug" => "andrew-smith-lengan",
                "color_id" => "09",
                "size_id" => "01",
                "image" => "andrew-smith-lengan-panjang-03-02-09-01.jpg",
                "price" => 200000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "04",
                "slug" => "andrew-smith-lengan",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "andrew-smith-lengan-pendek -04-02-12-01.jpg",
                "price" => 180000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "05",
                "slug" => "cardinal-jeans-05",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "cardinal-jeans-05-02-12-01.jpg",
                "price" => 200000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "06",
                "slug" => "cardinal-cj-06",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "cardinal-cj-06-02-05-01.jpg",
                "price" => 200000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "07",
                "slug" => "cardinal-kemeja-07",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "cardinal-kemeja-07-02-05-01.jpg",
                "price" => 200000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "08",
                "slug" => "cardinal-ccsl-08",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "cardinal-ccsl-08-02-12-01.jpg",
                "price" => 210000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "09",
                "slug" => "andrew-smith-kemeja",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "andrew-smith-kemeja-09-02-05-01.jpg",
                "price" => 210000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => 10,
                "slug" => "andrew-smith-10",
                "color_id" => 14,
                "size_id" => "01",
                "image" => "andrew-smith-10-02-14-01.jpg",
                "price" => 200000,
                "weight" => 3500,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "01",
                "slug" => "thobe-premium-01",
                "color_id" => "04",
                "size_id" => "01",
                "image" => "thobe-premium-01-01-04-01.jpg",
                "price" => 289000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "salman-seris-02",
                "color_id" => "01",
                "size_id" => "01",
                "image" => "salman-seris-02-01-01-01.jpg",
                "price" => 200000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "salman-seris-02",
                "color_id" => "02",
                "size_id" => "02",
                "image" => "salman-seris-02-01-02-02.jpg",
                "price" => 195000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "salman-seris-02",
                "color_id" => "03",
                "size_id" => "03",
                "image" => "salman-seris-02-01-03-03.jpg",
                "price" => 190000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "03",
                "slug" => "thobe-sachet-03",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "thobe-sachet-03-01-05-01.jpg",
                "price" => 250000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "04",
                "slug" => "noor-abay-04-01",
                "color_id" => "01",
                "size_id" => "01",
                "image" => "noor-abay-04-01-01-01.jpg",
                "price" => 160000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "05",
                "slug" => "balqis-abaya-05",
                "color_id" => "03",
                "size_id" => "01",
                "image" => "balqis-abaya-05-01-03-01.jpg",
                "price" => 160000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "06",
                "slug" => "nona-abaya-06-01",
                "color_id" => "09",
                "size_id" => "01",
                "image" => "nona-abaya-06-01-09-01.jpg",
                "price" => 160000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "07",
                "slug" => "jobb-07-01-05-01",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "jobb-07-01-05-01.jpg",
                "price" => 200000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "08",
                "slug" => "salt-n-pepper-08",
                "color_id" => 12,
                "size_id" => "01",
                "image" => "salt-n-pepper-08-01-12-01.jpg",
                "price" => 200000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "09",
                "slug" => "arjuna-weda-09",
                "color_id" => "06",
                "size_id" => "01",
                "image" => "arjuna-weda-09-01-06-01.jpg",
                "price" => 200000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => 10,
                "slug" => "lois-jeans-10-01",
                "color_id" => "05",
                "size_id" => "01",
                "image" => "lois-jeans-10-01-05-01.jpg",
                "price" => 250000,
                "weight" => 5000,
                "stock" => 100,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "01",
                "slug" => "hijab-seris-01",
                "color_id" => "01",
                "size_id" => "01",
                "image" => "hijab-seris-01-04-01-01.jpg",
                "price" => 160000,
                "weight" => 4000,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "02",
                "slug" => "hijab-seris-02",
                "color_id" => "07",
                "size_id" => "01",
                "image" => "hijab-seris-02-04-07-01.jpg",
                "price" => 175000,
                "weight" => 4000,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "03",
                "slug" => "hijab-seris-03",
                "color_id" => "08",
                "size_id" => "01",
                "image" => "hijab-seris-03-04-08-01.jpg",
                "price" => 160000,
                "weight" => 4000,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "04",
                "slug" => "hijab-seris-04",
                "color_id" => "01",
                "size_id" => "01",
                "image" => "hijab-seris-04-04-01-01.jpg",
                "price" => 160000,
                "weight" => 4000,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ],
            [
                "product_id" => "05",
                "slug" => "hijab-seris-05",
                "color_id" => "06",
                "size_id" => "01",
                "image" => "hijab-seris-05-04-06-01.jpg",
                "price" => 160000,
                "weight" => 4000,
                "stock" => 50,
                "is_valid" => 1,
                "created_at" => TIme::now()
            ]
        ];

        $this->db->table('d_product')->insertBatch($data);
    }
}
