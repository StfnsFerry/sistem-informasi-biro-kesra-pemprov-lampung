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
        $biodata = $this->pendaftarModel->getPendaftarMasjid();

        $data = [
            'masjid' => $biodata,      
        ];

        return view('dashboard-admin/rumah-ibadah/masjid-page', $data);
    }

    public function viewMusholla()
    {
        $biodata = $this->pendaftarModel->getPendaftarMusholla();

        $data = [
            'musholla' => $biodata,      
        ];

        return view('dashboard-admin/rumah-ibadah/musholla-page',$data);
    }

    public function viewGereja()
    {
        $biodata = $this->pendaftarModel->getPendaftarGereja();

        $data = [
            'gereja' => $biodata,      
        ];

        return view('dashboard-admin/rumah-ibadah/gereja-page', $data);
    }

    public function viewPondokPesantren()
    {
        $biodata = $this->pendaftarModel->getPendaftarPonpes();

        $data = [
            'ponpes' => $biodata,      
        ];

        return view('dashboard-admin/rumah-ibadah/pondokpesantren-page', $data);
    }

    public function viewTpaTpq()
    {
        $biodata = $this->pendaftarModel->getPendaftarTpaTpq();

        $data = [
            'tpatpq' => $biodata,      
        ];
        return view('dashboard-admin/rumah-ibadah/tpatpq-page', $data);
    }

    public function viewPura()
    {
        $biodata = $this->pendaftarModel->getPendaftarPura();

        $data = [
            'pura' => $biodata,      
        ];

        return view('dashboard-admin/rumah-ibadah/pura-page', $data);
    }

    public function viewPendaftar()
    {
        $biodata = $this->pendaftarModel->getBiodata();
        $verifikasi = $this->verifikasiModel->getVerifikasi();

        $data = [
            'pendaftar' => $biodata,
            'verifikasi' => $verifikasi,
        ];
     
        return view('dashboard-admin/rumah-ibadah/pendaftar-page', $data);
    }
    
    public function viewVerifikasi($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getVerifikasiById($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];
        return view('dashboard-admin/rumah-ibadah/verifikasi-page', $data);
    }

    public function viewDetail($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getDetailVerifikasi($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-admin/rumah-ibadah/detail-page', $data);
    }

    public function updateVerifikasi(){

        $data = [
            'id_pemeriksa' => $this->request->getVar('id_pemeriksa'),
            'permohonan_pamong' => $this->request->getVar('permohonan_pamong'),
            'susunan_pengurus' => $this->request->getVar('susunan_pengurus'),
            'rab' => $this->request->getVar('rab'),
            'foto_bangunan' => $this->request->getVar('foto_bangunan'),
            'izin_operasional' => $this->request->getVar('izin_operasional'),
            'ktp' => $this->request->getVar('ktp'),
            'fc_rekening' => $this->request->getVar('fc_rekening'),
            'npwp' => $this->request->getVar('npwp'),
            'stempel' => $this->request->getVar('stempel'),
            'surat_keterangan_domisili' => $this->request->getVar('surat_keterangan_domisili'),
            'lain_lain' => $this->request->getVar('lain_lain'),
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

        return redirect()->to('/admin/rumah-ibadah/pendaftar');
    }

    public function TerimaPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $kategori = $this->pendaftarModel->getDetailBiodata($id);
        $bangunan = $kategori['jenis_bangunan'];

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

        if($bangunan == 'Masjid'){
            return redirect()->to('/admin/rumah-ibadah/masjid');
        }elseif($bangunan == 'Musholla'){
            return redirect()->to('/admin/rumah-ibadah/musholla');
        }elseif($bangunan == 'Gereja'){
            return redirect()->to('/admin/rumah-ibadah/gereja');
        }elseif($bangunan == 'TPA'){
            return redirect()->to('/admin/rumah-ibadah/tpa-tpq');
        }elseif($bangunan == 'TPQ'){
            return redirect()->to('/admin/rumah-ibadah/tpa-tpq');
        }elseif($bangunan == 'Pondok Pesantren'){
            return redirect()->to('/admin/rumah-ibadah/pondok-pesantren');
        }elseif($bangunan == 'Pura'){
            return redirect()->to('/admin/rumah-ibadah/pura');
        }
        else{
            return redirect()->back()->with('success', 'Berhasil menyimpan data' );
        }
    }

    public function TolakPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $dokumen = $this->pendaftarModel->getDetailBiodata($id);

        $bangunan = $dokumen['jenis_bangunan'];

        if($dokumen['dokumen_persyaratan'] != ''){
            unlink($dokumen['dokumen_persyaratan']);
        }

        $result = $this->pendaftarModel->deleteBiodata($id);
        
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        if($bangunan == 'Masjid'){
            return redirect()->to('/admin/rumah-ibadah/masjid');
        }elseif($bangunan == 'Musholla'){
            return redirect()->to('/admin/rumah-ibadah/musholla');
        }elseif($bangunan == 'Gereja'){
            return redirect()->to('/admin/rumah-ibadah/gereja');
        }elseif($bangunan == 'TPA'){
            return redirect()->to('/admin/rumah-ibadah/tpa-tpq');
        }elseif($bangunan == 'TPQ'){
            return redirect()->to('/admin/rumah-ibadah/tpa-tpq');
        }elseif($bangunan == 'Pondok Pesantren'){
            return redirect()->to('/admin/rumah-ibadah/pondok-pesantren');
        }elseif($bangunan == 'Pura'){
            return redirect()->to('/admin/rumah-ibadah/pura');
        }
        else{
            return redirect()->back()->with('success', 'Berhasil menghapus data' );
        }
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
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-rumah-ibadah/tambah_biodata',$data);
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
        $pendaftar_rumah_ibadah = model(PendaftarRumahIbadahModel::class);

        $rules = $this->validate([
            'nik_ketua' => 'required|is_unique[pendaftar_rumah_ibadah.nik_ketua]',
            'npwp' => 'required|is_unique[pendaftar_rumah_ibadah.npwp]',
            'nomor_rekening' => 'required|is_unique[pendaftar_rumah_ibadah.nomor_rekening]',
        ]);

        if (!$rules) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

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

        $dokumen = $this->pendaftarModel->getDokumen($id);

        if($dokumen['dokumen_persyaratan'] != ''){
            unlink($dokumen['dokumen_persyaratan']);
        }

        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/rumah-ibadah/dokumen'));

    }

    public function saveDokumenNPHD()
    {
        $id = $this->request->getVar('id_biodata');
        $path = 'assets/uploads/pdf/rumah-ibadah/nphd/';
        $foto = $this->request->getFile('dokumen');
        $number = rand(1,100);
        $name = $number . ' - ' . $foto->getName();

        if($foto->move($path, $name)){
            $foto_path = $path . $name;

            $data['dokumen_nphd'] = $foto_path;
        }

        $dokumen = $this->pendaftarModel->getDokumen($id);

        if($dokumen['dokumen_nphd'] != ''){
            unlink($dokumen['dokumen_nphd']);
        }

        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }
        return redirect()->to(base_url('/rumah-ibadah/dokumen'));
    }

    public function saveDokumenLPJ()
    {
        $id = $this->request->getVar('id_biodata');
        $path = 'assets/uploads/pdf/rumah-ibadah/lpj/';
        $foto = $this->request->getFile('dokumen');
        $number = rand(1,100);
        $name = $number . ' - ' . $foto->getName();

        if($foto->move($path, $name)){
            $foto_path = $path . $name;

            $data['dokumen_lpj'] = $foto_path;
        }

        $dokumen = $this->pendaftarModel->getDokumen($id);

        if($dokumen['dokumen_lpj'] != ''){
            unlink($dokumen['dokumen_lpj']);
        }

        $result = $this->pendaftarModel->updateBiodata($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/rumah-ibadah/dokumen'));
    }

    public function saveNotaDinas()
    {
        $id = $this->request->getVar('id_biodata');

        $path = 'assets/uploads/pdf/rumah-ibadah/nota-dinas/';

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

    public function ubahStatusPencairan() {
        $id = $this->request->getVar('id_biodata');

        $data =[
            'status_pendaftaran' => 'Proses Pencairan Dana',
        ];

        $this->pendaftarModel->updateBiodata($data,$id);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }


    

}
