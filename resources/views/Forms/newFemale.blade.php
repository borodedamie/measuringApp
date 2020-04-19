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
                <div class="card-header" style="text-align:center;">{{ __('Female Fittings') }}</div>

    <div class="card-body">

    <form id="female_form">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputState">Top/Sleeve Length</label>
                        <select id="top_sleeve_length" class="form-control">
                          <option selected>Choose...</option>
                          <option value="Short">Short</option>
                          <option value="Long">Long</option>
                        </select>
                      </div>
                                  <div class="form-group col-md-4">
                                    <label for="burst-round">Burst Round</label>
                                    <input type="text" class="form-control" id="burst_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="shoulder">Shoulder</label>
                                    <input type="text" class="form-control" id="shoulder" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
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
                                  <div class="form-group col-md-4 ">
                                      <label for="under-burst-round">Under Burst Round</label>
                                      <input type="text" class="form-control" id="under_burst_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4 ">
                                      <label for="nipple-nipple-length">Nipple to Nipple Length</label>
                                      <input type="text" class="form-control" id="end_to_end_nipple_length" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="wrist-round">Wrist Round</label>
                                      <input type="text" class="form-control" id="wrist_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="waist-round">Waist Round</label>
                                      <input type="text" class="form-control" id="waist_round" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="shoulder-elbow">Shoulder Elbow</label>
                                      <input type="text" class="form-control" id="shoulder_elbow" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="elbow-wrist">Elbow Wrist</label>
                                      <input type="text" class="form-control" id="elbow_wrist" placeholder="cm/inches">
                                  </div>
                                  <div class="form-group col-md-4">
                                      <label for="elbow-round">Elbow Round</label>
                                      <input type="text" class="form-control" id="elbow_round" placeholder="cm/inches">
                                  </div>
                                    <div class="form-group col-md-4">
                                        <label for="length">Sleeve Length</label>
                                        <input type="text" class="form-control" id="sleeve_length" placeholder="cm/inches">
                                    </div> 
                                    <div class="form-group col-md-4">
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
      
                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="proceed">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                      </form>	
    </div>

<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>

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