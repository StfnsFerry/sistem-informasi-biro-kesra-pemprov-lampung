<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Hibah</h1>
    </div>
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">List Pendaftar</h6>
                        <button class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#tambahAkun">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Pendaftar</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($pendaftar as $list) : ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$list['email']?></td>
                                        <td><?=$list['username']?></td>
                                        <td><?=$list['fullname']?></td>
                                        <td>                                                  
                                            <button class="btn btn-info btn-icon-split" data-bs-toggle="modal" data-bs-target="#editAkun<?=$list['id']?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Ubah</span>
                                            </button>

                                            <button class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusAkun<?=$list['id']?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
                                            </button>
                                        </td>
                                    </tr>  
                                        <!-- Modal Edit Akun-->
                                        <div class="modal fade" id="editAkun<?=$list['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun Pendaftar</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="user" action="/admin/sub-admin/update" method="post">
                                                            <?= csrf_field() ?>

                                                            <div class="form-group row">
                                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                                                                        placeholder="Username" value="<?=$list['username']?>">
                                                                    <div class="invalid-feedback">
                                                                            <?= session('errors.username') ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email"
                                                                    placeholder="Email Address"value="<?=$list['email']?>">
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.email') ?>
                                                                    </div>
                                                            </div>

                                                            <input type="hidden" name="id" value="<?=$list['id']?>">

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="fullname"
                                                                    placeholder="Nama Lengkap"value="<?=$list['fullname']?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                Simpan Perubahan
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus Akun-->
                                        <div class="modal fade" id="hapusAkun<?=$list['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Akun Pendaftar</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hapus akun bersifat <b>PERMANEN</b>.<br>Apakah anda yakin ingin menghapus akun ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="<?= base_url('/admin/sub-admin/delete/' . $list['id'])?>"  class="btn btn-primary">Hapus</a>
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
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun Pendaftar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="user" action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                        placeholder="Username">
                    <div class="invalid-feedback">
                            <?= session('errors.username') ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email"
                    placeholder="Email Address" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
            </div>

            <div class="form-group">
                <select class="form-select form-control-user" name="program" required>
                    <option disabled selected value="">Pilih Program</option>
                    <option value="1">Hibah Pondok Pesantren & Rumah Ibadah</option>
                    <option value="2">Hibah Tahfidzul Qur'an Hafidz/Hafidzah</option>
                    <option value="3">Bantuan Dana Guru Ngaji, Marbot & Imam Masjid</option>
                </select>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                        name="password" placeholder="Password" autocomplete="off">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>    
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                    name="pass_confirm" placeholder="Repeat Password" autocomplete="off">
                    <div class="invalid-feedback">
                        <?= session('errors.pass_confirm') ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Tambah Data
            </button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>