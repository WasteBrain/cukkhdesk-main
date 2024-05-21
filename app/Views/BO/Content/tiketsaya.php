<?= $this->extend('BO/Content/master') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tiket Saya</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tiket Saya</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tiket Saya</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>No. Tiket</th>
                                    <th>Tgl Tiket</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Lampiran File</th>
                                    <th style="width: 40px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>BO01SOFT23</td>
                                    <td>23 APRIL 2024</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/img/photo2.png">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/fileDoc/saldoakun.xls">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </td>

                                    <td><span class="badge bg-info">Diterima</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>BO01SOFT23</td>
                                    <td>23 APRIL 2024</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/img/photo2.png">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/fileDoc/saldoakun.xls">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Dicek</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>BO01SOFT23</td>
                                    <td>23 APRIL 2024</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/img/photo2.png">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/fileDoc/saldoakun.xls">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>BO01SOFT23</td>
                                    <td>23 APRIL 2024</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/img/photo2.png">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="gallery">
                                            <a class="btn btn-info" target="_blank"
                                                href="<?= base_url() ?>assets/dist/fileDoc/saldoakun.xls">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">Ditolak</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>