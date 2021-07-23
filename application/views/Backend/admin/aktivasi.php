
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                  
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      
                        <form method="post" action="<?= base_url('Admin/ak_edit') ?>" enctype="multipart/form-data">
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url('Admin'); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / <strong>Aktivasi Anggota</strong></h3>
                          </div>
                        </div>

                      <center>
                        <div class="card" style="max-width: 450px;">
                          <div class="col-sm-12">
                              <div class="card-body">

                                <div class="col-auto">
                                  <label for="id" class="visually-hidden">Nama</label>
                                  <input type="hidden" name="id" readonly class="form-control" id="id" value="<?= $user['id']; ?>">
                                  <input type="text" name="nama" readonly class="form-control" id="nama" value="<?php echo $user['nama']; ?>">
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="username" class="visually-hidden">Username</label>
                                  <input type="text" name="username" readonly class="form-control" id="username" value="<?php echo $user['username']; ?>">
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="kelas" class="visually-hidden">Kelas</label>
                                  <input type="text" name="kelas" readonly class="form-control" id="kelas" value="<?php echo $user['kelas']; ?>">
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="no_hp" class="visually-hidden">No Hp</label>
                                  <input type="text" name="no_hp" readonly class="form-control" id="no_hp" value="<?php echo $user['no_hp']; ?>">
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="aktivasi" class="visually-hidden">Aktivasi</label>
                                  <select class="form-control" name="aktivasi" id="aktivasi">
                                    <option disabled="disabled">~ Pilih Kelas ~</option>
                                    <option value="2">Tidak Diizinkan</option>
                                    <option value="1">Izinkan</option>
                                  </select>
                                </div>

                              </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Terima Anggota</button>
                        </div>
                      </center>
                      </form>
                      
                    </div>

                </div>
            </div>