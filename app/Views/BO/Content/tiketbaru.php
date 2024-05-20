<?= $this->extend('BO/Content/master') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Buat Tiket</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Buat Tiket</li>
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
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tiket</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="newTiketForm">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="persoalan">Persoalan</label>
                                <input type="text" class="form-control" id="persoalan" placeholder="Persoalan">
                            </div>
                            <div class="form-group">
                                <label for="persoalan">Deskripsi Persoalan</label>
                                <textarea class="form-control" rows="5" name="deskripsipersoalan"
                                    id="deskripsipersoalan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stafterkait">Staf Terkait</label>
                                <input type="text" class="form-control" id="stafterkait" placeholder="Staf Terkait">
                            </div>
                            <div class="form-group">
                                <label for="niastafterkait"> NIA Staf Terkait</label>
                                <input type="text" class="form-control" id="niastafterkait"
                                    placeholder="NIA Staf Terkait">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>