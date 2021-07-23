
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

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card" style="overflow-x: auto;">    
                            <table class="table my-2">
                              <thead class="table-dark">
                                <tr>
                                  <th class="text-white">#</th>
                                  <th class="text-white">Nama</th>
                                  <th class="text-white">Tanggal Lahir</th>
                                  <th class="text-white">Alamat</th>
                                  <th class="text-white">Kelas</th>
                                  <th class="text-white">Nomer Hp</th>
                                  <th class="text-white">Foto</th>
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
                                  <td><?php echo $dta->t_lahir ?></td>
                                  <td><?php echo $dta->alamat ?></td>
                                  <td><?php echo $dta->kelas ?></td>
                                  <td><?php echo $dta->no_hp ?></td>
                                  <td><img src="<?php echo base_url(); ?>assets/Backend/profile/<?php echo $dta->gambar ?>" width="50"></td>
                                </tr>

                                <?php } ?>

                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>