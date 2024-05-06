<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarTahfidzulModel;
use App\Models\VerifikasiTahfidzulModel;
use CodeIgniter\HTTP\ResponseInterface;

class TahfidzulQuranController extends BaseController
{
    public $pendaftarModel;
    public $verifikasiModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarTahfidzulModel();
        $this->verifikasiModel = new VerifikasiTahfidzulModel();
    }

    public function index()
    {
        //
    }

    public function viewPendaftar()
    {
        $biodata = $this->pendaftarModel->getBiodata();
        $verifikasi = $this->verifikasiModel->getVerifikasi();

        $data = [
            'pendaftar' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-admin/tahfidzul-quran/pendaftar-page', $data);
    }

    public function viewVerifikasi($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getVerifikasiById($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];
        return view('dashboard-admin/tahfidzul-quran/verifikasi-page', $data);
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

        return redirect()->to('/admin/tahfidzul-quran/pendaftar');
    }

    public function viewDetail($id)
    {      
        $biodata = $this->pendaftarModel->getDetailBiodata($id);
        $verifikasi = $this->verifikasiModel->getDetailVerifikasi($id);

        $data =[
            'biodata' => $biodata,
            'verifikasi' => $verifikasi,
        ];

        return view('dashboard-admin/tahfidzul-quran/detail-page', $data);
    }

    public function TerimaPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $kategori = $this->pendaftarModel->getDetailBiodata($id);
        $kategori_juz = $kategori['kategori_juz'];

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

        if($kategori_juz == '5 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/lima-juz');
        }elseif($kategori_juz == '10 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/sepuluh-juz');
        }elseif($kategori_juz == '20 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/duapuluh-juz');
        }elseif($kategori_juz == '30 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/tigapuluh-juz');
        }
        else{
            return redirect()->back()->with('success', 'Berhasil menyimpan data' );
        }
    }

    public function TolakPendaftaran()
    {
        $id = $this->request->getVar('id_biodata');

        $kategori = $this->pendaftarModel->getDetailBiodata($id);
        $kategori_juz = $kategori['kategori_juz'];

        if($kategori['dokumen_persyaratan'] != ''){
            unlink($kategori['dokumen_persyaratan']);
        }

        $result = $this->pendaftarModel->deleteBiodata($id);
        
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        if($kategori_juz == '5 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/lima-juz');
        }elseif($kategori_juz == '10 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/sepuluh-juz');
        }elseif($kategori_juz == '20 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/duapuluh-juz');
        }elseif($kategori_juz == '30 Juz'){
            return redirect()->to('/admin/tahfidzul-quran/tigapuluh-juz');
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

        $path = 'assets/uploads/pdf/tahfidzul/nota-dinas/';

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

    public function viewLimaJuz()
    {
        $biodata = $this->pendaftarModel->getPendaftarLimaJuz();

        $data = [
            'limajuz' => $biodata,      
        ];

        return view('dashboard-admin/tahfidzul-quran/lima-juz-page', $data);
    }

    public function viewSepuluhJuz()
    {
        $biodata = $this->pendaftarModel->getPendaftarSepuluhJuz();

        $data = [
            'sepuluhjuz' => $biodata,      
        ];

        return view('dashboard-admin/tahfidzul-quran/sepuluh-juz-page', $data);
    }

    public function viewDuaPuluhJuz()
    {
        $biodata = $this->pendaftarModel->getPendaftarDuaPuluhJuz();

        $data = [
            'duapuluhjuz' => $biodata,      
        ];

        return view('dashboard-admin/tahfidzul-quran/duapuluh-juz-page', $data);
    }

    public function viewTigaPuluhJuz()
    {
        $biodata = $this->pendaftarModel->getPendaftarTigaPuluhJuz();

        $data = [
            'tigapuluhjuz' => $biodata,      
        ];

        return view('dashboard-admin/tahfidzul-quran/tigapuluh-juz-page', $data);
    }


        //User

    public function viewBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tahfidzul-quran/view_biodata', $data);
    }

    public function createBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tahfidzul-quran/tambah_biodata', $data);
    }

    public function editBiodata()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tahfidzul-quran/ubah_biodata',$data);
    }

    public function saveBiodata()
    {
        $pendaftar_tahfidzul = model(PendaftarTahfidzulModel::class);

        $rules = $this->validate([
            'nomor_rekening' => 'required|is_unique[pendaftar_tahfidzul.nomor_rekening]',
        ]);

        if (!$rules) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->pendaftarModel->saveBiodata([
            'id_user' => $this->request->getVar('id_user'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kategori_juz' => $this->request->getVar('kategori_juz'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_rekening' => $this->request->getVar('nomor_rekening'),
            'nama_pemilik_rekening' => $this->request->getVar('nama_pemilik_rekening'),
            'id_provinsi' => $this->request->getVar('provinsi'),
            'id_kabupaten_kota' => $this->request->getVar('kabupaten_kota'),
            'id_kecamatan' => $this->request->getVar('kecamatan'),
            'id_kelurahan' => $this->request->getVar('kelurahan'),
        ]);

        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

    public function updateBiodata()
    {

        $id = $this->request->getVar('id_biodata');
        $id_user = user()->id;
        $cek = $this->pendaftarModel->getBiodata($id_user);

        if( $cek[0]['status_pendaftaran'] != 'Belum Mendaftar')
        {
            return redirect()->to(base_url('/tokoh-agama/biodata'));
        }

        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kategori_juz' => $this->request->getVar('kategori_juz'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_rekening' => $this->request->getVar('nomor_rekening'),
            'nama_pemilik_rekening' => $this->request->getVar('nama_pemilik_rekening'),
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

        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

    public function viewDokumen()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);

        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tahfidzul-quran/dokumen', $data);
    }

    public function saveDokumen()
    {
        $id = $this->request->getVar('id_biodata');

        $path = 'assets/uploads/pdf/tahfidzul-quran/';

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

        return redirect()->to(base_url('/tahfidzul-quran/dokumen'));
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


        return view('dashboard-tahfidzul-quran/status_pendaftaran', $data);
    }

    public function viewProfil()
    {
        $id = user()->id;
        $biodata = $this->pendaftarModel->getBiodata($id);
        
        $data = [
            'biodata' => $biodata,
        ];

        return view('dashboard-tahfidzul-quran/profil', $data);
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

        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

}
