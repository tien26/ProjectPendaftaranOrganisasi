        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1"><?= $judul ; ?></h1>
                <h3 class="mb-5"><em><?= $judul1 ; ?></em></h3>
                <a class="btn btn-primary btn-xl" href="#berita">Artikel Organisasi</a>
            </div>
        </header>
        
        <div class="dashboard-wrapper mt-5" id="berita">
            <div class="container-fluid dashboard-content">
                <div class="row">
                        
                        <div class="card bg-dark">
                          <div class="card-body bg-primary mb-3">
                            <h3 class="text-center text-white"><?= $berita; ?></h3>
                          </div>

                          <center>

                            <?php 
                              foreach ($artikel as $a) {
                          ?>

                          <div class="card mb-3" style="max-width: 1000px;">
                            <div class="row">
                              <div class="col-md-4 mt-3">
                                  <figure class="figure">
                                    <img src="<?php echo base_url(); ?>uploads/artikel/<?= $a->foto; ?>" class="figure-img img-fluid rounded" alt="...">
                                    <figcaption class="figure-caption p-2"><?= $a->foto; ?></figcaption>
                                  </figure>

                                </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title"><?php echo $a->judul; ?></h5>

                                  <p class="card-text"><?php echo character_limiter($a->isi, 200) ; ?></p>
                                  <a href="<?= base_url('Frontend/berita/').$a->id.'' ; ?>" class="btn btn-primary btn-sm"> Baca Selengkapnya</a>
                                  <p class="card-text"><small class="text-muted"><?php echo date('d F Y', $a->dibuat ); ?></small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php } ?>

                          </center>                      

                        </div>

                </div>
            </div>
        </div>
        