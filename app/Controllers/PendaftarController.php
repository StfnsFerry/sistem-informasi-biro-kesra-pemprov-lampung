<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SubAdminModel;

class PendaftarController extends ResourceController
{
    public $subadminModel;
    protected $format = 'json';

    public function __construct()
    {
        $this->subadminModel = new SubAdminModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
    }

    public function updateProfil($id = null)
    {

        $rules = $this->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors(),
            ];
            return $this->failValidationErrors($response);
        }
        
        $data = [
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        $result = $this->subadminModel->updateProfil($data, $id);

        $response = [
            'message' => 'Data Berhasil di ubah'
        ];

        if(!$result){

            $errors =[
                'error' => 'Data Gagal di ubah',
            ];
            return $this->fail($errors, 400);
        }
        
        return $this->respond($response,200);
    }

    public function showPendaftar($id)
    {
        $result = $this->subadminModel->showUsers($id);

        $data = [
            'user' => $result,
            'message' => 'success',
        ];  

        if(!$result){

            $errors =[
                'error' => 'Data tidak ditemukan',
            ];
            return $this->fail($errors, 400);
        }

        return $this->respond($data,200);
    }

    public function deleteAkun($id)
    {
        $result = $this->subadminModel->deleteAkun($id);

        if(!$result){
            $response = [
                'message' => 'Akun Gagal dihapus',
            ];

            return $this->respondDeleted($response);
        }

        $response = [
            'message' => 'Akun Berhasil dihapus',
        ];
 
        return $this->respondDeleted($response);
    
    }
}
