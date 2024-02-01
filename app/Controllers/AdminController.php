<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PendaftarRumahIbadahModel;

class AdminController extends BaseController
{
    public $pendaftarModel;

    public function __construct(){
        $this->pendaftarModel = new PendaftarRumahIbadahModel();
    }
    public function index()
    {
        return view('dashboard-admin/index');
    }

    public function viewRumahIbadah()
    {
        $biodata = $this->pendaftarModel->getBiodata();

        $data = [
            'jumlah_pendaftar' => $this->pendaftarModel->countPendaftar(),
            'jumlah_gereja' => $this->pendaftarModel->countGereja(),
            'jumlah_masjid' => $this->pendaftarModel->countMasjid(),
            'jumlah_musholla' => $this->pendaftarModel->countMusholla(),
            'jumlah_pondokpesantren' => $this->pendaftarModel->countPondokPesantren(),
            'jumlah_tpa_tpq' => $this->pendaftarModel->countTPA_TPQ(),
            'jumlah_pura' => $this->pendaftarModel->countPura(),
            'biodata' => $biodata,
        ];

        return view('dashboard-admin/rumah-ibadah/index', $data);
    }

    public function viewTahfidzulQuran()
    {
        return view('dashboard-admin/tahfidzul-quran/index');
    }

    public function viewTokohAgama()
    {
        return view('dashboard-admin/tokoh-agama/index');
    }
}
