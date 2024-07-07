<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== --> 
 

</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Tilljannah</span>
      </a>
     
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
    </ul>
  </aside><!-- End Sidebar-->

  <section class="section" style="margin-left:20%; margin-top:6%; max-width: 1200px;">
    <div class="row" style="margin: 0 auto; max-width: 1200px;">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>

            <body>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                      <div>
                        <a type="button" class="btn btn-primary" href="">Tambah Data</a>
                      </div>
                      <br>
                      <div>
                        <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                          <thead>
                            <tr role="row">
                              <th>Id</th>
                              <th>Judul</th>
                              <th>Isi</th>
                              <th>Foto_url</th>
                              <th>Kategori</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr role="row">
                              <th>Id</th>
                              <th>Judul</th>
                              <th>Isi</th>
                              <th>Foto_url</th>
                              <th>Kategori</th>
                              <th>Aksi</th>
                            </tr>
                          </tfoot>
                          
                        </table>
              
                      </div>
                    </div>
                  </div>
                </div>
              
                <!-- Bootstrap core JavaScript
                  ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <!-- DATA TABES SCRIPT -->
                <script src="js/jquery.dataTables.js" type="text/javascript"></script>
                <script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
                <script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
                <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
                <script src="js/holder.min.js"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
                <!-- page script -->
                <script type="text/javascript">
                  $(function() {
                    $("#example1").dataTable();
                    $('#example2').dataTable({
                      "bPaginate": true,
                      "bLengthChange": false,
                      "bFilter": false,
                      "bSort": true,
                      "bInfo": true,
                      "bAutoWidth": false
                    });
                  });
                </script>
              </body>