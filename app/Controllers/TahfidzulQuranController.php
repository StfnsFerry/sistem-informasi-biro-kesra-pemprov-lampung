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

}
