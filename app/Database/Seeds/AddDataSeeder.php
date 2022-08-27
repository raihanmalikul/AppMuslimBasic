<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddDataSeeder extends Seeder
{
    public function run()
    {
        $this->call('DSProdukSeeder');
        $this->call('DProductSeeds');
        $this->call('MCitySeeder');
        $this->call('MCategorySeeds');
        $this->call('MColorSeeds');
        $this->call('MLoginAdminSeeder');
        $this->call('MLoginSeeder');
        $this->call('MProductSeeds');
        $this->call('MProfilSeeder');
        $this->call('MProvinceSeeder');
        $this->call('MSizeSeeder');
        $this->call('MReting');
        $this->call('UserAdminSeeder');
        // $this->call('MPaymentSeeds');
        // $this->call('MTimelineSeeder');
    }
}
