<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Pendaftar Hibah Rumah Ibadah dan Pondok Pesantren</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">File Dokumen</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="dokumen" class="form-label">Preview File: </label>
                    </div>
                    <embed src="" width="100%" height="500" type="application/pdf">
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
                                <td><h6 class="font-weight-bold text-dark">Stefanus Ferry Susanto</h6></td>
                            </tr>
                            <tr>
                                <td>Tempat/Tanggal Lahir</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">Tanjung Karang, 05/02/2003</h6></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">Laki-Laki</h6></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">Pegawai Negeri Sipil</h6></td>
                            </tr>
                            <tr>
                                <td>Jumlah Murid</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">100</h6></td>
                            </tr>
                            <tr>
                                <td>No. Telepon/HP</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">082187945165</h6></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><h6 class="font-weight-bold text-dark">Perumahan Permata Biru, Sukarame, Bandar Lampung</h6></td>
                            </tr>
                            <tr>
                                <td>Foto Pribadi</td>
                                <td>:</td>
                                <td></td>
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
                                    <td><h6 class="font-weight-bold text-dark">8917625920</h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik Rekening</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">Stefanus Ferry Susanto</h6></td>
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
                                    <td><h6 class="font-weight-bold text-dark">Imam Masjid</h6></td>
                                </tr>
                                <tr>
                                    <td>Nama Tempat Tugas</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">Masjid Taqwa</h6></td>
                                </tr>
                                <tr>
                                    <td>No. Telepon/HP Tempat Tugas</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">085276538907</h6></td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Tugas</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">Jl. Permata Biru No. 128 Sukarame</h6></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">LAMPUNG</h6></td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">KOTA BANDAR LAMPUNG</h6></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">SUKARAME</h6></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td>:</td>
                                    <td><h6 class="font-weight-bold text-dark">SUKARAME</h6></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Verifikasi</h6>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input class="form-check-input ml-1 me-1" type="checkbox" value="" id="firstCheckbox">
                            <label class="form-check-label ml-5" for="firstCheckbox">Permohonan diketahui Minimal Pamong/Kepala Desa setempat</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="secondCheckbox">
                            <label class="form-check-label ml-5" for="secondCheckbox">Susunan Pengurus/Panitia diketahui KUA/Pamong/Kepala Desa setempat</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Rencana Anggaran Belanja (RAB)</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Foto Bangunan/Foto Kegiatan</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Akte Notaris, Kemenkumham, Izin Operasional</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Foto copy KTP Ketua dan Sekretaris (Masih aktif)</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">No. Rek Bank Lampung atas nama PonPes/Lembaga</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">No. NPWP atas Nama Ketua/Rumah Ibadah/Pengurus</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Stempel Asli dan Basah</label>                            
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input ml-1" type="checkbox" value="" id="thirdCheckbox">
                            <label class="form-check-label ml-5" for="thirdCheckbox">Surat Keterangan Domisili</label>                            
                        </li>

                    </ul>

                </div>
            </div>

            <div class="card-body d-flex justify-content-end">
                <input type="hidden" name="id_user" value="">
                <button type="submit" class="btn btn-primary shadow-sm">Verifikasi Data</button>
            </div>
            
        </div>

    </div>
        
</div>

<?= $this->endSection() ?>