<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class MPaymentSeeds extends Seeder
{
    public function run()
    {
        $data = [
            [
                "payment_id" => "PAYID20220827204711",
                "email" => "raihanmalikulmulki@gmail.com",
                "delivery_code" => "jne-Ongkos Kirim Ekonomis-2-3-50000",
                "total_price" => 125000,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827204711.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "bni",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827205117",
                "email" => "raihangamerindo@gmail.com",
                "delivery_code" => "jne-Ongkos Kirim Ekonomis-2-3-50000",
                "total_price" => 125000,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827205117.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "mandiri",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827205217",
                "email" => "aldodwrzy@gmail.com",
                "delivery_code" => "jne-Ongkos Kirim Ekonomis-2-3-50000",
                "total_price" => 125000,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827205217.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "bca",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827205447",
                "email" => "mraihanna.18@gmail.com",
                "delivery_code" => "pos-Pos Ekonomi-7-14 HARI-42500",
                "total_price" => 116750,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827205447.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "bni",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827205941",
                "email" => "ilhamferdiansyah737@gmail.com",
                "delivery_code" => "jne-JNE City Courier-1-2-40000",
                "total_price" => 114000,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827205941.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "bni",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827210056",
                "email" => "dedihidayat333@gmail.com",
                "delivery_code" => "pos-Pos Ekonomi-7-14 HARI-140000",
                "total_price" => 224000,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827210056.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "mandiri",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ],
            [
                "payment_id" => "PAYID20220827210157",
                "email" => "raihanmalikul0@gmail.com",
                "delivery_code" => "jne-Ongkos Kirim Ekonomis-2-3-85000",
                "total_price" => 163500,
                "evidence_payment" => "C=>\\xampp80\\htdocs\\AppMuslimBasic\\public/uploads/evidencePay/20220827/PAYID20220827210157.jpeg",
                "evidence_date" => TIme::now(),
                "rekening" => "bni",
                "waiting_time" => TIme::now(),
                "feedback" => "Menuggu verifikasi pembayaran",
                "status" => 0
            ]
        ];

        // Using Query Builder
        $this->db->table('m_payment')->insertBatch($data);
    }
}
