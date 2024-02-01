<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rumah Ibadah dan Pondok Pesantren</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="alert alert-warning mb-4" role="alert">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                Segera periksa kelengkapan berkas pendaftar baru untuk dilakukan verifikasi!
                            </div>
                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                Pendaftar Baru</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_pendaftar?> Pendaftar</div>
                            <a href="/admin/rumah-ibadah/pendaftar" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user-plus fa-2x text-gray-300"></i> -->
                        </div>
                    </div>
                </div>
            </div>            
        </div>

        <div class="col-xl-8">
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Masjid</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_masjid?> Unit</div>
                                    <a href="/admin/rumah-ibadah/masjid" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-mosque fa-2x text-gray-300"></i>
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
                                        Musholla</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_musholla?> Unit</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-mosque fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Gereja</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_gereja?> Unit</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-church fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pondok Pesantren</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_pondokpesantren?> Unit</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
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
                                        TPA/TPQ</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_tpa_tpq?> Unit</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pura</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_pura?> Unit</div>
                                    <a href="" class="text-xs mb-0 fw-500 text-dark">Lihat selengkapnya</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-gopuram fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Seluruh Bangunan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis Bangunan</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Jumlah Rekomendasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach($biodata as $list) : ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $list['nama_bangunan']?></td>
                                    <td><?= $list['jenis_bangunan']?></td>
                                    <td><?= $list['alamat_bangunan']?></td>
                                    <td><?= $list['kabupaten_kota']?></td>
                                    <td>-</td>
                                </tr>
                                <?php endforeach; ?>
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