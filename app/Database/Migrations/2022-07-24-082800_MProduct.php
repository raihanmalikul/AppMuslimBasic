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
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'product_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'category_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => true
            ],
            // 'highlights' => [
            //     'type'       => 'TEXT',
            //     'null'       => true
            // ],
            'details' => [
                'type'       => 'TEXT',
                'null'       => true
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
        $this->forge->createTable('m_product');
    }

    public function down()
    {
        $this->forge->dropTable('m_product');
    }
}
