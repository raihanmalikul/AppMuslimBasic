<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

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
                'constraint' => 255,
                'null'       => true
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'weight' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'stock' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'price_disc' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'percent_disc' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'discount' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'null'       => true
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
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
