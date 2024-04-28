<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hafidz dan Hafidzah</h1>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">

                    <div class="row no-gutters align-items-center mb-2 mt-2">
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

        <div class="col-xl-8">
            <div class="row">
                
                <!-- <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Hafidz</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">150 Orang</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                        5 Juz</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">40 Orang</div>
                                    <a href="/admin/tahfidzul-quran/lima-juz" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-5 fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        10 Juz</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">46 Orang</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-1 fa-2x text-gray-300"></i>
                                    <i class="fas fa-0 fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Hafidzah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">100 Orang</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-person-dress fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        20 Juz</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">24 Orang</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-2 fa-2x text-gray-300"></i>
                                    <i class="fas fa-0 fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        30 Juz</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">12 Orang</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-3 fa-2x text-gray-300"></i>
                                    <i class="fas fa-0 fa-2x text-gray-300"></i>
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
                    <h6 class="m-0 font-weight-bold text-primary">List Seluruh Hafidz dan Hafidzah</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Kab/Kota</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Kategori</th>
                                    <th>Rekening</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Muhammad Budiarto</td>
                                    <td>Bandar Lampung</td>
                                    <td>Perumahan Indah Sejahtera, Sukarame</td>
                                    <td>30 JUZ</td>
                                    <td>8912760321</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Nurul Azizah</td>
                                    <td>Lampung Selatan</td>
                                    <td>Jl. Kenangan</td>
                                    <td>10 JUZ</td>
                                    <td>184578921265</td>
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


            