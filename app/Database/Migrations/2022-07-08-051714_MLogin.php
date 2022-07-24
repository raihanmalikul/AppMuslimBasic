<?php
// Harap comment jika tidak melakukan create ke tabel

namespace App\Database\Migrations;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MLogin extends Migration
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
            'email_verified_at' => [
                'type'       => 'TIMESTAMP'
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'remember_token' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
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
        $this->forge->createTable('m_login');
    }

    public function down()
    {
        $this->forge->dropTable('m_login');
    }
}
