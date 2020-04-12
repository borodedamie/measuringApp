<!DOCTYPE html>
<html lang="en">
<head>
	<title>Measuring App</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-static-top" >
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				Measuring App
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">

				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>

	<div class="limiter">
		<div class="container-login100">
			<div class="card wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					@csrf

					<span class="login100-form-title p-b-34">
						Please fill in your details
					</span>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
		<div class="form-group row">
			<label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

				<div class="col-md-6">
					<input id="address" type="text" class="form-control @error('name') is-invalid @enderror" name="address" required autocomplete="address" autofocus>

					@error('address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
		</div>
		<div class="form-group row">
			<label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

				<div class="col-md-6">
					<input id="phone_number" type="text" class="form-control @error('name') is-invalid @enderror" name="phone_number" required autocomplete="phone_number" autofocus>

					@error('phone_number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
		</div>

					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

						<div class="col-md-6">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Register') }}
							</button>
						</div>
					</div>
				</form>	

				<div class="login100-more" style="background-image: url('images/test-2.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

	
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('js/main.js') }}"></script>

	
	<script>

		// const proceed = document.getElementById('proceed');

		// proceed.addEventListener('click', redirectPage)

		// function redirectPage(e){
		// 	e.preventDefault();

		// 	var select = document.getElementById('select1');

		// 	if( select.options[select.selectedIndex].value == 1){
		// 		window.location.href = "{{ route('male.index') }}";
		// 	} else {
		// 		window.location.href = "{{ route('female.index') }}";
		// 	}
		// }

		// const form = document.querySelector('form');

		// form.addEventListener('submit', e => {
		// 	e.preventDefault();

		// 	console.log(form);
		// })	

		// $(document).ready(function(){
		// 	$('#register').click(function(e){
		// 		e.preventDefault();


		// 		$.ajaxSetup({
		// 			headers: {
		// 					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 				}
		// 		});

		// 		$.ajax({
		// 			url: "{{ route('register') }}",
		// 			method: 'post',
		// 			dataType: 'json',
		// 			data: {
						
		// 				name: $('#name').val(),
		// 				address: $('#address').val(),
		// 				phone_number: $('#phone_number').val(),
		// 				email: $('#email').val(),
		// 				password: $('#password').val(),
		// 				password_confirm: $('#password_confirm').val()
		// 			},
					
		// 			success: function(result){


		// 				// if( $('#select1').val() == 'Male' ) {

		// 				// 	window.location.href = " {{ route('male.index')}} ";

		// 				// } 
						
		// 				// else if ( $('#select1').val() == 'Female' ) {

		// 				//  	window.location.href = " {{ route('female.index') }} ";
		// 				// } 

		// 				$('.alert').show();
		// 				$('.alert').html(result.success);
		// 				$('#customer_info')[0].reset();

		// 				console.log(result);
		// 			}

		// 		});
		// 	});
		// });

		
	</script>

</body>
</html>
