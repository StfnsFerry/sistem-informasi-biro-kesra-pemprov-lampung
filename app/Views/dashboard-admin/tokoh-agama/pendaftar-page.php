<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Baru Program Hibah Guru Ngaji, Imam Masjid, dan Marbot</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Pendaftar</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTokohAgama" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kab/Kota</th>
                                    <th>Profesi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($pendaftar as $tokoh):
                                        if($tokoh['status_pendaftaran'] == 'Sedang Diverifikasi' && $tokoh['verifikasi_data'] == 'Belum Lengkap') :
                                    ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $tokoh['nama_lengkap']?></td>
                                    <td><?= $tokoh['alamat']?></td>
                                    <td><?= $tokoh['kabupaten_kota']?></td>
                                    <td><?= $tokoh['profesi']?></td>
                                    <td>                                                  
                                        <a href="<?= base_url('/admin/tokoh-agama/pendaftar/verifikasi/' . $tokoh['id']) ?>" class="btn btn-secondary btn-icon-split">
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
                                    <th>Profesi</th>
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
                                    <td><?= $items['nama_lengkap']?></td>
                                    <td><?= $items['alamat']?></td>
                                    <td><?= $items['kabupaten_kota']?></td>
                                    <td><?= $items['profesi']?></td>
                                    <td>
                                        <a href="<?= base_url('/admin/tokoh-agama/pendaftar/verifikasi/' . $items['id']) ?>" class="btn btn-warning btn-icon-split">
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
                                    <th>Profesi</th>
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
                                    <td><?= $verif['nama_lengkap']?></td>
                                    <td><?= $verif['alamat']?></td>
                                    <td><?= $verif['kabupaten_kota']?></td>
                                    <td><?= $verif['profesi']?></td>
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
                                                <label class="col-form-label"><?=$check['ktp']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Foto copy KTP)</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['surat_rekomendasi']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Surat Rekomendasi dari Pemda Kabupaten/Kota</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['surat_bantuan']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - Surat belum pernah mendapatkan bantuan dari Pemprov Lampung</label>
                                            </div>

                                            <div class="mb-1">
                                                <label class="col-form-label"><?=$check['fc_rekening']== 'Ada' ? '<i class="fas fa-solid fa-check"></i>' : '<i class="fas fa-solid fa-xmark"></i>' ?> - No. Rek Bank Lampung atas nama yang bersangkutan</label>
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