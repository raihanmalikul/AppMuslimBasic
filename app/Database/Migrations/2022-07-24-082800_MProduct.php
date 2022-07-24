<?php

namespace App\Database\Migrations;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MProduct extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'category_id' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
                'constraint' => 11
            ],
            'description' => [
                'type'       => 'TEXT'
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'size' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'color' => [
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
        $this->forge->createTable('m_product');
    }

    public function down()
    {
        $this->forge->dropTable('m_product');
    }
}
