<?php require_once('session.php'); ?>
<!DOCTYPE html>
<html lang='en'>


	<?php
	
		$current_page_name = 'Work';
		$current_page_url = 'harrysolovay.com/work.php';
		include('components/head.php');
		
		track_navigation();
		
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php include('components/hero.php'); ?>
		
		
		<?php include('work-data.php'); ?>
		
		
		<?php
		
		
			function new_grid_section($o, $has_no_details = true) {
			
				echo "<section class='work' id='" . $o['id'] . "'>
					<div class='inner-section'>
						<span>{$o['work_type']}</span>
						<div class='grid clearfix'>";
						
				if(!$has_no_details) {
				
					foreach($o['pieces'] as $piece) {
						echo "<a href='piece.php?";
						
						if(isset($piece['has_multiple_files'])) {
							$sub_urls = scandir($o['url'] . $piece['sub_url']);
							$counter = 0;
							foreach($sub_urls as $sub_url) {
								if(($sub_url != '..') &&
									($sub_url != '.') &&
									($sub_url != '.DS_Store') &&
									($sub_url != 'thumbnail.jpg')) {
									$counter++;
									echo 'item-' . (string)$counter . '=' . urlencode($o['url'] . $piece['sub_url'] . $sub_url) . '&';
								}
							}
							echo 'has-multiple-files=true';
						} else {
							echo 'item=' . urlencode($o['url'] . $piece['sub_url']) . "full.jpg";
						}
						
						echo "&name=" . $piece['name'] . "'>
								<div class='grid-item cover-with-image disable-selection' style='background-image : url(" . $o['url'] . $piece['sub_url'] . "thumbnail.jpg);'>
									<span>{$piece['name']}</span>
								</div>
							</a>";
					}
					
				} else {
				
					$sub_urls = scandir($o['url']);
					foreach($sub_urls as $sub_url) {
						if(($sub_url != '..') &&
							($sub_url != '.') &&
							($sub_url != '.DS_Store')) {
							echo "<a href='piece.php?item=" . urlencode($o['url'] . $sub_url) . "/full.jpg'>
									<div class='grid-item cover-with-image disable-selection' style='background-image : url(" . $o['url'] . $sub_url . "/thumbnail.jpg);'></div>
								</a>";
   						}
					}
					
				}
				
				echo '</div></div></section>';
			}
			
		
		?>
		
		
		<?php new_grid_section($projects, false); ?>
		
		
		<?php new_grid_section($drawings, false); ?>
		
			
		<?php new_grid_section($photography); ?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
