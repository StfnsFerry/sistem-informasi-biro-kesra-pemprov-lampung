<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Guru Ngaji, Imam Masjid, dan Marbot</h1>
    </div>

    <div class="row">

        <div class="col-xl-12">

            <div class="row">
                <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">

                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="alert alert-warning mb-4" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill"></i>
                                        Segera periksa kelengkapan berkas pendaftar baru untuk dilakukan verifikasi!
                                    </div>
                                </div>
                            </div>
        
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                        Pendaftar Baru</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">100 Pendaftar</div>
                                    <a href="/admin/tahfidzul-quran/pendaftar" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                </div>
                            </div>

                        </div>
                    </div>            
                </div>
            </div>

        </div>

        <div class="col-xl-12">

            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Guru Ngaji</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">60 Orang</div>
                                    <a href="/admin/tokoh-agama/guru-ngaji" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person-chalkboard fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Imam Masjid</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">50 Orang</div>
                                    <a href="/admin/tokoh-agama/imam-masjid" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person-praying fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                        Marbot</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">70 Orang</div>
                                    <a href="/admin/tokoh-agama/marbot" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person-walking-with-cane fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Seluruh Tokoh Agama</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTokohAgama" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Rekening</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Sahroni</td>
                                    <td>Kampung Bumi Jaya Kecamatan Negara Batin</td>
                                    <td>1765873250</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Marjuli</td>
                                    <td>Jl. Sultan Badaruddin</td>
                                    <td>8653890765</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>