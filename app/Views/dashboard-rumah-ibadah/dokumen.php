<?= $this->extend('layouts/dashboard-rumah-ibadah/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Rumah Ibadah dan Pondok Pesantren</h1>
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
                                                <?php if($biodata[0]['status_pendaftaran'] != 'Belum Mendaftar' && $biodata[0]['dokumen_nphd'] == NULL && $biodata[0]['dokumen_lpj'] != NULL ) : ?>
                                                    <button type="button" class="btn btn-success">
                                                        Berhasil Mendaftar
                                                    </button>
                                                    <?php elseif($biodata[0]['dokumen_lpj'] != NULL && $biodata[0]['status_pendaftaran'] != 'Belum Mendaftar'): ?>
                                                        
                                                    <?php elseif($biodata[0]['dokumen_persyaratan'] == NULL): ?>
                                                        <a href="/rumah-ibadah/dokumen" class="btn btn-danger">Unggah Dokumen</a>
                                                    <?php elseif($biodata[0]['dokumen_nphd'] == NULL && $biodata[0]['status_pendaftaran'] != 'Belum Mendaftar'): ?>
                                                        <a href="/rumah-ibadah/dokumen" class="btn btn-danger">Unggah NPHD</a>
                                                    <?php elseif($biodata[0]['dokumen_nphd'] != NULL && $biodata[0]['dokumen_lpj'] == NULL && $biodata[0]['status_pendaftaran'] != 'Belum Mendaftar'): ?>
                                                        <a href="/rumah-ibadah/dokumen" class="btn btn-danger">Unggah LPJ</a>
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

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-3">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dokumen Persyaratan</h6>
                                </div>
                                <div class="card-body"> 
                                    <ol class="list-group list-group-numbered list-group-flush mb-3">
                                        <li class="list-group-item">Permohonan diketahui Minimal Pamong/Kepala Desa setempat</li>
                                        <li class="list-group-item">Susunan Pengurus/Panitia diketahui KUA/Pamong/Kepala Desa setempat</li>
                                        <li class="list-group-item">Rencana Anggaran Belanja (RAB)</li>
                                        <li class="list-group-item">Foto Bangunan/Foto Kegiatan</li>
                                        <li class="list-group-item">Akte Notaris, Kemenkumham, Izin Operasional</li>
                                        <li class="list-group-item">Foto copy KTP Ketua dan Sekretaris (Masih aktif)</li>
                                        <li class="list-group-item">No. Rek Bank Lampung atas nama PonPes/Lembaga</li>
                                        <li class="list-group-item">No. NPWP atas Nama Ketua/Rumah Ibadah/Pengurus</li>
                                        <li class="list-group-item">Stempel Asli dan Basah</li>
                                        <li class="list-group-item">Surat Keterangan Domisili</li>
                                        <li class="list-group-item">Lain-lain</li>
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
                                <?php if($biodata != NULL) : ?>
                                    <?php if($biodata[0]['dokumen_lpj'] != NULL && $biodata[0]['status_pendaftaran'] == 'Dana Berhasil Ditransfer' ) : ?>
                                        <form action="<?=base_url('rumah-ibadah/dokumen/lpj')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                            <div class="row"> 
                                                <div class="col-lg-6">
                                                    <div class="card-body"> 
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Ubah LPJ (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>                   
                                                        <button class="btn btn-primary shadow-sm">Simpan Dokumen</button>                          
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body"> 
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Preview LPJ: </label>
                                                        </div>
                                                        <embed src="<?=base_url($biodata[0]['dokumen_lpj'])?>" width="100%" height="600" type="application/pdf">
                                                    </div>
                                                </div>          
                                            </div> 
                                    <?php elseif($biodata[0]['dokumen_nphd'] != NULL && $biodata[0]['status_pendaftaran'] == "Pendaftaran Diterima") : ?>
                                        <form action="<?=base_url('rumah-ibadah/dokumen/nphd')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                            <div class="row"> 
                                                <div class="col-lg-6">
                                                    <div class="card-body"> 
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Ubah NPHD (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>                   
                                                        <button class="btn btn-primary shadow-sm">Simpan Dokumen</button>                          
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body"> 
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Preview NPHD: </label>
                                                        </div>
                                                        <embed src="<?=base_url($biodata[0]['dokumen_nphd'])?>" width="100%" height="600" type="application/pdf">
                                                    </div>
                                                </div>          
                                            </div>  
                                    <?php elseif($biodata[0]['dokumen_persyaratan'] != NULL && $biodata[0]['status_pendaftaran'] == 'Belum Mendaftar' || $biodata[0]['status_pendaftaran'] == 'Belum Diverifikasi' || $biodata[0]['status_pendaftaran'] == 'Sedang Diverifikasi' || $biodata[0]['status_pendaftaran'] == 'Sudah Diverifikasi'): ?>
                                        <form action="<?=base_url('rumah-ibadah/dokumen/simpan')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
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
                                        </form> 
                                    <?php else : ?>      
                                            <div class="card-body">
                                                <?php if($biodata[0]['dokumen_persyaratan'] == NULL) : ?>
                                                    <form action="<?=base_url('rumah-ibadah/dokumen/simpan')?>" method="POST" enctype="multipart/form-data"> 
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah File (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
                                                <?php elseif($biodata[0]['dokumen_nphd'] == NULL && $biodata[0]['status_pendaftaran'] != 'Belum Mendaftar'): ?> 
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Template NPHD :</label> <br>
                                                        <a class="btn btn-success btn-icon-split" href="<?= base_url('assets/file/Template NPHD.docx')?>" download>
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-download"></i>
                                                            </span>
                                                            <span class="text">Unduh NPHD</span>
                                                        </a>

                                                        <a class="btn btn-primary btn-icon-split" href="<?= base_url('assets/file/SURAT PERMOHONAN.docx')?>" download>
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-download"></i>
                                                            </span>
                                                            <span class="text">Unduh Surat Permohonan</span>
                                                        </a>
                                                    </div>
                                                    <form action="<?=base_url('rumah-ibadah/dokumen/nphd')?>" method="POST" enctype="multipart/form-data"> 
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah NPHD (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
                                                <?php elseif($biodata[0]['dokumen_nphd'] != NULL && $biodata[0]['dokumen_lpj'] == NULL): ?> 
                                                    <form action="<?=base_url('rumah-ibadah/dokumen/lpj')?>" method="POST" enctype="multipart/form-data"> 
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="id_biodata" value="<?=$biodata[0]['id']?>">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah LPJ (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
                                                <?php endif; ?>    
                                            </div>   
                                    <?php endif;?>                 
                                <?php else: ?>
                                        <div class="card-body">
                                            <h6 class= "font-weight-bold text-dark">Lengkapi Biodata terlebih dahulu sebelum mengunggah dokumen!</h6>
                                            <a href="/rumah-ibadah/biodata" class="btn btn-primary">Lengkapi Disini</a>
                                        </div>
                                <?php endif;?>        
                            </div>           
                        </div>
                                      
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            