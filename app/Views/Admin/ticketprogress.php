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
        <h1>Tiket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Tiket Sedang Berjalan</li>
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
                                    <th scope="col">No. Tiket</th>
                                    <th scope="col">Branch Office</th>
                                    <th scope="col">Deskripsi Persoalan</th>
                                    <th scope="col">Tgl Masuk</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Otoritas Dept</th>
                                    <th scope="col">Teknisi</th>                                    
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SCP1</td>
                                    <td>Kantor Sentral</td>
                                    <td>Kerusakan Perangkat Keras</td>
                                    <td>2024-04-18</td>
                                    <td>Jaringan</td>
                                    <td>IT <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>YANTO <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SCP2</td>
                                    <td>Tapang Pulau</td>
                                    <td>Withdrawal of savings on inter-office transfers</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>RISK <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Indra <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SCP3</td>
                                    <td>Belikai</td>
                                    <td>Hardware Malfunction</td>
                                    <td>2024-04-18</td>
                                    <td>Hardware</td>
                                    <td>ITD <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Tendo <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SCP4</td>
                                    <td>Rumah Sepan</td>
                                    <td>SIP Issue</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>Andi <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SCP5</td>
                                    <td>Bodok</td>
                                    <td>Printer Not Printing</td>
                                    <td>2024-04-18</td>
                                    <td>Hardware</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Abet <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>SCP6</td>
                                    <td>Tumbang Kejamei</td>
                                    <td>Database Error</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Ego <br> <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>SCP7</td>
                                    <td>Kantor Sentral</td>
                                    <td>Application Crashing</td>
                                    <td>2024-04-18</td>
                                    <td>Software</td>
                                    <td>ITD <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>Authorized</span></td>
                                    <td>Riyo <br> <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
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
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header" style="background-color:#123670; color:white;">
                    <h5 class="modal-title">Detail Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">No. Tiket</label>
                        <div class="col-sm-8"> SCP1 </div>
                    </div>   
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Branch Office</label>
                        <div class="col-sm-8"> KANTOR SENTRAL </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Staf Terkait</label>
                        <div class="col-sm-8"> Andi </div>
                    </div>   
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jabatan Staf terkait</label>
                        <div class="col-sm-8"> FO </div>
                    </div>   
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Deskripsi Persoalan</label>
                        <div class="col-sm-8">Kerusakan Perangkat Keras</div>
                    </div>   
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Tgl Submit Tiket</label>
                        <div class="col-sm-8"> 2024-04-01 </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8"> <span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span> </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kategori</label>
                        <div class="col-sm-8"> Jaringan </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Otoritas Dept</label>
                        <div class="col-sm-8"> IT </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Ditangani Oleh</label>
                        <div class="col-sm-8"> YANTO </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Catatan Admin</label>
                        <div class="col-sm-8"> Tunggu Sebentar </div>
                    </div>  
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Catatan Dept Terkait</label>
                        <div class="col-sm-8"> Tunggu Sebentar </div>
                    </div>  
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Catatan Teknisi</label>
                        <div class="col-sm-8"> Tunggu Sebentar </div>
                    </div>  
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark" data-bs-dismiss="modal">Close</a>
                </div>
        </div>
    </div>
</div>

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