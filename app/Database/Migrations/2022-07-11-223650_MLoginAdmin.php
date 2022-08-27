<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MLoginAdmin extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
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
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('m_login_admin');
    }

    public function down()
    {
        $this->forge->dropTable('m_login_admin');
    }
}
