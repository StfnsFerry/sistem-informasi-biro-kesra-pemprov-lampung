<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarRumahIbadahModel;
use App\Models\VerifikasiRumahIbadahModel;
use CodeIgniter\HTTP\ResponseInterface;

class RumahIbadahController extends BaseController
{
    public $pendaftarModel;
    public $verifikasiModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarRumahIbadahModel();
        $this->verifikasiModel = new VerifikasiRumahIbadahModel();
    }
    
    
    public function index()
    {
        //
    }

    public function viewMasjid()
    {
        return view('dashboard-admin/rumah-ibadah/masjid-page');
    }

    public function viewPendaftar()
    {
        $biodata = $this->pendaftarModel->getBiodata();

        $data = [
            'pendaftar' => $biodata,
        ];

        return view('dashboard-admin/rumah-ibadah/pendaftar-page', $data);
    }
    
    public function viewVerifikasi($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);

        $data =[
            'biodata' => $biodata,
        ];
        return view('dashboard-admin/rumah-ibadah/verifikasi-page', $data);
    }

    //User

    public function viewBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/view_biodata', $data);
    }

    public function createBiodata()
    {
        return view('dashboard-rumah-ibadah/tambah_biodata');
    }

    public function editBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/ubah_biodata', $data);
    }

    public function saveBiodata()
    {

        $this->pendaftarModel->saveBiodata([
            'id_user' => $this->request->getVar('id_user'),
            'nik_ketua' => $this->request->getVar('nik_ketua'),
            'npwp' => $this->request->getVar('npwp'),
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_rekening' => $this->request->getVar('nomor_rekening'),
            'nama_pemilik_rekening' => $this->request->getVar('nama_pemilik_rekening'),
            'jenis_bangunan' => $this->request->getVar('jenis_bangunan'),
            'no_sk_pembentukan' => $this->request->getVar('no_sk_pembentukan'),
            'nama_bangunan' => $this->request->getVar('nama_bangunan'),
            'telepon_bangunan' => $this->request->getVar('telepon_bangunan'),
            'alamat_bangunan' => $this->request->getVar('alamat_bangunan'),
            'id_provinsi' => $this->request->getVar('provinsi'),
            'id_kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'id_kecamatan' => $this->request->getVar('kecamatan'),
            'id_kelurahan' => $this->request->getVar('kelurahan'),
        ]);
       
        return redirect()->to(base_url('/rumah-ibadah/biodata'));
    }

    public function updateBiodata(){

        $id = $this->request->getVar('id_biodata');
        $id_user = user()->id;
        $cek = $this->pendaftarModel->getBiodata($id_user);

        if( $cek[0]['status_pendaftaran'] != 'Belum Mendaftar')
        {
            return redirect()->to(base_url('/rumah-ibadah/biodata'));
        }

        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'nik_ketua' => $this->request->getVar('nik_ketua'),
            'npwp' => $this->request->getVar('npwp'),
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_rekening' => $this->request->getVar('nomor_rekening'),
            'nama_pemilik_rekening' => $this->request->getVar('nama_pemilik_rekening'),
            'jenis_bangunan' => $this->request->getVar('jenis_bangunan'),
            'no_sk_pembentukan' => $this->request->getVar('no_sk_pembentukan'),
            'nama_bangunan' => $this->request->getVar('nama_bangunan'),
            'telepon_bangunan' => $this->request->getVar('telepon_bangunan'),
            'alamat_bangunan' => $this->request->getVar('alamat_bangunan'),
            'id_provinsi' => $this->request->getVar('provinsi'),
            'id_kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'id_kecamatan' => $this->request->getVar('kecamatan'),
            'id_kelurahan' => $this->request->getVar('kelurahan'),
        ];
        
        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/rumah-ibadah/biodata'));
    }

    public function viewDokumen()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/dokumen',$data);
    }

    public function saveDokumen()
    {
        $id = $this->request->getVar('id_biodata');

        $path = 'assets/uploads/pdf/rumah-ibadah/';

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

        return redirect()->to(base_url('/rumah-ibadah/dokumen'));

    }

    public function viewStatusPendaftaran()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);
        
        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/status_pendaftaran', $data);
    }

    public function viewProfil()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);
        
        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/profil', $data);
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

        return redirect()->to(base_url('/rumah-ibadah/biodata'));

    }

}
