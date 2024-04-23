
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="<?= base_url('afi/dashboard') ?>" class="logo d-flex align-items-center">        
      <img src="<?php echo base_url(); ?>assets/img/icon.png" alt="">
      <span class="d-none d-lg-block">HELPDESK</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      
      <li class="nav-item dropdown">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">CREDIT DEPARTMENT</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>CREDIT DEPARTMENT</h6>
              <span>Head Office</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
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
                <span>Sign Out</span>
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
            <a class="nav-link" href="<?= base_url('ccd/dashboard') ?>">
            <i class="ri-apps-fill"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tickets</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('ccd/onholdticket') ?>">
              <i class="bi bi-circle"></i><span>On Hold</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('ccd/otoritizedticket') ?>">
              <i class="bi bi-circle"></i><span>Authorized</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('ccd/rejectedticket') ?>">
              <i class="bi bi-circle"></i><span>Rejected</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-info-square-fill"></i>
            <span>About</span>
            </a>
        </li><!-- End About Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
