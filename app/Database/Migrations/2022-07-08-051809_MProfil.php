<?php
// Harap comment jika tidak melakukan create ke tabel

namespace App\Database\Migrations;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MProfil extends Migration
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
            'name' => [
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
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'province_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'constraint' => 11
            ],
            'city_id' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
                'constraint' => 20
            ],
            'postal_code' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
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
        $this->forge->createTable('m_profil');
    }

    public function down()
    {
        $this->forge->dropTable('m_profil');
    }
}
