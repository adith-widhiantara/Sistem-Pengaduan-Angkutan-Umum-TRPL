@extends('owner.navbar2')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <a href="{{ url('/tabelpengaduan2') }}"class="btn btn-primary" style="width: 5em">Kembali</a>
        <div class="card-deck">
            <div class="card border-primary">
                <img src="{{ URL::to('/') }}/foto/{{ $pengaduan2->foto }}" class="card-img-top mx-auto d-block" style="width: auto">
                <div class="card-body">
                    <h3 class="card-title">{{ $pengaduan2->judul }}</h3>
                    <p class="card-text">{{ $pengaduan2->uraian }}</p>
                    <p class="card-text">Nama Bus : <strong>{{ $pengaduan2->nama }}</strong></p>
                    <p class="card-text">Plat Nomor Bus : <strong>{{ $pengaduan2->nomor }}</strong></p>
                    <p class="card-text">Bus Jurusan : <strong>{{ $pengaduan2->tempat }}</strong></p>
                    <p class="card-text"><small class="text-muted">{{ $pengaduan2->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection