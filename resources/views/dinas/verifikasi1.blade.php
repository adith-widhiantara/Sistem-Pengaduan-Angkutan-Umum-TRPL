@extends('dinas.navbar2')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                {{session('success')}}
            </div>
            @endif
            <div class="card card-info border-primary mb-3">
                <div class="card-header text-white bg-primary mb-3">
                    <h3 class="card-title text-center">Verifikasi Pengaduan</h3>
                </div>
                <form method="post" action="{{ route('verifikasi1.update', $pengaduan->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-check"></i></span>
                            </div>
                            <select class="form-control" id="status" name="status" value="{{ $pengaduan->status }}" required>
                                <option disabled selected>Verifikasi Pengaduan</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Proses">Proses</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 5em">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection