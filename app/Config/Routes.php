<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\RumahIbadahController;
use App\Controllers\TokohAgamaController;
use App\Controllers\ProfilController;
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

$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:Admin']);
$routes->get('/admin/rumahibadah', [AdminController::class, 'viewRumahIbadah'], ['filter' => 'role:Admin']);
$routes->get('/admin/rumah-ibadah/masjid', [RumahIbadahController::class, 'viewMasjid'], ['filter' => 'role:Admin']);
$routes->get('/admin/rumah-ibadah/pendaftar', [RumahIbadahController::class, 'viewPendaftar'], ['filter' => 'role:Admin']);
$routes->get('/admin/rumah-ibadah/pendaftar/verifikasi', [RumahIbadahController::class, 'viewVerifikasi'], ['filter' => 'role:Admin']);

// $routes->get('/tokoh-agama', [TokohAgamaController::class, 'index']);
$routes->get('/tokoh-agama/biodata', [TokohAgamaController::class, 'viewBiodata']);
$routes->get('/tokoh-agama/tambah-biodata', [TokohAgamaController::class, 'createBiodata']);
$routes->get('/tokoh-agama/ubah-biodata', [TokohAgamaController::class, 'editBiodata']);
$routes->post('/tokoh-agama/biodata/simpan', [TokohAgamaController::class, 'saveBiodata']);
$routes->post('/tokoh-agama/biodata/update', [TokohAgamaController::class, 'updateBiodata']);
$routes->get('/tokoh-agama/dokumen', [TokohAgamaController::class, 'viewDokumen']);
$routes->post('/tokoh-agama/dokumen/simpan', [TokohAgamaController::class, 'saveDokumen']);
$routes->post('/tokoh-agama/verifikasi', [TokohAgamaController::class, 'createVerifikasi']);
$routes->get('/tokoh-agama/status-pendaftaran', [TokohAgamaController::class, 'viewStatusPendaftaran']);
$routes->get('/tokoh-agama/profil', [TokohAgamaController::class, 'viewProfil']);

$routes->get('/rumah-ibadah/biodata', [RumahIbadahController::class, 'viewBiodata']);
$routes->get('/rumah-ibadah/tambah-biodata', [RumahIbadahController::class, 'createBiodata']);
$routes->get('/rumah-ibadah/ubah-biodata', [RumahIbadahController::class, 'editBiodata']);
$routes->post('/rumah-ibadah/biodata/simpan', [RumahIbadahController::class, 'saveBiodata']);
$routes->post('/rumah-ibadah/biodata/update', [RumahIbadahController::class, 'updateBiodata']);
$routes->get('/rumah-ibadah/dokumen', [RumahIbadahController::class, 'viewDokumen']);
$routes->post('/rumah-ibadah/dokumen/simpan', [RumahIbadahController::class, 'saveDokumen']);
$routes->get('/rumah-ibadah/status-pendaftaran', [RumahIbadahController::class, 'viewStatusPendaftaran']);
$routes->get('/rumah-ibadah/profil', [RumahIbadahController::class, 'viewProfil']);
$routes->post('/rumah-ibadah/verifikasi', [RumahIbadahController::class, 'createVerifikasi']);

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