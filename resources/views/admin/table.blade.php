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
{{-- Datatables --}}
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.foundation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.foundation.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.jqueryui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.jqueryui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.semanticui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/dataTables.semanticui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/Datatables/css/jquery.dataTables.min.css') }}">

</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-static-top" >
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Admin</a>
        </div>
    </div>
</nav>

<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <br>
            <br>
            <h2>Customer's Detail</h2>
            <hr/>
            {{-- <a class="btn btn-primary" href="student/create" style="margin-bottom; 15px;">Create New</a>
            <div class="alert-custom">
                <p>Student added successfully</p>
            </div> --}}
            
            <table id="datatable" class="display table table-bordered" width="100%" style="margin: 0px; padding: 0px;">
                <thead>
                    <tr>
                        <th style="padding-left:15px;">Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Measurement</th>
                        <th style="">Edit</th>             

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                        @foreach ($customers as $customer)
                        <tr class="customer{{ $customer->customer_id }}">
                            <td>{{ $no++ }}</td>
                            <td>{{ $customer->customer_name }}</td>
                            <td>{{ $customer->street_name }}</td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td><a href="{!! route('admin.showDetails', [ $customer->customer_id ]) !!}" class="btn btn-primary">Show Details</a></td>
                            <td class="form-group" style = "padding-top: 15px;">
                                <a href="" class='show-modal btn btn-primary btn-xs' data-id="{{ $customer->customer_id }}" data-name="{{ $customer->customer_name }}" data-street_name="{{ $customer->street_name }}" data-phone_number="{{ $customer->phone_number }}" data-age="{{ $customer->age }}" data-gender="{{ $customer->gender }}"><i class="fa fa-eye"></i></a>
                                <a href="" class='edit-modal btn btn-success btn-xs' data-id="{{ $customer->customer_id }}" data-name="{{ $customer->customer_name }}" data-street_name="{{ $customer->street_name }}" data-phone_number="{{ $customer->phone_number }}" data-age="{{ $customer->age }}" data-gender="{{ $customer->gender }}"><i class="fa fa-edit"></i></a>
                                <a href="" class='delete-modal btn btn-danger btn-xs' data-id="{{ $customer->customer_id }}" data-name="{{ $customer->customer_name }}" data-street_name="{{ $customer->street_name }}" data-phone_number="{{ $customer->phone_number }}" data-age="{{ $customer->age }}" data-gender="{{ $customer->gender }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach                                     

                </tbody>
            </table>
        </div>

        {{-- Show data modal --}}
        <div class="modal fade" id="show" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Name: {{ $customer->customer_name }}</p>
                        <p>Address: {{ $customer->street_name }}</p>
                        <p>Phone Number: {{ $customer->phone_number }}</p>
                        <p>Age: {{ $customer->age }}</p>
                        <p>Gender: {{ $customer->gender }}</p>
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
                                    <input type="text" class="form-control" id="customer_id" disabled >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="customer_name">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="customer_name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="address">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="street_name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="phone_number">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phone_number" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="age">Age</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="age" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="gender">Gender</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gender" >
                                </div>
                            </div>
                        </form>
                        {{-- Delete --}}
                        <div class="deletecontent">
                            Are you sure you want to delete <span class="customer_name"></span>?
                            <span class="hidden id"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" ></span>
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
    </div>
</div>

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

    {{-- Datatables --}}

    <script src="{{ URL::asset('js/admin.js') }}"></script>


    <script src="{{ URL::asset('vendor/Datatables/datatables.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.foundation.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.foundation.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.jqueryui.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.jqueryui.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.semanticui.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/dataTables.semanticui.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('vendor/Datatables/js/jquery.dataTables.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $('.show-modal').click( function(e) {
                e.preventDefault();

                $('#show').modal('show');
                $('.modal-title').text('Customer Info');
            });

            //Edit function
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

                $('#customer_id').val($(this).data('customer_id'));
                $('#customer_name').val($(this).data('customer_name'));
                $('#street_name').val( $(this).data('street_name'));
                $('#phone_number').val( $(this).data('phone_number'));
                $('#age').val( $(this).data('age'));
                $('#gender').val( $(this).data('gender'));


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
                    url: "{{ route('customer.update') }}",
                    dataType: 'json',
                    data: {
                        'customer_name': $('#customer_name').val(),
                        'street_name': $('#street_name').val(),
                        'phone_number': $('#phone_number').val(),
                        'age': $('#age').val(),
                        'gender': $('#gender').val(),

                    },
                    success: function(data) {
                        $('#success_message').fadeIn().html('Customer\'s info updated successfully!');
							setTimeout(function() {
						$('#success_message').fadeOut("slow");
						}, 3000 );
                    }
                });

            });

            //Delete function
            $('.delete-modal').click( function(e) {
                e.preventDefault();

                $('#delete').modal('show');
                $('.modal-title').text('Delete customer\'s info. ');


            });

        });

    </script>
    
</body>

</html>