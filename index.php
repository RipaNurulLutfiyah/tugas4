<?php include_once 'layouts/header.php' ?>
<?php include_once 'layouts/sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-md-6">
                <h4>Data peminjaman Laptop</h4>
              </div>
              <div class="col-md-6 mt-2">
                <ol class="breadcrumb d-flex justify-content-end">
                  <li class="breadcrumb-item"><a href="login.php">Login</a></li>
                  <li class="breadcrumb-item active">Reservasi</li>
                </ol>
              </div>
            </div>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">         
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Type laptop</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Yasmin </td>
                            <td>1 hari</td>
                            <td>Lenovo Thinkbook 14</td>
                            <td>
                              <a href="#" class=" p-2">Edit</a> | <a href="#" class=" p-2">Hapus</a> 
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Dina Andriani</td>
                            <td>6 Jam</td>
                            <td>HP SPECTRE X360</td>
                            <td>
                              <a href="#" class=" p-2">Edit</a> | <a href="#" class=" p-2">Hapus</a> 
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>

                      <div class="row my-3" >
                        <div class="col-md-5 mx-auto">
                            <fieldset class=" p-2" style="border: 2px solid #ccc;">
                              <legend class="float-none w-auto p-2">
                                Form Reservasi
                              </legend>
                              <form>
                                <div class="form-group mt-2 row">
                                  <label
                                    for="dokter"
                                    class="col-sm-3 col-col-sm-3 col-form-label ml-1"
                                    >Nama</label
                                  >
                                  <div class="col-sm-8">
                                    <select
                                      class="form-select"
                                      id="dokter"
                                      name="kategoriMinjam"
                                      required
                                    >
                                      <option value="" disabled selected>Pilih Laptop</option>
                                      <option value="1">Laptop 1</option>
                                      <option value="2">Laptop 2</option>
                                      <option value="2">Laptop 3</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group mt-2 row">
                                    <label
                                      for="namaPesanan"
                                      class="col-sm-3 col-col-sm-3 col-form-label ml-1"
                                      >Waktu</label
                                    >
                                    <div class="col-sm-8">
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="namaPesanan"
                                        name="namaPesanan"
                                        required
                                      />
                                    </div>
                                  </div>

                                  <div class="form-group mt-2 row">
                                    <label
                                      for="Montir"
                                      class="col-sm-3 col-form-label ml-1"
                                      >Kapasitas</label
                                    >
                                    <div class="col-sm-8">
                                      <input
                                        type="number"
                                        class="form-control"
                                        id="Montir"
                                        name="Montir"
                                        required
                                      />
                                    </div>
                                  </div>
                    
                                 
                                <div class="form-group mt-2 row">
                                  <div class="col-md-9 offset-sm-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                                </div>
                              </form>
                            </fieldset>
                        </div>
                      </div>
                </div>
            </div>
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include_once 'layouts/footer.php' ?>