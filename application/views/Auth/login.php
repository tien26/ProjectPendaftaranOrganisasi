<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/Frontend/'); ?>assets/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/Backend/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url('assets/Backend/'); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/Backend/'); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/Backend/'); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <?= $this->session->flashdata('msg'); ?>
        <div class="card ">

            <div class="card-header text-center"><img class="logo-img" style="width: 100px; height: 100px;" src="<?= base_url('assets/Frontend/'); ?>assets/logo.png" alt="logo"><hr><span class="splash-description">Silahkan Masuk Dengan Akun Yang Benar</span></div>
            <div class="card-body">
                <form method="post" action="<?= base_url('Auth'); ?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" name="username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger">','</small>' ); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                        <?= form_error('password', '<small class="text-danger">','</small>' ); ?>
                    </div>
                    <div class="form-group">
                        <span class="splash-description text-primary">Pilih Organisasi</span>
                        <select name="organisasi" class="form-control">
                            <option value="Osis">Osis</option>
                            <option value="Pramuka">Pramuka</option>
                            <option value="Paskibra">Paskibra</option>
                            <option value="Pmr">Pmr</option>
                            <option value="Irmas">Irmas</option>

                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-warning p-0 text-center">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?= base_url('Frontend'); ?>" class="text-primary">Ke Halaman Utama</a></div>
            </div>
        </div>

    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets/Backend/'); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/Backend/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>