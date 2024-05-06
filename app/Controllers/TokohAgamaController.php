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

    public function viewPendaftar()
    {
        $biodata = $this->pendaftarModel->getBiodata();
        $verifikasi = $this->verifikasiModel->getVerifikasi();

        $data = [
            'pendaftar' => $biodata,
            'verifikasi' => $verifikasi,
        ];
        return view('dashboard-admin/tokoh-agama/pendaftar-page', $data);
    }

    public function viewVerifikasi($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getVerifikasiById($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];
        return view('dashboard-admin/tokoh-agama/verifikasi-page', $data);
    }

    public function updateVerifikasi(){

        $data = [
            'id_pemeriksa' => $this->request->getVar('id_pemeriksa'),
            'ktp' => $this->request->getVar('ktp'),
            'surat_rekomendasi' => $this->request->getVar('surat_rekomendasi'),
            'surat_bantuan' => $this->request->getVar('surat_bantuan'),
            'fc_rekening' => $this->request->getVar('fc_rekening'),
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $id = $this->request->getVar('id_verifikasi');
        $result = $this->verifikasiModel->updateVerifikasi($data, $id);

        $ket = $this->request->getVar('keterangan');
        $keterangan = [
            'verifikasi_data' => $ket,
        ];

        if($ket == 'Data Lengkap'){
            $keterangan['status_pendaftaran'] = 'Sudah Diverifikasi';
        }

        $id_biodata = $this->request->getVar('id_biodata');
        $result = $this->pendaftarModel->updateBiodata($keterangan, $id_biodata);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to('/admin/tokoh-agama/pendaftar');
    }

    public function viewDetail($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getDetailVerifikasi($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-admin/tokoh-agama/detail-page', $data);
    }

    public function TerimaPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $kategori = $this->pendaftarModel->getDetailBiodata($id);
        $profesi = $kategori['profesi'];

        $jumlah_rekomendasi = $this->request->getVar('jumlah_rekomendasi');

        $data = [
            'jumlah_rekomendasi' => $jumlah_rekomendasi,
            'status_pendaftaran' => 'Pendaftaran Diterima',
        ];

        $result = $this->pendaftarModel->updateBiodata($data,$id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        if($profesi == 'Guru Ngaji'){
            return redirect()->to('/admin/tokoh-agama/guru-ngaji');
        }elseif($profesi == 'Imam Masjid'){
            return redirect()->to('/admin/tokoh-agama/imam-masjid');
        }elseif($profesi == 'Marbot'){
            return redirect()->to('/admin/tokoh-agama/marbot');
        }
        else{
            return redirect()->back()->with('success', 'Berhasil menyimpan data' );
        }
    }

    public function TolakPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $dokumen = $this->pendaftarModel->getDetailBiodata($id);
        $profesi = $kategori['profesi'];

        if($dokumen['dokumen_persyaratan'] != ''){
            unlink($dokumen['dokumen_persyaratan']);
        }

        $result = $this->pendaftarModel->deleteBiodata($id);
        
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        if($profesi == 'Guru Ngaji'){
            return redirect()->to('/admin/tokoh-agama/guru-ngaji');
        }elseif($profesi == 'Imam Masjid'){
            return redirect()->to('/admin/tokoh-agama/imam-masjid');
        }elseif($profesi == 'Marbot'){
            return redirect()->to('/admin/tokoh-agama/marbot');
        }
        else{
            return redirect()->back()->with('success', 'Berhasil menyimpan data' );
        }
    }

    public function ubahStatusPencairan() {
        $id = $this->request->getVar('id_biodata');

        $data =[
            'status_pendaftaran' => 'Proses Pencairan Dana',
        ];

        $this->pendaftarModel->updateBiodata($data,$id);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function saveNotaDinas()
    {
        $id = $this->request->getVar('id_biodata');

        $path = 'assets/uploads/pdf/tokoh-agama/nota-dinas/';

        $foto = $this->request->getFile('nota_dinas');

        $number = rand(1,100);

        $name = $number . ' - ' . $foto->getName();

        if($foto->move($path, $name)){
            $foto_path = $path . $name;

            $data = [
                'nota_dinas' => $foto_path,
                'status_pendaftaran' => 'Dana Berhasil Ditransfer',
            ];
        }

        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }


    public function viewGuruNgaji()
    {
        $biodata = $this->pendaftarModel->getPendaftarGuruNgaji();

        $data = [
            'gurungaji' => $biodata,      
        ];

        return view('dashboard-admin/tokoh-agama/gurungaji-page', $data);
    }

    public function viewImamMasjid()
    {
        $biodata = $this->pendaftarModel->getPendaftarImamMasjid();

        $data = [
            'imammasjid' => $biodata,      
        ];

        return view('dashboard-admin/tokoh-agama/imammasjid-page', $data);
    }

    public function viewMarbot()
    {
        $biodata = $this->pendaftarModel->getPendaftarMarbot();

        $data = [
            'marbot' => $biodata,      
        ];
        return view('dashboard-admin/tokoh-agama/marbot-page', $data);
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
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tokoh-agama/tambah_biodata',$data);
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

        $path = 'assets/uploads/pdf/tokoh-agama/';

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

        return redirect()->to(base_url('/tokoh-agama/biodata'));

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
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tokoh-agama/profil', $data);
    }
}
