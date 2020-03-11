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

    <nav class="navbar navbar-dark bg-dark navbar-static-top" >
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Measuring App</a>
			</div>
		</div>
	</nav>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="female_form">
					<span class="login100-form-title p-b-34">
						Female Fittings
					</span>
					
					<div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputState">Top/Sleeve Length</label>
                  <select id="top_sleeve_length" class="form-control">
                    <option selected>Choose...</option>
                    <option value="Short">Short</option>
                    <option value="Long">Long</option>
                  </select>
                </div>
                            <div class="form-group col-md-6">
                              <label for="burst-round">Burst Round</label>
                              <input type="text" class="form-control" id="burst_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="shoulder">Shoulder</label>
                              <input type="text" class="form-control" id="shoulder" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="back-width">Back Width</label>
                                <input type="text" class="form-control" id="back" placeholder="cm/inches">
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
                                <input type="text" class="form-control" id="under_burst_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="nipple-nipple-length">Nipple to Nipple Length</label>
                                <input type="text" class="form-control" id="end_to_end_nipple_length" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="wrist-round">Wrist Round</label>
                                <input type="text" class="form-control" id="wrist_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="waist-round">Waist Round</label>
                                <input type="text" class="form-control" id="waist_round" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="shoulder-elbow">Shoulder Elbow</label>
                                <input type="text" class="form-control" id="shoulder_elbow" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="elbow-wrist">Elbow Wrist</label>
                                <input type="text" class="form-control" id="elbow_wrist" placeholder="cm/inches">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="elbow-round">Elbow Round</label>
                                <input type="text" class="form-control" id="elbow_round" placeholder="cm/inches">
                            </div>
                              <div class="form-group col-md-6">
                                  <label for="length">Sleeve Length</label>
                                  <input type="text" class="form-control" id="sleeve_length" placeholder="cm/inches">
                              </div> 
                              <div class="form-group col-md-6">
                                  <label for="sleeve-round">Sleeve Round</label>
                                  <input type="text" class="form-control" id="sleeve_round" placeholder="cm/inches">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="inputState">Buttom</label>
                                <select id="buttom" class="form-control" onchange = "showField()">
                                  <option selected>Choose...</option>
                                  <option value="Short" id="short">Short</option>
                                  <option value="Skirt" id="skirt">Skirt</option>
                                  <option value="Trouser" id="trouser">Trouser</option>
                                </select>
                              </div>

                              

                              <div class="form-row" id="_trouser" style="display:none; ">
                                  <div class="form-group col-md-6">
                                      <label for="hip-round">Hip Round</label>
                                      <input type="text" class="form-control" id="hip_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="hip-length">Hip Length</label>
                                      <input type="text" class="form-control" id="hip_length" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="thigh-round">Thigh Round</label>
                                      <input type="text" class="form-control" id="thigh_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="knee_round">Knee Round</label>
                                      <input type="text" class="form-control" id="knee_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="ankle-round">Ankle Round</label>
                                      <input type="text" class="form-control" id="ankle_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="waist-knee-length">Waist Knee Length</label>
                                      <input type="text" class="form-control" id="waist_knee_length" placeholder="cm/inches">
                                  </div>                     
                                  <div class="form-group col-md-6">
                                      <label for="knee-feet-length">Knee Feet Length</label>
                                      <input type="text" class="form-control" id="knee_feet_length" placeholder="cm/inches">
                                  </div>
                              </div>

                              <div class="form-row" id="_short" style="display:none; ">
                                  <div class="form-group col-md-6">
                                      <label for="short-hip-round">Hip Round (Short)</label>
                                      <input type="text" class="form-control" id="short_hip_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-hip-length">Hip Length (Short)</label>
                                      <input type="text" class="form-control" id="short_hip_length" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-thigh-round">Thigh Round (Short)</label>
                                      <input type="text" class="form-control" id="short_thigh_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-knee_round">Knee Round (Short)</label>
                                      <input type="text" class="form-control" id="short_knee_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-ankle-round">Ankle Round (Short)</label>
                                      <input type="text" class="form-control" id="short_ankle_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="short-waist-knee-length">Waist Knee Length (Short)</label>
                                      <input type="text" class="form-control" id="short_waist_knee_length" placeholder="cm/inches">
                                  </div>                     
                                  <div class="form-group col-md-6">
                                      <label for="short-knee-feet-length">Knee Feet Length (Short)</label>
                                      <input type="text" class="form-control" id="short_knee_feet_length" placeholder="cm/inches">
                                  </div>
                              </div>
                              
                              <div id="_skirt" class="form-row" style="display:none; ">
                                  <div class="form-group col-md-12">
                                      <label for="inputState">Skirt</label>
                                      <select id="inputState3" class="form-control">
                                        <option selected disabled>Choose...</option>
                                        <option value="Mini Skirt">Mini Skirt</option>
                                        <option value="Midi SKirt">Midi Skirt</option>
                                        <option value="Long Skirt">Long Skirt</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="skirt-hip-round">Hip Round (Skirt)</label>
                                        <input type="text" class="form-control" id="skirt_hip_round" placeholder="cm/inches">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="skirt-hip-length">Hip Length (Skirt)</label>
                                        <input type="text" class="form-control" id="skirt_hip_length" placeholder="cm/inches">
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

        $('#proceed').click(function(e){
            e.preventDefault();


        $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('female.store') }}",
            method: 'post',
            dataType: 'json',
            data: {

                top_sleeve_length: $('#top_sleeve_length').val(),

                burst_round: $('#burst_round').val(),
                shoulder: $('#shoulder').val(),
                back: $('#back').val(),

                under_burst_round: $('#under_burst_round').val(),
                end_to_end_nipple_length: $('#end_to_end_nipple_length').val(),
                waist_round: $('#waist_round').val(),

                elbow_wrist: $('#elbow_wrist').val(),
                elbow_round: $('#elbow_round').val(),
                sleeve_round: $('#sleeve_round').val(),
                sleeve_length: $('#sleeve_length').val(),
                wrist_round: $('#wrist_round').val(),
                shoulder_elbow: $('#shoulder_elbow').val(),
                hip_round: $('#hip_round').val(),

                buttom: $('#buttom').val(),
            
                hip_length: $('#hip_length').val(),
                hip_round: $('#hip_round').val(),

                thigh_round: $('#thigh_round').val(),
                knee_round: $('#knee_round').val(),
                ankle_round: $('#ankle_round').val(),
                waist_knee_length: $('#waist_knee_length').val(),
                knee_feet_length: $('#knee_feet_length').val(),

                skirt: $('#skirt').val(),
                skirt_hip_round: $('#skirt_hip_round').val(),
                skirt_hip_length: $('#skirt_hip_length').val(),

                short_hip_round: $('#short_hip_round').val(),
                short_hip_length: $('#short_hip_length').val(),
                short_thigh_round: $('#short_thigh_round').val(),
                short_knee_round: $('#short_knee_round').val(),
                short_ankle_round: $('#short_ankle_round').val(),
                short_waist_knee_length: $('#short_waist_knee_length').val(),
                short_knee_feet_length: $('#short_knee_feet_length').val()

        },

        success: function(result){

            $('#success_message').fadeIn().html('Form Submit Successfully!');
                setTimeout(function() {
            $('#success_message').fadeOut("slow");
            }, 3000 );

            $('#female_form').trigger("reset");

            console.log(result);
        }	
    });
});
});

		
		// $(".selection-2").select2({
		// 	minimumResultsForSearch: 20,
		// 	dropdownParent: $('#dropDownSelect1')
		// });
    //   const trouser = document.getElementById('inputState2');

    //   trouser.addEventListener('click', addTrouser);

    //   function addTrouser(e){
    //     e.preventDefault();

    //     if( trouser.options[trouser.selectedIndex].value == 1 ){

    //       document.getElementById('_trouser').style.display = "block";

    //     } else if( trouser.options[trouser.selectedIndex].value == 2 ){

    //       document.getElementById('_skirt').style.display = "block";

    //     } else if( trouser.options[trouser.selectedIndex].value == 1 ) {

    //       document.getElementById('_short').style.display = "block";
          
    //     }
        
    //   }

    function showField() {
			
			var option = document.getElementById('short').selected,
				optionTwo = document.getElementById('skirt').selected,
                optionThree = document.getElementById('trouser').selected;
	
			// sleeveLength.addEventListener('click', addArmHole);

			if( option === true ){

				document.getElementById('_short').style.display = "block";

			} else if ( optionTwo == true ) {

				document.getElementById('_skirt').style.display = "block";

			} else if ( optionThree == true ) {

				document.getElementById('_trouser').style.display = "block";

            }

		}
			


	</script>
	

</body>
</html>