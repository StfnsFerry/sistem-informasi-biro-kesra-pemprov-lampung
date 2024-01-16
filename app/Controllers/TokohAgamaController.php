<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TokohAgamaController extends BaseController
{
    public function index()
    {
        return view('dashboard-tokoh-agama/index');
    }

    public function viewBiodata()
    {
        return view('dashboard-tokoh-agama/biodata');
    }
}
