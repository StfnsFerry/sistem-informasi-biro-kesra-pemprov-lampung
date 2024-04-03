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
    'id_provinsi', 'id_kabupaten_kota','id_kecamatan','id_kelurahan','verifikasi_data','jumlah_rekomendasi','status_pendaftaran','dokumen_persyaratan'];

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
        return $this->select('pendaftar_rumah_ibadah.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_rumah_ibadah.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_rumah_ibadah.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_rumah_ibadah.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_rumah_ibadah.id_kelurahan')
            ->findAll();
    
    }

    public function getDetailBiodata($id){
        return $this->select('pendaftar_rumah_ibadah.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_rumah_ibadah.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_rumah_ibadah.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_rumah_ibadah.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_rumah_ibadah.id_kelurahan')
            ->find($id);
    }
    public function updateBiodata($data, $id){
        return $this->update($id,$data);
    }

    public function countPendaftar(){
        return $this->where('status_pendaftaran', 'Sedang Diverifikasi')->countAllResults();
    }

    public function countGereja(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','Gereja')->countAllResults();
    }

    public function countMasjid(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','Masjid')->countAllResults();
    }

    public function countMusholla(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','Musholla')->countAllResults();
    }

    public function countPondokPesantren(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','Pondok Pesantren')->countAllResults();
    }

    public function countTPA_TPQ(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','TPA')->where('jenis_bangunan','TPQ')->countAllResults();
    }

    public function countPura(){
        return $this->where('status_pendaftaran', 'Sudah Diverifikasi')->where('jenis_bangunan','Pura')->countAllResults();
    }

    public function getPendaftarMasjid(){
        return $this->select('pendaftar_rumah_ibadah.*, provinsi.provinsi, kabupaten_kota.kabupaten_kota, kecamatan.kecamatan, kelurahan.kelurahan')
            ->join('provinsi', 'provinsi.id=pendaftar_rumah_ibadah.id_provinsi')
            ->join('kabupaten_kota', 'kabupaten_kota.id=pendaftar_rumah_ibadah.id_kabupaten_kota')
            ->join('kecamatan', 'kecamatan.id=pendaftar_rumah_ibadah.id_kecamatan')
            ->join('kelurahan', 'kelurahan.id=pendaftar_rumah_ibadah.id_kelurahan')
            ->where('jenis_bangunan', 'Masjid')
            ->findAll();
    }

}
