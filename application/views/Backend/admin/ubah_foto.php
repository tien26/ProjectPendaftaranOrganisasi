
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url('Admin/upload_dokumentasi'); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> /  Ubah Foto</h3>
                          </div>
                        </div>

                        <center>    
                          <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Ubah Foto</h3>
                                </div>
                              <div class="card-body">

                                <?= $this->session->flashdata('error'); ?>

                                <form method="post" action="<?= base_url('Admin/ubah_foto_aksi'); ?>" enctype="multipart/form-data">
                                <div class="col-auto mb-1">
                                  <label for="judul" class="visually-hidden">Judul</label>
                                  <input type="hidden" name="id" value="<?= $foto['id']; ?>">
                                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul Foto.." value="<?= $foto['judul']; ?>">
                                  <?= form_error('judul', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <div class="col-auto mb-1">
                                  <label for="foto" class="visually-hidden">Foto</label>
                                  <input type="file" name="foto" class="form-control" id="foto">
                                </div>

                                <div class="col-auto mt-2 mb-3">
                                  <label for="organisasi" class="visually-hidden">Organisasi</label>
                                  <input type="text" readonly name="organisasi" class="form-control" id="organisasi" value="<?= $this->session->userdata('organisasi'); ?>">
                                </div>
                                <button class="btn btn-success form-control" type="submit">Ubah Foto</button>
                                </form>

                              </div>
                            </div>
                          </div>
                          </center>
                    </div>
                </div>
            </div>