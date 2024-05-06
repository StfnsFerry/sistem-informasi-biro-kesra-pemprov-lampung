<?= $this->extend('layouts/dashboard-tokoh-agama/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profil Akun</h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah Profil</button>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-3">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Akun</h6>
                                </div>
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                            <div class="mb-3">
                                                <img src="<?= base_url(user()->user_image)?>" class="img-fluid" width="200" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                                    <h6 class="font-weight-bold text-dark"><?= user()->fullname?></h6>
                                                </div>
                                                <div class="mb-3">
                                                    <label fo
                                                    r="nama" class="form-label">Username</label>
                                                    <h6 class="font-weight-bold text-dark"><?= user()->username?></h6>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Email</label>
                                                    <h6 class="font-weight-bold text-dark"><?= user()->email?></h6>
                                                </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>                                    
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Profil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url('/updateProfil')?>"  method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto Profil</label>
                                            <input type="file" class="form-control" name="foto" id="foto">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" value="<?=user()->fullname?>" name="nama_lengkap" id="nama_lengkap">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" value="<?=user()->username?>" name="username" id="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" value="<?=user()->email?>" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            