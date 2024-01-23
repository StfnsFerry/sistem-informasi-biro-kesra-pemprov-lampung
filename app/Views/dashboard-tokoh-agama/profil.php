<?= $this->extend('layouts/dashboard-tokoh-agama/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profil Akun</h1>
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
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <h6 class="font-weight-bold text-dark"><?= user()->fullname?></h6>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Username</label>
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
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            