<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class MCity extends Migration
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
            'city_id' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'province_id' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'city_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'postal_code' => [
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
        $this->forge->createTable('m_city');
    }

    public function down()
    {
        $this->forge->dropTable('m_city');
    }
}
