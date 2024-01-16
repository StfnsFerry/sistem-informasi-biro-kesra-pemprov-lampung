<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKelurahan extends Migration
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
                'id_kecamatan' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'kelurahan' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],          
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_kecamatan','kecamatan','id');
        $this->forge->createTable('kelurahan', true);
    }

    public function down()
    {
        $this->forge->dropTable('kelurahan', true);
    }
}
