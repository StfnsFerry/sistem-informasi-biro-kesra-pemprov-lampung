<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Baru Program Hibah Rumah Ibadah dan Pondok Pesantren</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Pendaftar</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataRumahIbadah" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($pendaftar as $masjid):
                                    
                                        if($masjid['status_pendaftaran'] == 'Sedang Diverifikasi' && $masjid['verifikasi_data'] == 'Belum Lengkap') :
                                    ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $masjid['nama_bangunan']?></td>
                                    <td><?= $masjid['alamat_bangunan']?></td>
                                    <td><?= $masjid['kabupaten_kota']?></td>
                                    <td>                                                  
                                        <a href="<?= base_url('/admin/rumah-ibadah/pendaftar/verifikasi/' . $masjid['id']) ?>" class="btn btn-secondary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">Verifikasi</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Belum Terverifikasi</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataVerifikasi" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    foreach ($pendaftar as $items) : 
                                        if($items['verifikasi_data'] == 'Data Tidak Lengkap') :
                                    ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $items['nama_bangunan']?></td>
                                    <td><?= $items['alamat_bangunan']?></td>
                                    <td><?= $items['kabupaten_kota']?></td>
                                    <td>
                                        <a href="<?= base_url('/admin/rumah-ibadah/pendaftar/verifikasi/' . $items['id']) ?>" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text">Ubah Verifikasi</span>
                                        </a>
                                    </td>
                                </tr>

                                <?php 
                                endif;
                            endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sudah Diverifikasi</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    foreach ($pendaftar as $verif) : 
                                        if($verif['verifikasi_data'] == 'Data Lengkap') :
                                    ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $verif['nama_bangunan']?></td>
                                    <td><?= $verif['alamat_bangunan']?></td>
                                    <td><?= $verif['kabupaten_kota']?></td>
                                    <td>                                                  
                                        <button type="button" class="btn btn-info btn-icon-split" data-bs-toggle="modal" data-bs-target="#detailModal<?=$verif['id']?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Detail</span>
                                        </button>
                                    </td>
                                </tr>
                                <?php foreach ($verifikasi as $check) { ?>
                                <!-- Modal -->
                                <div class="modal fade" id="detailModal<?=$check['id_biodata']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kelengkapan Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['permohonan_pamong']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Permohonan diketahui Minimal Pamong/Kepala Desa setempat</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['susunan_pengurus']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Susunan Pengurus/Panitia diketahui KUA/Pamong/Kepala Desa setempat</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['rab']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Rencana Anggaran Belanja (RAB)</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['foto_bangunan']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Foto Bangunan/Foto Kegiatan</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['izin_operasional']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Akte Notaris, Kemenkumham, Izin Operasional</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['ktp']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Foto copy KTP Ketua dan Sekretaris (Masih aktif)</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['fc_rekening']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - No. Rek Bank Lampung atas nama PonPes/Lembaga</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['npwp']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - No. NPWP atas Nama Ketua/Rumah Ibadah/Pengurus</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['stempel']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Stempel Asli dan Basah</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['surat_keterangan_domisili']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Surat Keterangan Domisili</label>
                                            </div>

                                            <div class="mb-3">
                                                <label class="col-form-label"><?=$check['lain_lain']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Lain-Lain</label>
                                            </div>

                                            <div class="mb-1">
                                                <label for="col-form-label">Keterangan :</label> <br>
                                                <h6 class="fw-bold"><?= $check['keterangan']?></h6>
                                            </div>
                                                
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <?php
                                    } 
                                endif;
                            endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
                
<?= $this->endSection() ?>