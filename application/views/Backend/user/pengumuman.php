                              <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $isi = 'Admin/isi_aksi/';
                                  }else{
                                    $isi = 'User/isi_aksi/'; 
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
                            <h3 class="text-center text-white"><?= $judul; ?></h3>
                          </div>

                          <div class="card-body bg-dark">
                            <div class="list-group text-center">

                              <?php 
                                foreach ($user as $pengumuman) {
                              ?>

                              <a href="<?= base_url($isi).$pengumuman->id.''; ?>" class="list-group-item list-group-item-action mb-1" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                  <h4 class="mb-1 text-primary"><?php echo $pengumuman->judul; ?></h4>
                                  <small><?php echo date('d F Y', $pengumuman->dibuat ); ?></small>
                                </div>
                                <p class="mb-1">Pengumuman Untuk : <?php echo $pengumuman->penerima; ?></p>
                                <small>dibuat oleh : <?php echo $pengumuman->nama; ?></small>
                                <p class="text-primary">Lihat Selengkapnya..</p>
                              </a>

                              <?php } ?>

                            </div>
                          </div>                          

                        </div>

                    </div>
                </div>
            </div>