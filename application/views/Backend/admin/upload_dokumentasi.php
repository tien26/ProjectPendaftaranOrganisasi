
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><?= $judul; ?></h3>
                          </div>
                        </div>

                      <center>
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <h3 class="text-primary text-center">Data Foto</h3>

                                <table class="table table-warning">
                                  <thead>

                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Foto</th>
                                      <th scope="col">Foto</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                    <?php 
                                    $no = 1 ;
                                      foreach ($foto as $f) {
                                    ?>
                                    <tr>
                                      <th scope="row"><?= $no++ ?></th>
                                      <td><?= $f->judul ?></td>
                                      <td><?= date('d F Y', $f->dibuat ); ?></td>
                                      <td><img src="<?php echo base_url(); ?>uploads/galery/<?= $f->foto ?>" width="50"></td>
                                      <td><a class="btn-sm btn-info" href="<?php echo base_url('Admin/ubah_foto/').$f->id.'' ?>"><i class="far fa-edit"></i></a> | <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/foto_hapus/').$f->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"><i class="far fa-trash-alt"></i></a></td>

                                    </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>

                              </div>

                              <div class="mb-3">
                                <center>
                                <a href="<?= base_url('Admin/tambah_foto'); ?>" class="btn-sm btn-primary text-center">Tambah Foto</a>
                                </center>
                              </div>
                              
                            </div>
                          </div>

                          <div class="col-sm-10">
                            <div class="card">
                              <div class="card-body">

                                <h3 class="text-primary text-center">Data Artikel</h3>

                                <table class="table table-danger">
                                  <thead>

                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Foto</th>
                                      <th scope="col">Dibuat</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                      <?php 
                                    $no = 1 ;
                                      foreach ($artikel as $a) {
                                    ?>
                                    <tr>
                                      <th scope="row"><?= $no++ ?></th>
                                      <td><?= $a->judul ?></td>
                                      <td><img src="<?php echo base_url(); ?>uploads/artikel/<?= $a->foto ?>" width="50"></td>
                                      <td><?= date('d F Y', $a->dibuat ); ?></td>
                                      <td><a class="btn-sm btn-info" href="<?php echo base_url('Admin/ubah_artikel/').$a->id.'' ?>"><i class="far fa-edit"></i></a> | <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/artikel_hapus/').$a->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                    <?php } ?>

                                    
                                    
                                  </tbody>
                                </table>

                            </div>
                              <div class="mb-3">
                                <center>
                                <a href="<?= base_url('Admin/tambah_artikel'); ?>" class="btn-sm btn-primary text-center">Buat Artikel</a>
                                </center>
                              </div>
                          </div>
                        </div>
                        </center>

                    </div>
                </div>
            </div>