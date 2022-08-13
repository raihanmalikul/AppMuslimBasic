<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class DProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'category_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'sub_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'is_valid' => [
                'type'       => 'TINYINT',
                'constraint' => 1
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'default'    => TIme::now(),
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('d_product');
    }

    public function down()
    {
        $this->forge->dropTable('d_product');
    }
}
