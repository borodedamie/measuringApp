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
				
				<form class="login100-form validate-form" id="male_form" >
					<span class="login100-form-title p-b-34">
						Male Fittings
					</span>
				
					<div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="chest-round">Chest Round</label>
							  <input type="input100" class="form-control" id="chest_round" placeholder="cm/inches">
					</div>
                            <div class="form-group col-md-12">
                              <label for="Shoulder">Shoulder</label>
                              <input type="input100" class="form-control" id="shoulder" placeholder="cm/inches">
							</div>
														<div class="form-group col-md-12">
                              <label for="back">Back</label>
                              <input type="input100" class="form-control" id="back" placeholder="cm/inches">
														</div>
														<div class="form-group col-md-12">
															<label for="inputState1">Sleeve Length</label>
															<select id="inputState1" class="form-control" onchange = "showFields()">
																<option selected disabled>Choose...</option>
																<option value="Short" id="short">Short</option>
																<option value="Long" id="long">Long</option>
															</select>
														</div>
														<div class="form-row" id="shortFields" style = "display: none; ">
															<div class="form-group col-md-12">
																<label for="short-armhole">Short Armhole</label>
																<input type="input100" class="form-control" id="short_armhole" placeholder="cm/inches">
															  </div>
															  <div class="form-group col-md-12">
																<label for="sleeve-length">Sleeve Length</label>
																<input type="input100" class="form-control" id="sleeve_length" placeholder="cm/inches">
															  </div>
															  <div class="form-group col-md-12">
																<label for="sleeve-round">Sleeve Round</label>
																<input type="input100" class="form-control" id="sleeve_round" placeholder="cm/inches">
															  </div>
														</div>
														<div class="form-row" id="longFields" style="display: none; ">
																<div class="form-group col-md-6">
																		<label for="long-armhole">Long Armhole</label>
																		<input type="input100" class="form-control" id="long_armhole" placeholder="cm/inches">
																	  </div>
																	  <div class="form-group col-md-6">
																		<label for="long-sleeve-length">Long Sleeve Length</label>
																		<input type="input100" class="form-control" id="long_sleeve_length" placeholder="cm/inches">
																	  </div>
																	  <div class="form-group col-md-6">
																		<label for="long-sleeve-round"> Long Sleeve Round</label>
																		<input type="input100" class="form-control" id="long_sleeve_round" placeholder="cm/inches">
																	  </div>		
																	  <div class="form-group col-m-6">
																		<label for="elbow-round">Elbow Round</label>
																		<input type="input100" class="form-control" id="elbow_round" placeholder="cm/inches">
																	  </div>
																	  <div class="form-group col-md-6">
																		<label for="wrist-round">Wrist Round</label>
																		<input type="input100" class="form-control" id="wrist_round" placeholder="cm/inches">
																	  </div>
																	  <div class="form-group col-md-6">
																		<label for="shoulder-elbow">Shoulder Elbow Length</label>
																		<input type="input100" class="form-control" id="shoulder_elbow" placeholder="cm/inches">
																	  </div>	
																	  <div class="form-group col-md-6">
																		<label for="elbow-wrist">Elbow Wrist</label>
																		<input type="input100" class="form-control" id="elbow_wrist" placeholder="cm/inches">
																	  </div>

														</div>
														<div class="form-group col-md-12">
															<label for="inputState">Buttom</label>
															<select id="buttom" class="form-control">
																<option selected>Choose...</option>
																<option value="Three-quarter">Three Quarter</option>
																<option value="Short">Short</option>
																<option value="Trouser">Trouser</option>
															</select>
														</div>
													{{-- </div> --}}
					<div class="form-group col-md-6">
						<label for="waist-knee-length">Waist-Knee Length</label>
						<input type="input100" class="form-control" id="waist_knee_length" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-6">
						<label for="knee-feet-length">Knee-Feet Length</label>
						<input type="input100" class="form-control" id="knee_feet_length" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-6">
						<label for="waist-round">Waist Round</label>
						<input type="input100" class="form-control" id="waist_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-6">
						<label for="thigh-round">Thigh Round</label>
						<input type="input100" class="form-control" id="thigh_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-6">
						<label for="knee-round">Knee Round</label>
						<input type="input100" class="form-control" id="knee_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-6">
						<label for="ankle-round">Ankle Round</label>
						<input type="input100" class="form-control" id="ankle_round" placeholder="cm/inches">
					</div>
				</div>

					<div class="w-full text-center">
						{{-- <a href="#" class="txt3" id="Submit" style="margin-top: 2em";>

						 Submit

						</a> --}}
						<button type="submit" value="submit" class="txt3" id="submit">Submit</button>

					</div>
					{{-- <div id="error_message" class="ajax_response" style="float:left"></div>
					<div id="success_message" class="ajax_response" style="float:left"></div> --}}
					<span id="error_message" class="text-danger"></span>
					<span id="success_message" class="text-danger"></span>

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

			$(document).ready(function(){

			$('#submit').click(function(e){
				e.preventDefault();


				$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});

				$.ajax({
					url: "{{ route('male.store') }}",
					method: 'post',
					dataType: 'json',
					data: {

						chest_round: $('#chest_round').val(),
						shoulder: $('#shoulder').val(),
						back: $('#back').val(),

						short_armhole: $('#short_armhole').val(),
						sleeve_length: $('#sleeve_length').val(),
						sleeve_round: $('#sleeve_round').val(),

						long_armhole: $('#long_armhole').val(),
						long_sleeve_round: $('#Long_sleeve_round').val(),
						long_sleeve_length: $('#long_sleeve_length').val(),
						elbow_round: $('#elbow_round').val(),
						wrist_round: $('#wrist_round').val(),
						shoulder_elbow_length: $('#shoulder_elbow').val(),
						elbow_wrist: $('#elbow_wrist').val(),
						
						buttom: $('#buttom').val(),
						waist_knee_length: $('#waist_knee_length').val(),
						knee_feet_length: $('#knee_feet_length').val(),
						waist_round: $('#waist_round').val(),
						thigh_round: $('#thigh_round').val(),
						knee_round: $('#knee_round').val(),
						ankle_round: $('#ankle_round').val()

					},

					success: function(result){

						$('#success_message').fadeIn().html('Form Submit Successfully!');
							setTimeout(function() {
						$('#success_message').fadeOut("slow");
						}, 3000 );

						$('#male_form').trigger("reset");

						console.log(result);
					}	
				});
			});
		});

		function showFields() {
			
			var option = document.getElementById('short').selected,
				optionTwo = document.getElementById('long').selected;
	
			// sleeveLength.addEventListener('click', addArmHole);

			if( option === true ){

				document.getElementById('shortFields').style.display = "block";

				// console.log(option);

			} else if ( optionTwo == true ) {

				document.getElementById('longFields').style.display = "block";
			}

		}



	</script>

</body>
</html>