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
            <li class="breadcrumb-item active">Tiket Baru - Manual Input</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Submit tiket baru</h5>

                        <!-- Horizontal Form -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-4 col-form-label">Nama Lengkap Staf</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-4 col-form-label">Jabatan Staf</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-4 col-form-label">Branch office</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputProblem" class="col-sm-4 col-form-label">Deskripsi Persoalan</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="inputProblem" style="height: 100px;" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputFile" class="col-sm-4 col-form-label">Tambahkan File</label>
                                <div class="col-sm-8">
                                    <input type='file' class="form-control" name="inputFile" id="fileInput" required>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Tanggal Masuk</label>
                                <div class="col-sm-8"> <input type="text" class="form-control" name="dateSubmitted"> </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Kategori</label>
                                <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Software</option>
                                        <option value="2">Hardware</option>
                                        <option value="3">Networking</option>
                                        <option value="4">ATM</option>
                                        <option value="5">KKD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Otoritas Dept</label>
                                <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">AFI</option>
                                        <option value="2">CCD</option>
                                        <option value="3">RISK</option>
                                        <option value="3">IT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Teknisi</label>
                                <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">ANDI</option>
                                        <option value="2">HENDRO</option>
                                        <option value="3">EGO</option>
                                        <option value="4">RIO</option>
                                        <option value="5">INDRA</option>
                                        <option value="6">CIKA</option>
                                        <option value="7">ANDI</option>
                                        <option value="8">TENDO</option>
                                        <option value="9">ABET</option>
                                        <option value="10">YANTO</option>
                                        <option value="11">RIDWAN</option>
                                        <option value="12">EVAN</option>
                                        <option value="13">CANDRA</option>
                                        <option value="14">ATOT</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Catatan</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="inputnote" style="height: 100px;"></textarea>
                                </div>
                            </div>  
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End Horizontal Form -->

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