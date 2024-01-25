<?= $this->extend('layouts/dashboard-rumah-ibadah/_header') ?>
<?= $this->section('content') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Biodata Rumah Ibadah</h1>
                    </div>

                    <form  action="<?= base_url('/rumah-ibadah/biodata/simpan')?>" method="POST" enctype="multipart/form-data">
                         <?= csrf_field() ?>
                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Informasi Ketua</h6>
                                    </div>
                                    <div class="card-body"> 
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK Ketua<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan" name="nik_ketua" id="nik" required>      
                                        </div>
                                        <div class="mb-3">
                                            <label for="npwp" class="form-label">NPWP<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Pokok Wajib Pajak" name="npwp" id="npwp" required>      
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap Ketua<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_ketua" id="nama" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="tempat_lahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" id="tempat_lahir" required>
                                                </div>
                                                <div class="col-4">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>                                        
                                                <option selected value="" disabled>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">No. Telepon/Hp<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon/Hp Anda" name="telepon" id="telepon" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" required></textarea>        
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
                                            <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening" name="nomor_rekening" id="nomor_rekening" required>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="nama_rekening" class="form-label">Nama Pemilik Rekening<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Rekening" name="nama_pemilik_rekening" id="nama_rekening" required>
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
                                            <label for="jenis_bangunan" class="form-label">Jenis Bangunan<span class="text-danger">*</span></label>
                                            <select name="jenis_bangunan" id="jenis_bangunan" class="form-select" required>
                                                <option selected value="" disabled>Pilih Sesuai Jenis Bangunan</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Musholla">Musholla</option>
                                                <option value="Gereja">Gereja</option>
                                                <option value="Pura">Pura</option>
                                                <option value="Pondok Pesantren">Pondok Pesantren</option>
                                                <option value="TPA">TPA</option>
                                                <option value="TPQ">TPQ</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="no_sk_pembentukan" class="form-label">No. SK Pembentukan<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Contoh: AHU-00000.00.00" name="no_sk_pembentukan" id="no_sk_pembentukan">
                                            <small class="form-text text-muted">*jika anda memilih Pondok Pesantren</small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama_bangunan" class="form-label">Nama Bangunan<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Bangunan" name="nama_bangunan" id="nama_bangunan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="telepon_bangunan" class="form-label">No. Telepon/Hp Bangunan<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon/Hp Bangunan" name="telepon_bangunan" id="telepon_bangunan" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat_bangunan" class="form-label">Alamat Bangunan<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="alamat_bangunan" id="alamat_bangunan" cols="30" rows="5" required></textarea>        
                                        </div> 

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="provinsi" class="form-label">Provinsi<span class="text-danger">*</span></label>
                                                    <select name="provinsi" id="provinsi" class="form-select" required>
                                                        <option>Pilih Provinsi</option>       
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="kota" class="form-label">Kabupaten/Kota<span class="text-danger">*</span></label>
                                                    <select name="kabupaten_kota" id="kota" class="form-select" required>
                                                        <option>Pilih Kab/Kota</option>       
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="kecamatan" class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                                    <select name="kecamatan" id="kecamatan" class="form-select" required>
                                                        <option>Pilih Kecamatan</option>       
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="kelurahan" class="form-label">Desa/Pekon/Kelurahan<span class="text-danger">*</span></label>
                                                    <select name="kelurahan" id="kelurahan" class="form-select" required>
                                                        <option>Pilih Desa/Pekon/Kelurahan</option>       
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
                fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                    .then(response => response.json())
                    .then(provinces => {
                        var data = provinces;
                        var tampung = '<option selected disabled>Pilih Provinsi</option>';
                        data.forEach(element => {
                            if(element.id == 18){
                                tampung += `<option data-reg="${element.id}" value="${element.id}">${element.name}</option>`; 
                            }
                        });
                        document.getElementById('provinsi').innerHTML = tampung;
                    });
            </script>

            <script>
                const selectProvinsi = document.getElementById('provinsi');
                selectProvinsi.addEventListener('change', (e) =>{
                    var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;

                    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                    .then(response => response.json())
                    .then(regencies => {
                        var data = regencies;
                        var tampung = '<option selected disabled>Pilih Kab/Kota</option>';
                        data.forEach(element => {                        
                            tampung += `<option data-dist="${element.id}" value="${element.id}">${element.name}</option>`;              
                        });
                        document.getElementById('kota').innerHTML = tampung;
                    });
                });

                const selectKota = document.getElementById('kota');
                selectKota.addEventListener('change', (e) =>{
                    var kota = e.target.options[e.target.selectedIndex].dataset.dist;

                    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                    .then(response => response.json())
                    .then(districts => {
                        var data = districts;
                        var tampung = '<option selected disabled>Pilih Kecamatan</option>';
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
                        var tampung = '<option selected disabled>Pilih Desa/Pekon/Kelurahan</option>';
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


            