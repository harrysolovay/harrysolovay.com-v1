




<?php

	function hero() {
		echo "<section id='hero'>
			<div class='inner-section cover-with-image'></div>
		</section>";
	}

	if($_SESSION['current_page'] == 'About') {
		hero();
	} elseif($_SESSION['current_page'] != 'About' && $_SESSION['previous_page'] == 'About') {
		hero();
		echo "<script type='text/javascript'>
				$(function() {
					$('#hero > div').animate({'height' : '0px'}, 750, function() {
						$('#hero > div').css('display', 'none');
					});
				});
			</script>";
	}

?>
