$(document).ready(function(){
   


    host = $("meta[name='host']").attr("content");

   

        
        $(document).on('submit', '#register-form', function( event ) {

    

        // Stop form from submitting normally
        event.preventDefault();
      
        // Get some values from elements on the page:
        var $form = $( this ),
          em = $form.find( "input[name='email']" ).val(),
          token = $form.find( "input[name='_token']" ).val(),
          url = $form.attr( "action" );
          var datastrings = $(this).serialize();
          // Send the data using post
          var posting = $.post( url, datastrings );
      
          // Put the results in a div
          posting.done(function( data ) {
              if(data == 'exist'){
                  $('#r_error').html('Email already exists.');
                  $('#r_error').css({display: 'block'});
              }else if(data == 'nomatch'){
                  $('#r_error').html('Password does not match.');
                  $('#r_error').css({display: 'block'});
              }else if(data == 'strong'){
                $('#r_error').html('Your password must be more than 6 characters');
                $('#r_error').css({display: 'block'});
            }else{
                  $('#r_error').css({display: 'none'});

			       swal("Success!", "Registration  Successful", "success");
              }
      
              console.log(data);
          })
          .fail(function(error) {
              $('#r_error').html('Something went wrong.');
              $('#r_error').css({display: 'block'});
              console.log(error);
          });
      });


});