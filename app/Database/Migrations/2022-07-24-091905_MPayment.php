<?php

namespace App\Database\Migrations;

use CodeIgniter\I18n\Time;
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
            'notes' => [
                'type'       => 'TEXT'
            ],
            'total_price' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'evidence_payment' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'evidence_date' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'waiting_time' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1 // 0 = menunggu pembayaran, 1 = sudah , 2 = tidak 
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
        $this->forge->createTable('m_payment');
    }

    public function down()
    {
        $this->forge->dropTable('m_payment');
    }
}
