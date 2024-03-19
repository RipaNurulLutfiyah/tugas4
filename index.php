<?php include_once 'layouts/header.php' ?>
<?php include_once 'layouts/sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Data Area Parkir</h3>
                                <div class="col-mr-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Gedung</a></li>
                                        <li class="breadcrumb-item"><a href="#"></a></li>

                                    </ol>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <button class="btn btn-primary mb-3">Tambah</button>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Area</th>
                                            <th>Kapasitas</th>
                                            <th>Gedung</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Area Depan B2</td>
                                            <td>100</td>
                                            <td>Kampus b2 STT-NF</td>
                                            <td>Edit | Hapus</td>

                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>2</td>
                                            <td>Area Belakang B2</td>
                                            <td>40</td>
                                            <td>Kampus B2 STT-NF</td>
                                            <td>Edit | Hapus</td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include_once 'layouts/footer.php' ?>