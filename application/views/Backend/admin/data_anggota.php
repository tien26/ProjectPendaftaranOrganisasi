
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
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-center bg-white py-1">
                                    
                                <h3 class="text-muted mt-1"><i class="fas fa-users"></i> Kelola Data Anggota</h3>

                                </div>
                            </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="overflow-x: auto;">    
                            <table class="table table-primary table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">Tanggal Lahir</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Kelas</th>
                                  <th scope="col">Nomer Hp</th>
                                  <th scope="col">Foto</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <?php 
                                    $no=1;
                                    foreach ($user as $dta) {
                                   ?>
                                  <th scope="row"><?php echo $no++ ?></th>
                                  <td><?php echo $dta->nama ?></td>
                                  <td><?php echo $dta->username ?></td>
                                  <td><?php echo $dta->t_lahir ?></td>
                                  <td><?php echo $dta->alamat ?></td>
                                  <td><?php echo $dta->kelas ?></td>
                                  <td><?php echo $dta->no_hp ?></td>
                                  <td><img src="<?php echo base_url(); ?>assets/Backend/profile/<?php echo $dta->gambar ?>" width="50"></td>
                                <td>
                                    <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/anggota_hapus/').$dta->id.'' ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Hapus</a>
                                  </td>
                                </tr>
                                  <?php } ?>

                              </tbody>
                            </table>
                        </div>

                </div>
            </div>