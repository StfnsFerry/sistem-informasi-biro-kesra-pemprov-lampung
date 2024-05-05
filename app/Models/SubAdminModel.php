<?php

namespace App\Models;

use CodeIgniter\Model;

class SubAdminModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','fullname','username'];

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

    public function getSubAdmin(){
        return $this->select('users.*')
                    ->join('auth_groups_users','auth_groups_users.user_id = users.id')
                    ->join('auth_groups','auth_groups.id = auth_groups_users.group_id')
                    ->where('auth_groups_users.group_id', 3)->find();
    }

    public function getPendaftar(){
        return $this->select('users.*')
                    ->join('auth_groups_users','auth_groups_users.user_id = users.id')
                    ->join('auth_groups','auth_groups.id = auth_groups_users.group_id')
                    ->where('auth_groups_users.group_id', 4)
                    ->orWhere('auth_groups_users.group_id', 5)
                    ->orWhere('auth_groups_users.group_id', 6)
                    ->findAll();
    }

    public function showUsers($id){
        return $this->select('users.*')->find($id);
    }

    public function updateProfil($data, $id){
        return $this->update($id,$data);
    }

    public function deleteAkun($id){
        return $this->delete($id);
    }
}
