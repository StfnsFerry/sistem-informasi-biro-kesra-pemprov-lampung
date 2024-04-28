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
                                <td>NIK Ketua</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                            <tr>
                                <td>NPWP Ketua</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                            <tr>
                                <td>Tempat/Tanggal Lahir</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                           
                            <tr>
                                <td>No. Telepon/Hp</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark"></h6></td>
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
                        <label for="dokumen" class="form-label">Preview NPHD: </label>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Preview Dokumen Persyaratan: </label>
                    </div>
                </div>
            </div>

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Verifikasi</h6>
                </div>       
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="firstCheckbox">Permohonan diketahui Minimal Pamong/Kepala Desa setempat</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="secondCheckbox">Susunan Pengurus/Panitia diketahui KUA/Pamong/Kepala Desa setempat</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Rencana Anggaran Belanja (RAB)</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Foto Bangunan/Foto Kegiatan</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1"> 
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Akte Notaris, Kemenkumham, Izin Operasional</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Foto copy KTP Ketua dan Sekretaris (Masih aktif)</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">No. Rek Bank Lampung atas nama PonPes/Lembaga</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">No. NPWP atas Nama Ketua/Rumah Ibadah/Pengurus</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Stempel Asli dan Basah</label>                            
                        </li>
                        <li class="list-group-item">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlinecheckbox1">
                            </div>
                            <label class="form-check-label ml-3" for="thirdCheckbox">Surat Keterangan Domisili</label>                            
                        </li>
                    </ul>
                    
                    <div class="mb-3 mt-3">
                        <h6>Keterangan Verifikasi : <span class="font-weight-bold text-dark"></span></h6> 
                        <h6>Tanggal Verifikasi : <span class="font-weight-bold text-dark"></span></h6> 
                        <h6>Pemeriksa : <span class="font-weight-bold text-dark"></span></h6> 
                    </div>
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
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik Rekening</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
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
                                    <td>Jenis Bangunan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Bangunan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>No. Telepon/HP Bangunan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Alamat Bangunan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark"></h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nota Dinas</h6>
                </div>

                <div class="card-body"> 
                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Preview Nota Dinas: </label>
                    </div>
                </div>
            </div>

            <div class="card-body d-flex justify-content-end">
                <button type="button" class="btn btn-success shadow-sm me-2" data-bs-toggle="modal" data-bs-target="#diterimaModal">Terima</button>
                <button type="button" class="btn btn-danger shadow-sm" data-bs-toggle="modal" data-bs-target="#ditolakModal">Tolak</button>
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
                <label class="form-label">Isi atau Pilih Jumlah Rekomendasi :</label>
                <form action="<?=base_url('admin/tahfidzul-quran/lima-juz/terima-pendaftaran')?>" method="POST">
                    <div class="mb-3">
                        <input type="number" class="form-control" name="jumlah_rekomendasi" placeholder="Isi Jumlah Rekomendasi">
                    </div>  
                    <div class="mb-3">  
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jumlah_rekomendasi" id="inlineRadio1" value="10000000">
                            <label class="form-check-label" for="inlineRadio1">Rp 10.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jumlah_rekomendasi" id="inlineRadio2" value="15000000">
                            <label class="form-check-label" for="inlineRadio2">Rp 15.000.000</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jumlah_rekomendasi" id="inlineRadio3" value="25000000">
                            <label class="form-check-label" for="inlineRadio3">Rp 25.000.000</label>
                        </div>
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