<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Biro Kesejahteraan Rakyat</title>
  <link rel="icon" href="<?=base_url('assets/img/logo_pemprov.png')?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("assets/vendor/aos/aos.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">

</head>

<body>

    <?= view('App\Views\layouts\landing-page\_navbar') ?>

    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="<?= base_url('/')?>" class="logo d-flex align-items-center">
                            <img src="<?= base_url("assets/img/logo_pemprov.png") ?>" alt="">
                            <span>Biro Kesejahteraan Rakyat</span>
                        </a>
                        <p></p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/kesralampung/" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/')?>">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/')?> #services">Program Bantuan</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/')?> #contact">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-6 footer-links">
                        <h4>Program Bantuan</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/program1')?>">Pondok Pesantren dan Rumah Ibadah</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/program2')?>">Tahfidzul Quran Hafidz/Hafidzah</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('/program3')?>">Guru Ngaji, Marbot, dan Imam Masjid</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                        <h4>Kontak Kami</h4>
                        <p>
                            Jl. W.R. Monginsidi No. 69<br>
                            Kantor Gubernur Lampung<br>
                            Teluk Betung 35215<br><br>
                            <strong>Telepon:</strong> 0721 474011 /<br> 0721 5602376<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Biro Kesejahteraan Rakyat</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
<!-- End Footer -->

    <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url("assets/vendor/purecounter/purecounter_vanilla.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/aos/aos.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>

</body>

</html>