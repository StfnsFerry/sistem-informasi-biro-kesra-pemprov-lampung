<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKolomDokumen extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pendaftar_tokoh_agama', [
            'dokumen_persyaratan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pendaftar_tokoh_agama', ['dokumen_persyaratan']);
    }
}
