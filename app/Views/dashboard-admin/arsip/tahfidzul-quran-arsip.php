<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Arsip Hafidz dan Hafidzah</h1>
    </div>
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">List Arsip</h6>
                        <button class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#tambahArsip">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Arsip</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama File</th>
                                        <th>Tahun</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($arsip as $list) : ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$list['judul_arsip']?></td>
                                        <td><?=$list['tahun_arsip']?></td>
                                        <td><?=$list['kategori']?></td>
                                        <td>                                                  
                                            <a class="btn btn-success btn-icon-split" href="<?=base_url($list['file'])?>" download>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-download"></i>
                                                </span>
                                                <span class="text">Download</span>
                                            </a>

                                            <button class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusAkun<?=$list['id']?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
                                            </button>
                                        </td>
                                    </tr>  

                                        <!-- Modal Hapus Akun-->
                                        <div class="modal fade" id="hapusAkun<?=$list['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Arsip</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hapus arsip bersifat <b>PERMANEN</b>.<br>Apakah anda yakin ingin menghapus arsip ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                                        <a href="<?= base_url('/admin/arsip/delete/' . $list['id'])?>"  class="btn btn-primary">Hapus</a>
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

<!-- Modal Tambah Akun-->
<div class="modal fade" id="tambahArsip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Arsip    </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/admin/arsip/tambah-arsip" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="" class="form-label">Judul Arsip</label>
                <input type="text" class="form-control" name="judul_arsip">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tahun Arsip</label>
                <input type="text" class="form-control" name="tahun_arsip">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="kategori" id="" class="form-select">
                    <option value="" selected disabled>Pilih Kategori</option>
                    <option value="Hibah Pondok Pesantren & Rumah Ibadah">Hibah Pondok Pesantren & Rumah Ibadah</option>
                    <option value="Hibah Tahfidzul Quran Hafidz/Hafidzah">Hibah Tahfidzul Qur'an Hafidz/Hafidzah</option>
                    <option value="Bantuan Dana Guru Ngaji, Marbot & Imam Masjid">Bantuan Dana Guru Ngaji, Marbot & Imam Masjid</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Upload Arsip</label>
                <input type="file" class="form-control" name="file">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>