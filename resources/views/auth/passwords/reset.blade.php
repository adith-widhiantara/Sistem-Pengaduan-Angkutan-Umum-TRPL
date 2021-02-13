<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIDU BUSCARE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assetsss/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assetsss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsss/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/assetsss/images/img-02.jpg');">
            <div class="wrap-login100 p-t-45 p-b-30">
                <div class="login100-form-avatar">
                    <img src="/assetsss/images/user.png" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
                    Kata Sandi Baru
                </span>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Email is required">
                        <input class="input100" id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Kata Sandi" autofocus>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password Confirmation is required">
                        <input class="input100" id="password-confirm" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Ulang Kata Sandi" autofocus>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-30">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Kirim') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{asset('assetsss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assetsss/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assetsss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assetsss/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assetsss/js/main.js')}}"></script>

</body>

</html>
