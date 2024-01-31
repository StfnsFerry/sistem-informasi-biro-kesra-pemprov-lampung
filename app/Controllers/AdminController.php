<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('dashboard-admin/index');
    }

    public function viewRumahIbadah()
    {
        return view('dashboard-admin/rumah-ibadah/index');
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
