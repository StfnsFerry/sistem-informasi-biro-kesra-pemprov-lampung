<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArsipModel;
use CodeIgniter\HTTP\ResponseInterface;

class ArsipController extends ResourceController
{
    public $arsipModel;

    public function __construct()
    {
        $this->arsipModel = new ArsipModel();
    }

    public function index()
    {
        $arsip = $this->arsipModel->getArsipRumahIbadah();

        $data =[
            'message' => 'succees',
            'arsip' => $arsip,
        ];
        return $this->respond($data,200);
       
    }

    public function saveArsip()
    {
        $rules = $this->validate([
            'judul_arsip' => 'required',
            'tahun_arsip' => 'required',
            'kategori' => 'required',
            'file' => 'uploaded[file]',
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors(),
            ];
            return $this->failValidationErrors($response);
        }


        $path = 'assets/uploads/arsip/';
        $arsip = $this->request->getFile('file');
        $number = rand(1,100);
        $name = $number . ' - ' . $arsip->getName();

        if($arsip->move($path, $name)){
            $arsip_path = $path . $name;
        }

        $data = [
            'judul_arsip' => $this->request->getVar('judul_arsip'),
            'tahun_arsip' => $this->request->getVar('tahun_arsip'),
            'kategori'    => $this->request->getVar('kategori'),
            'file'        => $arsip_path,
        ];

        $result = $this->arsipModel->saveArsip($data);

        $response = [
            'message' => 'Data Berhasil di tambahkan'
        ];

        if(!$result){
            $errors =[
                'error' => 'Data Gagal di tambahkan',
            ];
            return $this->fail($errors, 400);
        }

        return $this->respond($response,200);
    }

    public function showArsip($id)
    {
        $result = $this->arsipModel->getArsipRumahIbadah($id);

        $data = [
            'arsip' => $result,
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

    public function deleteArsip($id){

        $fileDb = $this->arsipModel->getArsipRumahIbadah($id);

        if($fileDb['file'] != ''){
            unlink($fileDb['file']);
        }

        $result = $this->arsipModel->deleteArsip($id);

        if(!$result){
            $errors =[
                'error' => 'Data Gagal di hapus',
            ];
            return $this->fail($errors, 400);
        }

        $response = [
            'message' => 'Arsip Berhasil dihapus',
        ];

        return $this->respondDeleted($response);
    }
}
