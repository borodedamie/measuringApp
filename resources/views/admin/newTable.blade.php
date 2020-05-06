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
	<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar-static-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Admin Section
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
                <div class="card-header" style="text-align:center;">{{ __('Customer\'s Information') }}</div>

                <section>
                    <div class="card-body">
                        <div class="row">
                            <table id="datatable" class="display table table-bordered" width="100%" style="margin: 10px; padding: 5px;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>E-mail</th>
                                        <th>Gender</th>
                                        <th>Phone Number</th>
                                        <th>Measurement</th>
                                        <th style="">Edit</th>             
                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->email }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td><a href="{{ route('admin.details') }}" class="btn btn-primary">Show Details</a></td>
                                        <td class="form-group">
                                            <a href="" id="show-modal" class='btn btn-primary btn-xs' data-toggle="modal" data-target="#show" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-street_name="{{ $user->address }}" data-phone_number="{{ $user->phone_number }}" data-gender="{{ $user->gender }}"><i class="fa fa-eye"></i></a>
                                            <a href="" class='edit-modal btn btn-success btn-xs' data-toggle="modal" data-target="#myModal" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-street_name="{{ $user->address }}" data-phone_number="{{ $user->phone_number }}" data-gender="{{ $user->gender }}"><i class="fa fa-edit"></i></a>
                                            <a href="" class='delete-modal btn btn-danger btn-xs' data-toggle="modal" data-target="#delete" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-street_name="{{ $user->address }}" data-phone_number="{{ $user->phone_number }}" data-gender="{{ $user->gender }}"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>  
                                    @endforeach                                
                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

            {{-- Show data modal --}}
    <div class="modal fade" id="show" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body replace">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class="fa fa-times"></span> Close
                    </button>
                </div>
            </div>
        </div>
        </div>

                {{-- Edit & delete --}}
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal" role="modal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="customer_id">ID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="id" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="name">Name</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="name" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="address">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="address" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="gender">Gender</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="gender" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="age">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="phone_number" >
                                        </div>
                                    </div>
                                </form>
                                {{-- Delete --}}
                                {{-- <div class="deletecontent">
                                    Are you sure you want to delete <span class="name"></span>?
                                    <span class="hidden id"></span>
                                </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">
                                    <span id="footer_action_button" ></span>Save Changes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span id="" class="fa fa-times"></span>Close
                                </button>
                            </div>
                            <span id="error_message" class="text-danger"></span>
                            <span id="success_message" class="text-danger"></span>
                        </div>
                    </div>
                </div>
        
                <div class="modal fade" id="delete" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete data ?
                                <span class="hidden id"></span>
                                <div class="form-group">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        <span class="fa fa-check"></span> Yes
                                    </button>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                                        <span class="fa fa-times"></span> No
                                    </button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="fa fa-times"></span> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
            
            $('#show-modal').click( function(e) {
                e.preventDefault();

                // var id = $(this).data('id');
                $('.replace').empty();

                $.ajax({
                    url: "{{ route('admin.show', [$user->id]) }}",
                    type: "GET",

                    success:function(data) {
                    $('.replace').html(data);
                    }
                // error:function(jQXHR, textStatus, errorThrown) {
                //     console.log(jQXHR);
                //     console.log(textStatus);
                //     console.log(errorThrown);
                // }

                });

                // $('#show').modal('show');
                // $('.modal-title').text('Customer Info');
            });

            $('.edit-modal').click( function(e) {
                e.preventDefault();

                $('#footer_action_button').text(" Update Customer's Info. ");
                $('#footer_action_button').addClass('fa fa-check');
                $('#footer_action_button').removeClass('fa fa-trash');

                $('.actionBtn').addClass('btn-success');
                $('.actionBtn').removeClass('btn-success');
                $('.actionBtn').addClass('edit');

                $('.modal-title').text('Edit Customer\'s info.');
                $('.deletecontent').hide();
                $('.form-horizontal').show();

                $('#id').val($(this).data('id'));
                $('#name').val($(this).data('name'));
                $('#address').val( $(this).data('address'));
                $('#gender').val( $(this).data('gender'));
                $('#phone_number').val( $(this).data('phone_number'));

                $('#myModal').modal('show');
            });

            $.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});

            $('.edit').click( function(e) {
                e.preventDefault();

                $.ajax({
                    method: 'POST',
                    url: "{{ route('admin.update', [$user->id]) }}",
                    dataType: 'json',
                    data: {
                        'name': $('#name').val(),
                        'address': $('#address').val(),
                        'gender': $('#gender').val(),
                        'phone_number': $('#phone_number').val(),

                    },
                    success: function(data) {
                        $('#success_message').fadeIn().html('Customer\'s info updated successfully!');
							setTimeout(function() {
						$('#success_message').fadeOut("slow");
						}, 3000 );
                    }
                    // },
                    // error:function(jQXHR, textStatus, errorThrown) {
                    // console.log(jQXHR);
                    // console.log(textStatus);
                    // console.log(errorThrown);
                });

            });
    });
</script>

</body>
</html>