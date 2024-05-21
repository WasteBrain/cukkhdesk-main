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
    <?= $this->include('PIC/HARDWARE/Structure/header'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ticket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('hdd/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Resolved Ticket</li>
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
                                    <th scope="col">Start Working at</th>
                                    <th scope="col">Finish Working at</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">My Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                
        <tr>
            <td>1</td>
            <td>New York</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Los Angeles</td>
            <td>CPU Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Chicago</td>
            <td>power supply Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>San Francisco</td>
            <td>Monitor Display Screen resolution</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Miami</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Houston</td>
            <td>CPU Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Seattle</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Atlanta</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Boston</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Dallas</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Philadelphia</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Washington</td>
            <td>Printer Error</td>
            <td>2024-04-17 04:04:04 PM</td>
            <td>2024-04-18 09:04:04 AM</td>
            <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
            <td>Completed successfully.</td>
        </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('PIC/HARDWARE/Structure/footer'); ?>
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