
<!doctype html>
<html lang="en">

<head>
  <title>Dashboard || Aplikasi Konsultasi</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/chartist/css/chartist-custom.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>/assets/img/favicon.png">
  <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>/assets/template_pengguna/css/theme.css" rel="stylesheet" media="all">
     <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>/assets/template_pengguna/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/assets/template_pengguna/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
          <h3 class="panel-title">Aplikasi Pemilihan Sosial Media</h3>
      </div>
      <div class="container-fluid">
        
        <div class="navbar-btn navbar-btn-right">
          <a class="" href=""><i class="lnr lnr-user"></i> <span>Wellcome <?php echo $this->session->userdata('username'); ?></span></a>
        </div>
        <div id="navbar-menu">
          
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
  <li><a href="<?php echo base_url('pengguna/c_pengguna'); ?>" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
  
  <li><a href="<?php echo base_url('pengguna/dt_pengguna'); ?>"><i class="fa fa-envelope"></i> <span>Pertanyaan</span></a></li>
  <li><a href="<?php echo base_url('pengguna/dt_jawaban'); ?>"><i class="lnr lnr-file-empty"></i> <span>Jawaban</span></a></li>
  <li><a href="<?php echo base_url('pengguna/dt_user'); ?>"><i class="fa fa-users"></i> <span>User</span></a></li>
  <li><a href="<?php echo base_url('pengguna/c_pengguna/logout'); ?>" class="glyphicon glyphicon-log-out"><i class="fa fa-logout"></i> <span>Logout</span></a></li>
</ul>

        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->

    <div class="main">
      <!-- MAIN CONTENT -->
      <br><br>
          <!-- OVERVIEW -->
            <div class="panel-body">
              <div class="row">
                <div class="col-md-19">
                  <?php $this->load->view($isi); ?>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">
                  <div id="headline-chart" class="ct-chart"></div>
                </div>
                <div class="col-md-3">
                </div>
              </div>
            </div>
          </div>
          <!-- END OVERVIEW -->
          <div class="row">
            <div class="col-md-6">
              <!-- RECENT PURCHASES -->
              </div>
              <!-- END RECENT PURCHASES -->
            </div>
            <div class="col-md-6">
              <!-- MULTI CHARTS -->

              </div>
              <!-- END MULTI CHARTS -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <!-- TODO LIST -->
              <!-- END TODO LIST -->
            </div>
            <div class="col-md-5">
              <!-- TIMELINE -->
              <!-- END TIMELINE -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <!-- TASKS -->
            </div>
            <div class="col-md-4">
              <!-- VISIT CHART -->

                <div class="panel-body">
                  <div id="visits-chart" class="ct-chart"></div>
                </div>
              </div>
              <!-- END VISIT CHART -->
            </div>
            <div class="col-md-4">
              <!-- REALTIME CHART -->
              <!-- END REALTIME CHART -->
            </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2019 <a href="https://duniakomfauzi.blogspot.co.id/" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->

</body>

</html>
