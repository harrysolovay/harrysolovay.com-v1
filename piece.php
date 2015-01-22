<?php require_once('session.php'); ?>
<!DOCTYPE html>
<html lang='en'>


	<?php
	
		$current_page_name = 'Contact';
		$current_page_url = 'harrysolovay.com/contact.php';
		include('components/head.php');
		
		track_navigation();
		
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<?php include('components/hero.php'); ?>
		
		
		<?php
			
			function display_piece($source) {
				echo "<a href='" . $source . "'>
						<img src='" . $source . "'>
					</a>";
			}
			
		?>
		
		
		<section id='piece'>
			<div class='inner-section'>
				<span><?php echo isset($_GET['name']) ? $_GET['name'] : 'Unnamed Photograph'; ?></span>
				<?php
					echo "<div id='pieces-container'>";
					if(isset($_GET['has-multiple-files'])) {
						foreach($_GET as $item) {
							if(strpos($item, 'full') !== false) {
								display_piece($item);
							}
						}
					} else {
						display_piece($_GET['item']);
					}
					echo "</div>";
				?>
			</div>
		</section>
	
	
		<?php include('components/footer.php'); ?>
		
		
	</body>
	
	
</html>
