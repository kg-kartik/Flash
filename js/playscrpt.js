$(document).ready(function(){
	$(".content").hide().fadeIn(500);
	$("form.ansform").submit(function(e){
		e.preventDefault();
		var postData = $(this).serialize();
		$.ajax({
			url: 'includes/chkans.php',
			data: postData,
			type: "POST",
			success: function(responseText){
			if (responseText == 0){
					$(".error-login").html('Login Failed: Invalid Username/Password');
					$(".error-login").slideDown();
				} else if(responseText == 2 ) {
					$(".error-login").slideDown();
				} else if(responseText == 1){
					$(".success-login").slideDown();
					$(".error-login").slideUp();
					/*window.location.href="dashboard.php";*/
				} else {
					$(".error-login").html('Unknown Error: '+data+' Please send an email to exun@dpsrkp.net.');
					$(".error-login").slideDown();
				}
			},
			error: function(){
				$("h4").prepend('<div class="error"><center>Oops! An error occurred!</center></div>');
			}
		});
	});