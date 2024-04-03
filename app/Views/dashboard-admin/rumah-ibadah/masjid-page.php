<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Kategori Masjid Program Hibah Rumah Ibadah dan Pondok Pesantren</h1>
    </div>
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
                                    <?php 
                                    $no = 1;
                                    foreach ($masjid as $list) : ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$list['nama_bangunan']?></td>
                                        <td><?=$list['alamat_bangunan']?></td>
                                        <td><?=$list['kabupaten_kota']?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JumlahRekomendasiModal<?=$list['id']?>">
                                                Launch demo modal
                                            </button>
                                        </td>
                                        <td>                                                  
                                            <a href="<?= base_url('/admin/rumah-ibadah/masjid/detail/' . $list['id'])?>" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                        </td>
                                    </tr>  
                                        <!-- Modal -->
                                        <div class="modal fade" id="JumlahRekomendasiModal<?=$list['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Jumlah Rekomendasi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>