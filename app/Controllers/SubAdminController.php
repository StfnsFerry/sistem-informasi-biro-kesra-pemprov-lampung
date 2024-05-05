<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SubAdminModel;

class SubAdminController extends ResourceController
{
    public $subadminModel;

    public function __construct()
    {
        $this->subadminModel = new SubAdminModel();
    }
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

        if(!$result){
            $errors =[
                'error' => 'Data Gagal di ubah',
            ];
            return $this->fail($errors, 400);
        }

        $response = [
            'message' => 'Data Berhasil di ubah'
        ];
        
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
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }
        // else{
        //     $response = [
        //         'message' => 'Akun Berhasil dihapus',
        //     ];

        //     return $this->respondDeleted($response);
        // }

        return redirect()->back()
            ->with('success', 'Berhasil menghapus data');
    
    }
}
