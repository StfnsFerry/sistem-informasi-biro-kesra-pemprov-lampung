<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tabelpendaftarrumahibadah extends Migration
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
                'nik_ketua' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'npwp' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'nama_ketua' => [
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
                'jenis_rumah_ibadah' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'nama_rumah_ibadah' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '100',
                ],
                'telepon_rumah_ibadah' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '20',
                ],
                'alamat_rumah_ibadah' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'no_sk_pembentukan' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
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
                'verifikasi_data' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Belum Lengkap',
                ],
                'status_pendaftaran' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                    'default'       => 'Belum Mendaftar',
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
        $this->forge->addForeignKey('id_user','users','id');
        $this->forge->addForeignKey('id_provinsi','provinsi','id');
        $this->forge->addForeignKey('id_kabupaten_kota','kabupaten_kota','id');
        $this->forge->addForeignKey('id_kecamatan','kecamatan','id');
        $this->forge->addForeignKey('id_kelurahan','kelurahan','id');
        $this->forge->createTable('pendaftar_rumah_ibadah', true);
    }

    public function down()
    {
        $this->forge->dropTable('pendaftar_rumah_ibadah', true);
    }
  
}
