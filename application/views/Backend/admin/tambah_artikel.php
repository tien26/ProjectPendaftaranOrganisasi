
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><a class="text-white" href="<?= base_url('Admin/upload_dokumentasi'); ?>"><i class="far fa-hand-point-right"></i> <?= $judul; ?></a> / Tambah Artikel</h3>
                          </div>
                        </div>

                        <center>
                          <div class="col-sm-8">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Upload Artikel</h3>
                                </div>
                              <div class="card-body">

                                <?= $this->session->flashdata('artikel'); ?>

                                <form method="post" action="#" enctype="multipart/form-data">
                                <div class="col-auto">
                                  <label for="a_judul" class="visually-hidden">Judul</label>
                                  <input type="text" name="judul" class="form-control" id="a_judul" placeholder="Masukan">
                                  <?= form_error('judul', '<small class="text-danger">','</small>' ); ?>
                                </div>


                                <div class="col-auto mt-2 mb-1">
                                  <label for="a_organisasi" class="visually-hidden">Organisasi</label>
                                  <input type="text" readonly name="organisasi" class="form-control" id="a_organisasi" value="<?= $this->session->userdata('organisasi'); ?>">
                                </div>

                                <div class="col-auto mt-2">
                                  <label for="a_foto" class="visually-hidden">Foto</label>
                                  <input type="file" name="foto" class="form-control" id="a_foto">
                                </div>

                                <div class="col-auto mt-3 mb-3">
                                  <label for="a_isi" class="visually-hidden">Isi Artikel</label>
                                  <textarea type="text" name="isi" class="form-control" id="a_isi" placeholder="Masukan"></textarea>
                                  <?= form_error('isi', '<small class="text-danger">','</small>' ); ?>
                                </div>

                                <center>
                                    <button class="btn btn-success form-control col-4" type="submit">Kirim Artikel</button>
                                </center>
                                </form>

                            </div>
                          </div>
                        </div>
                        </center>
                    </div>
                </div>
            </div>