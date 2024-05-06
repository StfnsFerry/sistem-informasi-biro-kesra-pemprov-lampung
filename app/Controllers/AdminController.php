<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PendaftarRumahIbadahModel;
use App\Models\PendaftarTokohAgamaModel;
use App\Models\PendaftarTahfidzulModel;
use App\Models\SubAdminModel;

class AdminController extends ResourceController
{
    public $pendaftarModel;
    public $tokohagamaModel;
    public $tahfidzulModel;
    public $subadminModel;

    protected $format = 'json'; 

    public function __construct(){
        $this->pendaftarModel = new PendaftarRumahIbadahModel();
        $this->subadminModel = new SubAdminModel();
        $this->tokohagamaModel = new PendaftarTokohAgamaModel();
        $this->tahfidzulModel = new PendaftarTahfidzulModel();

    }
    public function index()
    {
        $grafik_rumah_ibadah = $this->pendaftarModel->getJumlahPendaftarperKotaKabupaten();
        $grafik_tahfidzul = $this->tahfidzulModel->getJumlahPendaftarperKotaKabupaten();
        $grafik_tokoh_agama = $this->tokohagamaModel->getJumlahPendaftarperKotaKabupaten();

        $data = [
            'grafik_rumah_ibadah' => $grafik_rumah_ibadah,
            'grafik_tahfidzul' => $grafik_tahfidzul,
            'grafik_tokoh_agama' => $grafik_tokoh_agama, 
        ];

        return view('dashboard-admin/index', $data);
    }

    public function viewRumahIbadah()
    {
        $biodata = $this->pendaftarModel->getBiodata();
        $data_grafik = $this->pendaftarModel->getJumlahPendaftarperKotaKabupaten();

        $data = [
            'jumlah_pendaftar' => $this->pendaftarModel->countPendaftar(),
            'jumlah_gereja' => $this->pendaftarModel->countGereja(),
            'jumlah_masjid' => $this->pendaftarModel->countMasjid(),
            'jumlah_musholla' => $this->pendaftarModel->countMusholla(),
            'jumlah_pondokpesantren' => $this->pendaftarModel->countPondokPesantren(),
            'jumlah_tpa_tpq' => $this->pendaftarModel->countTPA_TPQ(),
            'jumlah_pura' => $this->pendaftarModel->countPura(),
            'biodata' => $biodata,
            'data_grafik' => $data_grafik,
        ];

        return view('dashboard-admin/rumah-ibadah/index', $data);
    }

    public function viewTahfidzulQuran()
    {
        $biodata = $this->tahfidzulModel->getBiodata();
        $data_grafik = $this->tahfidzulModel->getJumlahPendaftarperKotaKabupaten();

        $data = [
            'jumlah_pendaftar' => $this->tahfidzulModel->countPendaftar(),
            'jumlah_limajuz' => $this->tahfidzulModel->countLimaJuz(),
            'jumlah_sepuluhjuz' => $this->tahfidzulModel->countSepuluhJuz(),
            'jumlah_duapuluhjuz' => $this->tahfidzulModel->countDuaPuluhJuz(),
            'jumlah_tigapuluhjuz' => $this->tahfidzulModel->countTigaPuluhJuz(),
            'biodata' => $biodata,
            'data_grafik' => $data_grafik,
        ];

        return view('dashboard-admin/tahfidzul-quran/index', $data);
    }

    public function viewTokohAgama()
    {
        $biodata = $this->tokohagamaModel->getBiodata();
        $data_grafik = $this->tokohagamaModel->getJumlahPendaftarperKotaKabupaten();

        $data = [
            'jumlah_pendaftar' => $this->tokohagamaModel->countPendaftar(),
            'jumlah_gurungaji' => $this->tokohagamaModel->countGuruNgaji(),
            'jumlah_imammasjid' => $this->tokohagamaModel->countImamMasjid(),
            'jumlah_marbot' => $this->tokohagamaModel->countMarbot(),
            'biodata' => $biodata,
            'data_grafik' => $data_grafik,
        ];
        
        return view('dashboard-admin/tokoh-agama/index', $data);
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
