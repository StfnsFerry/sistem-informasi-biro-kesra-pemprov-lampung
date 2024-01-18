<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarTokohAgamaModel;
use CodeIgniter\HTTP\ResponseInterface;

class TokohAgamaController extends BaseController
{

    public $pendaftarModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarTokohAgamaModel();
    }

    public function index()
    {
        return view('dashboard-tokoh-agama/index');
    }

    public function viewBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];
        // return dd($data);
        return view('dashboard-tokoh-agama/biodata', $data);
    }

    public function saveBiodata()
    {
        $path = 'assets/uploads/img/tokoh-agama/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = $path . $name;
        }

        $this->pendaftarModel->saveBiodata([
            'id_user' => $this->request->getVar('id_user'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'jumlah_murid' => $this->request->getVar('jumlah_murid'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_rekening' => $this->request->getVar('nomor_rekening'),
            'nama_pemilik_rekening' => $this->request->getVar('nama_pemilik_rekening'),
            'profesi' => $this->request->getVar('profesi'),
            'nama_tempat_bertugas' => $this->request->getVar('nama_tempat_bertugas'),
            'telepon_tempat_bertugas' => $this->request->getVar('telepon_tempat_bertugas'),
            'alamat_tempat_bertugas' => $this->request->getVar('alamat_tempat_bertugas'),
            'id_provinsi' => $this->request->getVar('provinsi'),
            'id_kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'id_kecamatan' => $this->request->getVar('kecamatan'),
            'id_kelurahan' => $this->request->getVar('kelurahan'),
            'foto' => $foto
        ]);
       
        return redirect()->to(base_url('/tokoh-agama/biodata'));
    }
}
