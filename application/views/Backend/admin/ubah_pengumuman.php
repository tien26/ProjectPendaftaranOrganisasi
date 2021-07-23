
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form method="post" action="<?= base_url('Admin/ubah_pengumuman_aksi'); ?>" enctype="multipart/form-data">
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><?= $judul; ?> / Ubah Pengumuman</h3>
                            <a href="<?= base_url('Admin/buat_pengumuman#data'); ?>" class="btn-sm btn-danger">Kembali</a>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <div class="col-auto mt-2 mb-1">
                                  <label for="nama" class="visually-hidden">Dibuat Oleh :</label>
                                  <input type="hidden" readonly name="id" value="<?= $user['id']; ?>">
                                  <input type="text" readonly name="nama" class="form-control" id="nama" value="<?= $user['nama']; ?>">
                                </div>

                                <div class="col-auto mt-2 mb-1">
                                  <label for="organisasi" class="visually-hidden">Organisasi :</label>
                                  <input type="text" readonly name="organisasi" class="form-control" id="organisasi" value="<?= $user['organisasi']; ?>">
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <div class="col-auto mb-2">
                                  <label for="judul" class="visually-hidden">Judul</label>
                                  <small class="text-warning">**Judul Secukupnya!!</small>
                                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul Pengumuman.." value="<?= $user['judul']; ?>">
                                  <?= form_error('judul', '<small class="text-danger">','</small>' ); ?>
                                </div>
                                

                                <div class="col-auto">
                                  <label for="penerima" class="visually-hidden">Penerima</label>
                                  <input type="text" name="penerima" class="form-control" id="penerima" placeholder="Kepada Siapa Pengumuman Ditujukan.." value="<?= $user['penerima']; ?>">
                                  <?= form_error('penerima', '<small class="text-danger">','</small>' ); ?>
                                </div>
                                

                            </div>
                          </div>
                        </div>

                      </div>
                      <center>
                        <div class="card" style="max-width: 900px;">

                            <div class="col-auto mt-3">
                                  <label for="isi" class="visually-hidden">Isi Pengumuman</label>
                                  <textarea type="text" name="isi" class="form-control mb-5" id="isi" placeholder="Masukan Isi Pengumuman.."><?= $user['isi']; ?></textarea>
                                  <?= form_error('isi', '<small class="text-danger">','</small>' ); ?>
                            </div>

                                
                        </div>
                        
                        <button class="btn-sm btn-success" type="submit" >Ubah Pengumuman</button>
                                
                      </center>
                    </form>
                    
                  </div>
                </div>
              </div>
