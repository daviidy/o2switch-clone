{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="/loginCss/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--===============================================================================================-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/animate/animate.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="/loginCss/css/util.css">
  	<link rel="stylesheet" type="text/css" href="/loginCss/css/main.css">
  <!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-color: #0B1B2B;">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-53">
						Connectez-vous avec
					</span>

					<a href="#" class="btn-face m-b-20">
						<i class="fab fa-facebook-square"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="/loginCss/images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" >
                        <span class="focus-input100"></span>

                        @error('email')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Mot de passe
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" >
                        <span class="focus-input100"></span>

                        @error('password')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
                            {{ __('Se connecter') }}
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Pas encore inscrit?
						</span>

						<a href="/register" class="txt2 bo1">
							Inscrivez-vous
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

