<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CUKK - HELPDESK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/icon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?= $this->include('Admin/Structure/header'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ticket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Ticket Progress</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ticket list</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Branch Office</th>
                                    <th scope="col">Problem Description</th>
                                    <th scope="col">Date Submitted</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Authorized By</th>
                                    <th scope="col">PIC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Badau</td>
                                    <td>Network Connectivity Issue</td>
                                    <td>2024-04-18</td>
                                    <td>Networking</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>RIDWAN <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tapang Pulau</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>RISK <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Indra <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Belikai</td>
                                    <td>Hardware Malfunction</td>
                                    <td>2024-04-18</td>
                                    <td>Hardware</td>
                                    <td>ITD <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Tendo <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rumah Sepan</td>
                                    <td>SIP Issue</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Andi <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Bodok</td>
                                    <td>Printer Not Printing</td>
                                    <td>2024-04-18</td>
                                    <td>Hardware</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Abet <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tumbang Kejamei</td>
                                    <td>Database Error</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Ego <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Kantor Sentral</td>
                                    <td>Application Crashing</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Riyo <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('Admin/Structure/footer'); ?>
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/tambahan.js"></script>

</body>

</html>