<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="<?= base_url('bo/dashboard') ?>" class="logo d-flex align-items-center">        
      <img src="<?php echo base_url(); ?>assets/img/icon.png" alt="">
      <span class="d-none d-lg-block">HELPDESK</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Kantor Sentral</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kantor Sentral</h6>
              <span>Branch Office</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>Profile Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('bo/dashboard') ?>">
            <i class="ri-apps-fill"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('bo/newticket') ?>">
            <i class="bi bi-chat-dots-fill"></i>
            <span>Tiket Baru</span>
            </a>
        </li><!-- End New Ticket Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('bo/myticket') ?>">
            <i class="bi bi-check-square-fill"></i>
            <span>Tiket Saya</span>
            </a>
        </li><!-- End List Ticket Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('bo/tentang') ?>">
            <i class="bi bi-info-square-fill"></i>
            <span>Tentang</span>
            </a>
        </li><!-- End About Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
