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
                                            <a href="<?= base_url('/admin/rumah-ibadah/masjid/detail/' . $list['id'])?>" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                        </td>
                                    </tr>  
                                        <!-- Modal -->
                                        <div class="modal fade" id="JumlahRekomendasiModal<?=$list['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Jumlah Rekomendasi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        if($diterima['status_pendaftaran'] == 'Pendaftaran Diterima') :
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
                                            <a href="<?= base_url('/admin/rumah-ibadah/masjid/detail/' . $diterima['id'])?>" class="btn btn-info btn-icon-split mb-2">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Detail</span>
                                            </a>
                                            <button type="button" class="btn btn-success btn-icon-split" data-bs-toggle="modal" data-bs-target="#JumlahRekomendasiModal<?=$diterima['id']?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-dollar"></i>
                                                </span>
                                                <span class="text">Ubah</span>
                                            </button>
                                        </td>
                                    </tr>  
                                        <!-- Modal -->
                                        <div class="modal fade" id="JumlahRekomendasiModal<?=$diterima['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Jumlah Rekomendasi</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label class="form-label">Isi atau Pilih Jumlah Rekomendasi :</label>
                                                        <form action="<?=base_url('admin/rumah-ibadah/masjid/terima-pendaftaran')?>" method="POST">
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