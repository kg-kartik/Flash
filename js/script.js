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
					$(".dangerAlert").slideDown();
					window.location.href="play.php";
				}else if(responseText == 1){
					$(".successAlert").slideDown();
					$(".dangerAlert").slideUp();
					window.location.href="play.php";
				} else {
					$(".dangerAlert").html('Unknown Error: '+data+' Please send an email to exun@dpsrkp.net.');
					$(".dangerAlert").slideDown();
				}
				},
				error: function(){
					$("h4").prepend('<div class="error"><center>Oops! An error occurred!</center></div>');
				}
			}); 
	});
});
<script type="text/javascript"> window.onload = function(){
                        $('#dangerAlert').delay('500').slideUp();
                        $('#successAlert').delay('500').slideDown();
                        $('#successAlert').delay('5000').slideUp();
                    };
  </script>