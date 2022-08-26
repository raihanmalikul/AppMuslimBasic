<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MTimelineSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id" => 1,
                "timeline_id" => "TIME0001",
                "order_id" => "ORDI0001",
                "slug" => "ali-seris-01",
                "email" => "raihanmalikul0@gmail.com",
                "phone" => '6381499248998',
                "remake" => "NULL",
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0,
                "created_at" => TIme::now()
            ],
            [
                "id" => 2,
                "timeline_id" => "TIME0001",
                "order_id" => "ORDI0001",
                "slug" => "cardinal-cj-06",
                "email" => "raihanmalikul0@gmail.com",
                "phone" => '6381499248998',
                "remake" => "NULL",
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0,
                "created_at" => TIme::now()
            ]
        ];


        $this->db->table('m_timeline')->insert($data);
    }
}
