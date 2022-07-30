<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'm_product';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps    = true;
    protected $skipValidation   = false;
    protected $allowedFields    = ['id', 'slug', 'name', 'product_id', 'category_id', 'color_id', 'size_id', 'description', 'image', 'price', 'weight', 'stock', 'is_valid', 'created_at', 'updated_at'];
}
