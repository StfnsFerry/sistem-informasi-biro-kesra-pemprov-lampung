<?= $this->extend('layouts/landing-page/_header') ?>
<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('/')?>">Beranda</a></li>
          <li>Tahfidzul Quran Hafidz/Hafidzah</li>
        </ol>
        <h2>Program Bantuan Dana Hibah Hafidz dan Hafidzah</h2>

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
                <a href="<?= base_url('program2')?>">Persyaratan Pendaftar</a>
              </h2>

              <ol class="list-group list-group-numbered">
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
              </ol>
              
              <div class="mt-4 box pricing text-center">
                <a href="/pendaftaran" class="btn-buy">Ajukan Bantuan <i class="bi bi-arrow-right"></i></a>
              </div>
              
              <!-- <div class="entry-content">
                <p>
                    1. Warga Negara Indonesia (WNI) dengan melampirkan foto copy KTP 1 lembar.
                </p>

                <p>
                    2. Mengisi biodata dan dilampirkan 1 (satu) lembar foto berwarna 3 x 4 cm.
                </p>

                <p>
                    3. Melampirkan Surat Rekomendasi dari Pemda Kabupaten/Kota melalui Bagian
                    Kesejahteraan Rakyat Kabupaten/Kota yang menerangkan bahwa yang bersangkutan
                    adalah benar sebagai Tokoh Agama (Guru Ngaji, Imam Masjid, dan Marbot Masjid), 
                    ditujukan kepada Gubernur Lampung Cq. Kepala Biro Kesejahteraan Rakyat Setda Provinsi Lampung.
                </p>

                <p>
                    4. Belum pernah mendapat bantuan apapun dari Pemerintah Provinsi Lampung.
                </p>

                <p>
                    5. Melampirkan fotocopy Rekening Bank Lampung atas nama yang bersangkutan, masih aktif.
                </p>

              </div>

              <div class="text-center text-lg-start">
                <a href="/pendaftaran" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Ajukan Bantuan</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section>
    <!-- End Blog Single Section -->

  </main><!-- End #main -->

<?= $this->endSection() ?>