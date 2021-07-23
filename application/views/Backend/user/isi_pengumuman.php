                                <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $isi = 'Admin/pengumuman';
                                  }else{
                                    $isi = 'User/pengumuman';
                                  }
                                   ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url($isi); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / Isi Pengumuman</h3>
                          </div>
                        </div>

                        <div class="card-body">

                            <div class="list-group text-center">
                              <span class="list-group-item list-group-item">
                                <div class="d-flex w-100 justify-content-between mb-4">
                                  <h4 class="mb-1">Tujuan Pengumuman : <?= $user['penerima']; ?></h4>
                                  <p class="mb-1"><?php echo date('d F Y', $user['dibuat'] ); ?></p>
                                </div>
                                <h3 class="mb-3 text-primary"><?php echo $user['judul']; ?></h3>
                                <p class="text-center"><?php echo $user['isi']; ?></p>

                                <div class="d-flex w-100 justify-content-between">
                                  <h4 class="mb-1">Dibuat Oleh : <strong><?php echo $user['nama']; ?></strong></h4>
                                </div>
                              </span>
                              
                            </div>

                          </div>

                    </div>
                </div>
            </div>