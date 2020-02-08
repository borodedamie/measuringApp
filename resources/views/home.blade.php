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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="customer_info">
					<span class="login100-form-title p-b-34">
						Please fill in your details
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
						<input class="input100" type="text" id="customer_name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
						{{-- <label for="inputAddress">House Number</label> --}}
						<input type="text" class="input100" id="house_number" placeholder="House Number e.g 1234 Main St">
						<span class="focus-input100"></span>
					  </div>
					  <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
						{{-- <label for="inputAddress2">Street Name</label> --}}
						<input type="text" class="input100" id="street_name" placeholder="Street Name e.g Apartment, studio, or floor">
						<span class="focus-input100"></span>
					  </div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" >
						<input class="input100" type="phone" id="phone_number" placeholder="Phone number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" >
						<input class="input100" type="age" id="age" placeholder="Age">
						<span class="focus-input100"></span>
					</div>

					<div class="container-select">
						<select name="" id="select1" style="width:100%;">
							<option value="0" disabled selected>Choose</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>

					{{-- <div class="class">
						<input type="text">
					</div> --}}
					
					
					{{-- <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div> --}}

					<div class="w-full text-center">
						{{-- <a href="" class="txt3" id="proceed" style="margin-top: 2em";>

						 Proceed

						</a> --}}
						<button type="submit" value="submit" class="txt3" id="proceed">Proceed</button>

					</div>
				</form>	

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
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

		$(document).ready(function(){
			$('#proceed').click(function(e){
				e.preventDefault();

				// var select = document.getElementById('select1');

				// if( select.options[select.selectedIndex].value == 1){
				// 	window.location.href = "{{ route('male.index') }}";
				// } else if ( select.options[select.selectedIndex].value == 2){
				// 	window.location.href = "{{ route('female.index') }}";
				// }


				$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});

				$.ajax({
					url: "{{ route('customer.store') }}",
					method: 'post',
					dataType: 'json',
					data: {
						
						customer_name: $('#customer_name').val(),
						house_number: $('#house_number').val(),
						street_name: $('#street_name').val(),
						phone_number: $('#phone_number').val(),
						age: $('#age').val(),
						gender: $('#select1').val()
					},
					
					success: function(result){


						if( $('#select1').val() == 'Male' ) {

							window.location.href = " {{ route('male.index')}} ";

						} 
						
						else if ( $('#select1').val() == 'Female' ) {

						 	window.location.href = " {{ route('female.index') }} ";
						}

						$('.alert').show();
						$('.alert').html(result.success);
						$('#customer_info')[0].reset();

						console.log(result);
					}

				});
			});
		});

		
	</script>

</body>
</html>