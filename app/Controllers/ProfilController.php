<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProfilController extends BaseController
{

    public $profilModel;

    public function __construct()
    {
        $this->profilModel = new ProfilModel();
    }

    public function index()
    {
        
    }

    public function updateProfil()
    {
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'fullname' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        if($foto->isValid()) {
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = $path . $name;

                $data['user_image'] = $foto_path;
            }
        }
        
        $id = user()->id;
        $result = $this->profilModel->updateProfil($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->back();
    }

}
