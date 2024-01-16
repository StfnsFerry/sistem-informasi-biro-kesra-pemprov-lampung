<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKecamatan extends Migration
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
                'id_kabupaten_kota' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'kecamatan' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],          
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_kabupaten_kota','kabupaten_kota','id');
        $this->forge->createTable('kecamatan', true);
    }

    public function down()
    {
        $this->forge->dropTable('kecamatan', true);
    }
}
