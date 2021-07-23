
      <section class="content-section bg-light">
        <div class="container px-4 px-lg-5 text-center" id="regis">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="bg-secondary">Formulir Pendaftaran Anggota <?= $judul; ?></h2>
                        
                        <p class="lead mb-5">
                            SMK Negeri 5 Kuningan |
                            <strong>SMK Bisa !</strong>
                        </p>
                    </div>

                    
                      <?= $this->session->flashdata('info'); ?>
                    
        <form action="<?= base_url($action); ?>" method="post">
          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label mb-1 bg-secondary">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda.." value="<?= set_value('nama'); ?>" autocomplete="off">
            </div>
            <?= form_error('nama', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label mb-1 bg-secondary">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" placeholder="Buat Username Anda.." value="<?= set_value('username'); ?>" autocomplete="off">
            </div>
            <?= form_error('username', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label mb-1 bg-secondary">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Buat Password Anda..">
            </div>
            <?= form_error('password', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="kpassword" class="col-sm-2 col-form-label mb-1 bg-secondary">Konfirmasi Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="kpassword" name="kpassword" placeholder="Masukan Ulang Password..">
            </div>
          </div>

          <div class="row mb-3">
            <label for="t_lahir" class="col-sm-2 col-form-label mb-1 bg-secondary">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="t_lahir" name="t_lahir" placeholder="Masukan Tanggal-Bulan-Tahun Lahir Anda.." value="<?= set_value('t_lahir'); ?>" autocomplete="off">
            </div>
            <?= form_error('t_lahir', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label mb-1 bg-secondary">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Nama Desa Tempat Tinggal.." value="<?= set_value('alamat'); ?>" autocomplete="off">
            </div>
            <?= form_error('alamat', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="kelas" class="col-sm-2 col-form-label mb-1 bg-secondary">Kelas</label>
            <div class="col-sm-10">
              <select class="form-control" name="kelas" id="kelas" value="<?= set_value('kelas'); ?>">
                <option disabled="disabled" selected="true">~~ Pilih Kelas ~~</option>
                <?php
                  foreach ($kelas as $k ) {
                ?>
                  <?php if ($k->kelas == set_value('kelas')): ?>
                    <option value="<?= $k->kelas ?>" selected><?= $k->kelas ?></option>
                  <?php else: ?>
                    <option value="<?= $k->kelas ?>"><?= $k->kelas ?></option>
                  <?php endif ?>
                <?php } ?>
              </select>
            </div>
            <?= form_error('kelas', '<small class="text-danger">','</small>' ); ?>
          </div>

          <div class="row mb-3">
            <label for="no_hp" class="col-sm-2 col-form-label mb-1 bg-secondary">Nomor Hp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomer Hp Anda.." value="<?= set_value('no_hp'); ?>" autocomplete="off">
            </div>
            <?= form_error('no_hp', '<small class="text-danger">','</small>' ); ?>
          </div>

          <a href="<?=base_url($kembali); ?>" class="btn btn-danger">Kembali</a>
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
                
                </div>
        </div>
      </section>