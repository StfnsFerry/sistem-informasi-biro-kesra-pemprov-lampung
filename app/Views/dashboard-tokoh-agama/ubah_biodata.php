<?= $this->extend('layouts/dashboard-tokoh-agama/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Biodata Tokoh Agama</h1>
                    </div>

                    <form action="<?= base_url('/tokoh-agama/biodata/simpan')?>" method="POST" enctype="multipart/form-data">
                         <?= csrf_field() ?>
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
                                            <input type="text" class="form-control <?php if (session('errors.nama_lengkap')) : ?>is-invalid<?php endif ?>" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" id="nama" value="<?=$biodata[0]['nama_lengkap']?>" required>
                                            <div class="invalid-feedback">
                                                Tolong isi kolom ini
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="tempat_lahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" id="tempat_lahir" value="<?=$biodata[0]['tempat_lahir']?>" required>
                                                </div>
                                                <div class="col-4">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?=$biodata[0]['tanggal_lahir']?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                                                <?php if($biodata[0]['jenis_kelamin'] == "Laki-Laki") : ?>                        
                                                    <option selected value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                <?php elseif($biodata[0]['jenis_kelamin'] == "Perempuan") : ?>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option selected value="Perempuan">Perempuan</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaan" class="form-label">Pekerjaan<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda" name="pekerjaan" id="pekerjaan" value="<?=$biodata[0]['pekerjaan']?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="jumlah_murid" class="form-label">Jumlah Murid<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Jumlah Murid" name="jumlah_murid" id="jumlah_murid" value="<?=$biodata[0]['jumlah_murid']?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">No. Telepon/Hp<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon/Hp Anda" name="telepon" id="telepon" value="<?=$biodata[0]['telepon']?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" required><?=$biodata[0]['alamat']?></textarea>        
                                        </div>
                                    </div>
                                </div>   
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Foto Pribadi</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="foto_tokoh" class="form-label">Upload Pas Foto</label>
                                            <input type="file" class="form-control" name="foto" id="foto_tokoh">
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
                                            <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening" name="nomor_rekening" id="nomor_rekening" value="<?=$biodata[0]['nomor_rekening']?>" required>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="nama_rekening" class="form-label">Nama Pemilik Rekening<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Rekening" name="nama_pemilik_rekening" id="nama_rekening" value="<?=$biodata[0]['nama_pemilik_rekening']?>" required>
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
                                            <select name="profesi" id="profesi" class="form-select" required>
                                                <option selected value="<?=$biodata[0]['profesi']?>"><?=$biodata[0]['profesi']?></option>
                                                <option value="Guru Ngaji">Guru Ngaji</option>
                                                <option value="Imam Masjid">Imam Masjid</option>
                                                <option value="Marbot">Marbot</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_tugas" class="form-label">Nama Tempat Tugas<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Tempat Tugas" name="nama_tempat_bertugas" id="tempat_tugas" value="<?=$biodata[0]['nama_tempat_bertugas']?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="telepon_tempat" class="form-label">No. Telepon/Hp Tempat Tugas<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon/Hp Tempat Tugas" name="telepon_tempat_bertugas" id="telepon_tempat" value="<?=$biodata[0]['telepon_tempat_bertugas']?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat_tempat" class="form-label">Alamat Tempat Bertugas<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="alamat_tempat_bertugas" id="alamat_tempat" cols="30" rows="5" required><?=$biodata[0]['alamat_tempat_bertugas']?></textarea>        
                                        </div> 

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="provinsi" class="form-label">Provinsi<span class="text-danger">*</span></label>
                                                    <select name="provinsi" id="provinsi" class="form-select" required>
                                                        <option selected value="<?=$biodata[0]['id_provinsi']?>"><?=$biodata[0]['provinsi']?></option>       
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="kota" class="form-label">Kabupaten/Kota<span class="text-danger">*</span></label>
                                                    <select name="kabupaten_kota" id="kota" class="form-select" required>
                                                        <option selected value="<?=$biodata[0]['id_kabupaten_kota']?>"><?=$biodata[0]['kabupaten_kota']?></option>      
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="kecamatan" class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                                    <select name="kecamatan" id="kecamatan" class="form-select" required>
                                                        <option selected value="<?=$biodata[0]['id_kecamatan']?>"><?=$biodata[0]['kecamatan']?></option>     
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="kelurahan" class="form-label">Desa/Pekon/Kelurahan<span class="text-danger">*</span></label>
                                                    <select name="kelurahan" id="kelurahan" class="form-select" required>
                                                        <option selected value="<?=$biodata[0]['id_kelurahan']?>"><?=$biodata[0]['kelurahan']?></option>      
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                                                                                                                                                                      
                                    </div>
                                </div>  
                                <div class="card-body d-flex justify-content-end"> 
                                    <input type="hidden" name="id_user" value="<?= user()->id;?>">                                                       
                                    <button type="submit" class="btn btn-primary shadow-sm">Simpan Data</button>  
                                </div>
                            </div>               
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->
                
                

            <script>
                
                var provinsi = <?=$biodata[0]['id_provinsi']?>;

                fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then(response => response.json())
                .then(regencies => {
                    var data = regencies;
                    var tampung = '<option selected value="<?=$biodata[0]['id_kabupaten_kota']?>"><?=$biodata[0]['kabupaten_kota']?></option>';
                    data.forEach(element => {                        
                        tampung += `<option data-dist="${element.id}" value="${element.id}">${element.name}</option>`;              
                    });
                    document.getElementById('kota').innerHTML = tampung;
                });
                
                const selectKota = document.getElementById('kota');
                selectKota.addEventListener('change', (e) =>{                
                    var kota = e.target.options[e.target.selectedIndex].dataset.dist;

                    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                    .then(response => response.json())
                    .then(districts => {
                        var data = districts;
                        var tampung = '<option selected disabled">Pilih Kecamatan</option>';
                        data.forEach(element => {                        
                            tampung += `<option data-vill="${element.id}" value="${element.id}">${element.name}</option>`;              
                        });
                        document.getElementById('kecamatan').innerHTML = tampung;
                    });
                });
                        
                const selectKecamatan = document.getElementById('kecamatan');
                selectKecamatan.addEventListener('change', (e) =>{
                    var kecamatan = e.target.options[e.target.selectedIndex].dataset.vill;

                    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                    .then(response => response.json())
                    .then(villages => {
                        var data = villages;
                        var tampung = '<option selected disabled">Pilih Desa/Pekon/Kelurahan</option>';
                        data.forEach(element => {                        
                            tampung += `<option data-vill="${element.id}" value="${element.id}">${element.name}</option>`;              
                        });
                        document.getElementById('kelurahan').innerHTML = tampung;
                    });
                });    
               
            </script>

            </div>
            <!-- End of Main Content -->
<?= $this->endSection() ?>


            