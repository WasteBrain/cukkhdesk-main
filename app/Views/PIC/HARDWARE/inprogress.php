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
            <li class="breadcrumb-item active">In Progress Ticket</li>
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
                                    <th scope="col">File</th>
                                    <th scope="col">Start Working at</th>
                                    <th scope="col">Action Resolved</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Badau</td>
                                    <td>Printer Error</td>
                                    <td><a href="file1.pdf">file1.pdf</a></td>
                                    <td>2024-04-18 12:08:04 PM</td>
                                    <td>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-check-circle me-1"></i>Mark as Resolved</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tapang Pulau</td>
                                    <td>CPU Error</td>
                                    <td><a href="file2.docx">file2.docx</a></td>
                                    <td>2024-04-17 12:08:04 PM</td>
                                    <td><button type="button" class="btn btn-info"><i class="bi bi-check-circle me-1"></i>Mark as Resolved</span</button></td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<div class="modal fade" id="actionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <form action="#" method="post" enctype="multipart/form-data" wire:submit.prevent="savePersonalData" onkeydown="return event.key != 'Enter';">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#123670; color:white;">
                    <h5 class="modal-title">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Branch Office</label>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="kodeKas" value="Badau" disabled> </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Problem Description</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="inputProblem" style="height: 100px;" disabled>Printer Error</textarea>
                        </div>
                    </div>   
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Date Submitted</label>
                        <div class="col-sm-8"> <input type="text" class="form-control" name="dateSubmitted" value="2024-04-18" disabled> </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Note</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="inputnote" style="height: 100px;"></textarea>
                        </div>
                    </div> 
                   <hr>
                   Kamu telah menyelesaikan case ini. Status ticket akan berubah dari <b>In Progress</b> menjadi <b>Resolved</b>. Durasi perbaikan akan diakhiri sejak Tombol YES diklik.
                
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark" data-bs-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">YES</button>
                </div>
            </div>
        </form> 
    </div>
</div>

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