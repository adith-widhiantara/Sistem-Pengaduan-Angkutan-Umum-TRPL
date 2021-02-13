@extends('owner.navbar3')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/owner">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>
        <div class="card mt-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Batas Waktu Pengaduan</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="header text-center thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Nama Bus</th>
                                <th scope="col">Plat Nomor Bus</th>
                                <th scope="col">Bus Jurusan</th>
                                <th scope="col">Waktu Kejadian</th>
                                <th scope="col">Batas Pengerjaan</th>
                                <th scope="col">Lampiran (Foto)</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $p->judul }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->nomor }}</td>
                                <td>{{ $p->tempat }}</td>
                                <td>{{ $p->waktu }}</td>
                                <td>{{ $p->time }}</td>
                                <td><img src="{{ URL::to('/') }}/foto1/{{ $p->foto1 }}" class="img-fluid" style="max-width: 100px; height: 50px"></td>
                                <td>{{ $p->status1 }}</td>
                                <td>
                                    <a href="{{ route('verifikasi2.edit2', $p->id) }}" class="btn btn-primary btn-sm"><span class="fa fa-check"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection