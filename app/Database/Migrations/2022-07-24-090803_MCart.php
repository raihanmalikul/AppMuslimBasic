<?php

namespace App\Database\Migrations;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MCart extends Migration
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
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type'       => 'TEXT'
            ],
            'color_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'size_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'qty' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'tot_price' => [
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
        $this->forge->createTable('m_cart');
    }

    public function down()
    {
        $this->forge->dropTable('m_cart');
    }
}
