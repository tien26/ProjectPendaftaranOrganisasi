
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <span class="d-xl-none d-lg-none text-white">Menu <i class="fas fa-hand-point-right"></i></span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">

                            <?php 

                                if ($judul == "Dashboard") {
                                    $aktif1 = "active" ;
                                }else{
                                    $aktif1 = "" ;
                                }

                                if ($judul == "Buat Pengumuman") {
                                    $aktif2 = "active" ;
                                }else{
                                    $aktif2 = "" ;
                                }

                                if ($judul == "Upload Dokumentasi") {
                                    $aktif3 = "active" ;
                                }else{
                                    $aktif3 = "" ;
                                }

                                if ($judul == "Data Anggota") {
                                    $aktif4 = "active" ;
                                }else{
                                    $aktif4 = "" ;
                                }

                                if ($judul == "My Profil") {
                                    $aktif5 = "active" ;
                                }else{
                                    $aktif5 = "" ;
                                }

                                if ($judul == "Pengumuman") {
                                    $aktif6 = "active" ;
                                }else{
                                    $aktif6 = "" ;
                                }

                                if ($judul == "Anggota") {
                                    $aktif7 = "active" ;
                                }else{
                                    $aktif7 = "" ;
                                }

                                if ($judul == "Program Kerja") {
                                    $aktif8 = "active" ;
                                }else{
                                    $aktif8 = "" ;
                                }

                                if ($judul == "Upload Program Kerja") {
                                    $aktif9 = "active" ;
                                }else{
                                    $aktif9 = "" ;
                                }

                             ?>
                             

                            <li class="nav-divider">
                                Administrator
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= $aktif1; ?>" href="<?= base_url('Admin'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif2; ?>" href="<?= base_url('Admin/buat_pengumuman'); ?>"><i class="fas fa-fw fa-pencil-alt"></i>Buat Pengumuman</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif3; ?>" href="<?= base_url('Admin/upload_dokumentasi'); ?>"><i class="fas fa-fw fa-upload"></i>Upload Dokumentasi</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif9; ?>" href="<?= base_url('Admin/upload_proker'); ?>"><i class="fas fa-fw fa-tasks"></i>Upload Program Kerja</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif4; ?>" href="<?= base_url('Admin/data_anggota'); ?>"><i class="fas fa-fw fa-users"></i>Data Anggota</a>
                            </li>

                            <li class="nav-divider">
                                User
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?= $aktif5; ?>" href="<?= base_url('Admin/my_profil'); ?>"><i class="fas fa-fw fa-address-card"></i>My Profil</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif6; ?>" href="<?= base_url('Admin/pengumuman'); ?>"><i class="fas fa-fw fa-bullhorn"></i>Pengumuman</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif7; ?>" href="<?= base_url('Admin/anggota'); ?>"><i class="fas fa-fw fa-address-book"></i>Anggota</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif8; ?>" href="<?= base_url('Admin/proker'); ?>"><i class="fas fa-fw fa-briefcase"></i>Program Kerja</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->