<?= $this->extend('Admin/Content/master') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tiket</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Tiket</li>
          <li class="breadcrumb-item active">Masuk</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">

  <div class="container-fluid">

    <!-- Timelime example  -->
    <div class="row">
      <div class="col-md-12">
        <!-- The time line -->
        <div class="timeline">
          <!-- timeline time label -->
          <div class="time-label">
            <span class="bg-blue">10 Feb. 2014</span>
          </div>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <div>
            <i class="fas fa-envelope bg-yellow"></i>
            <div class="timeline-item">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-warning">
                  MEDIUM
                </div>
              </div>
              <span class="time"></span>
              <h3 class="timeline-header bg-warning">
                <a href="#">Kantor Pusat</a>
                <span class="badge badge-white"><i class="fas fa-clock"></i> 14:05</span>
              </h3>
              <div class="timeline-body">
                No. Tiket : <strong>KP01SOFT</strong>
                <p class="text-muted"></p>

                Kategori : <strong>SOFTWARE</strong>
                <p class="text-muted"></p>
                Staf Terkait : <strong>SARIANI ANBI | KASIR</strong>
                <p class="text-muted"></p>

                Persoalan : <strong>Clean Database</strong>
                <p class="text-muted">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </p>

                File :
                <div class="responsive">
                  <div class="gallery">
                    <a class="btn btn-info" target="_blank" href="<?= base_url() ?>assets/dist/img/photo2.png">
                      <i class="fas fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="timeline-footer">
                <form class="form-horizontal">
                  <div class="input-group input-group">

                    <div class="input-group-prepend">
                      <span class="input-group-text">Teknisi</span>
                    </div>
                    <select class="form-control form-control" aria-label="Default select example">
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
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END timeline item -->
          <!-- timeline item -->
          <div>
            <i class="fas fa-envelope bg-blue"></i>
            <div class="timeline-item">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-danger">
                  URGENT
                </div>
              </div>
              <span class="time"></span>
              <h3 class="timeline-header bg-danger">
                <a href="#">Kantor Sentral</a>
                <span class="badge badge-white"><i class="fas fa-clock"></i> 12:05</span>
              </h3>
              <div class="timeline-body">
                No. Tiket : <strong>KS01SOFT</strong>
                <p class="text-muted"></p>

                Kategori : <strong>SOFTWARE</strong>
                <p class="text-muted"></p>
                Staf Terkait : <strong>SARIANI ANBI | KASIR</strong>
                <p class="text-muted"></p>

                Persoalan : <strong>Clean Database</strong>
                <p class="text-muted">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </p>

                File :
                <div class="responsive">
                  <div class="gallery">
                    <a class="btn btn-info" target="_blank" href="<?= base_url() ?>assets/dist/img/photo2.png">
                      <i class="fas fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="timeline-footer">
                <form class="form-horizontal">
                  <div class="input-group input-group">

                    <div class="input-group-prepend">
                      <span class="input-group-text">Teknisi</span>
                    </div>
                    <select class="form-control form-control" aria-label="Default select example">
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
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END timeline item -->
          <!-- timeline item -->
          <div>
            <i class="fas fa-envelope bg-red"></i>
            <div class="timeline-item">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-danger">
                  URGENT
                </div>
              </div>
              <span class="time"></span>
              <h3 class="timeline-header bg-danger">
                <a href="#">Nanga Mau</a>
                <span class="badge badge-white"><i class="fas fa-clock"></i> 12:05</span>
              </h3>
              <div class="timeline-body">
                No. Tiket : <strong>NM01SOFT</strong>
                <p class="text-muted"></p>

                Kategori : <strong>SOFTWARE</strong>
                <p class="text-muted"></p>
                Staf Terkait : <strong>SARIANI ANBI | KASIR</strong>
                <p class="text-muted"></p>

                Persoalan : <strong>Clean Database</strong>
                <p class="text-muted">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </p>

                File :
                <div class="responsive">
                  <div class="gallery">
                    <a class="btn btn-info" target="_blank" href="<?= base_url() ?>assets/dist/img/photo2.png">
                      <i class="fas fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="timeline-footer">
                <form class="form-horizontal">
                  <div class="input-group input-group">

                    <div class="input-group-prepend">
                      <span class="input-group-text">Teknisi</span>
                    </div>
                    <select class="form-control form-control" aria-label="Default select example">
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
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END timeline item -->
          <div>
            <i class="fas fa-clock bg-gray"></i>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.timeline -->
</section>

<!-- /.content -->


<?= $this->endSection() ?>