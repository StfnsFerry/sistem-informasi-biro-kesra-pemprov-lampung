<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pendaftar Baru Hibah Rumah Ibadah dan Pondok Pesantren</h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary">List Pendaftar</h6>
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
                                                        <a href="#" class="btn btn-secondary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-arrow-right"></i>
                                                            </span>
                                                            <span class="text">Verifikasi</span>
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
                                                        <a href="#" class="btn btn-secondary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-arrow-right"></i>
                                                            </span>
                                                            <span class="text">Verifikasi</span>
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

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Belum Terverifikasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataVerifikasi" width="100%" cellspacing="0">
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
                                                        <a href="#" class="btn btn-warning btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </span>
                                                            <span class="text">Ubah Verifikasi</span>
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
                                                        <a href="#" class="btn btn-warning btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </span>
                                                            <span class="text">Ubah Verifikasi</span>
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

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sudah Diverifikasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                        <button type="button" class="btn btn-info btn-icon-split" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span class="text">Detail</span>
                                                        </button>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kelengkapan Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-1">
                                <label class="col-form-label">KTP - <i class="fas fa-solid fa-check"></i></label>
                            </div>

                            <div class="mb-1">
                                <label class="col-form-label">NPWP - <i class="fas fa-solid fa-check"></i></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            