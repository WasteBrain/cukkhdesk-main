<!DOCTYPE html>
<html lang="id">

<head>
  <!-- meta -->
  <?= $this->include('Template/meta'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- navbar -->
    <?= $this->include('BO/Navigation/navbar'); ?>
    <!-- sidebar -->
    <?= $this->include('BO/Navigation/sidebar'); ?>

    <!-- content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?= $this->renderSection('content') ?>
    </div>

    <!-- footer -->
    <?= $this->include('Template/footer'); ?>

  </div>
  <!-- ./wrapper -->

  <!-- script -->
  <?= $this->include('Template/script_bo'); ?>
</body>

</html>