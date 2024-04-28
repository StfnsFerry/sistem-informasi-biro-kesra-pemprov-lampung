<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon w-25">
        <img class="sidebar-card-illustration w-100" src="<?=base_url('assets/img/logo_pemprov.png')?>">
    </div>
    <div class="sidebar-brand-text mx-3">Biro Kesra</div>
</a>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('/')?>">
        <i class="fas fa-fw fa-house"></i>
        <span>Beranda</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data Saya
</div>

<!-- Nav Item - Charts -->
<li class="nav-item active">
    <a class="nav-link" href="<?=base_url('/rumah-ibadah/biodata')?>">
        <i class="fas fa-fw fa-circle-info"></i>
        <span>Biodata</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('/rumah-ibadah/dokumen')?>">
        <i class="fas fa-fw fa-folder-open"></i>
        <span>Dokumen</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url('/rumah-ibadah/status-pendaftaran')?>">
        <i class="fas fa-fw fa-list-check"></i>
        <span>Status Pendaftaran</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Akun
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">  
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-fw "></i>
        <span>Keluar</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username;?></span>
                    <img class="img-profile rounded-circle"
                        src="<?=base_url(user()->user_image)?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?=base_url('/rumah-ibadah/profil')?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profil
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Keluar
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
    
    