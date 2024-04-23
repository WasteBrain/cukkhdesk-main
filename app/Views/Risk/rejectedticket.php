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
        <h1>Ticket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('risk/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Rejected Ticket</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ticket list</h5>

                        <table id="exportedTable" class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Branch Office</th>
                                    <th scope="col">Problem Description</th>
                                    <th scope="col">Date Submitted</th>
                                    <th scope="col">Admin Note</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Rejection Date</th>
                                    <th scope="col">My Note</th>
                                </tr>
                            </thead>
                            <tbody>
        <tr>
            <td>1</td>
            <td>New York</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-18</td>
            <td>Investigated transaction history.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-20</td>
            <td>Insufficient funds in the sender's account.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Los Angeles</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-17</td>
            <td>Investigated transaction history.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-19</td>
            <td>Incorrect recipient account number.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Chicago</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-16</td>
            <td>Investigated transaction history.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-18</td>
            <td>Unauthorized transaction.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>San Francisco</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-15</td>
            <td>Checked account balance.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-17</td>
            <td>Recipient account closed.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Miami</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-14</td>
            <td>Investigated transaction history.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-16</td>
            <td>Policy violation.</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Houston</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-13</td>
            <td>Reviewed account details.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-15</td>
            <td>Unverified recipient identity.</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Seattle</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-12</td>
            <td>Verified recipient account.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-14</td>
            <td>Transaction flagged as fraudulent.</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Atlanta</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-11</td>
            <td>Checked transfer limits.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-13</td>
            <td>Recipient account on hold.</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Boston</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-10</td>
            <td>Verified transaction details.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-12</td>
            <td>Transaction amount exceeds limit.</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Dallas</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-09</td>
            <td>Confirmed sender identity.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-11</td>
            <td>Invalid transaction request.</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Philadelphia</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-08</td>
            <td>Reviewed transfer request.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-10</td>
            <td>Recipient account frozen.</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Washington</td>
            <td>Withdrawal of savings on inter-office transfers</td>
            <td>2024-04-07</td>
            <td>Checked transaction history.</td>
            <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Rejected</span></td>
            <td>2024-04-09</td>
            <td>Transaction suspicious.</td>
        </tr>
    </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('CCD/Structure/footer'); ?>
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