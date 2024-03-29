<?php

namespace App\Database\Migrations;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MTimeline extends Migration
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
            'order_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'remake' => [
                'type'       => 'TEXT'
            ],
            'feedback' => [
                'type'       => 'TEXT'
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'default'    => TIme::now(),
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('m_timeline');
    }

    public function down()
    {
        $this->forge->dropTable('m_timeline');
    }
}
