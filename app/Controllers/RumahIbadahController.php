<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RumahIbadahController extends BaseController
{
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
}
