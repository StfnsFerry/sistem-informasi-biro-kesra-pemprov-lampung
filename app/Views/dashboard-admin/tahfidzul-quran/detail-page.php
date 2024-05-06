<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pendaftar Hibah Hafidz dan Hafidzah</h1>
        
    </div>
    
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
                    
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Ketua</h6>
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
                                <td>Kategori</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"><?= $biodata['kategori_juz']?></h6></td>
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

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">File Dokumen</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Preview Dokumen Persyaratan: </label>
                    </div>
                    <embed src="<?= base_url($biodata['dokumen_persyaratan'])?>" width="100%" height="500" type="application/pdf">
                </div>
            </div>

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Verifikasi</h6>
                </div>       
                <div class="card-body">
                    <ul class="list-group">
                    <?php foreach ($verifikasi as $data): ?>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1" <?=$data['ktp']== 'Ada' ? 'checked disabled' : '' ?>>
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Foto copy KTP</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1" <?=$data['surat_rekomendasi']== 'Ada' ? 'checked disabled' : '' ?>>
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Surat Rekomendasi dari Pemda Kabupaten/Kota</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1" <?=$data['surat_bantuan']== 'Ada' ? 'checked disabled' : '' ?>>
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Surat belum pernah mendapatkan bantuan dari Pemprov Lampung</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1" <?=$data['fc_rekening']== 'Ada' ? 'checked disabled' : '' ?>>
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">No. Rek Bank Lampung atas nama yang bersangkutan</label>                            
                        </li>
                    </ul>
                    
                    <div class="mb-3 mt-3">
                        <h6>Keterangan Verifikasi : <span class="font-weight-bold text-dark"><?= $data['keterangan']?></span></h6> 
                        <h6>Tanggal Verifikasi : <span class="font-weight-bold text-dark"><?= $data['updated_at']?></span></h6> 
                        <h6>Pemeriksa : <span class="font-weight-bold text-dark"><?= $data['username']?></span></h6> 
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
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

            <div class="card-body d-flex justify-content-end">
                <?php if($biodata['status_pendaftaran'] == 'Sudah Diverifikasi'):?> 
                <button type="button" class="btn btn-success shadow-sm me-2" data-bs-toggle="modal" data-bs-target="#diterimaModal">Terima</button>
                <button type="button" class="btn btn-danger shadow-sm" data-bs-toggle="modal" data-bs-target="#ditolakModal">Tolak</button>
                <?php endif;?>
            </div>
                    
        </div>
    </div>     
</div>

<!-- Modal Diterima-->
<div class="modal fade" id="diterimaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Jumlah Rekomendasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('admin/tahfidzul-quran/terima-pendaftaran')?>" method="POST">
                <?php 
                    $kategori = 'NULL';
                    $jumlah_rekomendasi = 0;
                    if($biodata['kategori_juz']  == '5 Juz'): 
                        $kategori = '5 Juz';
                        $jumlah_rekomendasi = 1000000;
                    elseif($biodata['kategori_juz']  == '10 Juz'): 
                        $kategori = '10 Juz';
                        $jumlah_rekomendasi = 1500000;
                    elseif($biodata['kategori_juz']  == '20 Juz'): 
                        $kategori = '20 Juz';
                        $jumlah_rekomendasi = 2000000;
                    elseif($biodata['kategori_juz']  == '30 Juz'): 
                        $kategori = '30 Juz';
                        $jumlah_rekomendasi = 3000000;
                    endif;    
                ?>
                    <div class="mb-3">  
                        <label class="form-label">Pendaftar Kategori <strong><?=$kategori?></strong> akan mendapatkan Jumlah Rekomendasi sebesar <strong>Rp <?= number_format($jumlah_rekomendasi,0,',','.');?></strong></label>
                        <input type="hidden" name="jumlah_rekomendasi" value="<?=$jumlah_rekomendasi?>">
                    </div>
                  
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_biodata" value="<?=$biodata['id']?>">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Ditolak-->
<div class="modal fade" id="ditolakModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tolak Pendaftar Hibah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">Data pendaftar akan dihapus jika Anda menolak berkas ini, apakah Anda yakin?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>