<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Department of Justice</title>
  <style>
    div.scrollmenu {
      overflow: auto;
      white-space: nowrap;
    }

    div.scrollmenu a {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px;
      text-decoration: none;
    }

    div.scrollmenu a:hover {
      background-color: #777;
    }

    html, body, #container {
    width: 100%;
    height: 750px;
    margin: 0;
    padding: 0; }

    #container {
    height: 500px; 
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 800px; 
    max-width: 1000px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
  </style>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
<script src="https://cdn.anychart.com/geodata/2.1.1/countries/india/india.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: #294b9c; color: #fff; height:98px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: #fff;"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link" style="color: #fff;">Ecourts Phase-I (2011-2015)</a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style= "background: #294b9c;">
      <img src="dist/img/doj_white.png" alt="Department of Justice" style="height: 70px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: #294b9c;">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
               <i class="bx bx-grid-alt"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="video_conferencing_equipment.php" class="nav-link">
              <i class="bx bx-selection"></i>
              <p>
                Video Conferencing Equipments(Jails & Courts)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="sites_prepared.php" class="nav-link">
              <i class="bx bx-selection"></i>
              <p>
                Sites Prepared
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lan_installed.php" class="nav-link">
              <i class="bx bx-money"></i>
              <p>
                LAN installed
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="high_court_wise_hardware.php" class="nav-link">
              <i class="bx bx-video"></i>
              <p>
                High Court-wise hardware
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cis_software_installation.php" class="nav-link">
             <i class="bx bxs-institution"></i>
              <p>
                High Court-wise CIS Software Installation
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="judicial_officers.php" class="nav-link">
              <i class="bx bx-video"></i>
              <p>
                Judicial Officers and System Administrators trained
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="hcwise_laptop_distribution.php" class="nav-link">
             <i class="bx bx-time"></i>
              <p>
                High Court Wise Laptop Distribution
              </p>
            </a>
          </li>

          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="#">
              <!-- <button type="button" class="btn btn-primary">Sign In</button> -->
            </a>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <ul>
      <li>As part of National eGovernance Plan, eCourts project began in 2007 based on National Policy and Action Plan for Implementation of ICT in Indian judiciary.</li>
        <li>14,249 District and Subordinate Courts computerized.</li>
        <li>Total expenditure: 639.41 Crores</li>
        <li>LAN connectivity provided in 13,686 courts</li>
        <li>Laptop provided to 14309 Judicial officers</li>
        <li>Centralised case information software installed in 13672 courts</li>
        <li>Video Conferencing facility installed between 347 Jails and 493 Courts</li>
        <li>Judicial Service Centres (JSC) opened as Filing Counters</li>
        <li>e-Courts Portal made operational</li>
        <li>7.2 Cr. cases entered on Case Information Software 1.0</li>
        <li>NJDG started: case status of pending / decided cases made available</li>
        <li>NIC was made implementing agency for eCourts Mission Mode Project Phase I</li>
      </ul>
    </section>
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2022.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.1.0 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</body>
</html>
