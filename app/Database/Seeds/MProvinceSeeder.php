<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MProvinceSeeder extends Seeder
{
    public function run()
    {
        $data =  [
            [
                'province_id' => 1,
                'province' => 'Bali',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 2,
                'province' => 'Bangka Belitung',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 3,
                'province' => 'Banten',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 4,
                'province' => 'Bengkulu',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 5,
                'province' => 'DI Yogyakarta',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 6,
                'province' => 'DKI Jakarta',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 7,
                'province' => 'Gorontalo',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 8,
                'province' => 'Jambi',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 9,
                'province' => 'Jawa Barat',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 10,
                'province' => 'Jawa Tengah',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 11,
                'province' => 'Jawa Timur',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 12,
                'province' => 'Kalimantan Barat',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 13,
                'province' => 'Kalimantan Selatan',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 14,
                'province' => 'Kalimantan Tengah',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 15,
                'province' => 'Kalimantan Timur',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 16,
                'province' => 'Kalimantan Utara',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 17,
                'province' => 'Kepulauan Riau',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 18,
                'province' => 'Lampung',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 19,
                'province' => 'Maluku',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 20,
                'province' => 'Maluku Utara',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 21,
                'province' => 'Nanggroe Aceh Darussalam (NAD)',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 22,
                'province' => 'Nusa Tenggara Barat (NTB)',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 23,
                'province' => 'Nusa Tenggara Timur (NTT)',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 24,
                'province' => 'Papua',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 25,
                'province' => 'Papua Barat',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 26,
                'province' => 'Riau',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 27,
                'province' => 'Sulawesi Barat',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 28,
                'province' => 'Sulawesi Selatan',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 29,
                'province' => 'Sulawesi Tengah',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 30,
                'province' => 'Sulawesi Tenggara',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 31,
                'province' => 'Sulawesi Utara',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 32,
                'province' => 'Sumatera Barat',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 33,
                'province' => 'Sumatera Selatan',
                'created_at' => TIme::now()
            ],
            [
                'province_id' => 34,
                'province' => 'Sumatera Utara',
                'created_at' => TIme::now()
            ]
        ];

        // Using Query Builder
        $this->db->table('m_province')->insertBatch($data);
    }
}
