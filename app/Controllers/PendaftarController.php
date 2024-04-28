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
        // $id = $this->request->getVar('id');

        $response = [
            'message' => 'Data Berhasil di ubah'
        ];

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }
        else{
            return $this->respond($response,200);
        }

        return $this->redirect()->back();
    }

    public function deleteAkun($id)
    {
        $result = $this->subadminModel->deleteAkun($id);

        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }else{
            $response = [
                'message' => 'Akun Berhasil dihapus',
            ];

            return $this->respondDeleted($response);
        }

        return redirect()->back()
            ->with('success', 'Berhasil menghapus data');
    
    }
}
