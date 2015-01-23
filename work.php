<!DOCTYPE html>
<html lang='en'>


	<?php
	
		$current_page_name = 'work';
		$current_page_url = 'harrysolovay.com/work.php';
		include('components/head.php');
		
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php include('work-data.php'); ?>
		
		
		<div></div>
		
		
		<?php
		
		
			$index = 0;
		
		
			function new_grid_section($o) {
			
				echo "<section class='work' id='{$o['id']}'>
					<div class='inner-section'>
						<span>{$o['type']}</span>
						<div class='grid clearfix'>";
				
				global $index;
				
				foreach($o['pieces'] as $piece) {
					echo "<a href='piece.php?index=" . (string)$index . "'>";
						echo "<div class='grid-item cover-with-image disable-selection' style='background-image : url(images/work/{$o['sub_url']}{$piece['sub_url']}thumbnail.jpg)'>
								<span>{$piece['name']}</span>
							</div>";
					echo "</a>";
					$index++;
				}
				
				echo "</div></div></section>";
				
			}
			
		
		?>
		
		
		<?php
			for($i = 0; $i < count($work); $i++) {
				new_grid_section($work[$i]);
			}
		?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
