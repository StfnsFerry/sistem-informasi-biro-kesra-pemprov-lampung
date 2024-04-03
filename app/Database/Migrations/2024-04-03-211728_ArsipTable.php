<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArsipTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'judul_arsip' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'tahun_arsip' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'kategori' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('arsip_program', true);
    }

    public function down()
    {
        $this->forge->dropTable('arsip_program');
    }
}
