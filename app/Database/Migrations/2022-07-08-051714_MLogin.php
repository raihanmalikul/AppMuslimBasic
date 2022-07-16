<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MLogin extends Migration
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
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'userlevel' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'status_login' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'user_valid' => [
                'type'       => 'INT',
                'constraint' => 15
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'created_by' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('m_login');
    }

    public function down()
    {
        $this->forge->dropTable('m_login');
    }
}
