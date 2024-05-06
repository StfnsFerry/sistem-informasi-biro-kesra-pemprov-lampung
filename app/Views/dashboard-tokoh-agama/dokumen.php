<?= $this->extend('layouts/dashboard-tokoh-agama/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Tokoh Agama</h1>
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
                                                <?php elseif($biodata[0]['status_pendaftaran'] != NULL) : ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $biodata[0]['status_pendaftaran']?></div>  
                                                <?php elseif($biodata[0]['nama_lengkap'] == NULL): ?>
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
                                                        <a href="/tokoh-agama/dokumen" class="btn btn-danger">Unggah Dokumen</a>
                                                    <?php elseif($biodata[0]['nama_lengkap'] == NULL): ?>
                                                        <a href="/tokoh-agama/biodata" class="btn btn-danger">Lengkapi Biodata</a>
                                                    <?php else: ?>             
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#daftarModal">
                                                        Daftar Hibah
                                                    </button>
                                                    <?php endif;?>
                                            <?php else: ?>    
                                                <a href="/tokoh-agama/biodata" class="btn btn-danger">Lengkapi Biodata</a>   
                                            <?php endif;?>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-3">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dokumen Persyaratan</h6>
                                </div>
                                <div class="card-body"> 
                                    <ol class="list-group list-group-numbered list-group-flush mb-3">
                                        <li class="list-group-item">Warga Negara Indonesia (WNI) dengan melampirkan foto copy KTP 1 lembar.</li>
                                        <li class="list-group-item">Mengisi biodata dan dilampirkan 1 (satu) lembar foto berwarna 3 x 4 cm.</li>
                                        <li class="list-group-item">Melampirkan Surat Rekomendasi dari Pemda Kabupaten/Kota melalui Bagian
                                                                Kesejahteraan Rakyat Kabupaten/Kota yang menerangkan bahwa yang bersangkutan
                                                                adalah benar sebagai Tokoh Agama (Guru Ngaji, Imam Masjid, dan Marbot Masjid), 
                                                                ditujukan kepada Gubernur Lampung Cq. Kepala Biro Kesejahteraan Rakyat Setda Provinsi Lampung.</li>
                                        <li class="list-group-item">Belum pernah mendapat bantuan apapun dari Pemerintah Provinsi Lampung.</li>
                                        <li class="list-group-item">Melampirkan fotocopy Rekening Bank Lampung atas nama yang bersangkutan, masih aktif.</li>
                                    </ol>
                                    <div class="mb-3">
                                        <h6 class= "font-weight-bold text-dark">*Berkas disusun berdasarkan urutan nomor diatas.</h6>
                                    </div>
                                </div>
                            </div>           
                        </div>

                         <!-- Content Column -->
                         <div class="col-lg-12 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">File Dokumen</h6>
                                </div>
                                <form action="<?=base_url('tokoh-agama/dokumen/simpan')?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                 <?php if($biodata != NULL) : ?>
                                    <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                    <?php if($biodata[0]['dokumen_persyaratan'] != NULL) : ?>
                                        <div class="row"> 
                                            <div class="col-lg-6">
                                                <div class="card-body"> 
                                                    <div class="mb-3">
                                                        <label for="dokumen" class="form-label">Ubah File (PDF)</label>
                                                        <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                    </div>                   
                                                    <button class="btn btn-primary shadow-sm">Simpan Dokumen</button>                          
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body"> 
                                                    <div class="mb-3">
                                                        <label for="dokumen" class="form-label">Preview File: </label>
                                                    </div>
                                                    <embed src="<?=base_url($biodata[0]['dokumen_persyaratan'])?>" width="100%" height="600" type="application/pdf">
                                                </div>
                                            </div>          
                                        </div>
                                    <?php else :?>      
                                        <div class="card-body"> 
                                            <div class="mb-3">
                                                <label for="dokumen" class="form-label">Unggah File (PDF)</label>
                                                <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                        </div>       
                                    <?php endif;?>
                                <?php else: ?>
                                    <div class="card-body">
                                        <h6 class= "font-weight-bold text-dark">Lengkapi Biodata terlebih dahulu sebelum mengunggah dokumen!</h6>
                                        <a href="/tokoh-agama/biodata" class="btn btn-primary">Lengkapi Disini</a>
                                    </div>
                                <?php endif?>        
                                </form>
                            </div>           
                        </div>
                                      
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            