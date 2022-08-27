<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class MPayment extends Migration
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
            'payment_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'delivery_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'notes' => [
                'type'       => 'TEXT'
            ],
            'total_price' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'evidence_payment' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'evidence_date' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'rekening' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'waiting_time' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'feedback' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1 // 0 = menunggu pembayaran, 1 = sudah , 2 = tidak 
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
        $this->forge->createTable('m_payment');
    }

    public function down()
    {
        $this->forge->dropTable('m_payment');
    }
}
