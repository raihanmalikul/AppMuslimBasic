<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class MChartLog extends Migration
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
            'dsId' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'product_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'weight' => [
                'type'       => 'INT',
                'constraint' => 11
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
        $this->forge->createTable('m_cart_log');
    }

    public function down()
    {
        $this->forge->dropTable('m_cart_log');
    }
}