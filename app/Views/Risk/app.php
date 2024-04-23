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

    <?= $this->include('Risk/Structure/header'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('risk/dashboard') ?>">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Tickets <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-telegram"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Authorized <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-tools"></i>
                </div>
                <div class="ps-3">
                  <h6>140</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Rejected <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-tools"></i>
                </div>
                <div class="ps-3">
                  <h6>5</h6>
                  <span class="text-success small pt-1 fw-bold">2%</span> <span class="text-muted small pt-2 ps-1">lessen</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Recent Ticket <span></span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Branch Office</th>
                    <th scope="col">Problem Description</th>
                    <th scope="col">File</th>
                    <th scope="col">Date Submitted</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Badau</td>
                                    <td>withdrawal of savings which is collateral</td>
                                    <td><a href="file1.pdf">file1.pdf</a></td>
                                    <td>2024-04-18</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lanjak</td>
                                    <td>Application for reducing loan installment interest</td>
                                    <td><a href="file2.docx">file2.docx</a></td>
                                    <td>2024-04-17</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rumah Sepan</td>
                                    <td>Application to pay loan installments with only half interest</td>
                                    <td><a href="file3.jpg">file3.jpg</a></td>
                                    <td>2024-04-16</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nanga Mau</td>
                                    <td>Request for loan term input errors</td>
                                    <td><a href="file4.pdf">file4.pdf</a></td>
                                    <td>2024-04-15</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Merakai</td>
                                    <td>Error in inputting loan interest percentage</td>
                                    <td><a href="file5.txt">file5.txt</a></td>
                                    <td>2024-04-14</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Authorized</span></td>
                                </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

      </div>
    </div><!-- End Left side columns -->


  </div>
</section>

</main><!-- End #main -->

    <?= $this->include('Risk/Structure/footer'); ?>
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