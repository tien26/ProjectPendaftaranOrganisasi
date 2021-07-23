                              <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $akun = 'Admin/s_akun';
                                    $profil = 'Admin/s_profil';
                                  }else{
                                    $akun = 'User/s_akun';
                                    $profil = 'User/s_profil';
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
                        </div>

                      <div class="row mx-3">

                        <div class="card mb-3 mx-3" style="max-width: 540px;">
                          <div class="row g-0">

                            <div class="col-md-5">
                              <img class="img-thumbnail border-0 " src="<?= base_url('assets/Backend/profile/') . $this->session->userdata('gambar'); ?>" alt="...">
                              <h4 class="card-title text-center"><?= $user['nama']; ?></h4>
                            </div>

                            <div class="col-md-7">
                              <div class="card-body text-center">
                                <span class=""><h5><?= $this->session->userdata('organisasi'); ?></h5></span>
                                <span class=""><h5><?= $user['t_lahir']; ?></h5></span>
                                <span class=""><h5><?= $user['alamat']; ?></h5></span>
                                <span class=""><h5><?= $user['kelas']; ?></h5></span>
                                <span class=""><h5><?= $user['no_hp']; ?></h5></span>
                                <p class="mx-2"><small class="text-muted">Gabung Pada <?= date('d F Y', $user['dibuat']); ?></small></p>
                              </div>
                            </div>

                          </div>
                          <a href="<?= base_url($profil); ?>" class="btn btn-primary">Setting Profil</a>
                        </div>

                        <?php 
                        if ($user['is_active'] == 1) {
                          $status = 'Aktif';
                        }
                         ?>

                        <div class="col-sm-5">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title text-center">Informasi Akun</h5>
                                  <p class="card-text">Username : <?= $this->session->userdata('username'); ?></p>
                                  <p class="card-text">Status   : <?= $status; ?></p>
                                  <p class="card-text">Organisasi   : <?= $this->session->userdata('organisasi'); ?></p>
                                  
                                  <a href="<?= base_url($akun); ?>" class="btn btn-primary">Setting Akun</a>
                                </div>
                              </div>
                        </div>

                      </div>

                    </div>
                </div>
            </div>