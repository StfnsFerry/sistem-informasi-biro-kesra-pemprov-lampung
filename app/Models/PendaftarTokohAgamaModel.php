<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarTokohAgamaModel extends Model
{
    protected $table            = 'pendaftar_tokoh_agama';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','pekerjaan','jumlah_murid','telepon', 'alamat',
                                    'nomor_rekening', 'nama_pemilik_rekening','profesi','nama_tempat_bertugas', 'telepon_tempat_bertugas','alamat_tempat_bertugas',
                                    'id_provinsi', 'id_kabupaten_kota','id_kecamatan','id_kelurahan','foto','verifikasi_data','status_pendaftaran','dokumen_persyaratan'
                                    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveBiodata($data)
    {
        $this->insert($data);
    }

    public function getBiodata($id = NULL)
    {
        if($id != null){
            return $this->select('pendaftar_tokoh_agama.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_tokoh_agama.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_tokoh_agama.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_tokoh_agama.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_tokoh_agama.id_kelurahan')
            ->where('id_user', $id)->find();
        }
        return $this->select('pendaftar_tokoh_agama.*')->findAll();
    
    }

    public function updateBiodata($data, $id){
        return $this->update($id,$data);
    }
}
