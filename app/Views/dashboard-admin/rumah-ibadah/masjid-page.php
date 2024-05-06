<?= $this->extend('layouts/dashboard-admin/_header') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar Kategori Masjid Program Hibah Rumah Ibadah dan Pondok Pesantren</h1>
    </div>
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List Bangunan Masjid</h6>
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
                                    foreach ($masjid as $list) : 
                                        if($list['status_pendaftaran'] == 'Sudah Diverifikasi') :
                                    ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$list['nama_bangunan']?></td>
                                        <td><?=$list['alamat_bangunan']?></td>
                                        <td><?=$list['kabupaten_kota']?></td>
                                        <td>                                                  
                                            <a href="<?= base_url('/admin/rumah-ibadah/detail/' . $list['id'])?>" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                        </td>
                                    </tr>  
                                    <?php endif;
                                endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List Penerima Hibah</h6>
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
                                        <th>Jumlah Rekomendasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($masjid as $diterima) :
                                        if($diterima['status_pendaftaran'] == 'Pendaftaran Diterima' || $diterima['status_pendaftaran'] == 'Proses Pencairan Dana') :
                                    ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$diterima['nama_bangunan']?></td>
                                        <td><?=$diterima['alamat_bangunan']?></td>
                                        <td><?=$diterima['kabupaten_kota']?></td>
                                        <td>
                                            Rp <?= number_format($diterima['jumlah_rekomendasi'],0,',','.');?>
                                        </td>
                                        <td> 
                                            <?php if($diterima['dokumen_nphd'] != NULL): ?>
                                                <a href="<?= base_url('/admin/rumah-ibadah/detail/' . $diterima['id'])?>" class="btn btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Lihat NPHD</span>
                                                </a>
                                                <?php if($diterima['status_pendaftaran'] == 'Pendaftaran Diterima') : ?>
                                                <button type="button" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#UbahStatus<?=$diterima['id']?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                    <span class="text">Ubah Status</span>
                                                </button>
                                                <?php elseif($diterima['status_pendaftaran'] == 'Proses Pencairan Dana') : ?>
                                                <button type="button" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#UnggahNota<?=$diterima['id']?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-upload"></i>
                                                    </span>
                                                    <span class="text">Unggah Nota Dinas</span>
                                                </button>
                                                <?php endif;?>
                                            <?php else: ?>
                                                <a href="<?= base_url('/admin/rumah-ibadah/detail/' . $diterima['id'])?>" class="btn btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Detail</span>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#JumlahRekomendasiModal<?=$diterima['id']?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                    <span class="text">Ubah</span>
                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>  
                                        <!-- Modal Jumlah Rekomendasi -->
                                        <div class="modal fade" id="JumlahRekomendasiModal<?=$diterima['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Jumlah Rekomendasi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label class="form-label">Isi atau Pilih Jumlah Rekomendasi :</label>
                                                        <form action="<?=base_url('admin/rumah-ibadah/terima-pendaftaran')?>" method="POST">
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
                                                            <input type="hidden" name="id_biodata" value="<?=$diterima['id']?>">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Ubah Status -->
                                        <div class="modal fade" id="UbahStatus<?=$diterima['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Status</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label class="form-label">Apakah anda yakin ingin mengubah status menjadi "Proses Pencairan Dana"?</label>
                                                        <form action="<?=base_url('admin/rumah-ibadah/pencairan')?>" method="POST"> 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id_biodata" value="<?=$diterima['id']?>">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Unggah Nota -->
                                        <div class="modal fade" id="UnggahNota<?=$diterima['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Unggah Nota Dinas</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?=base_url('admin/rumah-ibadah/nota-dinas')?>" method="POST" enctype="multipart/form-data">
                                                        <?= csrf_field() ?> 
                                                            <label class="form-label">Pilih File: </label>
                                                            <input type="file" class="form-control" name="nota_dinas" accept=".pdf" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id_biodata" value="<?=$diterima['id']?>">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                    endif;
                                endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List Penerima Hibah Berhasil Transfer</h6>
                        <div class="button-header"></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered tableExport" id="exportDataMasjid" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kab/Kota</th>
                                        <th>Jumlah Rekomendasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($masjid as $cair) :
                                        if($cair['status_pendaftaran'] == 'Dana Berhasil Ditransfer') :
                                    ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$cair['nama_bangunan']?></td>
                                        <td><?=$cair['alamat_bangunan']?></td>
                                        <td><?=$cair['kabupaten_kota']?></td>
                                        <td>
                                            Rp <?= number_format($cair['jumlah_rekomendasi'],0,',','.');?>
                                        </td>
                                        <td> 
                                            <a href="<?= base_url('/admin/rumah-ibadah/detail/' . $cair['id'])?>" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                        </td>
                                    </tr>  
                                        
                                    <?php 
                                    endif;
                                endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>