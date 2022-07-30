<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table            = 'm_profil';
    protected $useTimestamps    = true;
    protected $skipValidation   = ['name', 'email', 'phone', 'address', 'province_id', 'city_id', 'postal_code', 'status', 'image'];
}