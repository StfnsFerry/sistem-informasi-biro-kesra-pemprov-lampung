<?= $this->extend('layouts/dashboard-rumah-ibadah/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Status Pendaftaran Rumah Ibadah dan Pondok Pesantren</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 mb-4">
                            <?php if($biodata != NULL) : $status =  'success'; else: $status = 'danger'; endif;?>
                            <div class="card border-left-<?=$status?> shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-<?=$status?> text-uppercase mb-1">
                                                Status Pendaftaran
                                            </div>
                                            <?php if($biodata != NULL) : ?>
                                                <?php if($biodata[0]['dokumen_persyaratan'] == NULL): ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Unggah Dokumen sebelum melakukan pendaftaran</div>
                                                <?php elseif($biodata[0]['jenis_bangunan'] == 'Pondok Pesantren' && $biodata[0]['no_sk_pembentukan'] == '') : ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Silahkan isi Nomor SK Pembentukan terlebih dahulu!</div>  
                                                <?php elseif($biodata[0]['status_pendaftaran'] != NULL) : ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $biodata[0]['status_pendaftaran']?></div>  
                                                <?php elseif($biodata[0]['nama_ketua'] == NULL): ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Isi Biodata sebelum melakukan pendaftaran</div>   
                                                <?php endif;?>                   
                                            <?php else: ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Lengkapi Biodata dan Dokumen sebelum melakukan pendaftaran!</div>  
                                            <?php endif;?>      
                                        </div>
                                        <div class="col-auto">
                                            <?php if($biodata != NULL) : ?>
                                                <?php if($biodata[0]['status_pendaftaran'] != 'Belum Mendaftar') : ?>
                                                    <button type="button" class="btn btn-success">
                                                        Berhasil Mendaftar
                                                    </button>
                                                    <?php elseif($biodata[0]['dokumen_persyaratan'] == NULL): ?>
                                                        <a href="/rumah-ibadah/dokumen" class="btn btn-danger">Unggah Dokumen</a>
                                                    <?php elseif($biodata[0]['jenis_bangunan'] == 'Pondok Pesantren' && $biodata[0]['no_sk_pembentukan'] == NULL): ?>
                                                        <a href="/rumah-ibadah/biodata" class="btn btn-danger">Lengkapi No SK</a>
                                                    <?php elseif($biodata[0]['nama_ketua'] == NULL): ?>
                                                        <a href="/rumah-ibadah/biodata" class="btn btn-danger">Lengkapi Biodata</a>
                                                    <?php else: ?>             
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#daftarModal">
                                                        Daftar Hibah
                                                    </button>
                                                    <?php endif;?>
                                            <?php else: ?>    
                                                <a href="/rumah-ibadah/biodata" class="btn btn-danger">Lengkapi Biodata</a>   
                                            <?php endif;?>      
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


            