<?php

	
	session_start(); // validation uses a session
	
	
	require_once('validation.php'); // along with name / email / inquiry input validation

	
	// if it is the intended request method
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
			
		// get POST data and run through filter
		$full_name = cleanse($_POST['full_name']);
		$email = cleanse($_POST['email']);
		$inquiry = cleanse($_POST['inquiry']);
		$mailed = false;
		
		
		// check validity
		$full_name_is_valid = is_valid_full_name($full_name);
		$email_is_valid = is_valid_email($email);
		$inquiry_is_valid = is_valid_inquiry($inquiry);
		
		
		// if form data is valid, send it and store success boolean in $mailed
		if($full_name_is_valid && $email_is_valid && $inquiry_is_valid)
			$mailed = @mail('hsolovay@conncoll.edu', 'Inquiry', $inquiry, 'From ' . $full_name . "\r\n" . 'Reply to ' . $email);
			
		
		// if any form data is invalid send it back as empty String
		// if any form data is valid, send it back as itself
		$_SESSION['full_name'] = $full_name_is_valid ? $full_name : '';
		$_SESSION['email'] = $email_is_valid ? $email : '';
		$_SESSION['inquiry'] = $inquiry_is_valid ? $inquiry : '';
		$_SESSION['mailed'] = $mailed;
		
					
	}
	
	
	// redirect to contact.php
	header('Location: contact.php');
	exit();
	

?>
