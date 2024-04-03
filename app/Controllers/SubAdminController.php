<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SubAdminModel;

class SubAdminController extends BaseController
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

    public function updateProfil()
    {
        $data = [
            'fullname' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        $id = $this->request->getVar('id');
        $result = $this->subadminModel->updateProfil($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->back();
    }

    public function deleteAkun($id)
    {
        $result = $this->subadminModel->deleteAkun($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        return redirect()->back()
            ->with('success', 'Berhasil menghapus data');
    
    }
}
