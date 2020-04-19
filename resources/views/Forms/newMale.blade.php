<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}"> --}}
</head>
<body>

        <div id="app">
            <nav class="navbar navbar-dark bg-dark navbar-static-top">
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
        </div>
    
    <br>

<div class="container">
    <div class="col-md-auto">
        <div class="card">
            <div class="card-header" style="text-align:center;">{{ __('Male Fittings') }}</div>
                
                <div class="card-body">
                    <form id="male_form">

                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="chest-round">Chest Round</label>
							  <input type="input100" class="form-control" id="chest_round" placeholder="cm/inches">
					    </div>
                        <div class="form-group col-md-4">
                              <label for="Shoulder">Shoulder</label>
                              <input type="input100" class="form-control" id="shoulder" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
                              <label for="back">Back</label>
                              <input type="input100" class="form-control" id="back" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-8">
								<label for="inputState1">Sleeve Length</label>
									<select id="inputState1" class="form-control" onchange = "showFields()">
										<option selected disabled>Choose...</option>
										<option value="Short" id="short">Short</option>
										<option value="Long" id="long">Long</option>
									</select>
						</div>
						<div class="form-row" id="shortFields" style = "display: none; ">
							<div class="form-group col-md-4">
									<label for="short-armhole">Short Armhole</label>
										<input type="input100" class="form-control" id="short_armhole" placeholder="cm/inches">
						    </div>
						<div class="form-group col-md-4">
								<label for="sleeve-length">Sleeve Length</label>
									<input type="input100" class="form-control" id="sleeve_length" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
								<label for="sleeve-round">Sleeve Round</label>
									<input type="input100" class="form-control" id="sleeve_round" placeholder="cm/inches">
						</div>
						</div>
						<div class="form-row" id="longFields" style="display: none; ">
							<div class="form-group col-md-4">
								<label for="long-armhole">Long Armhole</label>
									<input type="input100" class="form-control" id="long_armhole" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
							<label for="long-sleeve-length">Long Sleeve Length</label>
								<input type="input100" class="form-control" id="long_sleeve_length" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
							<label for="long-sleeve-round"> Long Sleeve Round</label>
								<input type="input100" class="form-control" id="long_sleeve_round" placeholder="cm/inches">
						</div>		
						<div class="form-group col-m-4">
							<label for="elbow-round">Elbow Round</label>
								<input type="input100" class="form-control" id="elbow_round" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
							<label for="wrist-round">Wrist Round</label>
								<input type="input100" class="form-control" id="wrist_round" placeholder="cm/inches">
						</div>
						<div class="form-group col-md-4">
							<label for="shoulder-elbow">Shoulder Elbow Length</label>
								<input type="input100" class="form-control" id="shoulder_elbow" placeholder="cm/inches">
						</div>	
						<div class="form-group col-md-4">
							<label for="elbow-wrist">Elbow Wrist</label>
								<input type="input100" class="form-control" id="elbow_wrist" placeholder="cm/inches">
						</div>

						</div>
						<div class="form-group col-md-8">
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
					<div class="form-group col-md-4">
						<label for="waist-round">Waist Round</label>
						<input type="input100" class="form-control" id="waist_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-4">
						<label for="thigh-round">Thigh Round</label>
						<input type="input100" class="form-control" id="thigh_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-4">
						<label for="knee-round">Knee Round</label>
						<input type="input100" class="form-control" id="knee_round" placeholder="cm/inches">
					</div>
					<div class="form-group col-md-4">
						<label for="ankle-round">Ankle Round</label>
						<input type="input100" class="form-control" id="ankle_round" placeholder="cm/inches">
					</div>
				</div>

				<div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" id="submit">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
        </div>
    </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
{{-- <script src="{{ URL::asset('js/main.js') }}"></script> --}}

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