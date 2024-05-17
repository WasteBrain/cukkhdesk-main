<?= $this->extend('Admin/Content/master') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <h5 class="mb-2">Info Box</h5>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Messages</span>
            <span class="info-box-number">1,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Bookmarks</span>
            <span class="info-box-number">410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uploads</span>
            <span class="info-box-number">13,648</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">93,139</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- =========================================================== -->
    <h5 class="mb-2">Info Box With Custom Shadows <small><i>Using Bootstrap's Shadow Utility</i></small></h5>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-none">
          <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Shadows</span>
            <span class="info-box-number">None</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-sm">
          <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Shadows</span>
            <span class="info-box-number">Small</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow">
          <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Shadows</span>
            <span class="info-box-number">Regular</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-lg">
          <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Shadows</span>
            <span class="info-box-number">Large</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!--  -->
    <!-- Small boxes (Stat box) -->

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Total Tiket</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Software</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Hardware</p>
          </div>

          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Network</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>ATM</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>

        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>KKD</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>10</h3>

            <p>Tiket Ditahan</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>5</h3>

            <p>Software</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>3</h3>

            <p>Hardware</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>2</h3>

            <p>Network</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>2</h3>

            <p>ATM</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>2</h3>

            <p>KKD</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>Tiket Ditangani</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>Software</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>Hardware</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>Network</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>ATM</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>100</h3>

            <p>KKD</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>20</h3>

            <p>Tiket Ditolak</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>100</h3>

            <p>Software</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>100</h3>

            <p>Hardware</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>100</h3>

            <p>Network</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>100</h3>

            <p>ATM</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>100</h3>

            <p>KKD</p>
          </div>
          <div class="icon">
            <i class="ion ion-document-text"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
    </div>
    <hr>
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>144</h3>

            <p>Total User</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>95</h3>

            <p>Status Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>30</h3>

            <p>Status Non-Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>135</h3>

            <p>User Kantor</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>95</h3>

            <p>Status Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>30</h3>

            <p>Status Non-Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>

      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>5</h3>

            <p>User Departemen</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>5</h3>

            <p>Status Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>0</h3>

            <p>Status Non-Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>

      </div>
      <!-- ./col -->

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>15</h3>

            <p>User Teknisi</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-success">
          <div class="inner">
            <h3>95</h3>

            <p>Status Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>30</h3>

            <p>Status Non-Aktif</p>
          </div>

          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>