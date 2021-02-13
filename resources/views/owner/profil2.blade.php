@extends('owner.app')

@section('content')
<div class="container bootstrap snippet" id="content-wrapper" style="padding-top: 5em; padding-left: 5em">
    <div class="container-fluid">
        <form method="POST" action="{{ route('user.update2') }}" enctype="multipart/form-data">
            <div class="row">
                <!-- left column -->

                <div class="col-md-3">
                    <div class="text-center">
                        <img src="/storage/avatars/{{ $user->avatar }}" class="rounded-circle" alt="avatar" style="width: 200px; height: 200px; border-radius: 50%;">
                        <br><br>
                        <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Ukuran gambar tidak boleh lebih dari 2MB</small>
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    @if(session('success'))
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        {{session('success')}}
                    </div>
                    @endif
                    <h3>Profil Saya</h3>

                    <div class="form-group">
                        <label for="name" class="col-lg-3 control-label">{{ __('Nama') }}</label>
                        <div class="col-lg-8">
                            <input id="name" value="{{ $user->name }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus="">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-lg-3 control-label">{{ __('Alamat') }}</label>
                        <div class="col-lg-8">
                            <input id="address" value="{{ $user->address }}" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">{{ __('E-Mail') }}</label>
                        <div class="col-lg-8">
                            <input id="email" value="{{ $user->email }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telp" class="col-lg-3 control-label">{{ __('Nomer Telepon') }}</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <input id="telp" value="{{ $user->telp }}" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp">
                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Simpan') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection