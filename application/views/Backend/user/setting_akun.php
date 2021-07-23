                              <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $action = 'Admin/s_akun';
                                  }else{
                                    $action = 'User/s_akun'; 
                                  }
                              ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                  
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="<?= base_url($action); ?>" method="post" enctype="multipart/form-data">
                        <div class="card">
                          <div class="card-body bg-primary">
                            <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $akun = 'Admin/my_profil';
                                  }else{
                                    $akun = 'User';
                                  }
                                   ?>
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url($akun); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / <strong>Setting Akun</strong></h3>
                          </div>
                        </div>

                      <center>
                        <div class="card" style="max-width: 400px;">
                          <div class="col-sm-12">
                              <div class="card-body">

                                 <?= $this->session->flashdata('pass'); ?>

                                <div class="col-auto">
                                  <label for="password" class="visually-hidden">Password Lama</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Anda..">
                                  <?= form_error('password', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="password1" class="visually-hidden">Password Baru</label>
                                  <input type="password" name="password1" class="form-control" id="password1" placeholder="Masukan Password Baru..">
                                  <?= form_error('password1', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="password2" class="visually-hidden">Konfirmasi Password Baru</label>
                                  <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password Baru..">
                                  <?= form_error('password2', '<small class="text-danger">','</small>' ); ?>
                                </div>

                              </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Ubah Password</button>
                        </div>
                      </center>
                      </form>
                    </div>

                </div>
            </div>