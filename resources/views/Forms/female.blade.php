<!DOCTYPE html>
<html lang="en">
<head>
	<title>Measuring App</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Female Fittings
					</span>
					
					<div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputState">Top/Sleeve Length</label>
                  <select id="inputState" name="top_sleeve_length" class="form-control">
                    <option selected>Choose...</option>
                    <option>Short</option>
                    <option>Long</option>
                  </select>
                </div>
                            <div class="form-group col-md-6">
                              <label for="burst-round">Burst Round</label>
                              <input type="email" class="form-control" name="burst_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="shoulder">Shoulder</label>
                              <input type="password" class="form-control" name="shoulder" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="back-width">Back Width</label>
                                <input type="password" class="form-control" name="back_width" placeholder="cm/inches">
                            </div>
                            {{-- <div class="form-group col-md-12">
                                <label for="inputState">Top Length</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>Short</option>
                                  <option>Long</option>
                                </select>
                              </div> --}}
                            <div class="form-group col-md-6 ">
                                <label for="under-burst-round">Under Burst Round</label>
                                <input type="password" class="form-control" name="under_burst" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="nipple-nipple-length">Nipple to Nipple Length</label>
                                <input type="password" class="form-control" name="nipple_length" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="waist-round">Waist Round</label>
                                <input type="password" class="form-control" name="waist_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="elbow-wrist">Elbow Wrist</label>
                                <input type="password" class="form-control" name="elbow_wrist" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="elbow-round">Elbow Round</label>
                                <input type="password" class="form-control" name="elbow_round" placeholder="cm/inches">
                            </div>
                              <div class="form-group col-md-6">
                                  <label for="length">Sleeve Length</label>
                                  <input type="password" class="form-control" name="_sleeve_length" placeholder="cm/inches">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="sleeve-round">Sleeve Round</label>
                                  <input type="password" class="form-control" name="sleeve_round" placeholder="cm/inches">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputState">Buttom</label>
                                <select id="inputState2" class="form-control">
                                  <option selected>Choose...</option>
                                  <option value="1">Short</option>
                                  <option value="2">Skirt</option>
                                  <option value="3">Trouser</option>
                                </select>
                              </div>

                              

                              <div class="form-row" id="_trouser" style="display:none; ">
                                  <div class="form-group col-md-6">
                                      <label for="hip-round">Hip Round</label>
                                      <input type="password" class="form-control" name="hip_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="hip-length">Hip Length</label>
                                      <input type="password" class="form-control" name="hip_length" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="thigh-round">Thigh Round</label>
                                      <input type="password" class="form-control" name="thigh_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="knee_round">Knee Round</label>
                                      <input type="password" class="form-control" name="knee_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="ankle-round">Ankle Round</label>
                                      <input type="password" class="form-control" name="ankle_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="waist-knee-length">Waist Knee Length</label>
                                      <input type="password" class="form-control" name="waist_knee_length" placeholder="cm/inches">
                                  </div>                     
                                  <div class="form-group col-md-6">
                                      <label for="knee-feet-length">Knee Feet Length</label>
                                      <input type="password" class="form-control" name="knee_feet_length" placeholder="cm/inches">
                                  </div>
                              </div>

                              <div class="form-row" id="_short" style="display:none; ">
                                  <div class="form-group col-md-6">
                                      <label for="short-hip-round">Hip Round (Short)</label>
                                      <input type="password" class="form-control" name="short_hip_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-hip-length">Hip Length (Short)</label>
                                      <input type="password" class="form-control" name="short_hip_length" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-thigh-round">Thigh Round (Short)</label>
                                      <input type="password" class="form-control" name="short_thigh_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-knee_round">Knee Round (Short)</label>
                                      <input type="password" class="form-control" name="short_knee_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-ankle-round">Ankle Round (Short)</label>
                                      <input type="password" class="form-control" name="ankle_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-waist-knee-length">Waist Knee Length (Short)</label>
                                      <input type="password" class="form-control" name="short_waist_knee_length" placeholder="cm/inches">
                                  </div>                     
                                  <div class="form-group col-md-6">
                                      <label for="short-knee-feet-length">Knee Feet Length (Short)</label>
                                      <input type="password" class="form-control" name="short_knee_feet_length" placeholder="cm/inches">
                                  </div>
                              </div>
                              
                              <div id="_skirt" class="form-row" style="display:none; ">
                                  <div class="form-group col-md-12">
                                      <label for="inputState">Skirt</label>
                                      <select id="inputState3" class="form-control">
                                        <option selected disabled>Choose...</option>
                                        <option value="1">Mini Skirt</option>
                                        <option value="2">Midid Skirt</option>
                                        <option value="3">Long Skirt</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="skirt-hip-round">Hip Round (Skirt)</label>
                                        <input type="password" class="form-control" name="skirt_hip_round" placeholder="cm/inches">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="skirt-hip-length">Hip Length (Skirt)</label>
                                        <input type="password" class="form-control" name="skirt_hip_length" placeholder="cm/inches">
                                    </div>
                              </div>

					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3" id="proceed" style="margin-top: 2em";>

						 Submit

						</a>
					</div>
				</form>	

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

	<script>
		
		// $(".selection-2").select2({
		// 	minimumResultsForSearch: 20,
		// 	dropdownParent: $('#dropDownSelect1')
		// });
      const trouser = document.getElementById('inputState2');

      trouser.addEventListener('click', addTrouser);

      function addTrouser(e){
        e.preventDefault();

        if( trouser.options[trouser.selectedIndex].value == 3){

          document.getElementById('_trouser').style.display = "block";

        } else if( trouser.options[trouser.selectedIndex].value == 2 ){

          document.getElementById('_skirt').style.display = "block";

        } else if( trouser.options[trouser.selectedIndex].value == 1 ) {

          document.getElementById('_short').style.display = "block";
          
        }
        
      }
			


	</script>
	
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

</body>
</html>