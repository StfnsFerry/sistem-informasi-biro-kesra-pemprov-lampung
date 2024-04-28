<?= $this->extend('layouts/dashboard-tahfidzul-quran/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen Tahfidzul Qur'an</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 mb-4">
                            <div class="card border-left shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text text-uppercase mb-1">
                                                Status Pendaftaran
                                            </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Unggah Dokumen sebelum melakukan pendaftaran</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Silahkan isi Nomor SK Pembentukan terlebih dahulu!</div>  
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>  
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Isi Biodata sebelum melakukan pendaftaran</div>   
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Lengkapi Biodata dan Dokumen sebelum melakukan pendaftaran!</div>  
                                        </div>
                                        <div class="col-auto">
                                                    <button type="button" class="btn btn-success">
                                                        Berhasil Mendaftar
                                                    </button>
                                                        <a href="/tahfidzul-quran/dokumen" class="btn btn-danger">Unggah Dokumen</a>
                                                        <a href="/tahfidzul-quran/dokumen" class="btn btn-danger">Unggah NPHD</a>
                                                        <a href="/tahfidzul-quran/dokumen" class="btn btn-danger">Unggah LPJ</a>
                                                        <a href="/tahfidzul-quran/biodata" class="btn btn-danger">Lengkapi No SK</a>
                                                        <a href="/tahfidzul-quran/biodata" class="btn btn-danger">Lengkapi Biodata</a>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#daftarModal">
                                                        Daftar Hibah
                                                    </button>
                                                <a href="/tahfidzul-quran/biodata" class="btn btn-danger">Lengkapi Biodata</a>   
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
                                        <form action="<?=base_url('tahfidzul-quran/dokumen/lpj')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="">
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
                                                    </div>
                                                </div>          
                                            </div> 
                                        <form action="<?=base_url('tahfidzul-quran/dokumen/nphd')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="">
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
                                                    </div>
                                                </div>          
                                            </div>  
                                        <form action="<?=base_url('tahfidzul-quran/dokumen/simpan')?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_biodata" value="">
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
                                                    </div>
                                                </div>          
                                            </div>
                                        </form> 
                                            <div class="card-body">
                                                    <form action="<?=base_url('tahfidzul-quran/dokumen/simpan')?>" method="POST" enctype="multipart/form-data"> 
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="id_biodata" value="">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah File (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
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
                                                    <form action="<?=base_url('tahfidzul-quran/dokumen/nphd')?>" method="POST" enctype="multipart/form-data"> 
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="id_biodata" value="">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah NPHD (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
                                                    <form action="<?=base_url('tahfidzul-quran/dokumen/lpj')?>" method="POST" enctype="multipart/form-data"> 
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="id_biodata" value="">
                                                        <div class="mb-3">
                                                            <label for="dokumen" class="form-label">Unggah LPJ (PDF)</label>
                                                            <input type="file" class="form-control" name="dokumen" accept=".pdf" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary shadow-sm">Tambah Dokumen</button>
                                                    </form>
                                            </div>   
                                        <div class="card-body">
                                            <h6 class= "font-weight-bold text-dark">Lengkapi Biodata terlebih dahulu sebelum mengunggah dokumen!</h6>
                                            <a href="/tahfidzul-quran/biodata" class="btn btn-primary">Lengkapi Disini</a>
                                        </div>
                            </div>           
                        </div>
                                      
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            