<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Pendaftar Program Hibah Guru Ngaji, Imam Masjid, dan Marbot</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">File Dokumen</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Preview File: </label>
                    </div>
                    <embed src="<?= base_url($biodata['dokumen_persyaratan'])?>" width="100%" height="500" type="application/pdf">
                </div>

            </div>
                    
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pribadi</h6>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['nama_lengkap']?></h6></td>
                            </tr>
                            <tr>
                                <td>Tempat/Tanggal Lahir</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['tempat_lahir']?> , <?= $biodata['tanggal_lahir']?></h6></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['jenis_kelamin']?></h6></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['pekerjaan']?></h6></td>
                            </tr>
                            <tr>
                                <td>Jumlah Murid</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['jumlah_murid']?></h6></td>
                            </tr>
                           
                            <tr>
                                <td>No. Telepon/Hp</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['telepon']?></h6></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6><?= $biodata['alamat']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
                    
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Rekening Bank</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">BANK LAMPUNG</h6></td>
                                </tr>
                                <tr>
                                    <td>No. Rekening</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['nomor_rekening']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik Rekening</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['nama_pemilik_rekening']?></h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                        
                </div>

            </div>  
            
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Tempat Bertugas</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Profesi</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['profesi']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Tempat Bertugas</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['nama_tempat_bertugas']?></h6></td>
                                </tr>
                                <tr>
                                    <td>No. Telepon/HP Tempat Bertugas</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['telepon_tempat_bertugas']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Alamat Bangunan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['alamat_tempat_bertugas']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['provinsi']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['kabupaten_kota']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['kecamatan']?></h6></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"><?= $biodata['kelurahan']?></h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            
        </div>
        
        <div class="col-lg-6 mb-4">
            <form action="<?= base_url('/admin/tokoh-agama/updateVerifikasi')?>" method="POST">

                <div class="card shadow mb-4">
                    
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List Verifikasi</h6>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                                <?php foreach ($verifikasi as $data): ?>
                                
                            <li class="list-group-item">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Ada" name="ktp" id="inlineRadio1" <?=$data['ktp']== 'Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Ada</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Tidak Ada" name="ktp" id="inlineRadio1" <?=$data['ktp']== 'Tidak Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Tidak Ada</label>
                                </div>
                                <label class="form-check-label ml-3" for="thirdCheckbox">Foto copy KTP</label>                            
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Ada" name="surat_rekomendasi" id="inlineRadio1" <?=$data['surat_rekomendasi']== 'Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Ada</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Tidak Ada" name="surat_rekomendasi" id="inlineRadio1" <?=$data['surat_rekomendasi']== 'Tidak Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Tidak Ada</label>
                                </div>
                                <label class="form-check-label ml-3" for="thirdCheckbox">Surat Rekomendasi dari Pemda Kabupaten/Kota</label>                            
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Ada" name="surat_bantuan" id="inlineRadio1" <?=$data['surat_bantuan']== 'Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Ada</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Tidak Ada" name="surat_bantuan" id="inlineRadio1" <?=$data['surat_bantuan']== 'Tidak Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Tidak Ada</label>
                                </div>
                                <label class="form-check-label ml-3" for="thirdCheckbox">Surat belum pernah mendapatkan bantuan dari Pemprov Lampung</label>                            
                            </li>

                            <li class="list-group-item">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Ada" name="fc_rekening" id="inlineRadio1" <?=$data['fc_rekening']== 'Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Ada</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="Tidak Ada" name="fc_rekening" id="inlineRadio1" <?=$data['fc_rekening']== 'Tidak Ada' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Tidak Ada</label>
                                </div>
                                <label class="form-check-label ml-3" for="thirdCheckbox">No. Rek Bank Lampung atas nama yang bersangkutan</label>                            
                            </li>
                            

                        </ul>
                        
                        <div class="mb-3 mt-3">
                            <select name="keterangan" class="form-select" required>
                                <option value="Data Tidak Lengkap">Pilih Keterangan</option>
                                <option value="Data Lengkap" <?=$data['keterangan']== 'Data Lengkap' ? 'selected' : '' ?>>Data Lengkap</option>
                                <option value="Data Tidak Lengkap" <?=$data['keterangan']== 'Data Tidak Lengkap' ? 'selected' : '' ?>>Data Tidak Lengkap</option>
                            </select>
                        </div>

                        <?php endforeach; ?>

                    </div>

                </div>

                <div class="card-body d-flex justify-content-end">
                    <input type="hidden" name="id_biodata" value="<?= $biodata['id']?>">
                    <input type="hidden" name="id_pemeriksa" value="<?= user()->id?>">
                    <input type="hidden" name="id_verifikasi" value="<?= $verifikasi[0]['id']?>">
                    <button type="submit" class="btn btn-primary shadow-sm">Verifikasi Data</button>
                </div>

            </form>         
        </div>
    </div> 
        
</div>

<?= $this->endSection() ?>