<?= $this->extend('layouts/dashboard-tokoh-agama/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Biodata Tokoh Agama</h1>
                        <?php if($biodata != NULL) : 
                                if($biodata[0]['status_pendaftaran'] != 'Belum Mendaftar') :                            
                        ?>
                            
                            <?php else: ?>
                            <a href="/tokoh-agama/ubah-biodata" class="btn btn-primary shadow-sm">Ubah Data</a>  
                            <?php endif?>                 
                        <?php else : ?>
                            <a href="/tokoh-agama/tambah-biodata" class="btn btn-primary shadow-sm">Tambah Data</a>  
                        <?php endif;?> 
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
                                </div>
                                <div class="card-body"> 
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['nama_lengkap']?>                          
                                        </h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['tempat_lahir']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
                                            </div>
                                            <div class="col-4">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['tanggal_lahir']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['jenis_kelamin']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan" class="form-label">Pekerjaan<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['pekerjaan']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="jumlah_murid" class="form-label">Jumlah Murid<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['jumlah_murid']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">No. Telepon/Hp<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['telepon']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['alamat']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>     
                                    </div>
                                </div>
                            </div>   
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Foto Pribadi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="foto_tokoh" class="form-label">Pas Foto<span class="text-danger">*</span></label> <br>
                                        <?php if($biodata != NULL) : ?>
                                            <figure class="figure">
                                                <img src="<?=base_url($biodata[0]['foto'])?>" class="figure-img img-fluid rounded w-50" alt="...">
                                            </figure>               
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rekening Bank</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Bank</label>
                                        <h6 class="font-weight-bold text-dark">BANK LAMPUNG</h6>
                                    </div>                                                                             
                                    <div class="mb-3">
                                        <label for="nomor_rekening" class="form-label">Nomor Rekening<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['nomor_rekening']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>  
                                    <div class="mb-3">
                                        <label for="nama_rekening" class="form-label">Nama Pemilik Rekening<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['nama_pemilik_rekening']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>                                                             
                                </div>
                            </div>  

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Tempat Bertugas</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="profesi" class="form-label">Profesi<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['profesi']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat_tugas" class="form-label">Nama Tempat Tugas<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['nama_tempat_bertugas']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="telepon_tempat" class="form-label">No. Telepon/Hp Tempat Tugas<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['telepon_tempat_bertugas']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat_tempat" class="form-label">Alamat Tempat Bertugas<span class="text-danger">*</span></label>
                                        <?php if($biodata != NULL) : ?>
                                            <h6 class="font-weight-bold text-dark"><?= $biodata[0]['alamat_tempat_bertugas']?></h6>
                                        <?php else : ?>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        <?php endif;?>  
                                    </div> 

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="provinsi" class="form-label">Provinsi<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['provinsi']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
                                            </div>
                                            <div class="col-6">
                                                <label for="kota" class="form-label">Kabupaten/Kota<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['kabupaten_kota']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="kecamatan" class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['kecamatan']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
                                            </div>
                                            <div class="col-6">
                                                <label for="kelurahan" class="form-label">Desa/Pekon/Kelurahan<span class="text-danger">*</span></label>
                                                <?php if($biodata != NULL) : ?>
                                                    <h6 class="font-weight-bold text-dark"><?= $biodata[0]['kelurahan']?></h6>
                                                <?php else : ?>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                <?php endif;?>
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


            