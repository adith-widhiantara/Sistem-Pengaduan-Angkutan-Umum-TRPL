<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OWNER SIDU BUSCARE</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('assetss/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('assetss/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('assetss/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/owner">SIDU BUSCARE</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger">
            @yield('counts')
          </span>
        </a>
       
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          @yield('notif')
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw">&nbsp; {{ Auth::user()->name }}</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/owner">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pengaduan2">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengaduan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tabelpengaduan2">
          <i class="fas fa-fw fa-clock"></i>
          <span>Batas Waktu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profil2">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil</span>
        </a>
      </li>
    </ul>

    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <strong><span>Copyright © SIDU BUSCARE by Kelompok 1B</span></strong>
        </div>
      </div>
    </footer>

    @yield('content')

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assetss/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assetss/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('assetss/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assetss/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assetss/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assetss/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('assetss/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('assetss/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>