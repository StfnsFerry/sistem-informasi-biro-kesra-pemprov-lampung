<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="<?= base_url("assets/img/logo_pemprov.png") ?>" alt="">
      <span>Biro Kesejahteraan Rakyat</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="<?=('/')?>#hero">Beranda</a></li>
        <li class="dropdown"><a href="<?= base_url('/')?> #services"><span>Program Bantuan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('program1')?>">Pondok Pesantren dan Rumah Ibadah</a></li>
            <li><a href="<?= base_url('program2')?>">Tahfidzul Qur'an Hafidz/Hafidzah</a></li>
            <li><a href="<?= base_url('program3')?>">Guru Ngaji, Marbot, dan Imam Masjid</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="<?=base_url('/')?> #contact">Kontak</a></li>
        <?php if(logged_in()): ?>
            <li class="dropdown"><a class="getstarted" href="#"><span><?= user()->username;?></span><i class="ri-user-3-line"></i></a>
              <ul>
                <li><a href="<?= base_url('/profil')?>">Profil</a></li>
                <li><a href="<?= base_url('logout')?>">Keluar</a></li>
              </ul>
            </li>
          
          <?php else: ?>
            <li><a class="getstarted scrollto" href="<?= base_url('login')?>">Masuk atau Daftar</a></li>
          <?php endif; ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->