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
    height: 655px; 
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
        <a href="index.php" class="nav-link" style="color: #fff;">Ecourts Phase-II (2015-2023)</a>
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
                Dashboard
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bx bx-slideshow"></i>
              <p>
                Computerization
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="etaal.php" class="nav-link">
              <i class="bx bx-selection"></i>
              <p>
                eTaal
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="funds.php" class="nav-link">
              <i class="bx bx-money"></i>
              <p>
                Funds
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="vc_jails_courts.php" class="nav-link">
              <i class="bx bx-video"></i>
              <p>
                Video Conferencing(Jails & Courts)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="virtual_courts.php" class="nav-link">
             <i class="bx bxs-institution"></i>
              <p>
                Virtual Courts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="video_conferencing.php" class="nav-link">
              <i class="bx bx-video"></i>
              <p>
                Video Conferencing
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="wan.php" class="nav-link">
              <i class="bx bx-area"></i>
              <p>
                WAN
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="plan_policy_sanction.php" class="nav-link">
              <i class="bx bx-area"></i>
              <p>
                Plan & Policy Document and Sanction Order
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="bx bx-time"></i>
              <p>
                Justice Clock
              </p>
            </a>
          </li> -->

          

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
          <div class="col-sm-6">
            <h1 class="m-0">Status of Fund Allocation</h1>
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
      <div class="container-fluid">
        <div id="container">
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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

