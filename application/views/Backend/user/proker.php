
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                          <div class="card-body bg-primary">
                            <h3 class="text-center text-white"><?= $judul; ?></h3>
                          </div>
                        </div>

                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-center bg-white py-1 mb-1">
                            <h3 class="text-muted mt-1"><i class="far fa-star"></i> Visi & Misi</h3>
                        </div>
                        <center>
                        <div class="card col-xl-10 col-lg-6 col-md-6">
                          <div class="card-header">
                            <h4 class="text-primary">Visi</h4>
                          </div>
                          <div class="card-body">
                            <blockquote class="blockquote">
                              <?php 
                              if ($kosong > 0) { 
                                $dta = $visi['visi'];
                                $dta1 = $visi['ketua_l'];
                                $dta2 = $visi['ketua_p'];
                                $dta3 = $visi['periode'];
                              }else{
                                $dta = 'Data Belum Diupload';
                                $dta1 = 'Ketua L';
                                $dta2 = 'Ketua P';
                                $dta3 = 'Tahun Jabatan';
                              }
                               ?>
                              <p class="text-center text-dark"><?= $dta; ?></p>
                            </blockquote>
                          </div>
                          <div class="card-header">
                            <hr>
                            <h4 class="text-primary">Misi</h4>
                          </div>
                          <div class="card-body">
                            <blockquote class="blockquote">
                              <?php 
                                 $no = 1;
                                 foreach ($misi as $m) {
                              ?>
                              <p class="text-center"><strong><?= $no++ ?>. </strong><?= $m->misi ; ?></p>
                            <?php } ?>
                            <small class="text-primary">Ketua : </small>
                              <footer class="blockquote-footer"><?= $dta1; ?> & <?= $dta2; ?><cite title="Source Title"> <?= $dta3; ?></cite></footer>
                            </blockquote>
                          </div>
                        </div>
                        </center>

                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-center bg-white py-1 mb-1">
                            <h3 class="text-muted mt-1"><i class="fas fa-hourglass-start"></i> (Proker) Program Kerja</h3>
                        </div>

                        <center>
                        <div class="card col-xl-10 col-lg-6 col-md-6">
                          <div class="card-body">
                              <ul class="list-group list-group-flush">
                              <?php 
                                 $no = 1;
                                 foreach ($proker as $p) {
                              ?>
                                <li class="list-group-item"><strong><?= $no++ ?>. </strong><strong><?= $p->proker ; ?></strong></li>
                              <?php } ?>
                              </ul>
                          </div>
                        </div>
                        </center>

                    </div>

                </div>
            </div>