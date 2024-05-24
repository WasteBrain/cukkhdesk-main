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
    <?= $this->include('BO/Structure/header'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ticket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('bo/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">My Ticket</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My ticket list</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Problem Description</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Date Submitted</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Network Connectivity Issue</td>
                                    <td><a href="file1.pdf">file1.pdf</a></td>
                                    <td>2024-04-18</td>
                                    <td><span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Software Installation Problem</td>
                                    <td><a href="file2.docx">file2.docx</a></td>
                                    <td>2024-04-17</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Hardware Malfunction</td>
                                    <td><a href="file3.jpg">file3.jpg</a></td>
                                    <td>2024-04-16</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Printer Not Printing</td>
                                    <td><a href="file4.pdf">file4.pdf</a></td>
                                    <td>2024-04-15</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Email Configuration Issue</td>
                                    <td><a href="file5.txt">file5.txt</a></td>
                                    <td>2024-04-14</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Slow Internet Connection</td>
                                    <td><a href="file6.png">file6.png</a></td>
                                    <td>2024-04-13</td>
                                    <td><span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Database Error</td>
                                    <td><a href="file7.sql">file7.sql</a></td>
                                    <td>2024-04-12</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Monitor Display Issue</td>
                                    <td><a href="file8.jpg">file8.jpg</a></td>
                                    <td>2024-04-11</td>
                                    <td><span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Application Crashing</td>
                                    <td><a href="file9.log">file9.log</a></td>
                                    <td>2024-04-10</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Keyboard Malfunction</td>
                                    <td><a href="file10.docx">file10.docx</a></td>
                                    <td>2024-04-09</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Software License Issue</td>
                                    <td><a href="file11.txt">file11.txt</a></td>
                                    <td>2024-04-08</td>
                                    <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Unauthorized Access</td>
                                    <td><a href="file12.docx">file12.docx</a></td>
                                    <td>2024-04-07</td>
                                    <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>Rejected</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('BO/Structure/footer'); ?>
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