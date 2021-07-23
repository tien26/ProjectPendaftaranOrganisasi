
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

                                if ($judul == "My Profil") {
                                    $aktif1 = "active" ;
                                }else{
                                    $aktif1 = "" ;
                                }

                                if ($judul == "Pengumuman") {
                                    $aktif2 = "active" ;
                                }else{
                                    $aktif2 = "" ;
                                }

                                if ($judul == "Anggota") {
                                    $aktif3 = "active" ;
                                }else{
                                    $aktif3 = "" ;
                                }

                                if ($judul == "Program Kerja") {
                                    $aktif4 = "active" ;
                                }else{
                                    $aktif4 = "" ;
                                }

                             ?>

                            <li class="nav-divider">
                                User
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif1; ?>" href="<?= base_url('User'); ?>"><i class="fas fa-fw fa-address-card"></i>My Profil</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif2; ?>" href="<?= base_url('User/pengumuman'); ?>"><i class="fas fa-fw fa-info-circle"></i>Pengumuman</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif3; ?>" href="<?= base_url('User/anggota'); ?>"><i class="fas fa-fw fa-address-book"></i>Anggota</a>
                            </li>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $aktif4; ?>" href="<?= base_url('User/proker'); ?>"><i class="fas fa-fw fa-briefcase"></i></i>Program Kerja</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->