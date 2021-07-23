<div class="dashboard-wrapper mt-1">
            <div class="container-fluid dashboard-content">
                <div class="row">
                        
                        <div class="card bg-secondary">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><?= $artikel['judul']; ?></h3>
                          </div>

                          <center>

                            <div class="card mb-3 mt-3" style="max-width: 1200px;">
                              <div class="row g-0">

                                <div class="col-md-4 mt-3">
                                  <figure class="figure">
                                    <img src="<?php echo base_url(); ?>uploads/artikel/<?= $artikel['foto']; ?>" class="figure-img img-fluid rounded" alt="...">
                                    <figcaption class="figure-caption p-2"><?= $artikel['judul']; ?></figcaption>
                                  </figure>

                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="d-flex w-100 justify-content-between">
                                          <h4 class="mb-1 text-primary">Dibuat Oleh :  <?= $artikel['organisasi']; ?></h4>
                                          <small><?= date('d F Y', $artikel['dibuat'] );; ?></small>
                                        </div>
                                        <p class="lh-base mt-4"><?= $artikel['isi']; ?></p>
                                    </div>
                                    <a href="<?= base_url('Frontend/index#berita'); ?>" class="btn btn-secondary mt-2 mb-3">Kembali</a>
                                </div>

                              </div>
                            </div>

                          </center>

                </div>
            </div>
        </div>