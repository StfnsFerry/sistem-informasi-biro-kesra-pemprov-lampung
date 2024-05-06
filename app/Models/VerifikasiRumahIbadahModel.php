<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiRumahIbadahModel extends Model
{
    protected $table            = 'verifikasi_rumah_ibadah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_biodata','id_pendaftar','id_pemeriksa','biodata','permohonan_pamong','susunan_pengurus','rab','foto_bangunan','izin_operasional','ktp','fc_rekening','npwp','stempel','surat_keterangan_domisili','lain_lain','keterangan'];

    protected bool $allowEmptyInserts = false;

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

    public function saveVerifikasi($data)
    {
        $this->insert($data);
    }

    public function getVerifikasi($id = NULL)
    {
        if($id != null){
            return $this->select('verifikasi_rumah_ibadah.*, users.username')
            ->join('pendaftar_rumah_ibadah', 'pendaftar_rumah_ibadah.id=verifikasi_rumah_ibadah.id_pendaftar')
            ->join('users', 'users.id=verifikasi_rumah_ibadah.id_pemeriksa')
            ->where('id_pendaftar', $id)->find();
        }
        return $this->select('verifikasi_rumah_ibadah.*')->findAll();
    }

    public function getDetailVerifikasi($id)
    {    
        return $this->select('verifikasi_rumah_ibadah.*, users.username')
        ->join('users', 'users.id=verifikasi_rumah_ibadah.id_pemeriksa')
        ->where('id_biodata', $id)->find();
         
    }

    public function getVerifikasiById($id)
    {    
        return $this->select('verifikasi_rumah_ibadah.*')
        ->where('id_biodata', $id)->find();    
    }

    public function updateVerifikasi($data, $id){
        return $this->update($id,$data);
    }

  
}
