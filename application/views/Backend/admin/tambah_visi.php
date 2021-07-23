
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url('Admin/upload_proker'); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / Tambah Visi</h3>
                          </div>
                        </div>

                        <center>
                          <form action="<?= base_url('Admin/tambah_visi') ?>" method="post">
                        <div class="card" style="max-width: 500px;">
                          
                          <div class="col-sm-12">

                            <div class="card-header">
                                <h3 class="text-danger">Buat Visi</h3>
                            </div>
                              <div class="card-body">

                                <div class="col-auto mb-2">
                                  <label for="ketua_l" class="visually-hidden">Ketua Laki-Laki</label>
                                  <input type="text" name="ketua_l" class="form-control" id="ketua_l" placeholder="Masukan Ketua Laki-Laki">
                                  <?= form_error('ketua_l', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mb-2">
                                  <label for="ketua_p" class="visually-hidden">Ketua Perempuan</label>
                                  <input type="text" name="ketua_p" class="form-control" id="ketua_p" placeholder="Masukan Ketua Perempuan">
                                  <?= form_error('ketua_p', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mb-2">
                                  <label for="periode" class="visually-hidden">Periode</label>
                                  <input type="text" name="periode" class="form-control" id="periode" placeholder="Masukan Tahun Jabatan">
                                  <?= form_error('periode', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mb-2">
                                  <label for="organisasi" class="visually-hidden">Organisasi</label>
                                  <input type="text" readonly name="organisasi" class="form-control" id="organisasi" value="<?= $this->session->userdata('organisasi'); ?>">
                                </div>

                                <div class="col-auto mb-2">
                                  <label for="visi" class="visually-hidden">Visi</label>
                                  <textarea type="text" name="visi" class="form-control" id="visi" placeholder="Masukan Visi"></textarea>
                                  <?= form_error('visi', '<small class="text-danger">','</small>' ); ?>
                                </div>

                              </div>
                              <button type="submit" class="btn btn-primary">Tambah Visi</button>
                          </div>

                        </div>
                        </form>
                      </center>

                    </div>
                </div>
            </div>

