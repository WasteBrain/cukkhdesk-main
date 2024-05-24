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
                                    <th scope="col">Category</th>
                                    <th scope="col">Rejected By</th>
                                    <th scope="col">Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Merakai</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siantan</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Invalid Account Information: If there's an error in the account details provided for the transfer, such as an incorrect account number or routing number, the transfer may be rejected.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Badau</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-17</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Security Concerns: Suspicious activity or unusual transaction patterns could trigger a rejection for security reasons. This could include large or out-of-pattern transfers, especially if they're going to unfamiliar accounts.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kantor Sentral</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-17</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Compliance Issues: The transfer might violate internal policies or external regulations, leading to rejection. For example, there may be restrictions on the types or amounts of transfers allowed between certain accounts.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kantor Sentral</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-16</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Rumah Sepan</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-16</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sanggau</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-14</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Lanjak</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-14</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Simpang Pinoh</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-14</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Bodok</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-13</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Simpang Indung</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-12</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Pasar Sekadau</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-10</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Simpang Kayu Lapis</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-10</td>
                                    <td>Software</td>
                                    <td>RISK</td>
                                    <td>Insufficient Funds: If the account doesn't have enough funds to cover the withdrawal, the transfer may be rejected to prevent overdrawing the account.</td>
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