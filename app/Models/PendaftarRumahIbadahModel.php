<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarRumahIbadahModel extends Model
{
    protected $table            = 'pendaftar_rumah_ibadah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','nik_ketua','npwp','nama_ketua','tempat_lahir','tanggal_lahir','jenis_kelamin','telepon', 'alamat',
    'nomor_rekening', 'nama_pemilik_rekening','jenis_bangunan','nama_bangunan', 'telepon_bangunan','alamat_bangunan','no_sk_pembentukan',
    'id_provinsi', 'id_kabupaten_kota','id_kecamatan','id_kelurahan','verifikasi_data','status_pendaftaran','dokumen_persyaratan'];

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
            return $this->select('pendaftar_rumah_ibadah.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_rumah_ibadah.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_rumah_ibadah.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_rumah_ibadah.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_rumah_ibadah.id_kelurahan')
            ->where('id_user', $id)->find();
        }
        return $this->select('pendaftar_rumah_ibadah.*')->findAll();
    
    }
    public function updateBiodata($data, $id){
        return $this->update($id,$data);
    }
}
