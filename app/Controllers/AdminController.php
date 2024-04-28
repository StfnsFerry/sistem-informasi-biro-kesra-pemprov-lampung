<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PendaftarRumahIbadahModel;
use App\Models\SubAdminModel;

class AdminController extends ResourceController
{
    public $pendaftarModel;
    public $subadminModel;
    protected $format = 'json'; 

    public function __construct(){
        $this->pendaftarModel = new PendaftarRumahIbadahModel();
        $this->subadminModel = new SubAdminModel();

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

    public function viewSubAdmin()
    {
        $subadmin = $this->subadminModel->getSubAdmin();

        $data = [
            'message' => 'success',
            'subadmin' => $subadmin,
        ];
        // return $this->respond($data,200);
        return view('dashboard-admin/sub-admin/index', $data);
    }

    public function viewPendaftar()
    {
        $pendaftar = $this->subadminModel->getPendaftar();

        $data = [
            'message' => 'success',
            'pendaftar' => $pendaftar,
        ];

        return view('dashboard-admin/pendaftar/index', $data);
        // return $this->respond($data,200);
    }
}
