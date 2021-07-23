
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form method="post" action="<?= base_url('Admin/buat_pengumuman'); ?>" enctype="multipart/form-data">
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><?= $judul; ?></h3>
                            <a href="#data" class="btn-sm btn-success">Kelola Data Pengumuman</a>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card">
                              <div class="card-body">

                                <div class="col-auto mt-2 mb-1">
                                  <label for="nama" class="visually-hidden">Dibuat Oleh :</label>
                                  <input type="text" readonly name="nama" class="form-control" id="nama" value="<?= $this->session->userdata('nama'); ?>">
                                </div>

                                <div class="col-auto mt-2 mb-1">
                                  <label for="organisasi" class="visually-hidden">Organisasi :</label>
                                  <input type="text" readonly name="organisasi" class="form-control" id="organisasi" value="<?= $this->session->userdata('organisasi'); ?>">
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
                                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul Pengumuman.." value="<?= set_value('judul'); ?>">
                                  <?= form_error('judul', '<small class="text-danger">','</small>' ); ?>
                                </div>
                                

                                <div class="col-auto">
                                  <label for="penerima" class="visually-hidden">Penerima</label>
                                  <input type="text" name="penerima" class="form-control" id="penerima" placeholder="Kepada Siapa Pengumuman Ditujukan.." value="<?= set_value('penerima'); ?>">
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
                                  <textarea type="text" name="isi" class="form-control mb-5" id="isi" placeholder="Masukan Isi Pengumuman.." value="<?= set_value('isi'); ?>"></textarea>
                                  <?= form_error('isi', '<small class="text-danger">','</small>' ); ?>
                            </div>

                                
                        </div>
                        
                        <button class="btn-sm btn-success" type="submit" >Kirim Pengumuman</button>
                        <button class="btn-sm btn-warning" type="reset" >Reset</button>
                                
                      </center>
                    </form>

                    <div class="card mt-5">
                          <div class="card-body bg-primary">
                            <h4 class="text-center text-white">Kelola Data Pengumuman</h4>
                          </div>
                    </div>

                    <div class="mt-5" style="overflow-x: auto;" id="data">    
                            <table class="table table-primary table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Penerima</th>
                                  <th scope="col">Organisasi</th>
                                  <th scope="col">Sekertaris</th>
                                  <th scope="col">Pembuatan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <?php 
                                    $no=1;
                                    foreach ($user as $pengumuman) {
                                   ?>
                                    <td><?= $no++ ?></td>
                                    <td><?php echo $pengumuman->judul ?></td>
                                    <td><?php echo $pengumuman->penerima ?></td>
                                    <td><?php echo $pengumuman->organisasi ?></td>
                                    <td><?php echo $pengumuman->nama ?></td>
                                    <td><?php echo date('d F Y', $pengumuman->dibuat );?></td>
                                    <td>
                                    <td><a class="btn-sm btn-primary" href="<?php echo base_url('Admin/ubah_pengumuman/').$pengumuman->id.'' ?>">Ubah</a></td>
                                    <td>
                                    <a class="btn-sm btn-danger" href="<?php echo base_url('Admin/pengumuman_hapus/').$pengumuman->id.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>