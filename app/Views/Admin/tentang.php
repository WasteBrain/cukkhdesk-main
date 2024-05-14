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
        <h1>Tentang Program</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('bo/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Tentang Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-12">
                <div class="card p-4">                    
                    <h5 class="card-title">Selamat Datang di Sistem Helpdesk CU Keling Kumang</h5>
                    <i>
                        Selamat datang di Sistem Helpdesk kami, yang dirancang khusus untuk memenuhi kebutuhan layanan Credit Union (CU) Keling Kumang. Kami membawa kepada Anda sebuah platform yang inovatif dan responsif, dirancang untuk menyediakan solusi mudah dan efektif bagi kebutuhan atau masalah yang mungkin Anda miliki.
                    </i>                    
                    <h5 class="card-title">Mengapa Sistem Helpdesk CU Keling Kumang?</h5>
                    <i>    
                        <ol>
                            <li>
                                <b>Pelayanan Berkualitas: </b>Kami percaya bahwa pelayanan yang berkualitas adalah kunci untuk membangun hubungan yang kuat dengan anggota kami.
                            </li>
                            
                            <li>
                                <b>Solusi yang Efisien: </b>Kami memahami betapa berharganya waktu Anda. Oleh karena itu, Sistem Helpdesk kami dirancang untuk memberikan solusi yang efisien bagi setiap masalah atau pertanyaan yang Anda miliki.
                            </li>
                            
                            <li>
                                <b>Keterbukaan dan Transparansi: </b>Kami mengutamakan keterbukaan dan transparansi dalam setiap interaksi. Melalui Sistem Helpdesk, Anda akan mendapatkan informasi yang jelas dan akurat tentang status permintaan atau masalah yang Anda laporkan.
                            </li>
                        </ol>
                    </i>                    
                    <h5 class="card-title">Bagaimana Sistem Helpdesk Bekerja?</h5>
                    <i>    
                        <ol>
                            <li>
                                <b>Laporkan Masalah atau Pertanyaan: </b>Apakah Anda mengalami masalah teknis, memiliki pertanyaan tentang layanan kami, atau memerlukan bantuan lainnya? Anda dapat dengan mudah melaporkannya melalui Sistem Helpdesk kami.
                            </li>
                            
                            <li>
                                <b>Diverifikasi dan Diberikan Nomor Tiket: </b>Setiap permintaan yang Anda laporkan akan diverifikasi oleh tim kami, dan Anda akan diberikan nomor tiket unik untuk melacak status permintaan Anda.
                            </li>
                            
                            <li>
                                <b>Diproses oleh Tim Ahli: </b>Tim kami yang terampil dan berpengalaman akan segera memproses permintaan Anda. Mereka akan bekerja keras untuk memberikan solusi terbaik dan memberikan bantuan yang Anda butuhkan.
                            </li>
                            
                            <li>
                                <b>Pemantauan dan Tindak Lanjut: </b>Kami akan terus memantau dan memberikan tindak lanjut terkait setiap permintaan yang Anda laporkan. Kami berkomitmen untuk memastikan bahwa setiap masalah terselesaikan dengan memuaskan.
                            </li>
                        </ol>
                    </i>
                    <h5 class="card-title">Bagaimana Sistem Helpdesk Bekerja?</h5>
                    <i>
                    Jangan ragu untuk menghubungi kami melalui Sistem Helpdesk kami jika Anda memiliki pertanyaan, masalah, atau umpan balik. Kami siap membantu Anda dengan senang hati dan berkomitmen untuk memberikan layanan terbaik kepada Anda, staf CU Keling Kumang.<br>
                    Terima kasih atas kepercayaan dan dukungan Anda. Bersama-sama, kami akan terus meningkatkan dan menyempurnakan Sistem Helpdesk kami untuk kepuasan Anda yang lebih baik lagi.<br>
                    </i><br><br>
                    <i>Salam hangat,<br>
                    Tim Sistem Helpdesk CU Keling Kumang
                    </i>
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