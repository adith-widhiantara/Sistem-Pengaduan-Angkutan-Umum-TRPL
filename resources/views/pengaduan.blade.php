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
	<div class="card card-info border-primary mb-3">
		<div class="card-header text-white bg-primary mb-3">
			<h3 class="card-title text-center">Kirim Pengaduan</h3>
		</div>
		<form method="post" action="{{ route('pengaduan.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-font"></i></span>
					</div>
					<input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Pengaduan" autocomplete="off" required>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-pencil"></i></span>
					</div>
					<textarea type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian Pengaduan" rows="5" required></textarea>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-bus"></i></span>
					</div>
					<select class="form-control" id="nama" name="nama" required>
						<option disabled selected>Nama Bus</option>
						<option value="Akas">Akas</option>
						<option value="Patas">Patas</option>
						<option value="Damri">Damri</option>
						<option value="Pelita Mas">Pelita Mas</option>
						<option value="Harapan Jaya">Harapan Jaya</option>
						<option value="Kalisari">Kalisari</option>
						<option value="Restu Panda">Restu Panda</option>
						<option value="Padi Mas">Padi Mas</option>
						<option value="Indah Jaya">Indah Jaya</option>
					</select>
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-cc"></i></span>
					</div>
					<input type="text" id="nomor" name="nomor" class="form-control" data-inputmask="'mask': ['AA-9999-AA']" data-mask autocomplete="off" required>
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

				<div class="input-group mb-3" id="datetimepicker1" data-target-input="nearest">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-calendar"></i></span>
					</div>
					<input type="text" id="waktu" name="waktu" class="form-control datetimepicker-input" data-target="#datetimepicker1" data-toggle="datetimepicker" autocomplete="off" required>
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

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-star"></i></span>
					</div>
					<select class="form-control" id="rating" name="rating" required>
						<option disabled selected>Rating Bus</option>
						<option value="&#9733" class="text-warning" style="font-size: 20px">&#9733</option>
						<option value="&#9733 &#9733" class="text-warning" style="font-size: 20px">&#9733 &#9733</option>
						<option value="&#9733 &#9733 &#9733" class="text-warning" style="font-size: 20px">&#9733 &#9733 &#9733</option>
						<option value="&#9733 &#9733 &#9733 &#9733" class="text-warning" style="font-size: 20px">&#9733 &#9733 &#9733 &#9733</option>
						<option value="&#9733 &#9733 &#9733 &#9733 &#9733" class="text-warning" style="font-size: 20px">&#9733 &#9733 &#9733 &#9733 &#9733</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary" style="width: 5em">Kirim</button>
			</div>
		</form>
	</div>
	<br>
	<h5><strong>Pengaduan</strong></h5>
	@foreach ($pengaduan as $p)
	<br>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-2">
					<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
					<p class="text-secondary text-center">{{ $p->created_at->diffForHumans() }}</p>
				</div>
				<div class="col-md-10">
					<p>
						<input type="hidden" name="idnya" value="{{$p->id}}">
						<h5 class="float-left text-primary"><strong>{{$p->name}}</strong></h5>
						<span class="float-right"><i class="text-warning fa" style="font-size: 30px"> {{ $p->rating }}</i></span>
					</p>
					<div class="clearfix"></div>
					<h3>{{ $p->judul }}</h3>
					<p>{{ $p->uraian }}</p>
					<p><strong><small>Nama Bus</small> {{ $p->nama }}</strong></p>
					<p><strong><small>Plat Nomor Bus</small> {{ $p->nomor }}</strong></p>
					<p><strong><small>Bus Jurusan</small> {{ $p->tempat }}</strong></p>
					<p><strong><small>Waktu Kejadian</small> {{ $p->waktu }}</strong></p>
					<p><img src="{{ URL::to('/') }}/foto/{{ $p->foto }}" class="img-thumbnail" width="300px"></p>
					<p><strong>{{ $p->status }}</strong></p>
					<p>{{ $p->pesan }}</p>
					<a href="/comment/{{$p->pit}}" class="btn btn-primary">Komentar</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection