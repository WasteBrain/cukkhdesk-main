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
        <h1>Tiket</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('bo/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Tiket Saya</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Tiket</h5>

                        <table class="table table-borderless datatable">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No. Tiket</th>
                                    <th scope="col">Deskripsi Permasalahan</th>
                                    <th scope="col">Staf Terkait</th>
                                    <th scope="col">Jabatan Terkait</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Tgl Submit</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SCP1</td>
                                    <td>Kerusakan Perangkat Keras</td>
                                    <td>Andi</td>
                                    <td>FO</td>
                                    <td><a href="file1.pdf">file1.pdf</a></td>
                                    <td>2024-04-01</td>
                                    <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                    <td>                                        
                                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#actionModal"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SCP2</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Ani</td>
                                    <td>KASIR</td>
                                    <td><a href="file2.docx">file2.docx</a></td>
                                    <td>2024-04-02</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SCP3</td>
                                    <td>Kerusakan Perangkat Keras</td>
                                    <td>Budi</td>
                                    <td>FO</td>
                                    <td><a href="file3.jpg">file3.jpg</a></td>
                                    <td>2024-04-03</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SCP4</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Citra</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file4.txt">file4.txt</a></td>
                                    <td>2024-04-04</td>
                                    <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                    <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SCP5</td>
                                    <td>Printer Tidak Mencetak</td>
                                    <td>Dedi</td>
                                    <td>Manajer</td>
                                    <td><a href="file5.pdf">file5.pdf</a></td>
                                    <td>2024-04-05</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>SCP6</td>
                                    <td>Kesalahan Database</td>
                                    <td>Eva</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file6.sql">file6.sql</a></td>
                                    <td>2024-04-06</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>SCP7</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Citra</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file7.log">file7.log</a></td>
                                    <td>2024-04-07</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>SCP8</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Citra</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file8.pdf">file8.pdf</a></td>
                                    <td>2024-04-08</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>SCP9</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Citra</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file9.html">file9.html</a></td>
                                    <td>2024-04-09</td>
                                        <td><span class="badge bg-primary"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>SCP10</td>
                                    <td>Kehilangan Data</td>
                                    <td>Ina</td>
                                    <td>Kasir</td>
                                    <td><a href="file10.xlsx">file10.xlsx</a></td>
                                    <td>2024-04-10</td>
                                        <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>SCP11</td>
                                    <td>Gangguan Koneksi Jaringan</td>
                                    <td>Citra</td>
                                    <td>Admin Kredit</td>
                                    <td><a href="file11.txt">file11.txt</a></td>
                                    <td>2024-04-11</td>
                                        <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>SCP12</td>
                                    <td>Perangkat Lunak Bermasalah</td>
                                    <td>Kartika</td>
                                    <td>Teller</td>
                                    <td><a href="file12.zip">file12.zip</a></td>
                                    <td>2024-04-12</td>
                                        <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                        <td><a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
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