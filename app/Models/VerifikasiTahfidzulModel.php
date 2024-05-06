<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiTahfidzulModel extends Model
{
    protected $table            = 'verifikasi_tahfidzul';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_biodata','id_pendaftar','id_pemeriksa','ktp','surat_rekomendasi','surat_bantuan','fc_rekening','keterangan'];

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
            return $this->select('verifikasi_tahfidzul.*')
            ->join('pendaftar_tahfidzul', 'pendaftar_tahfidzul.id=verifikasi_tahfidzul.id_pendaftar')
            ->where('id_pendaftar', $id)->find();
        }
        return $this->select('verifikasi_tahfidzul.*')->findAll();
    
    }

    public function getDetailVerifikasi($id)
    {    
        return $this->select('verifikasi_tahfidzul.*, users.username')
        ->join('users', 'users.id=verifikasi_tahfidzul.id_pemeriksa')
        ->where('id_biodata', $id)->find();
         
    }

    public function getVerifikasiById($id)
    {    
        return $this->select('verifikasi_tahfidzul.*')
        ->where('id_biodata', $id)->find();    
    }

    public function updateVerifikasi($data, $id){
        return $this->update($id,$data);
    }
}
