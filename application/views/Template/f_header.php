<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $tittle ; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/Frontend/'); ?>assets/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/Frontend/'); ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><h4 style="color: gold;">App Organisasi</h4></li><hr>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend'); ?>"><i class="fas fa-house-user"></i> Home</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend/osis'); ?>"><i class="fas fa-people-carry"></i> Osis</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend/pramuka'); ?>"><i class="far fa-compass"></i> Pramuka</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend/paskibra'); ?>"><i class="fas fa-flag"></i> Paskibra</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend/pmr'); ?>"><i class="fas fa-first-aid"></i> Pmr</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Frontend/irmas'); ?>"><i class="fas fa-hands-helping"></i> Irmas</a></li>
                <li class="sidebar-nav-item"><a href="<?= base_url('Auth'); ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            </ul>
        </nav>
        