
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

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <h3 class="text-primary text-center">Kelola Visi</h3>

                                <table class="table table-warning">
                                  <thead>

                                    <tr>
                                      <th scope="col">Ketua Pria</th>
                                      <th scope="col">Ketua Wanita</th>
                                      <th scope="col">Periode</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php 
                                    foreach ($visi as $v) {
                                   ?>
                                    <tr>
                                      <td><?php echo $v->ketua_l ?></td>
                                      <td><?php echo $v->ketua_p ?></td>
                                      <td><?php echo $v->periode ?></td>
                                      <td><a class="btn-sm btn-info" href="<?php echo base_url('Admin/ubah_visi/').$v->id.'' ?>"><i class="far fa-edit"></i></a> | <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/visi_hapus/').$v->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                    <?php } ?>

                                     <a  class="btn-sm btn-primary" href="<?= base_url('Admin/tambah_visi'); ?>">Tambah Visi</a>
                                      
                                  </tbody>
                                </table>
                                <span class="text-warning">**Jika akan tambah visi diharuskan hapus visi yang sebelumnya..</span>

                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <h3 class="text-primary text-center">Kelola Misi</h3>

                                <table class="table table-warning">
                                  <thead>
                                    
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Misi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    
                                  </thead>
                                  <tbody>
                                    <?php 
                                    $no=1;
                                    foreach ($misi as $m) {
                                   ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo $m->misi ?></td>
                                        <td><a class="btn-sm btn-info" href="<?php echo base_url('Admin/ubah_misi/').$m->id.'' ?>"><i class="far fa-edit"></i></a></td>

                                        <td><a class="btn-sm btn-danger" href="<?php echo base_url('Admin/misi_hapus/').$m->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    <a class="btn-sm btn-primary" href="<?= base_url('Admin/tambah_misi'); ?>">Tambah Misi</a>

                                  </tbody>
                                </table>

                            </div>
                          </div>
                        </div>

                      </div>

                      <center>
                        <div class="card" style="max-width: 900px;">

                            <h3 class="text-primary text-center mt-3">Kelola Program Kerja</h3>

                            <table class="table table-warning mb-3">
                                  <thead>

                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Program Kerja</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($proker as $p) {
                                   ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo $p->proker ; ?></td>
                                      <td><a class="btn-sm btn-info" href="<?php echo base_url('Admin/ubah_proker/').$p->id.'' ?>"><i class="far fa-edit"></i></a> | <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/proker_hapus/').$p->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                    <?php } ?>

                                  </tbody>
                                </table>
                                <center>
                                  <div class="mb-3">
                                <a class="btn-sm btn-primary col-sm-6" href="<?= base_url('Admin/tambah_proker'); ?>">Tambah Program Kerja</a>
                                </div>
                                </center>
                        </div>
                                
                      </center>

                    </div>
                </div>
            </div>