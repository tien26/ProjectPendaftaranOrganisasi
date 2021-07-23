<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikasi <?= $this->session->userdata('organisasi'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/Frontend/'); ?>assets/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/Backend'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url('assets/Backend'); ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/Backend'); ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/Backend'); ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">

               <?php if ($this->session->userdata('organisasi') == 'Osis'): ?>
                   <span class="navbar-brand fas fa-people-carry"> Aplikasi <?= $this->session->userdata('organisasi'); ?></span>
                <?php elseif ($this->session->userdata('organisasi') == 'Pramuka'): ?>
                    <span class="navbar-brand fas fa-compass" href="../index.html"> Aplikasi <?= $this->session->userdata('organisasi'); ?></span>
                <?php elseif ($this->session->userdata('organisasi') == 'Paskibra'): ?>
                    <span class="navbar-brand fas fa-flag" href="../index.html"> Aplikasi <?= $this->session->userdata('organisasi'); ?></span>
                <?php elseif ($this->session->userdata('organisasi') == 'Pmr'): ?>
                    <span class="navbar-brand fas fa-first-aid" href="../index.html"> Aplikasi <?= $this->session->userdata('organisasi'); ?></span>
                <?php elseif ($this->session->userdata('organisasi') == 'Irmas'): ?>
                    <span class="navbar-brand fas fa-hands-helping" href="../index.html"> Aplikasi <?= $this->session->userdata('organisasi'); ?></span>

               <?php endif ?>
                    
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-chevron-circle-down"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown notification">
                            <div class="nav-link nav-icons" href="#">
                                    <span class="text-primary"><?= $level; ?></span>
                            </div>
                            
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/Backend/profile/') . $this->session->userdata('gambar'); ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?= $this->session->userdata('nama'); ?></h5>
                                    <span class="status"></span><span class="ml-2"><?= $this->session->userdata('organisasi'); ?></span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->