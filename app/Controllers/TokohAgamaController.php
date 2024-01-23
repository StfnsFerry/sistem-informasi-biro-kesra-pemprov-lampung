<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarTokohAgamaModel;
use App\Models\VerifikasiTokohAgamaModel;
use CodeIgniter\HTTP\ResponseInterface;

class TokohAgamaController extends BaseController
{

    public $pendaftarModel;
    public $verifikasiModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarTokohAgamaModel();
        $this->verifikasiModel = new VerifikasiTokohAgamaModel();
    }

    public function index()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);
        $verifikasi = $this->verifikasiModel->getVerifikasi($id);

        $data = [
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-tokoh-agama/index', $data);
    }

    public function viewBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        // return dd($data);
        return view('dashboard-tokoh-agama/view_biodata', $data);
    }

    public function createBiodata()
    {
        return view('dashboard-tokoh-agama/tambah_biodata');
    }

    public function editBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tokoh-agama/ubah_biodata', $data);
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

    public function updateBiodata(){

        $id = $this->request->getVar('id_biodata');
        $id_user = user()->id;
        $cek = $this->pendaftarModel->getBiodata($id_user);

        if( $cek[0]['status_pendaftaran'] != 'Belum Mendaftar')
        {
            return redirect()->to(base_url('/tokoh-agama/biodata'));
        }

        $path = 'assets/uploads/img/tokoh-agama/';
        $foto = $this->request->getFile('foto');

        $data = [
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
        ];

        if($foto->isValid()) {
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = $path . $name;

                $data['foto'] = $foto_path;
            }
        }
        
        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/tokoh-agama/biodata'));
    }

    public function viewDokumen()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        // return dd($data);
        return view('dashboard-tokoh-agama/dokumen', $data);
    }

    public function saveDokumen()
    {
        $id = $this->request->getVar('id_biodata');

        $path = 'assets/uploads/pdf-word/tokoh-agama/';

        $foto = $this->request->getFile('dokumen');

        $number = rand(1,100);

        $name = $number . ' - ' . $foto->getName();

        if($foto->move($path, $name)){
            $foto_path = $path . $name;

            $data['dokumen_persyaratan'] = $foto_path;
        }

        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/tokoh-agama/dokumen'));

    }

    public function createVerifikasi()
    {
        $id = $this->request->getVar('id_biodata');
        $id_pendaftar = $this->request->getVar('id_pendaftar');

        $data = [
            'id_biodata' => $id,
            'id_pendaftar' => $id_pendaftar,        
        ];

        $this->verifikasiModel->saveVerifikasi($data);

        $status = [
            'status_pendaftaran' => 'Sedang Diverifikasi',
        ];
   
        $this->pendaftarModel->updateBiodata($status,$id);

        return redirect()->to(base_url('/tokoh-agama'));

    }

    public function viewStatusPendaftaran()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);
        $verifikasi = $this->verifikasiModel->getVerifikasi($id);

        $data = [
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-tokoh-agama/status_pendaftaran', $data);
    }

    public function viewProfil()
    {
        return view('dashboard-tokoh-agama/profil');
    }
}
