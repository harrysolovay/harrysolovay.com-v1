<?php





	// start the session
	session_start();
	
	
	
	
	
	// stores previous & current page names as strings in $_SESSION
	function track_navigation() {
		global $current_page_name;
		$_SESSION['previous_page'] = isset($_SESSION['current_page']) ? $_SESSION['current_page'] : 'none';
		$_SESSION['current_page'] = $current_page_name;
	}
	
	
	
	
	
?>
