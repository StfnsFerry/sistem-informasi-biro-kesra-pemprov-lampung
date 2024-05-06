<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiTokohAgamaModel extends Model
{
    protected $table            = 'verifikasi_tokoh_agama';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_biodata','id_pendaftar','id_pemeriksa','biodata','ktp','surat_rekomendasi','surat_bantuan','fc_rekening','keterangan'];

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
            return $this->select('verifikasi_tokoh_agama.*')
            ->join('pendaftar_tokoh_agama', 'pendaftar_tokoh_agama.id=verifikasi_tokoh_agama.id_pendaftar')
            ->where('id_pendaftar', $id)->find();
        }
        return $this->select('verifikasi_tokoh_agama.*')->findAll();
    
    }

    public function getDetailVerifikasi($id)
    {    
        return $this->select('verifikasi_tokoh_agama.*, users.username')
        ->join('users', 'users.id=verifikasi_tokoh_agama.id_pemeriksa')
        ->where('id_biodata', $id)->find();
         
    }

    public function getVerifikasiById($id)
    {    
        return $this->select('verifikasi_tokoh_agama.*')
        ->where('id_biodata', $id)->find();    
    }

    public function updateVerifikasi($data, $id){
        return $this->update($id,$data);
    }
}
