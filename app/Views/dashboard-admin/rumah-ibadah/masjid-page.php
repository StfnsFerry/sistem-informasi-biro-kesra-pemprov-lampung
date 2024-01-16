<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Hibah Rumah Ibadah Kategori Masjid</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">List Bangunan Masjid</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Kab/Kota</th>
                                                    <th>Jumlah Rekomendasi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Masjid Al-Huda</td>
                                                    <td>Kampung Bumi Jaya Kecamatan Negara Batin</td>
                                                    <td>Way Kanan</td>
                                                    <td>Rp 15.000.000</td>
                                                    <td>                                                  
                                                        <a href="#" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span class="text">Detail</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Masjid Nurul Huda</td>
                                                    <td>Jl. Sultan Badaruddin</td>
                                                    <td>Bandar Lampung</td>
                                                    <td>Rp 15.000.000</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span class="text">Detail</span>
                                                        </a>
                                                    </td>
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

            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            