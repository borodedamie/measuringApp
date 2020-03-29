
    $(document).ready( function() {

        $('#details').click( function(e) {
            e.preventDefault();

            $.ajax({
                type: 'GET',
                url: "/showDetails",
                data: {},

                success: function() {
                    console.log();
                }
            })
        });
    
    });

    

    