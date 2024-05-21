<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="assets/index3.html" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/logo.png" alt="Helpdesk KK Logo" class="brand-image img-circle">
    <span class="brand-text font-weight-light">HELPDESK - KK</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander S.Kom</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Tiket
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/viewticket') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tiket Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/ticketprogress') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tiket On Progress</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/ticketdone') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tiket Selesai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/ticketdone') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tiket Ditolak</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kantor List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Departemen List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>PIC List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Kantor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Departemen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New PIC</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Monitor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Work</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Verifikasi Departemen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Produktifitas PIC</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Aditional</li>
        <li class="nav-item">
          <a href="assets/pages/calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="assets/pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="assets/pages/kanban.html" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Kanban Board
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="assets/pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="assets/pages/examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/examples/project-add.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/examples/project-edit.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="assets/pages/examples/project-detail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>