                              <?php 
                                  if ($this->session->userdata('role_id') == 1) {
                                    $action = 'Admin/s_profil';
                                  }else{
                                    $action = 'User/s_profil'; 
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
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url($akun); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / <strong>Setting Profile</strong></h3>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <div class="col-auto">
                                  <label for="username" class="visually-hidden">Username</label>
                                  <input type="text" name="username" readonly class="form-control" id="username" value="<?= $user['username']; ?>">
                                  <?= form_error('username', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="nama" class="visually-hidden">Nama</label>
                                  <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama']; ?>">
                                  <?= form_error('nama', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="kelas" class="visually-hidden">Kelas</label>
                                  <select class="form-control" name="kelas" id="kelas">
                                    <option disabled="disabled">pilih</option>
                                    <?php
                                      foreach ($kelas as $k ) {
                                    ?>
                                    <?php if ($k->kelas == $user['kelas']): ?>
                                      <option value="<?= $k->kelas ?>" selected><?= $k->kelas ?></option>
                                      <?php else: ?>
                                        <option value="<?= $k->kelas ?>"><?= $k->kelas ?></option>
                                    <?php endif ?>
                                    <?php } ?>
                                  </select>
                                  <?= form_error('kelas', '<small class="text-danger">','</small>' ); ?>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <div class="col-auto">
                                  <label for="t_lahir" class="visually-hidden">Tanggal Lahir</label>
                                  <input type="text" name="t_lahir" class="form-control" id="t_lahir" value="<?= $user['t_lahir']; ?>">
                                  <?= form_error('t_lahir', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="alamat" class="visually-hidden">Alamat</label>
                                  <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $user['alamat']; ?>">
                                  <?= form_error('alamat', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="no_hp" class="visually-hidden">No Hp</label>
                                  <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $user['no_hp']; ?>">
                                  <?= form_error('no_hp', '<small class="text-danger">','</small>' ); ?>
                                </div>

                            </div>
                          </div>
                        </div>

                      </div>
                      <center>
                        <div class="card" style="max-width: 540px;">
                          <button type="submit" class="btn btn-primary">Ubah Profil</button>
                        </div>
                      </center>
                      </form>
                    </div>

                </div>
            </div>