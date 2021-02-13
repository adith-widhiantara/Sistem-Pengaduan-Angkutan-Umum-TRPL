@extends('dinas.navbar1')

@section('content')
<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/dinas">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-tachometer-alt"></i>
            </div>
            <div class="mr-5">Beranda</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="/dinas">
            <span class="float-left">Tampilkan</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-table"></i>
            </div>
            <div class="mr-5">Pengaduan</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="/pengaduan1">
            <span class="float-left">Tampilkan</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-clock"></i>
            </div>
            <div class="mr-5">Batas Waktu</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="/tabelpengaduan1">
            <span class="float-left">Tampilkan</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-user"></i>
            </div>
            <div class="mr-5">Profil</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="/profil1">
            <span class="float-left">Tampilkan</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>

    <!-- Area Chart Example-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-area"></i>
        SIDU BUSCARE</div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Kelompok 1A</div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->
@endsection