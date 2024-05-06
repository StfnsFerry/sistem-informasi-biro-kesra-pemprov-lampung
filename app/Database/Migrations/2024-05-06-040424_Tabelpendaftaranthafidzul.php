<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tabelpendaftaranthafidzul extends Migration
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
                'id_user' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'nama_lengkap' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'tempat_lahir' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '100',
                ],
                'tanggal_lahir' => [
                    'type'          => 'DATE',
                ],
                'jenis_kelamin' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '20',
                ],
                'kategori_juz' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '100',
                ],
                'telepon' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '20',
                ],
                'alamat' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'nomor_rekening' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'nama_pemilik_rekening' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'id_provinsi' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_kabupaten_kota' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_kecamatan' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_kelurahan' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'dokumen_persyaratan' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                ],
                'jumlah_rekomendasi' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'null' => true,
                ],
                'nota_dinas' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                ],
                'verifikasi_data' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Belum Lengkap',
                ],
                'status_pendaftaran' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Belum diverifikasi',
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
        $this->forge->addForeignKey('id_user','users','id', 'CASCADE');
        $this->forge->addForeignKey('id_provinsi','provinsi','id');
        $this->forge->addForeignKey('id_kabupaten_kota','kabupaten_kota','id');
        $this->forge->addForeignKey('id_kecamatan','kecamatan','id');
        $this->forge->addForeignKey('id_kelurahan','kelurahan','id');
        $this->forge->createTable('pendaftar_tahfidzul', true);
    }

    public function down()
    {
        $this->forge->dropTable('pendaftar_tahfidzul', true);
    }
}