<!-- jQuery -->
<script type="text/javascript">
  
  anychart.onDocumentReady(function() {
  // create map
  var map = anychart.map();

  // create data set
  var dataSet = anychart.data.set(
    [ 

    {"id":"IN.AN","value":0, label: 'Andaman and Nicobar', "Status of Funds released (Cr.)": 37.09, "Status of Funds Utilised (Cr.)": 19.88, "Funds Utilised (%)": 53.60, "fill": '#ff99c2', 'customName': 'CALCUTTA HIGH COURT'},
          {"id":"IN.AP","value":1, label: 'Andhra Pradesh', "Status of Funds released (Cr.)": 1.96, "Status of Funds Utilised (Cr.)": 0.00, "Funds Utilised (%)": 0.00, "fill": '#b3ffff', 'customName': 'ANDHRA PRADESH HIGH COURT'},
          {"id":"IN.AR","value":2, label: 'Arunachal Pradesh', "Status of Funds released (Cr.)": 12.90, "Status of Funds Utilised (Cr.)": 7.20, "Funds Utilised (%)": 55.84, "fill": '#d0e2bc', 'customName': 'GUWAHATI HIGH COURT'},
          {"id":"IN.AS","value":3, label: 'Assam', "Status of Funds released (Cr.)": 70.77, "Status of Funds Utilised (Cr.)": 39.24, "Funds Utilised (%)": 55.45, "fill": '#d0e2bc', 'customName': 'GUWAHATI HIGH COURT'},
          {"id":"IN.BR","value":4, label: 'Bihar', "Status of Funds released (Cr.)": 55.82, "Status of Funds Utilised (Cr.)": 41.83, "Funds Utilised (%)": 74.93, "fill": '#f5f5f5', 'customName': 'PATNA HIGH COURT'},
          {"id":"IN.CH","value":5, label: 'Chandigarh', "Status of Funds released (Cr.)": 54.13, "Status of Funds Utilised (Cr.)": 49.41, "Funds Utilised (%)": 91.29, "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
          {"id":"IN.CT","value":6, label: 'Chhatisgarh', "Status of Funds released (Cr.)": 27.31, "Status of Funds Utilised (Cr.)": 20.58, "Funds Utilised (%)": 75.38, "fill": '#ffff99', 'customName': 'CHHATTISGARH HIGH COURT'},
          {"id":"IN.DN","value":7, label: 'Dadra and Nagar Haveli', "Status of Funds released (Cr.)": 125.24, "Status of Funds Utilised (Cr.)": 98.47, "Funds Utilised (%)": 78.62, "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
          {"id":"IN.DD","value":8, label: 'Daman and Diu', "Status of Funds released (Cr.)": 125.24, "Status of Funds Utilised (Cr.)": 104.52, "Funds Utilised (%)": 83.46, "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
          {"id":"IN.DL","value":9, label: 'Delhi', "Status of Funds released (Cr.)": 26.80, "Status of Funds Utilised (Cr.)": 10.69, "Funds Utilised (%)": 39.90, "fill": '#c2d6d6', 'customName': 'DELHI HIGH COURT'},
           {"id":"IN.GA","value":10, label: 'Goa', "Status of Funds released (Cr.)": 125.24, "Status of Funds Utilised (Cr.)": 104.52, "Funds Utilised (%)": 83.46, "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
           {"id":"IN.GJ","value":11, label: 'Gujarat', "Status of Funds released (Cr.)": 72.82, "Status of Funds Utilised (Cr.)": 46.23, "Funds Utilised (%)": 63.49, "fill": '#ffd480', 'customName': 'GUJARAT HIGH COURT'},
           {"id":"IN.HR","value":12, label: 'Haryana', "Status of Funds released (Cr.)": 54.13, "Status of Funds Utilised (Cr.)": 49.41, "Funds Utilised (%)": 91.29, "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
           {"id":"IN.HP","value":13, label: 'Himachal Pradesh', "Status of Funds released (Cr.)": 11.19, "Status of Funds Utilised (Cr.)": 8.79, "Funds Utilised (%)": 78.60, "fill": '#99ff99', 'customName': 'HIMACHAL PRADESH HIGH COURT'},
           {"id":"IN.JH","value":14, label: 'Jharkhand', "Status of Funds released (Cr.)": 24.25, "Status of Funds Utilised (Cr.)": 16.25, "Funds Utilised (%)": 68.32, "fill": '#ffcc99', 'customName': 'JHARKHAND HIGH COURT'},
           {"id":"IN.KA","value":15, label: 'Karnataka', "Status of Funds released (Cr.)": 65.38, "Status of Funds Utilised (Cr.)": 61.79, "Funds Utilised (%)": 94.51, "fill": '#e699ff', 'customName': 'KARNATAKA HIGH COURT'},
           {"id":"IN.KL","value":16, label: 'Kerala', "Status of Funds released (Cr.)": 37.61, "Status of Funds Utilised (Cr.)": 31.27, "Funds Utilised (%)": 83.89, "fill": '#c2c2d6', 'customName': 'KERALA HIGH COURT'},
           {"id":"IN.LD","value":17, label: 'Lakshadweep', "Status of Funds released (Cr.)": 36.03, "Status of Funds Utilised (Cr.)": 29.50, "Funds Utilised (%)": 81.89, "fill": '#c2c2d6', 'customName': 'KERALA HIGH COURT'},
           {"id":"IN.MP","value":18, label: 'Madhya Pradesh', "Status of Funds released (Cr.)": 74.05, "Status of Funds Utilised (Cr.)": 65.82, "Funds Utilised (%)": 88.89, "fill": '#097969', 'customName': 'MADHYA PRADESH HIGH COURT'},
           {"id":"IN.MH","value":19, label: 'Maharashtra', "Status of Funds released (Cr.)": 125.24, "Status of Funds Utilised (Cr.)": 104.52, "Funds Utilised (%)": 83.46, "fill": '#ffad99', 'customName': 'BOMBAY HIGH COURT'},
            {"id":"IN.MNL","value":20, label: 'Manipur', "Status of Funds released (Cr.)": 9.27, "Status of Funds Utilised (Cr.)": 7.56, "Funds Utilised (%)": 61.85, "fill": '#99ffff', 'customName': 'MANIPUR HIGH COURT'},
           {"id":"IN.ML","value":21, label: 'Meghalaya', "Status of Funds released (Cr.)": 13.17, "Status of Funds Utilised (Cr.)": 7.56, "Funds Utilised (%)": 57.37, "fill": '#1ac6ff', 'customName': 'MEGHALAYA HIGH COURT'},
           {"id":"IN.MZ","value":22, label: 'Mizoram', "Status of Funds released (Cr.)": 7.87, "Status of Funds Utilised (Cr.)": 6.36, "Funds Utilised (%)": 80.74, "fill": '#d0e2bc', 'customName': 'GUWAHATI HIGH COURT'},
           {"id":"IN.NL","value":23, label: {x: 1, y: 1, positionMode: "relative", format: 'Nagaland'}, "Status of Funds released (Cr.)": 7.99, "Status of Funds Utilised (Cr.)": 5.41, "Funds Utilised (%)": 67.74, "fill": '#d0e2bc', 'customName': 'GUWAHATI HIGH COURT'},
           {"id":"IN.OR","value":24, label: 'Odisha', "Status of Funds released (Cr.)": 46.41, "Status of Funds Utilised (Cr.)": 29.52, "Funds Utilised (%)": 63.61, "fill": '#ff6666', 'customName': 'ORISSA HIGH COURT'},
           {"id":"IN.PY","value":25, label: 'Pondicherry', "Status of Funds released (Cr.)": 70.15, "Status of Funds Utilised (Cr.)": 61.50, "Funds Utilised (%)": 87.67, "fill": '#3366cc', 'customName': 'MADRAS HIGH COURT'},
           {"id":"IN.PB","value":26, label: 'Punjab',  "Status of Funds released (Cr.)": 54.13, "Status of Funds Utilised (Cr.)": 49.41, "Funds Utilised (%)": 91.29, "fill": '#ddddbb', 'customName': 'PUNJAB & HARYANA HIGH COURT'},
           {"id":"IN.RJ","value":27, label: 'Rajasthan',  "Status of Funds released (Cr.)": 74.56, "Status of Funds Utilised (Cr.)": 65.17, "Funds Utilised (%)": 87.40, "fill": '#ff66b3', 'customName': 'RAJASTHAN HIGH COURT'},
           {"id":"IN.SK","value":28, label: 'Sikkim', "Status of Funds released (Cr.)": 7.58, "Status of Funds Utilised (Cr.)": 4.91, "Funds Utilised (%)": 64.85, "fill": '#ffff99', 'customName': 'SIKKIM HIGH COURT'},
           {"id":"IN.TN","value":29, label: 'Tamil Nadu',  "Status of Funds released (Cr.)": 70.15, "Status of Funds Utilised (Cr.)": 64.78, "Funds Utilised (%)": 92.35, "fill": '#3366cc', 'customName': 'MADRAS HIGH COURT'},
           {"id":"IN.TR","value":30, label: 'Tripura', "Status of Funds released (Cr.)": 17.86, "Status of Funds Utilised (Cr.)": 14.16, "Funds Utilised (%)": 79.31, "fill": '#ff9900', 'customName': 'TRIPURA HIGH COURT'},
           {"id":"IN.UP","value":31, label: 'Uttar Pradesh', "Status of Funds released (Cr.)": 109.48, "Status of Funds Utilised (Cr.)": 94.27, "Funds Utilised (%)": 86.10, "fill": '#b3d9ff', 'customName': 'ALLAHABAD HIGH COURT'},
           {"id":"IN.UT","value":32, label: 'Uttarakhand', "Status of Funds released (Cr.)": 11.65, "Status of Funds Utilised (Cr.)": 6.30, "Funds Utilised (%)": 54.10, "fill": '#9999ff', 'customName': 'UTTARAKHAND HIGH COURT'},
           {"id":"IN.WB","value":33, label: 'West Bengal', "Status of Funds released (Cr.)": 37.09, "Status of Funds Utilised (Cr.)": 19.28, "Funds Utilised (%)": 51.98, "fill": '#ff99c2', 'customName': 'CALCUTTA HIGH COURT'},
           {"id":"IN.TG","value":34, label: 'Telangana',  "Status of Funds released (Cr.)": 1.79, "Status of Funds Utilised (Cr.)": 0.00, "Funds Utilised (%)": 0.00, "fill": '#99ff99', 'customName': 'TELANGANA HIGH COURT'},
           {"id":"IN.JK","value":35, label: 'Jammu and Kashmir', "Status of Funds released (Cr.)": 18.98, "Status of Funds Utilised (Cr.)": 17.01, "Funds Utilised (%)": 89.62, "fill": '#ffc299', 'customName': 'JAMMU & KASHMIR AND LADAKH HIGH COURT'},
           {"id":"IN.LA","value":36, label: 'Ladakh',"Status of Funds released (Cr.)": 18.98, "Status of Funds Utilised (Cr.)": 16.46, "Funds Utilised (%)": 86.72, "fill": '#ffc299', 'customName': 'JAMMU & KASHMIR AND LADAKH HIGH COURT'}]
  );

  // create choropleth series
  series = map.choropleth(dataSet);

  // set geoIdField to 'id', this field contains in geo data meta properties
  series.geoIdField('id');

  // set map color settings
  series.colorScale(anychart.scales.linearColor('#deebf7', '#3182bd'));
  series.hovered().fill('#F5F5F5');
  series.labels(true);
  series.overlapMode("allow-overlap");

  series.tooltip().format(function() {
    // here return the desired content
    return `Status of Funds released (Cr.): ${this.getData('Status of Funds released (Cr.)')}
  Status of Funds Utilised (Cr.): ${this.getData('Status of Funds Utilised (Cr.)')}
  Funds Utilised (%): ${this.getData('Funds Utilised (%)')}`;
  });

  series.tooltip().titleFormat(function() {
    return this.getData('customName');
  });


  // set geo data, you can find this map in our geo maps collection
  // https://cdn.anychart.com/#maps-collection
  map.geoData(anychart.maps['india']);

   map.tooltip().titleFormat('{%label}');
  series.labels().enabled(true).format('{%label}');
  //set map container id (div)
  map.container('container');

  //initiate map drawing
  map.draw();
});
</script>
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
