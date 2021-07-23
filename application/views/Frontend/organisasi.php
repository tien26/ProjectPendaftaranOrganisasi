        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1"><?= $judul ; ?></h1>
                <h3 class="mb-5"><em><?= $judul1 ; ?></em></h3>
                <a class="btn btn-danger btn-sm" href="<?= base_url('Frontend'); ?>">Kembali</a>
                <a class="btn btn-primary btn-sm" href="#profil">Mengenal Organisasi</a>
                <a class="btn btn-success btn-sm" href="<?= base_url($url); ?>">Daftar Anggota</a>
            </div>
        </header>

        <!-- Tentang-->
            <div class="container px-4 px-lg-5 mt-5 text-center" id="profil">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="bg-primary text-white"><?= $judul1 .' ('. $judul.')' ; ?></h2>
                        <center>
                        <div class="col-md-4 mt-3">
                            <figure class="figure">
                            <img src="<?= base_url('assets/Frontend/'); ?>assets/<?= $logo ; ?>" class="figure-img img-fluid rounded" alt="...">
                            </figure>
                        </div>
                        </center>
                        <p class="lead mb-5">
                            SMK Negeri 5 Kuningan |
                            <strong>SMK Bisa !</strong>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
  <div class="col-3 p-3">
    <div class="list-group text-center" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="far fa-hand-point-right"></i> Sejarah <?= $judul; ?></a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="far fa-hand-point-right"></i> Profile <?= $judul; ?></a>
      <!-- <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="far fa-hand-point-right"></i> Anggota</a> -->
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="far fa-hand-point-right"></i> Galery</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"> <strong>Home</strong> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
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
                              <p class="text-center"><?= $no++ ?>. <?= $m->misi ;  ?></p>
                            <?php } ?>
                            <small class="text-primary">Ketua : </small><p></p>
                              <footer class="blockquote-footer"><?= $dta1 ?> & <?= $dta2 ?><cite title="Source Title"> - <?= $dta3 ?></cite></footer>
                            </blockquote>
                          </div>

                        <div class="text-center card-header py-1 mb-1">
                            <h3 class="text-muted mt-1"><i class="fas fa-hourglass-start"></i> (Proker) Program Kerja</h3>
                        </div>

                        <div class="card col-xl-12 col-lg-6 col-md-6">
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

      <!-- <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="card mb-3 border-0" style="max-width: 900px; ">
        <table class="table table-striped table-primary" >
          <div class="card-header">
            <h4 class="text-center">Data Anggota</h4>
          </div>
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
              foreach ($anggota as $a) {
            ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $a->nama ; ?></td>
              <td><?= $a->kelas ; ?></td>
              <td><?= $a->alamat ; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div> -->

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="card mb-3 border-0" style="max-width: 900px;">
                <div class="row g-0">
                  <?php 
                              foreach ($foto as $f) {
                          ?>
                    <div class="col-md-4">
                        <figure class="figure">
                          <img src="<?php echo base_url(); ?>uploads/galery/<?= $f->foto; ?>" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption p-2 text-center">Halaman Lapang</figcaption>
                        </figure>
                    </div>
                  <?php } ?>
    
                </div>
            </div>
      </div>
    </div>
  </div>

</div>