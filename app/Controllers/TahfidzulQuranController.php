<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TahfidzulQuranController extends BaseController
{
    public function index()
    {
        //
    }

    public function viewPendaftar()
    {
        return view('dashboard-admin/tahfidzul-quran/pendaftar-page');
    }

    public function viewLimaJuz()
    {
        return view('dashboard-admin/tahfidzul-quran/lima-juz-page');
    }

    public function viewSepuluhJuz()
    {
        return view('dashboard-admin/tahfidzul-quran/sepuluh-juz-page');
    }

    public function viewDuaPuluhJuz()
    {
        return view('dashboard-admin/tahfidzul-quran/duapuluh-juz-page');
    }

    public function viewTigaPuluhJuz()
    {
        return view('dashboard-admin/tahfidzul-quran/tigapuluh-juz-page');
    }

    public function viewDetail()
    {      
        return view('dashboard-admin/tahfidzul-quran/detail-page');
    }

        //User

    public function viewBiodata()
    {
        return view('dashboard-tahfidzul-quran/view_biodata');
    }

    public function createBiodata()
    {
        return view('dashboard-tahfidzul-quran/tambah_biodata');
    }

    public function editBiodata()
    {
        return view('dashboard-tahfidzul-quran/ubah_biodata');
    }

    public function saveBiodata()
    {
        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

    public function updateBiodata()
    {
        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

    public function viewDokumen()
    {
        return view('dashboard-tahfidzul-quran/dokumen');
    }

    public function saveDokumen()
    {
        return redirect()->to(base_url('/tahfidzul-quran/dokumen'));
    }

    public function saveDokumenNPHD()
    {
        return redirect()->to(base_url('/tahfidzul-quran/dokumen'));
    }

    public function saveDokumenLPJ()
    {
        return redirect()->to(base_url('/tahfidzul-quran/dokumen'));
    }

    public function saveNotaDinas()
    {
        return redirect()->to(base_url('admin/tahfidzul-quran/lima-juz'));
    }

    public function viewStatusPendaftaran()
    {
        return view('dashboard-tahfidzul-quran/status_pendaftaran');
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
        return redirect()->to(base_url('/tahfidzul-quran/biodata'));
    }

    public function ubahStatusPencairan()
    {
        return redirect()->to(base_url('admin/tahfidzul-quran/lima-juz'));
    }

}
