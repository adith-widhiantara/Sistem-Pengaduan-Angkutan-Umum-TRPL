@extends('dinas.navbar3')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="container">
			<form action="{{ route('comment.store') }}" method="post" class="form-horizontal">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
								<p class="text-secondary text-center">{{ $pengaduan1->created_at->diffForHumans() }}</p>
							</div>

							<div class="col-md-10">
								@csrf
								<p>
									<input type="hidden" name="idnya" value="{{$pengaduan1->id}}">
									<h5 class="float-left text-primary"><strong>{{$creator->name}}</strong></h5>
								</p>
								<div class="clearfix"></div>
								<h3>{{ $pengaduan1->judul }}</h3>
								<p>{{ $pengaduan1->uraian }}</p>
								<p><strong><small>Nama Bus : </small> {{ $pengaduan1->nama }}</strong></p>
								<p><strong><small>Plat Nomor Bus : </small> {{ $pengaduan1->nomor }}</strong></p>
								<p><strong><small>Bus Jurusan : </small> {{ $pengaduan1->tempat }}</strong></p>
								<p><img src="{{ URL::to('/') }}/foto/{{ $pengaduan1->foto }}" class="img-thumbnail" width="300px"></p>
								<p><strong>{{ $pengaduan1->status }}</strong></p>
								<p>{{ $pengaduan1->pesan }}</p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="card border-primary">
					<h5>
						<div class="card-header border-primary"><strong>Tambah Komentar</strong></div>
					</h5>
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
    </div>
</div>
@endsection