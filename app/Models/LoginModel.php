<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAdminModel extends Model
{
    protected $table            = 'm_login';
    protected $useTimestamps    = true;
    protected $skipValidation   = ['nama', 'username', 'password', 'userlevel', 'user_valid', 'image'];
}