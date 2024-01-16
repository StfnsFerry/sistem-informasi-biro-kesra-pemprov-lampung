<?= $this->extend('layouts/landing-page/_header') ?>
<?= $this->section('content') ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-10 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Program Bantuan Biro Kesejahteraan Rakyat</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Biro Kesejahteraan Rakyat Pemerintah Provinsi Lampung Meluncurkan Program Inovatif untuk Meningkatkan Kualitas Hidup Warga</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Selengkapnya</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url("assets/img/hero-img.png") ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Program Bantuan</h2>
          <p>Hibah Tahun Anggaran 2024</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-home-4-line icon"></i>
              <h3>Pondok Pesantren dan Rumah Ibadah</h3>
              <p>Dalam Rangka Peningkatan Kesejahteraan bagi Pondok Pesantren dan Rumah Ibadah Kabupaten/Kota Se-Proinsi Lampung</p>
              <a href="<?= base_url('program1')?>" class="read-more"><span>Selanjutnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-book-open-line icon"></i>
              <h3>Tahfidzul Quran Hafidz/Hafidzah</h3>
              <p>Dalam Rangka Peningkatan Kesejahteraan bagi Hafidz dan Hafidzah Kabupaten/Kota Se-Provinsi Lampung</p>
              <a href="<?= base_url('program2')?>" class="read-more"><span>Selanjutnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-presentation-line icon"></i>
              <h3>Guru Ngaji, Marbot, dan Imam Masjid</h3>
              <p>Dalam Rangka Peningkatan Kesejahteraan bagi Tenaga Pendidik Keagamaan Nonformal Kabupaten/Kota Se-Proinsi Lampung</p>
              <a href="<?= base_url('program3')?>" class="read-more"><span>Selanjutnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url("assets/img/team/team-1.jpg") ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jenita Lusiana Lukmawati</h4>
                <span>Software Analytic</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url("assets/img/team/team-3.jpg") ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Lathifah Putri Aresti</h4>
                <span>Front-End Developer</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url("assets/img/team/team-2.jpg") ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Stefanus Ferry Susanto</h4>
                <span>Back-End Developer</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>
                    Jl. W.R. Monginsidi No. 69<br>
                    Kantor Gubernur Lampung<br>
                    Teluk Betung 35215<br><br>
                  </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>+62 721 4740 11<br>+62 721 5602 376</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Kerja</h3>
                  <p>Senin - Jumat<br>9:00AM - 04:00PM</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?= $this->endSection() ?>
  