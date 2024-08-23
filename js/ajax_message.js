$(document).ready(function() {	
    $('#messageButton').on('click', function() {        
        $('.status').html('');        
        var regirabyteemail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var irabytename = $('#irabytename').val();
        var irabyteemail = $('#irabyteemail').val();	  
        var irabytesubject = $('#irabytesubject').val();
		 var message = $('#message').val();
		
        if(irabytename.trim() == '' ) {           
			$('#irabytenameError').text('Please enter irabytename.').removeClass('hidden');
			$('#irabyteemailError').text('').addClass('hidden');
            $('#irabytename').focus();
            return false;
        } else if(irabyteemail.trim() == '' ) {          
			$('#irabyteemailError').text('Please enter irabyteemail.').removeClass('hidden');
			$('#irabytenameError').text('').addClass('hidden');
            $('#irabyteemail').focus();
            return false;
        }
		else if(irabytesubject.trim() == '' ) {          
			$('#irabyteemailError').text('Please enter irabyteemail.').removeClass('hidden');
			$('#irabytenameError').text('').addClass('hidden');
            $('#irabyteemail').focus();
            return false;
        }
		else if(message.trim() == '' ) {          
			$('#irabyteemailError').text('Please enter irabyteemail.').removeClass('hidden');
			$('#irabytenameError').text('').addClass('hidden');
            $('#irabyteemail').focus();
            return false;
        }
		else if(irabyteemail.trim() != '' && !regirabyteemail.test(irabyteemail)) {          
			$('#irabyteemailError').text('Please enter a valid irabyteemail.').removeClass('hidden');
			$('#irabytenameError').text('').addClass('hidden');
            $('#irabyteemail').focus();
            return false;
        } else {            
            $.ajax({
                type:'POST',
                url:'messageaction.php',
                dataType: "json",
                data:{irabyteemail_subscribe:1, irabytename:irabytename, irabyteemail:irabyteemail},
                beforeSend: function () {
                    $('#messageButton').attr("disabled", "disabled");
                    $('.susbcribe-container').css('opacity', '.5');
                },
                success:function(data) {
                    if(data.status == 'ok') {
                        $('#subscribeForm')[0].reset();
                        $('.status').html('<p class="success">'+data.msg+'</p>');
                    } else {
                        $('.status').html('<p class="error">'+data.msg+'</p>');
                    }
                    $('#messageButton').removeAttr("disabled");
                    $('.susbcribe-container').css('opacity', '1');
                }
            });
        }
    });
});