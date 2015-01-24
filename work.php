<!DOCTYPE html>
<html lang='en'>


	<?php // head configuration :
		$current_page_name = 'work';
		$current_page_url = 'harrysolovay.com/work.php';
		include('components/head.php');
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php include('work-data.php'); ?>
		
		
		<!-- margin divs -->
		<div></div><div></div>
		
		
		<?php
		
			$current_type_index = 0;
			$current_piece_index = 0; // keep track of which piece to link to
			
			// for each work type
			foreach($work as $o) {
			
				// create a new section with title & grid
				echo "<!-- " . strtolower($o['type']) . " section -->
				<section class='work' id='{$o['id']}'>
					<div class='inner-section'>
						<span>{$o['type']}</span>
						<div class='grid clearfix'>";
				
				// for each piece within the new section
				foreach($o['pieces'] as $piece) {
				
					// create a new grid-item with $index in the GET
					echo "<a href='piece.php?index=" . (string)$current_piece_index . "'>
						<div class='grid-item cover-with-image disable-selection' style='background-image : url(images/work/{$o['sub_url']}{$piece['sub_url']}thumbnail.jpg)'>
							<span>{$piece['name']}</span>
						</div>
					</a>";
					
					$current_piece_index++;
					
				}
				
				// create closing tags of the new section
				echo '</div></div>';
				if($current_type_index < count($work) - 1) echo '<hr>';
				echo '</section>';
				
				$current_type_index++;
				
			}
			
		?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
