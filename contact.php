<?php
	session_start();
	require_once('validation.php');
?>
<!DOCTYPE html>
<html lang='en'>


	<?php
	
		$current_page_name = 'contact';
		$current_page_url = 'harrysolovay.com/contact.php';
		include('components/head.php');
		
		$full_name = isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '';
		$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
		$inquiry = isset($_SESSION['inquiry']) ? $_SESSION['inquiry'] : '';
		$mailed = false;
		
		if(!empty($full_name) && !empty($email) && !empty($inquiry)) {
			$mailed = true;
		}
		
		if($mailed)
			$full_name = $email = $inquiry = '';
		
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php
			if($mailed) {
				echo "<div></div><section class='section'>
					<span class='block'>Your message was successfully sent!</span>
					<hr>
				</section>
				<div></div>
				<script type='text/javascript'>
					$(function() {
						$('.block').css({
							'-webkit-transition-duration' : '1.25s',
   	   						'-moz-transition-duration' : '1.25s',
  		 					'-o-transition-duration' : '1.25s',
    	    				'transition-duration' : '1.25s',
							'color' : '#22A7F0'
						});
					});
				</script>";
			}
		?>
		
		
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
		
		
		<?php
			print_then_clear_all_validation_messages();
			if($mailed)
				$_SESSION['full_name'] = $_SESSION['email'] = $_SESSION['inquiry'] = '';
		?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
