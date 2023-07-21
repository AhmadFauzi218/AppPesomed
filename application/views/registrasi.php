<?php echo form_open('register/registerUser'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/scss/style.css">
      <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets/template_pengguna/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/template_pengguna/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/template_pengguna/css/sb-admin.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

   <br>
    <div class="card card-login mx-auto mt-5">
          <div class="card-header">Login</div>
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h4>Aplikasi Pemilihan Sosial Media </h4>
                </div>
                <div class="login-form">
                    <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?>

                       <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>
                    <form>

                        <div class="form-group">
                            <label for="email">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            
                            <select class="form-control" name="skpd" id="skpd">
                                <option>-Jenis Kelamin-</option>
                                <option value="laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_sekolah">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="nama_sekolah">Umur</label>
                            <input type="text" class="form-control" placeholder="Umur" name="umur" id="umur">
                        </div>
                        <div class="form-group">
                            <label for="nama_sekolah">No Telpn</label>
                            <input type="text" class="form-control" placeholder="No Telpn" name="no_telpn" id="no_telpn">
                        </div>
                        <div class="form-group">
                            <!-- <label>Level</label> -->
                            <input type="hidden" class="form-control" placeholder="" id="level" name="level" value="anggota">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        </div>
                      <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="konfirmasi_password" name="konfirmasi_password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrasi</button>
                        <div class="social-login-content">
                            
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Sudah Punya Account ? <a href="<?php echo base_url('index.php/autch'); ?>"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
     <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/template_pengguna/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template_pengguna/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/template_pengguna/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
