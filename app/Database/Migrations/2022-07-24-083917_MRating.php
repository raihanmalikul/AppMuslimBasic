<?php

namespace App\Database\Migrations;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class MRating extends Migration
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
            'product_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'customer_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'sub_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'color_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'size_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type'       => 'TEXT'
            ],
            'score' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'null'       => true
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
        $this->forge->createTable('m_rating');
    }

    public function down()
    {
        $this->forge->dropTable('m_rating');
    }
}
