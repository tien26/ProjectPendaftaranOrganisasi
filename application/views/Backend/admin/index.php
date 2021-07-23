
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

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="bg-primary text-white text-center">Total Data Anggota</h5>
                                        <div class="metric-value text-center">
                                            <i class="fas fa-fw fa-users fa-3x"></i>
                                            <h2 class="mb-1 "><?= $anggota; ?> Anggota</h2>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="bg-primary text-white text-center">Aktivasi Calon Anggota</h5>
                                        <div class="metric-value text-center">
                                            <i class="fas fa-clipboard-check fa-3x"></i>
                                            <h2 class="mb-1 "><?= $calon ; ?> Anggota</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-center bg-white py-1">
                                    
                                <h3 class="text-muted mt-1"><i class="fas fa-clipboard-check"></i> Aktivasi Anggota</h3>

                                </div>
                            </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="overflow-x: auto;">    
                            <table class="table table-primary table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">Kelas</th>
                                  <th scope="col">Nomer Hp</th>
                                  <th scope="col">Aktivasi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <?php 
                                    $no=1;
                                    foreach ($user as $ak) {
                                   ?>

                                  <th scope="row"><?= $no++ ?></th>
                                  <td><?php echo $ak->nama ?></td>
                                  <td><?php echo $ak->username ?></td>
                                  <td><?php echo $ak->kelas ?></td>
                                  <td>@<?php echo $ak->no_hp ?></td>

                                  <?php 
                                  if ($ak->is_active == 2) {
                                    $nilai = 'Belum Diizinkan';
                                  }
                                   ?>

                                  <td class="text-danger"><?php echo $nilai ?></td>
                                  <td>
                                    <a class="btn-sm btn-primary" href="<?php echo base_url('Admin/aktivasi/').$ak->id.'' ?>">Aktivasi</a>
                                  </td>
                                  <td>
                                    <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/anggota_hapus/').$ak->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Hapus</a>
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>

                </div>
            </div>
