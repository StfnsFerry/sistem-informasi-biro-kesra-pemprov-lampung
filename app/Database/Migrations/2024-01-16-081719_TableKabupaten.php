<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKabupaten extends Migration
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
                'id_provinsi' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'kabupaten_kota' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],          
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_provinsi','provinsi','id');
        $this->forge->createTable('kabupaten_kota', true);
    }

    public function down()
    {
        $this->forge->dropTable('kabupaten_kota', true);
    }
}
