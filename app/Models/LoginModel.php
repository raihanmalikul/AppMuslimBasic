<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'm_login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $skipValidation   = false;
    protected $allowedFields    = ['id', 'name', 'email', 'email_verified_at', 'is_active', 'password', 'remember_token', 'created_at', 'updated_at'];
}