@extends('owner.navbar3')

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
                    <h3 class="card-title text-center">Verifikasi Pengajuan</h3>
                </div>
                <form method="post" action="{{ route('verifikasi2.update2', $pengaduan->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-check"></i></span>
                            </div>
                            <select class="form-control" id="status1" name="status1" value="{{ $pengaduan->status1 }}" required>
                                <option disabled selected>Verifikasi Pengajuan</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Proses">Proses</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-photo-o"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="foto1" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 5em">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection