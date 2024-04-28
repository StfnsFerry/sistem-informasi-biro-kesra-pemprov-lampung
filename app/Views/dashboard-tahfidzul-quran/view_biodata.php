<?= $this->extend('layouts/dashboard-tahfidzul-quran/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Biodata Tahfidzul Qur'an</h1>
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
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Ketua</h6>
                                </div>
                                <div class="card-body"> 
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">NIK Ketua<span class="text-danger">*</span></label>
                                            <h6 class="font-weight-bold text-dark"></h6>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">NPWP<span class="text-danger">*</span></label>
                                            <h6 class="font-weight-bold text-dark"></h6>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                            <h6 class="font-weight-bold text-dark"></h6>
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                            </div>
                                            <div class="col-6">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">No. Telepon/Hp<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                             
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
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>  
                                    <div class="mb-3">
                                        <label for="nama_rekening" class="form-label">Nama Pemilik Rekening<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>                                                             
                                </div>
                            </div>  

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Bangunan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="profesi" class="form-label">Jenis Bangunan<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>
                                    
                                        <div class="mb-3">
                                            <label for="tempat_tugas" class="form-label">No. SK Pembentukan<span class="text-danger">*</span></label>
                                                <h6 class="font-weight-bold text-dark"></h6>
                                            
                                                <h6 class="font-weight-bold text-dark">-</h6>
                                            
                                        </div>
                                        
                                       

                                        <div class="mb-3">
                                            <label for="tempat_tugas" class="form-label">Nama Bangunan<span class="text-danger">*</span></label>
                                            
                                                <h6 class="font-weight-bold text-dark"></h6>
                                            
                                                <h6 class="font-weight-bold text-dark">-</h6>
                                            
                                        </div>

                                    <div class="mb-3">
                                        <label for="telepon_tempat" class="form-label">No. Telepon/Hp Bangunan<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat_tempat" class="form-label">Alamat Bangunan<span class="text-danger">*</span></label>
                                        
                                            <h6 class="font-weight-bold text-dark"></h6>
                                        
                                            <h6 class="font-weight-bold text-dark">-</h6>
                                          
                                    </div> 

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="provinsi" class="form-label">Provinsi<span class="text-danger">*</span></label>
                                                
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                
                                            </div>
                                            <div class="col-6">
                                                <label for="kota" class="form-label">Kabupaten/Kota<span class="text-danger">*</span></label>
                                                
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="kecamatan" class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                                
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                
                                            </div>
                                            <div class="col-6">
                                                <label for="kelurahan" class="form-label">Desa/Pekon/Kelurahan<span class="text-danger">*</span></label>
                                                
                                                    <h6 class="font-weight-bold text-dark"></h6>
                                                
                                                    <h6 class="font-weight-bold text-dark">-</h6>
                                                
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


            