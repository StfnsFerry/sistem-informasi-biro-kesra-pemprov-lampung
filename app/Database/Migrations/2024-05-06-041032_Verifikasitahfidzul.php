<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Verifikasitahfidzul extends Migration
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
                'id_pendaftar' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_pemeriksa' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_biodata' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'ktp' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Tidak Ada'
                ],
                'surat_rekomendasi' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Tidak Ada'
                ],
                'surat_bantuan' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Tidak Ada'
                ],
                'fc_rekening' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Tidak Ada'
                ],
                'keterangan' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                    'null'          => true,
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
        $this->forge->addForeignKey('id_biodata','pendaftar_tahfidzul','id', 'CASCADE');
        $this->forge->addForeignKey('id_pendaftar','users','id');
        $this->forge->addForeignKey('id_pemeriksa','users','id');
        $this->forge->createTable('verifikasi_tahfidzul', true);
    }

    public function down()
    {
        $this->forge->dropTable('verifikasi_tahfidzul');
    }
}
