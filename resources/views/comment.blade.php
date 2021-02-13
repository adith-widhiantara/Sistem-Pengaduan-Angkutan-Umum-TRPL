@extends('navbar1')

@section('content')
<div class="container" style="margin-top: 10em">
	@if(session('success'))
	<div class="alert alert-info alert-dismissable">
		<a class="panel-close close" data-dismiss="alert">×</a>
		<i class="fa fa-coffee"></i>
		{{session('success')}}
	</div>
	@endif
	<h5><strong>Pengaduan</strong></h5>
	<form action="{{ route('comment.store') }}" method="post" class="form-horizontal">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-2">
						<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
						<p class="text-secondary text-center">{{ $pengaduan->created_at->diffForHumans() }}</p>
					</div>

					<div class="col-md-10">
						@csrf
						<p>
							<input type="hidden" name="idnya" value="{{$pengaduan->id}}">
							<h5 class="float-left text-primary"><strong>{{$creator->name}}</strong></h5>
							<span class="float-right"><i class="text-warning fa" style="font-size: 30px"> {{ $pengaduan->rating }}</i></span>
						</p>
						<div class="clearfix"></div>
						<h3>{{ $pengaduan->judul }}</h3>
						<p>{{ $pengaduan->uraian }}</p>
						<p><strong><small>Nama Bus</small> {{ $pengaduan->nama }}</strong></p>
						<p><strong><small>Plat Nomor Bus</small> {{ $pengaduan->nomor }}</strong></p>
						<p><strong><small>Bus Jurusan</small> {{ $pengaduan->tempat }}</strong></p>
						<p><strong><small>Perkiraan Waktu Kejadian</small> {{ $pengaduan->waktu }}</strong></p>
						<p><img src="{{ URL::to('/') }}/foto/{{ $pengaduan->foto }}" class="img-thumbnail" width="300px"></p>
						<p><strong>{{ $pengaduan->status }}</strong></p>
						<p>{{ $pengaduan->pesan }}</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="card border-primary">
			<h5><div class="card-header border-primary"><strong>Tambah Komentar</strong></div></h5>
			@foreach($comment as $p)
			<div class="card-body">
				<h5 class="text-primary"><strong>{{$p->name}}</strong></h5>
				<p>{{$p->message}}</p>
				<p><small class="text-muted">{{ $p->created_at->diffForHumans() }}</small></p>
				<hr>
			</div>
			@endforeach
			<div class="card-body">
				<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan Komentar ...."></textarea>
				<input type="submit" value="Komentar" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
@endsection