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

                        <?php if (session()->getFlashdata('message')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="forminputtiket">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Persoalan</label>
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="image_uploads" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="image_uploads" name="img"
                                        accept=".jpg, .jpeg, .png">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="file_uploads" class="form-label">Lampiran File</label>
                                    <input class="form-control" type="file" id="image_uploads" name="file_uploads">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stafterkait">Staf Terkait</label>
                                <input type="text" class="form-control" name="staf_terkait" placeholder="Staf Terkait">
                            </div>
                            <div class="form-group">
                                <label for="niastafterkait"> NIA Staf Terkait</label>
                                <input type="text" class="form-control" name="nia_staf_terkait"
                                    placeholder="NIA Staf Terkait">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                            <button type="reset" class="btn btn-secondary" id="btnSubmit">Reset</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<script>

    $(document).on('submit', '#forminputtiket', function (par) {
        par.preventDefault();
        var desc = $('input[name="deskripsi"]');
        var img = $('input[name="img"]');
        $.ajax({
            url: "../api/insert",
            contentType: 'application/json',
            type: 'POST',
            data: JSON.stringify({
                table: 'tiket',
                id: '',
                data: [$('#forminputtiket').serializeArray().reduce(function (obj, item) {
                    obj[item.name] = item.value;
                    return obj;
                }, {})]
            }),
            // data: [
            //         {
            //             "user_id": "11",
            //             "tiketkategori_id": "1",
            //             "status": "1",
            //             "prioritas": "none",
            //             "tgl_buat": "2024-05-14 00:00:00",
            //             "deskripsi": "Kalsdmkalskdlaksd;akd",
            //             "nama_file": "form trouble.docx",
            //             "img": "/assets/img/1_1_2024_04_06.jpg"
            //         }
            //     ]
            dataType: 'JSON',
            success: function (response) {

            }
        });
    });

</script>

<?= $this->endSection() ?>