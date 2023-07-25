
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

    <link rel="stylesheet" href="<?= base_url() ?>assets/template_pengguna/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template_pengguna/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template_pengguna/adminlte/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/template_pengguna/adminlte/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/template_pengguna/select2/css/select2.min.css">



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

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/template_pengguna/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/template_pengguna/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/template_pengguna/adminlte/js/adminlte.min.js"></script>
    <!-- Amchart Chart JS -->
    <script src="<?php echo base_url() ?>assets/template_pengguna/amcharts4/core.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pengguna/amcharts4/chart.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pengguna/amcharts4/animated.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pengguna/amcharts4/kelly.js"></script>
    <script src="<?= base_url() ?>assets/template_pengguna/select2/js/select2.full.min.js"></script>
    <script>
        var filtering = {}
        $(document).ready(function() {
            $('.filter_nama').select2({
                placeholder: "Pilih Nama",
                allowClear: true,
                theme: "classic"
            });
            filter()
            init()

        })

        function filter() {
            $('.filter_nama').change(function() {
                filtering['filter_nama'] = $(this).val();
                init()
            })
        }

        function init() {
            $(".init-loading").html("<i class='fa fa-spin fa-refresh'></i> &nbsp;&nbsp;&nbsp;Memuat Data ...");
            grafik()
            grafik_stacked()
        }

        function grafik() {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>pengguna/c_pengguna/data_grafik",
                data: filtering,
                dataType: "json",
                success: function(data) {
                    barChart(data, "grafik");
                }
            })
        }

        function grafik_stacked() {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>pengguna/c_pengguna/data_grafik_stacked",
                data: filtering,
                dataType: "json",
                success: function(data) {
                    var app = []
                    $.each(data, function(i, el) {
                        $.each(el, function(i, ol) {
                            app.push(ol);
                        })
                    })
                    barChartStacked(app, "grafik_stacked");
                }
            })
        }

        function barChart(data, chartdiv) {
            am4core.useTheme(am4themes_animated);
            am4core.useTheme(am4themes_kelly);
            var chart = am4core.create(chartdiv, am4charts.XYChart);

            chart.data = data;
            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "username";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 20;
            categoryAxis.renderer.inside = false;
            categoryAxis.start = 0;
            // categoryAxis.end = splitChart;

            categoryAxis.renderer.grid.template.disabled = true;

            var label = categoryAxis.renderer.labels.template;
            label.wrap = true;
            label.maxWidth = 160;
            // label.truncate = true;
            label.tooltipText = "{id_pertanyaan}";

            categoryAxis.events.on("sizechanged", function(ev) {
                var axis = ev.target;
                var cellWidth = axis.pixelWidth / (axis.endIndex - axis.startIndex);
                if (cellWidth < axis.renderer.labels.template.maxWidth) {
                    axis.renderer.labels.template.rotation = -75;
                    axis.renderer.labels.template.horizontalCenter = "right";
                    axis.renderer.labels.template.verticalCenter = "middle";
                } else {
                    axis.renderer.labels.template.rotation = 0;
                    axis.renderer.labels.template.horizontalCenter = "middle";
                    axis.renderer.labels.template.verticalCenter = "top";
                }
            });

            var valueAxis1 = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis1.extraMax = 0.3;
            valueAxis1.min = 0;

            var series1 = chart.series.push(new am4charts.ColumnSeries());
            series1.dataFields.valueY = "data";
            series1.dataFields.categoryX = "username";
            series1.name = "User";
            series1.yAxis = valueAxis1;
            series1.columns.template.tooltipText = "{valueY.value}";
            chart.cursor = new am4charts.XYCursor();

            chart.legend = new am4charts.Legend();
            chart.legend.position = "top";
        }

        function barChartStacked(data, chartdiv) {
            var chart = am4core.create(chartdiv, am4charts.XYChart);
            chart.exporting.menu = new am4core.ExportMenu();
            chart.exporting.menu.align = "right";
            chart.exporting.menu.verticalAlign = "top";
            chart.data = data;
            chart.paddingRight = 0;
            chart.paddingLeft = 0;
            chart.paddingTop = 0;
            chart.paddingBottom = 0;
            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "username";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 20;
            categoryAxis.renderer.inside = false;
            categoryAxis.start = 0;
            // categoryAxis.end = splitChart;

            categoryAxis.renderer.grid.template.disabled = true;

            var label = categoryAxis.renderer.labels.template;
            label.wrap = true;
            label.maxWidth = 160;
            // label.truncate = true;
            label.tooltipText = "{id_pertanyaan}";

            categoryAxis.events.on("sizechanged", function(ev) {
                var axis = ev.target;
                var cellWidth = axis.pixelWidth / (axis.endIndex - axis.startIndex);
                if (cellWidth < axis.renderer.labels.template.maxWidth) {
                    axis.renderer.labels.template.rotation = -75;
                    axis.renderer.labels.template.horizontalCenter = "right";
                    axis.renderer.labels.template.verticalCenter = "middle";
                } else {
                    axis.renderer.labels.template.rotation = 0;
                    axis.renderer.labels.template.horizontalCenter = "middle";
                    axis.renderer.labels.template.verticalCenter = "top";
                }
            });

            var valueAxis1 = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis1.extraMax = 0.3;
            valueAxis1.min = 0;

            var series1 = chart.series.push(new am4charts.ColumnSeries());
            series1.dataFields.valueY = "data_heru";
            series1.dataFields.categoryX = "username";
            series1.yAxis = valueAxis1;
            series1.name = "Heru";
            series1.fill = "green";
            series1.stroke = "green";
            series1.stacked = true;
            series1.columns.template.tooltipText = "{valueY.value}";

            var series1 = chart.series.push(new am4charts.ColumnSeries());
            series1.dataFields.valueY = "data_maulana";
            series1.dataFields.categoryX = "username";
            series1.yAxis = valueAxis1;
            series1.name = "Maulana";
            series1.fill = "red";
            series1.stroke = "red";
            series1.stacked = true;
            series1.columns.template.tooltipText = "{valueY.value}";

            chart.scrollbarX = new am4charts.XYChartScrollbar();
            chart.scrollbarX.series.push(series1);
            chart.scrollbarX.parent = chart.bottomAxesContainer;


            var series1 = chart.series.push(new am4charts.LineSeries());
            series1.dataFields.valueY = "total";
            series1.dataFields.categoryX = "username";
            series1.yAxis = valueAxis1;
            series1.name = "TOTAL DATA";
            series1.fill = "#125192";
            series1.stroke = "#125192";
            series1.strokeWidth = 0;
            series1.yAxis = valueAxis1;
            series1.tooltipText = "{valueY.value}";
            series1.minBulletDistance = 35;

            var bullet4 = series1.bullets.push(new am4charts.CircleBullet());
            bullet4.circle.radius = 3;
            bullet4.circle.strokeWidth = 2;
            bullet4.circle.fill = am4core.color("black");


            // Add label
            var labelBullet = series1.bullets.push(new am4charts.LabelBullet());
            labelBullet.label.html = `
                <div style='background:#125192;color:white;padding:0px 20px;text-align:center;'>{total}</div>
                <div style='background:red;color:white;padding:0px 20px;text-align:center;'>{data_maulana}</div>
                <div style='background:green;color:white;padding:0px 20px;text-align:center;'>{data_heru}</div>
                `;
            labelBullet.label.dy = -40;

            chart.cursor = new am4charts.XYCursor();

            chart.legend = new am4charts.Legend();
            chart.legend.position = "top";
        }
    </script>