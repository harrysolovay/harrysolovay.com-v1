<?php // head configuration :
	if(isset($_GET['work'])) {
		$current_page_name = 'work';
		$current_page_url = 'harrysolovay.com/gallery.php?work';
	} elseif(isset($_GET['iphotos'])) {
		$current_page_name = 'iphotos';
		$current_page_url = 'harrysolovay.com/gallery.php?iphotos';
	} else {
		header('Location: gallery.php?work');
		exit();
	}
?>
<!DOCTYPE html>
<html lang='en'>


	<?php include('components/head.php'); ?>
	
	
	<body>
		
		
		<?php
		
		
			include('components/header.php');
		
		
			$data = ($current_page_name == 'iphotos') ? require('iphotos-data.php') :  require('work-data.php');
			
		
			$current_type_index = 0;
			$current_piece_index = 0; // keep track of which piece to link to
			
			// for each work type
			foreach($data as $o) {
			
				// create a new section with title & grid
				echo "<!-- " . strtolower($o['type']) . " section -->
				<section class='work' id='{$o['id']}'>
					<div class='inner-section'>
						<span>{$o['type']}</span>
						<div class='grid'>
							<div class='clearfix'>";
				
				// for each piece within the new section
				foreach($o['pieces'] as $piece) {
				
					// create a new grid-item with $index in the GET
					echo "<a href='piece.php?" . $current_page_name . "&index=" . (string)$current_piece_index . "'>
						<div class='grid-item cover-with-image disable-selection' style='background-image : url(images/{$o['sub_url']}{$piece['sub_url']}thumbnail.jpg)'>";
							if(isset($piece['name'])) echo "<span>{$piece['name']}</span>";
						echo "</div>
					</a>";
					
					$current_piece_index++;
					
				}
				
				// create closing tags of the new section
				echo '</div></div></div>';
				if($current_type_index < count($data) - 1) echo '<hr>';
				echo '</section>';
				
				$current_type_index++;
				
			}
			
			
		?>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
