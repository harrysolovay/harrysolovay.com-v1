<?php







function cleanse($string) {
	return htmlspecialchars(stripslashes(trim($string)));
}
	
	
	
	
	
	
	
// validation messages to be displayed to user
$validation_messages = array(
	
	'full_name' => array(
		0 => 'Enter your name in the name field.',
		1 => 'Enter a name that is less than 40 characters in length and consists only of letters and spaces.',
		2 => 'Enter a name that is less than 40 characters in length.',
		3 => 'Enter a name that consists only of letters and spaces.'
	),
		
	'email' => array(
		0 => 'Enter your email address in the email field.',
		1 => 'Enter a valid email address.',
		2 => 'Enter an email address that isn\'t yet registered with us.'
	),
		
	'inquiry' => array(
		0 => 'Enter your inquiry in the inquiry field.',
		1 => 'Enter an inquiry that is less than 500 characters in length.'
	)
		
);
	
	
	
	
	
	
	
/* === returns true if $var exists === */
function has_presence($var) {
	return !empty($var);
}
	
/* === returns true if $string is shorter than $min_length === */
function is_longer_than($string, $max_length) {
	return strlen($string) > $max_length;
}
	
/* === returns true if $string consists only of alphabetic characters and spaces === */
function has_only_letters_and_spaces($string) {
	return preg_match("/^[a-zA-Z ]*$/", $string);
}
	
/* === returns true if $email follows normal email composition and has a DNS record === */
function is_real_email($email) {
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		return false;
	list($user, $domain) = explode('@', $email);
	if(!checkdnsrr($domain, 'MX'))
   		return false;
   	return true;
}







/* === pushes $string to $_SESSION['validation_messages'] === */
function create_validation_message($validation_message) {
	if(!isset($_SESSION['validation_messages'])) {
		$_SESSION['validation_messages'] = array();
	} else {
		array_push($_SESSION['validation_messages'], $validation_message);
	}
}
	
/* === prints all messages from $_SESSION['validation_message'] === */
function print_validation_messages() {
	foreach($_SESSION['validation_messages'] as &$message) {
		echo "<hr><span class='block'>" . $message . "</span>";
	}
}
	
/* === resets $_SESSION['validation_messages'] to an empty array === */
function clear_validation_messages() {
	$_SESSION['validation_messages'] = array();
}

/* === prints an instruction to fix form then calls of print_validation_messages() and clear_validation_messages() === */
function print_then_clear_all_validation_messages() {
	if(!empty($_SESSION['validation_messages'])) {
		echo "<section id='validation-messages' class='clearfix'><hr><span class='pre-block block'>Please correct the following:</span>";
		print_validation_messages();
		echo "</section>
			<div></div>
			<script type='text/javascript'>
				$(function() {
					$('.pre-block').css({
						'-webkit-transition-duration' : '1.25s',
   	   					'-moz-transition-duration' : '1.25s',
  		 				'-o-transition-duration' : '1.25s',
    	    			'transition-duration' : '1.25s',
						'color' : '#e74c3c'
					});
				});
			</script>";
		clear_validation_messages();
	}
}
	
	
	
	
	
	

function is_valid_full_name($full_name) {
	global $validation_messages;
	if(!has_presence($full_name)) {
		create_validation_message($validation_messages['full_name'][0]);
		return false;
	} else {
		$length_problem = is_longer_than($full_name, 40);
		$content_problem = !has_only_letters_and_spaces($full_name);
		if($length_problem && $content_problem) {
			create_validation_message($validation_messages['full_name'][1]);
			return false;
		} elseif($length_problem) {
			create_validation_message($validation_messages['full_name'][2]);
			return false;
		} elseif($content_problem) {
			create_validation_message($validation_messages['full_name'][3]);
			return false;
		}
	}
	return true;
}

function is_valid_email($email) {
	global $validation_messages;
	if(!has_presence($email)) {
		create_validation_message($validation_messages['email'][0]);
		return false;
	} elseif(!is_real_email($email)) {
		create_validation_message($validation_messages['email'][1]);
		return false;
	}
	return true;
}

function is_valid_inquiry($inquiry) {
	global $validation_messages;
	if(!has_presence($inquiry)) {
		create_validation_message($validation_messages['inquiry'][0]);
		return false;
	} elseif(is_longer_than($inquiry, 500)) {
		create_validation_message($validation_messages['inquiry'][1]);
		return false;
	}
	return true;
}







?>
