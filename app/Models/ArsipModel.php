<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table            = 'arsip_program';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_arsip','tahun_arsip','kategori','file'];

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

    public function getArsip($id = null){
        if($id != null){
            return $this->select('arsip_program.*')
                    ->find($id);    
        }
        return $this->select('arsip_program.*')
                    ->findAll();
    }

    public function getArsipRumahIbadah($id = null){
        if($id != null){
            return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Hibah Pondok Pesantren & Rumah Ibadah')
                    ->find($id);    
        }
        return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Hibah Pondok Pesantren & Rumah Ibadah')
                    ->find();
    }

    public function getArsipTahfidzul($id = null){
        if($id != null){
            return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Hibah Tahfidzul Quran Hafidz/Hafidzah')
                    ->find($id);    
        }
        return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Hibah Tahfidzul Quran Hafidz/Hafidzah')
                    ->find();
    }

    public function getArsipTokohAgama($id = null){
        if($id != null){
            return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Bantuan Dana Guru Ngaji, Marbot & Imam Masjid')
                    ->find($id);    
        }
        return $this->select('arsip_program.*')
                    ->where('arsip_program.kategori' , 'Bantuan Dana Guru Ngaji, Marbot & Imam Masjid')
                    ->find();
    }

    public function saveArsip($data){
        return $this->insert($data);
    }

    public function deleteArsip($id){
        return $this->delete($id);
    }
}
