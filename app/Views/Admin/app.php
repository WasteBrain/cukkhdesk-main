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
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Ticket Submitted <span>| This Month</span></h5>

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
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Ticket Handled <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-tools"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->
        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Reports <span>/This Month</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Software',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Networking',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Hardware',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },xaxis: {
                        type: 'category',
                        categories: ["2018-09-01", "2018-09-02", "2018-09-5","2018-09-9","2018-09-11", "2018-09-16", "2018-09-19", "2018-09-25", "2018-09-30"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

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
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Badau</td>
                                    <td>Network Connectivity Issue</td>
                                    <td><a href="file1.pdf">file1.pdf</a></td>
                                    <td>2024-04-18</td>
                                    <td>Networking</td>
                                    <td><span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lanjak</td>
                                    <td>Software Installation Problem</td>
                                    <td><a href="file2.docx">file2.docx</a></td>
                                    <td>2024-04-17</td>
                                    <td>Software</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rumah Sepan</td>
                                    <td>Hardware Malfunction</td>
                                    <td><a href="file3.jpg">file3.jpg</a></td>
                                    <td>2024-04-16</td>
                                    <td>Hardware</td>
                                    <td><span class="badge bg-secondary"><i class="bi bi-collection me-1"></i>Waiting for Parts</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nanga Mau</td>
                                    <td>Printer Not Printing</td>
                                    <td><a href="file4.pdf">file4.pdf</a></td>
                                    <td>2024-04-15</td>
                                    <td>Hardware</td>
                                    <td><span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>On Hold</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Merakai</td>
                                    <td>Email Configuration Issue</td>
                                    <td><a href="file5.txt">file5.txt</a></td>
                                    <td>2024-04-14</td>
                                    <td>Networking</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Resolved</span></td>
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