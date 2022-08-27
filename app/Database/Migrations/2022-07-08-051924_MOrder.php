<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class MOrder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'order_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'invoice' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'customer_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'customer_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'customer_phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'customer_address' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'province_id' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
                'constraint' => 20
            ],
            'city_id' => [
                'type'       => 'BIGINT',
                'constraint' => 20
            ],
            'postal_code' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'subTotal' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'status_order' => [
                'type'       => 'TINYINT',
                'constraint' => 1
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
        $this->forge->createTable('m_order');
    }

    public function down()
    {
        $this->forge->dropTable('m_order');
    }
}
