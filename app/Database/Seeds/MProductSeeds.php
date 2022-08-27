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
                "name" => "BUTTON PANTS",
                "slug" => "butto-pants-01",
                "product_id" => "01",
                "category_id" => "03",
                "description" => "Celana loose yang straight dengan kancing bagian depan, saku di kiri kanan dan karet di bagian pinggang. Terlihat stylish untuk segala aktivitas.",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "CHINO PANTS",
                "slug" => "chino-pants-02",
                "product_id" => "02",
                "category_id" => "03",
                "description" => "Padu padankan outfitmu dengan pants yang gak bikin gerah. Recommended banget untuk outfit of the day kamu!
                ",
                "details" => "MATERIAL
                Cotton Chino : stretch, lembut, sejuk, sedikit tebal, tidak menerawang
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "DEAN CULOTTE",
                "slug" => "dean-culotte-03",
                "product_id" => "03",
                "category_id" => "03",
                "description" => "Slim culotte dengan bahan yang stretch, tidak panas dan nyaman dipakai!
                ",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless, slim
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "FLARE PANTS",
                "slug" => "flare-pants-04",
                "product_id" => "04",
                "category_id" => "03",
                "description" => "Potongan celana melebar di bagian bawah yang dapat kamu pakai mulai dari hangout hingga acara formal.",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "GEMMA PANTS",
                "slug" => "gemma-pants-05",
                "product_id" => "05",
                "category_id" => "03",
                "description" => "The perfect relaxed and straight cut pants!",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih
                ",
                "is_valid" => 1
            ],
            [
                "name" => "INNER PENTS",
                "slug" => "inner-pents-06",
                "product_id" => "06",
                "category_id" => "03",
                "description" => "The perfect relaxed and straight cut pants!",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "HIGH WAIST CULOTTE",
                "slug" => "high-waist-culotte-07",
                "product_id" => "07",
                "category_id" => "03",
                "description" => "Kulot dengan cuttingan high waist yang memberikan kesan jenjang dan ramping",
                "details" => "MATERIAL
                Scuba Premium : stretch, lembut, sejuk, ironless
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "KNIT JOGGER PANTS",
                "slug" => "knit-jogger-pants-08",
                "product_id" => "08",
                "category_id" => "03",
                "description" => "Semakin betah di rumah aja dengan celana rajut yang simple, adem dan tidak mudah kusut. Mix and match dengan atasan maupun hijab warna senada.
                ",
                "details" => "MATERIAL
                Knit Cotton : lembut, sejuk, tidak menerawang
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "LINEA PANTS",
                "slug" => "linea-pants-09",
                "product_id" => "09",
                "category_id" => "03",
                "description" => "Basic straight pants dengan lined detail di bagian depan membuat kaki tampak lebih jenjang. Potongan sedikit loose dengan bahan yang stretch membuat nyaman dan penampilan semakin rapi!",
                "details" => "MATERIAL
                Scuba Textured : stretch, lembut, sejuk, ironless, bertekstur crepe
                
                CARE INSTRUCTION
                Cuci dengan warna sama atau senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan mesin cuci, sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "WIDE PANTS",
                "slug" => "wide-pants-10",
                "product_id" => 10,
                "category_id" => "03",
                "description" => "Culotte dengan desain loose dan terdapat karet di bagian pinggang yang nyaman saat dipakai!",
                "details" => "MATERIAL
                Scuba Textured : strech, lembut, sejuk, ironless, bertekstur crepe
                
                CARE INSTRUCTION
                Cuci dengan warna sama dan senada
                Jemur di tempat teduh
                Setrika dengan suhu medium
                Tidak dianjurkan mencuci menggunakan sikat dan pemutih",
                "is_valid" => 1
            ],
            [
                "name" => "ALI SERIS",
                "slug" => "ali-seris-01",
                "product_id" => "01",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER 22-24 JUNI 2022‼️ Pengen pake kemeja tapi tetep keliatan fresh? Atau.. mau beli kemeja tapi takut gak dipake karna biasanya bahannya gak nyaman, gerah, kasar, dan kaku? Tenang aja kang bro, kan sekarang ada Ali Series by Muslim Basic😎 Solusi buat kang bro yang mau pake kemeja tapi masih tetep mau keliatan CASUAL, RAPIH dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻",
                "details" => "Nyaman dipakai untuk kerja, meeting, beribadah, hangout, kajian, dan kumpul keluarga sekalipun",
                "is_valid" => 1
            ],
            [
                "name" => "BUKHORI SERIS",
                "slug" => "bukhori-seris-02",
                "product_id" => "02",
                "category_id" => "02",
                "description" => "BUKHORI SERIES solusinya!! Bisa tetap menawan walau cuma kaosan 😎

                Kenalin nih kang bro!
                
                ‼️OPEN PRE ORDER 6-10 JUNI 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "ANDREW SMITH LENGAN PANJANG ",
                "slug" => "andrew-smith-lengan-panjang-03",
                "product_id" => "03",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER 22-24 Mei 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "ANDREW SMITH LENGAN PENDEK ",
                "slug" => "andrew-smith-lengan-pendek-04",
                "product_id" => "04",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER 19-20 JUNI 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "CARDINAL JEANS",
                "slug" => "cardinal-jeans-05",
                "product_id" => "05",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER 22-24 November 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "CARDINAL CJ",
                "slug" => "cardinal-cj-06",
                "product_id" => "06",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER 23-26 JUNI 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "CARDINAL KEMEJA",
                "slug" => "cardinal-kemeja-07",
                "product_id" => "07",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER Agustus 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "CARDINAL  CCSL",
                "slug" => "cardinal-ccsl-08",
                "product_id" => "08",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER November 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "ANDREW SMITH KEMEJA",
                "slug" => "andrew-smith-kemeja-09",
                "product_id" => "09",
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER Januri 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "ANDREW SMITH",
                "slug" => "andrew-smith-10",
                "product_id" => 10,
                "category_id" => "02",
                "description" => "‼️OPEN PRE ORDER JUNI 2022‼️",
                "details" => "Menggunakan bahan COTTON BAMBOO, lembut, adem, ada teknologi anti bau, anti bakteri, cocok untuk segala tipe kulit bahkan untuk kulit sensitif sekalipun, menyerap keringat sempurna, jatuh, flowy",
                "is_valid" => 1
            ],
            [
                "name" => "THOBE PREMIUM",
                "slug" => "thobe-premium-01",
                "product_id" => "01",
                "category_id" => "01",
                "description" => "Muslim Basic bi’idznillāh hadir untuk memfasilitasi kang bro semua supaya bisa TETAP TAAT dan MENAWAN tapi gak bikin kantong jebol👍🏻",
                "details" => "Menggunakan kain COTTON DELUXE, nyaman, adem, dingin, gak nerawang, gak gampang kusut, bahannya jatuh dan ada sedikit kilap bikin makin keliatan elegan dan mewah!",
                "is_valid" => 1
            ],
            [
                "name" => "SALMAN SERIS",
                "slug" => "salman-seris-02",
                "product_id" => "02",
                "category_id" => "01",
                "description" => "‼️OPEN PRE ORDER 11-15 JULI 2022‼️ Pengen gamisan tapi takut keliatan terlalu formal? Atau.. mau beli gamis tapi takut cuma ngegantung di lemari aja karena gamis identiknya cuma dipake pas jum’atan aja? Tenang aja kang bro, kan ada Salman Series by Muslim Basic😎 Solusi buat kang bro yang mau pake gamis tapi masih tetep mau keliatan CASUAL dan NYAMAN. Tentunya bisa dipake di segala aktivitas Insyā Allāh👍🏻",
                "details" => "Note : - Insyā Allāh pengerjaan selama 3-4 pekan, semoga Allāh mudahkan - Berat gamis kurleb 500 gram - Insyā Allāh 1kg muat 2 baju - Pengiriman via JNE dari Kota Bandung - Agar menjaga kualitas produk harap mengikuti cara perawatan produk ❗️Efek cahaya dan layar hp masing-masing mengakibatkan warna asli berbeda❗️",
                "is_valid" => 1
            ],
            [
                "name" => "THOBE SACHET",
                "slug" => "thobe-sachet-03",
                "product_id" => "03",
                "category_id" => "01",
                "description" => "!!OPEN PRE ORDER 26-29 JULI 2022!!Mau pakai thobe premium, tapi biasanya harganya mahal?Tenang aja kang bro, kan ada Adam series by Muslim Basic. Muslim Basic bi'idznillah hadir untuk memfasilitasi kang bro semua supaya bisa TETAP TAAT dan MENAWAN tapi gak bikin kantong jebol",
                "details" => "Cuttingan pakai sistem 'pecah pola' di bagian samping, jadi bikin tetap bisa leluasa bergerak",
                "is_valid" => 1
            ],
            [
                "name" => "NOOR ABAY",
                "slug" => "noor-abay-04",
                "product_id" => "04",
                "category_id" => "01",
                "description" => "❗️OPEN PRE ORDER 22-23 MARET 2022❗️",
                "details" => " Abaya menggunakan Valerie Platinum (karakter kain sangat lembut, tidak menerawang, jatuh, stretch, empuk, serat twill, sangat adem, menyerap keringat, flowy.. cukup ironless, nyaman dipakai kapanpun dimanapun insyaaAllah) kainnya berkelass 🖤",
                "is_valid" => 1
            ],
            [
                "name" => "BALQIS ABAYA",
                "slug" => "balqis-abaya-05",
                "product_id" => "05",
                "category_id" => "01",
                "description" => "❗️OPEN PRE ORDER 19-21 MEI 2022❗️",
                "details" => "Menggunakan bahan Premium Shakilla Import, kain yang sudah terkenal nyamannya (karakter kain sangat lembut, tidak menerawang, jatuh, stretch, empuk, serat twill, sangat adem, menyerap keringat, flowy.. cukup ironless, nyaman dipakai kapanpun dimanapun insyaaAllah) kainnya berkelass 🖤",
                "is_valid" => 1
            ],
            [
                "name" => "NONA ABAYA",
                "slug" => "nona-abaya-06",
                "product_id" => "06",
                "category_id" => "01",
                "description" => "❗️OPEN PRE ORDER 22-23 MARET 2022❗️",
                "details" => "Abaya menggunakan Valerie Platinum (karakter kain sangat lembut, tidak menerawang, jatuh, stretch, empuk, serat twill, sangat adem, menyerap keringat, flowy.. cukup ironless, nyaman dipakai kapanpun dimanapun insyaaAllah) kainnya berkelass 🖤",
                "is_valid" => 1
            ],
            [
                "name" => "JOBB",
                "slug" => "jobb-07",
                "product_id" => "07",
                "category_id" => "01",
                "description" => "Cuttingan pakai sistem 'pecah pola' di bagian samping, jadi bikin tetap bisa leluasa bergerak",
                "details" => "Menggunakan kain COTTON DELUXE, nyaman, adem, dingin, gak nerawang, gak gampang kusut, bahannya jatuh dan ada sedikit kilap bikin makin keliatan elegan dan mewah!",
                "is_valid" => 1
            ],
            [
                "name" => "SALT N PEPPER",
                "slug" => "salt-n-pepper-08",
                "product_id" => "08",
                "category_id" => "01",
                "description" => "Cuttingan pakai sistem 'pecah pola' di bagian samping, jadi bikin tetap bisa leluasa bergerak",
                "details" => "Menggunakan kain COTTON DELUXE, nyaman, adem, dingin, gak nerawang, gak gampang kusut.",
                "is_valid" => 1
            ],
            [
                "name" => "ARJUNA WEDA",
                "slug" => "arjuna-weda-09",
                "product_id" => "09",
                "category_id" => "01",
                "description" => "Cuttingan pakai sistem 'pecah pola' di bagian samping, jadi bikin tetap bisa leluasa bergerak",
                "details" => "Menggunakan kain COTTON DELUXE, nyaman, adem, dingin, gak nerawang, gak gampang kusut.",
                "is_valid" => 1
            ],
            [
                "name" => "LOIS JEANS",
                "slug" => "lois-jeans-10",
                "product_id" => 10,
                "category_id" => "01",
                "description" => "Cuttingan pakai sistem 'pecah pola' di bagian samping, jadi bikin tetap bisa leluasa bergerak",
                "details" => "Menggunakan kain COTTON DELUXE, nyaman, adem, dingin, gak nerawang, gak gampang kusut.",
                "is_valid" => 1
            ],
            [
                "name" => "HIJAB SERIS",
                "slug" => "hijab-seris-01",
                "product_id" => "01",
                "category_id" => "04",
                "description" => "",
                "details" => "",
                "is_valid" => 1
            ],
            [
                "name" => "HIJAB SERIS",
                "slug" => "hijab-seris-02",
                "product_id" => "02",
                "category_id" => "04",
                "description" => "",
                "details" => "",
                "is_valid" => 1
            ],
            [
                "name" => "HIJAB SERIS",
                "slug" => "hijab-seris-03",
                "product_id" => "03",
                "category_id" => "04",
                "description" => "",
                "details" => "",
                "is_valid" => 1
            ],
            [
                "name" => "HIJAB SERIS",
                "slug" => "hijab-seris-04",
                "product_id" => "04",
                "category_id" => "04",
                "description" => "",
                "details" => "",
                "is_valid" => 1
            ],
            [
                "name" => "HIJAB SERIS",
                "slug" => "hijab-seris-05",
                "product_id" => "05",
                "category_id" => "04",
                "description" => "",
                "details" => "",
                "is_valid" => 1
            ]
        ];

        // Using Query Builder
        $this->db->table('m_product')->insertBatch($data);
    }
}
