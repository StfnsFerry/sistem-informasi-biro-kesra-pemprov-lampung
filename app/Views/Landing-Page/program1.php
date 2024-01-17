<?= $this->extend('layouts/landing-page/_header') ?>
<?= $this->section('content') ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
  
      <ol>
        <li><a href="<?= base_url('/')?>">Beranda</a></li>
        <li>Pondok Pesantren dan Rumah Ibadah</li>
      </ol>
      <h2>Program Bantuan Dana Hibah Pondok Pesantren dan Rumah Ibadah</h2>
  
    </div>
  </section>
  <!-- End Breadcrumbs -->
  
  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
  
      <div class="row">
  
        <div class="col-lg-12 entries">
  
          <article class="entry entry-single">
  
            <div class="entry-img">
              <img src="<?= base_url("assets/img/") ?>" alt="" class="img-fluid">
            </div>
  
            <h2 class="entry-title">
              <a href="<?= base_url('program1')?>">Persyaratan Pendaftar</a>
            </h2>
            
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Permohonan diketahui Minimal Pamong/Kepala Desa setempat</li>
              <li class="list-group-item">Susunan Pengurus/Panitia diketahui KUA/Pamong/Kepala Desa setempat</li>
              <li class="list-group-item">Rencana Anggaran Belanja (RAB)</li>
              <li class="list-group-item">Foto Bangunan/Foto Kegiatan</li>
              <li class="list-group-item">Akte Notaris, Kemenkumham, Izin Operasional</li>
              <li class="list-group-item">Foto copy KTP Ketua dan Sekretaris (Masih aktif)</li>
              <li class="list-group-item">No. Rek Bank Lampung atas nama PonPes/Lembaga</li>
              <li class="list-group-item">No. NPWP atas Nama Ketua/Rumah Ibadah/Pengurus</li>
              <li class="list-group-item">Stempel Asli dan Basah</li>
              <li class="list-group-item">Surat Keterangan Domisili</li>
              <li class="list-group-item">Lain-lain</li>
            </ol>
            
            <div class="mt-4 box pricing text-center">
              <a href="/pendaftaran" class="btn-buy">Ajukan Bantuan <i class="bi bi-arrow-right"></i></a>
            </div>
  
          <!-- <div class="entry-content">
            <p>
                
            </p>
  
            <p>
                2. 
            </p>
  
            <p>
                3. 
            </p>
  
            <p>
                4. 
            </p>
  
            <p>
                5. 
            </p>
  
            <p>
                6. 
            </p>
  
            <p>
                7. 
            </p>
  
            <p>
                8. 
            </p>
  
            <p>
                9. 
            </p>
  
            <p>
                10. 
            </p>
  
            <p>
                11. Lain-lain
            </p>
  
          </div> -->
  
          </article><!-- End blog entry -->
  
        </div><!-- End blog entries list -->
  
      </div>
  
    </div>
  </section>
  <!-- End Blog Single Section -->

</main>
<!-- End #main -->

<?= $this->endSection() ?>
