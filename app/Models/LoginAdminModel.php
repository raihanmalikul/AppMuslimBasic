<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAdminModel extends Model
{
    protected $table            = 'm_login_admin';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $skipValidation   = false;
    protected $allowedFields    = ['nama', 'username', 'password', 'userlevel', 'user_valid', 'image', 'status_login'];
}
