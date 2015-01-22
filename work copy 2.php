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
		
		
		<div></div>
		
		
		<?php
		
		
			function new_grid_section($o) {
			
				echo "<section class='work' id='{$o['id']}'>
					<div class='inner-section'>
						<span>{$o['work_type']}</span>
						<div class='grid clearfix'>";
				
				$index = 0;
				if(isset($o['pieces'])) {
					foreach($o['pieces'] as $piece) {
						echo "<a href='piece.php?";
						if(isset($piece['has_multiple_files'])) {
							echo 'multiple=true&';
						}
						echo 'index=' . (string)$index . '&url=' . urlencode($o['url'] . $piece['sub_url']) . "'>";
						$index++;
					}
				}
				
				echo "</div></div></section>";
				
			}
			
		
		?>
		
		
		<?php new_grid_section($projects); ?>
		
		
		<?php new_grid_section($drawings); ?>
		
			
		<?php new_grid_section($photography); ?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
