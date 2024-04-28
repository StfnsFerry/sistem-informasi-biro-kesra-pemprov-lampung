<?= $this->extend('layouts/dashboard-tahfidzul-quran/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Status Pendaftaran Tahfidzul Qur'an</h1>
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
                            <div class="col-lg-12 mb-4">
                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">File Dokumen</h6>
                                    </div>
                                        
                                    <div class="card-body"> 
                                        <div class="mb-3">
                                            <label for="dokumen" class="form-label">Preview Nota Dinas: </label>
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


            