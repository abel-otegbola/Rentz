<!DOCTYPE html>
<html>
	<head>
		<title>Aziz Ozbek Contact Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="utf-8" >
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">		
		<style type='text/css'>     
			.e_name, .e_email, .e_email-1, .e_sub, .e_mes { display:none;}
		</style> 
	</head>
		
	<body>
 		<div class="container">
			<h1>Php Ajax Contact Form</h1>
	 		<form method="post" class="form-horizontal" action="send.php" id="contactForm" >
				<div class="form-group">
					<label for="name"> Name </label><br />
					<input type="text" id="name"  name="name" />
			 		<span class="alert alert-danger e_name">*Name.</span> 
				</div>
				<div class="form-group">
					<label for="email">Email</label><br />
					<input type="email"  id="email"  name="email" />
					<span class="alert alert-danger e_email">*Email.</span>   
					<span class="alert alert-danger e_email-1">*Email Validate !</span>   
				</div>
				<div class="form-group">
					<label for="subject">Subject</label><br>
					<input type="text" id="subject" name="subject" />
		 			<span class="alert alert-danger e_sub">*Subject.</span>   
	 			</div>
				<div class="form-group">
					<textarea  rows="10" cols="40" id="message" name="message"></textarea>
					<span class="alert alert-danger e_mes">*Message.</span> 
				</div>

				<div class="btn btn-info">
					<a href="javascript:gonder();"  id="btn" class="link"><center>Send</center></a>
				</div>
			 
	   			<div id="info"></div>                             
			</form>
		</div>
											                    
		<script >
		function kapat() {
			$('#info').fadeOut(500);

		}
		function gonder() {
			
			$('.e_name').hide();
			$('.e_email').hide();
			$('.e_sub').hide();
			$('.e_mes').hide();
 		 	var name = $('#name').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();
 		 	name = jQuery.trim(name);
			email = jQuery.trim(email);
			subject = jQuery.trim(subject);
			message = jQuery.trim(message);
 

			if(name == "") {
				$('.e_name').fadeIn(100);
				$('#name').val(name);
			}
			if(email == "") {
				$('.e_email').fadeIn(100);
				$('#email').val(email);
			}
			if(subject == "") {
				$('.e_sub').fadeIn(100);
				$('#subject').val(subject);
			}
			if(message == "") {
				$('.e_mes').fadeIn(100);
				$('#message').val(message);
			}	
 		     function validateEmail(email) {
		          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		          return emailReg.test( email );
		        }
		  if( !validateEmail(email)) {
		      $('.e_email-1').fadeIn(100);
				$('#email').val(email);
		        }else{

			
			if( name == "" || email == "" || subject == "" || message == "" ) exit(); 
			
			$('#info').html('<span>Please Wait...</span>');
			$('#info').show(300);

			$.ajax( {
				type: "POST",
				url: "send.php",
				data:$('#contactForm').serialize(),
				success: function(cevap) {
					$('#info').show();
					if(cevap==''){
						$('#info').html('<span>message has been sent...</span><br /><input  value="Reset" type="reset" onClick="kapat()" />');
					}else{
						$('#info').html('<span style="color:#ff0000">There is an Error</span><br /><input  value="Close" type="reset" onClick="kapat()" />');
					}
				}
			});
		}
		}

		</script>
  		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  	</body>
 </html>