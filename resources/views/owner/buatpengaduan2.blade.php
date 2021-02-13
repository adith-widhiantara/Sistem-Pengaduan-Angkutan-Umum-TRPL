@extends('owner.navbar2')

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
                    <h3 class="card-title text-center">Kirim Pengajuan</h3>
                </div>
                <form method="post" action="{{ route('buatpengaduan2.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-font"></i></span>
                            </div>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Pengajuan" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                            </div>
                            <textarea type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian Pengajuan" rows="5" required></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Bus" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-cc"></i></span>
                            </div>
                            <input type="text" id="nomor" name="nomor" class="form-control" data-inputmask="'mask': ['AA-9999-AA']" data-mask required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-bus"></i></span>
                            </div>
                            <select class="form-control" id="tempat" name="tempat" required>
                                <option disabled selected>Bus Jurusan</option>
                                <option value="Jember-Banyuwangi">Jember-Banyuwangi</option>
                                <option value="Jember-Bali">Jember-Bali</option>
                                <option value="Madura-Surabaya">Madura-Surabaya</option>
                                <option value="Madura-Malang">Madura-Malang</option>
                                <option value="Madura-Jember">Madura-Jember</option>
                                <option value="Madura-Banyuwangi">Madura-Banyuwangi</option>
                                <option value="Surabaya-Malang">Surabaya-Malang</option>
                                <option value="Surabaya-Jember">Surabaya-Jember</option>
                                <option value="Surabaya-Banyuwangi">Surabaya-Banyuwangi</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-photo-o"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 5em">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection