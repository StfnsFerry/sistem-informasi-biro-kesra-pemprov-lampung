<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\RumahIbadahController;
use App\Controllers\TahfidzulQuranController;
use App\Controllers\TokohAgamaController;
use App\Controllers\ProfilController;
use App\Controllers\AuthController;
use App\Controllers\SubAdminController;
use App\Controllers\PendaftarController;
use App\Controllers\ArsipController;
use Myth\Auth\Config\Auth as AuthConfig;
use Config\Auth;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/program1', 'Home::prog1');
$routes->get('/program2', 'Home::prog2');
$routes->get('/program3', 'Home::prog3');
$routes->get('/profil', 'Home::viewProfil');
$routes->get('/pendaftaran', 'Home::viewPendaftaran');

$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah', [AdminController::class, 'viewRumahIbadah'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/masjid', [RumahIbadahController::class, 'viewMasjid'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/musholla', [RumahIbadahController::class, 'viewMusholla'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/gereja', [RumahIbadahController::class, 'viewGereja'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/pondok-pesantren', [RumahIbadahController::class, 'viewPondokPesantren'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/tpa-tpq', [RumahIbadahController::class, 'viewTpaTpq'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/pura', [RumahIbadahController::class, 'viewPura'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/pendaftar', [RumahIbadahController::class, 'viewPendaftar'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/pendaftar/verifikasi/(:any)', [RumahIbadahController::class, 'viewVerifikasi/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/rumah-ibadah/updateVerifikasi', [RumahIbadahController::class, 'updateVerifikasi'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/rumah-ibadah/detail/(:num)', [RumahIbadahController::class, 'viewDetail/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/rumah-ibadah/terima-pendaftaran', [RumahIbadahController::class, 'TerimaPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/rumah-ibadah/tolak-pendaftaran', [RumahIbadahController::class, 'TolakPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/rumah-ibadah/pencairan', [RumahIbadahController::class, 'ubahStatusPencairan'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/rumah-ibadah/nota-dinas', [RumahIbadahController::class, 'saveNotaDinas'], ['filter' => 'role:Admin,Sub-Admin']);

$routes->get('/admin/tahfidzul-quran', [AdminController::class, 'viewTahfidzulQuran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/pendaftar', [TahfidzulQuranController::class, 'viewPendaftar'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/pendaftar/verifikasi/(:any)', [TahfidzulQuranController::class, 'viewVerifikasi/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tahfidzul-quran/updateVerifikasi', [TahfidzulQuranController::class, 'updateVerifikasi'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/detail/(:num)', [TahfidzulQuranController::class, 'viewDetail/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tahfidzul-quran/terima-pendaftaran', [TahfidzulQuranController::class, 'TerimaPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tahfidzul-quran/tolak-pendaftaran', [TahfidzulQuranController::class, 'TolakPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tahfidzul-quran/pencairan', [TahfidzulQuranController::class, 'ubahStatusPencairan'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tahfidzul-quran/nota-dinas', [TahfidzulQuranController::class, 'saveNotaDinas'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/lima-juz', [TahfidzulQuranController::class, 'viewLimaJuz'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/sepuluh-juz', [TahfidzulQuranController::class, 'viewSepuluhJuz'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/duapuluh-juz', [TahfidzulQuranController::class, 'viewDuaPuluhJuz'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tahfidzul-quran/tigapuluh-juz', [TahfidzulQuranController::class, 'viewTigaPuluhJuz'], ['filter' => 'role:Admin,Sub-Admin']);

$routes->get('/admin/tokoh-agama', [AdminController::class, 'viewTokohAgama'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/pendaftar', [TokohAgamaController::class, 'viewPendaftar'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/pendaftar/verifikasi/(:any)', [TokohAgamaController::class, 'viewVerifikasi/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tokoh-agama/updateVerifikasi', [TokohAgamaController::class, 'updateVerifikasi'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/detail/(:num)', [TokohAgamaController::class, 'viewDetail/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tokoh-agama/terima-pendaftaran', [TokohAgamaController::class, 'TerimaPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tokoh-agama/tolak-pendaftaran', [TokohAgamaController::class, 'TolakPendaftaran'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tokoh-agama/pencairan', [TokohAgamaController::class, 'ubahStatusPencairan'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/tokoh-agama/nota-dinas', [TokohAgamaController::class, 'saveNotaDinas'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/guru-ngaji', [TokohAgamaController::class, 'viewGuruNgaji'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/imam-masjid', [TokohAgamaController::class, 'viewImamMasjid'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/tokoh-agama/marbot', [TokohAgamaController::class, 'viewMarbot'], ['filter' => 'role:Admin,Sub-Admin']);

$routes->get('/admin/sub-admin', [AdminController::class, 'viewSubAdmin'], ['filter' => 'role:Admin']);
$routes->post('/admin/sub-admin/register', [AuthController::class, 'registerSubAdmin'], ['filter' => 'role:Admin']);
$routes->post('/admin/sub-admin/update', [SubAdminController::class, 'updateProfil'], ['filter' => 'role:Admin']);
$routes->get('/admin/sub-admin/delete/(:num)', [SubAdminController::class, 'deleteAkun/$1'], ['filter' => 'role:Admin']);

$routes->get('/admin/pendaftar', [AdminController::class, 'viewPendaftar'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/pendaftar/update', [PendaftarController::class, 'updateProfil'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/pendaftar/delete/(:num)', [PendaftarController::class, 'deleteAkun/$1'], ['filter' => 'role:Admin,Sub-Admin']);

$routes->get('/admin/arsip/rumah-ibadah', [ArsipController::class, 'index'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->post('/admin/arsip/tambah-arsip', [ArsipController::class, 'saveArsip'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/arsip/delete/(:num)', [ArsipController::class, 'deleteArsip/$1'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/arsip/tahfidzul-quran', [ArsipController::class, 'viewArsipTahfidzul'], ['filter' => 'role:Admin,Sub-Admin']);
$routes->get('/admin/arsip/tokoh-agama', [ArsipController::class, 'viewArsipTokohAgama'], ['filter' => 'role:Admin,Sub-Admin']);


// $routes->get('/tokoh-agama', [TokohAgamaController::class, 'index']);
$routes->get('/tokoh-agama/biodata', [TokohAgamaController::class, 'viewBiodata'], ['filter' => 'role:Tokoh Agama']);
$routes->get('/tokoh-agama/tambah-biodata', [TokohAgamaController::class, 'createBiodata'], ['filter' => 'role:Tokoh Agama']);
$routes->get('/tokoh-agama/ubah-biodata', [TokohAgamaController::class, 'editBiodata'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/biodata/simpan', [TokohAgamaController::class, 'saveBiodata'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/biodata/update', [TokohAgamaController::class, 'updateBiodata'], ['filter' => 'role:Tokoh Agama']);
$routes->get('/tokoh-agama/dokumen', [TokohAgamaController::class, 'viewDokumen'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/dokumen/simpan', [TokohAgamaController::class, 'saveDokumen'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/dokumen/nphd', [TokohAgamaController::class, 'saveDokumenNPHD'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/dokumen/lpj', [TokohAgamaController::class, 'saveDokumenLPJ'], ['filter' => 'role:Tokoh Agama']);
$routes->get('/tokoh-agama/status-pendaftaran', [TokohAgamaController::class, 'viewStatusPendaftaran'], ['filter' => 'role:Tokoh Agama']);
$routes->get('/tokoh-agama/profil', [TokohAgamaController::class, 'viewProfil'], ['filter' => 'role:Tokoh Agama']);
$routes->post('/tokoh-agama/verifikasi', [TokohAgamaController::class, 'createVerifikasi'], ['filter' => 'role:Tokoh Agama']);

$routes->get('/rumah-ibadah/biodata', [RumahIbadahController::class, 'viewBiodata'], ['filter' => 'role:Rumah Ibadah']);
$routes->get('/rumah-ibadah/tambah-biodata', [RumahIbadahController::class, 'createBiodata'], ['filter' => 'role:Rumah Ibadah']);
$routes->get('/rumah-ibadah/ubah-biodata', [RumahIbadahController::class, 'editBiodata'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/biodata/simpan', [RumahIbadahController::class, 'saveBiodata'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/biodata/update', [RumahIbadahController::class, 'updateBiodata'], ['filter' => 'role:Rumah Ibadah']);
$routes->get('/rumah-ibadah/dokumen', [RumahIbadahController::class, 'viewDokumen'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/dokumen/simpan', [RumahIbadahController::class, 'saveDokumen'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/dokumen/nphd', [RumahIbadahController::class, 'saveDokumenNPHD'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/dokumen/lpj', [RumahIbadahController::class, 'saveDokumenLPJ'], ['filter' => 'role:Rumah Ibadah']);
$routes->get('/rumah-ibadah/status-pendaftaran', [RumahIbadahController::class, 'viewStatusPendaftaran'], ['filter' => 'role:Rumah Ibadah']);
$routes->get('/rumah-ibadah/profil', [RumahIbadahController::class, 'viewProfil'], ['filter' => 'role:Rumah Ibadah']);
$routes->post('/rumah-ibadah/verifikasi', [RumahIbadahController::class, 'createVerifikasi'], ['filter' => 'role:Rumah Ibadah']);

$routes->get('/tahfidzul-quran/biodata', [TahfidzulQuranController::class, 'viewBiodata'], ['filter' => 'role:Tahfidzul Quran']);
$routes->get('/tahfidzul-quran/tambah-biodata', [TahfidzulQuranController::class, 'createBiodata'], ['filter' => 'role:Tahfidzul Quran']);
$routes->get('/tahfidzul-quran/ubah-biodata', [TahfidzulQuranController::class, 'editBiodata'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/biodata/simpan', [TahfidzulQuranController::class, 'saveBiodata'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/biodata/update', [TahfidzulQuranController::class, 'updateBiodata'], ['filter' => 'role:Tahfidzul Quran']);
$routes->get('/tahfidzul-quran/dokumen', [TahfidzulQuranController::class, 'viewDokumen'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/dokumen/simpan', [TahfidzulQuranController::class, 'saveDokumen'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/dokumen/nphd', [TahfidzulQuranController::class, 'saveDokumenNPHD'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/dokumen/lpj', [TahfidzulQuranController::class, 'saveDokumenLPJ'], ['filter' => 'role:Tahfidzul Quran']);
$routes->get('/tahfidzul-quran/status-pendaftaran', [TahfidzulQuranController::class, 'viewStatusPendaftaran'], ['filter' => 'role:Tahfidzul Quran']);
$routes->get('/tahfidzul-quran/profil', [TahfidzulQuranController::class, 'viewProfil'], ['filter' => 'role:Tahfidzul Quran']);
$routes->post('/tahfidzul-quran/verifikasi', [TahfidzulQuranController::class, 'createVerifikasi'], ['filter' => 'role:Tahfidzul Quran']);

$routes->post('/updateProfil', [ProfilController::class, 'updateProfil']);

// Myth:Auth routes file.
$routes->group('', ['namespace' => '\App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});