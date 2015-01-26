<?php session_start(); ?>
<!DOCTYPE html>
<html lang='en'>


	<?php // head configuration & field value handling:
	
		$current_page_name = 'contact';
		$current_page_url = 'harrysolovay.com/contact.php';
		include('components/head.php');
		
		// if is set, store inquiry-mailer data – otherwise set it to an empty string / false
		$full_name = isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '';
		$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
		$inquiry = isset($_SESSION['inquiry']) ? $_SESSION['inquiry'] : '';
		$mailed = isset($_SESSION['mailed']) ? $_SESSION['mailed'] : false;
		
		// reset inquiry mailer session data
		$_SESSION['full_name'] = $_SESSION['email'] = $_SESSION['inquiry'] = '';
		$_SESSION['mailed'] = false;
		
		// reset fields if mailed
		if($mailed) $full_name = $email = $inquiry = '';
		
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php
			if($mailed) {
				echo "<!-- message sent success message -->
				<section>
					<span class='block'>Your message was successfully sent!</span>
					<hr>
				</section>
				<!-- divs maintain section/color rotation -->
				<div></div><div></div>
				<script type='text/javascript'>
					$(function() {
						$('.block').css({
							'-webkit-transition-duration' : '1.75s',
   	   						'-moz-transition-duration' : '1.75s',
  		 					'-o-transition-duration' : '1.75s',
    	    				'transition-duration' : '1.75s',
							'color' : '#22A7F0'
						});
					});
				</script>";
			}
		?>
		
		
		<!-- contact section -->
		<section id='contact'>
			<div class='inner-section'>
				<span>Reach out to me<br>with any questions,<br>comments or... etc.</span>
				<form method='post' action="<?php echo htmlspecialchars('inquiry-mailer.php');?>">
   					<input class='full_name' type='text' placeholder='Your name' name='full_name' maxlength='65' value='<?php echo $full_name; ?>'>
   					<input class='email' type='email' placeholder='Your email' name='email' value='<?php echo $email; ?>'>
   					<textarea placeholder='Your inquiry' name='inquiry' maxlength='500'><?php echo $inquiry; ?></textarea>
   					<input class='submit' type='submit' name='submit' value='Submit'>
				</form>
			</div>
		</section>
		
		
		<?php // display & reset validation messages:
			require('validation.php');
			print_then_clear_all_validation_messages();
		?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
