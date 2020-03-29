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