<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendaftarRumahIbadahModel;
use CodeIgniter\HTTP\ResponseInterface;

class RumahIbadahController extends BaseController
{
    public $pendaftarModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarRumahIbadahModel();
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
        return view('dashboard-admin/rumah-ibadah/pendaftar-page');
    }
    
    public function viewVerifikasi()
    {
        return view('dashboard-admin/rumah-ibadah/verifikasi-page');
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

    public function viewDokumen()
    {
        return view('dashboard-rumah-ibadah/dokumen');
    }

}
