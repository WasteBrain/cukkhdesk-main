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
        <div class="row">
            
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Tiket</th>
                      <th>Branch Office</th>
                      <th>Kategori</th>
                      <th>Tgl Masuk</th>
                      <th>Persoalan</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>1</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                <i class="ion ion-android-open"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>2</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>3</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>4</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>5</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>6</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>7</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>8</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>9</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>10</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>11</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>12</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>13</td>
                        <td>KS01SOFT</td>
                        <td>Kantor Sentral</td>
                        <td>Software</td>
                        <td>11-7-2014</td>
                        <td>Clean database</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-block"><i class="ion ion-android-open"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between bg-primary">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<?= $this->endSection() ?>