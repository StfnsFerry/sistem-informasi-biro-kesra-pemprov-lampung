<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArsipModel;
use CodeIgniter\HTTP\ResponseInterface;

class ArsipController extends BaseController
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
            'arsip' => $arsip,
        ];
        return view('dashboard-admin/arsip/rumah-ibadah-arsip', $data);
    }

    public function saveArsip()
    {
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

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->back();
    }

    public function deleteArsip($id){
        $result = $this->arsipModel->deleteArsip($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        return redirect()->back()
            ->with('success', 'Berhasil menghapus data');
    }
}
