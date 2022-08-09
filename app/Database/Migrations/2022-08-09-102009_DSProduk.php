<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class DSProduk extends Migration
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
            'sub_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'color_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'size_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'weight' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'stock' => [
                'type'       => 'INT',
                'constraint' => 11
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
        $this->forge->createTable('ds_product');
    }

    public function down()
    {
        $this->forge->dropTable('ds_product');
    }
}
