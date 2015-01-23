<?php include('work-data.php'); ?>
<?php
	
	function redirect_to_all_work() {
		header('Location: work.php');
		exit();
	}
	
	$current_piece_index = (isset($_GET['index']) && $_GET['index'] >= 0) ? $_GET['index'] : null;
	
	if(!isset($current_piece_index)) {
		redirect_to_all_work();
	}
	
	$current_piece = null;
	$total = 0;
	$broken_apart = 0;
	foreach($work as $type) {
		for($i = 0; $i < count($type['pieces']); $i++) {
			if($current_piece_index == $total) {
				$current_piece = $type['pieces'][$broken_apart];
				break 2;
			}
			$total++;
			$broken_apart++;
		}
		$broken_apart = 0;
	}
	
	$current_piece_name = $current_piece['name'];
	$current_piece_url = 'images/work/' . $type['sub_url'] . $current_piece['sub_url'];
	$current_piece_has_multiple = isset($current_piece['has_multiple']) ? true : false;
	
	if($current_piece_url == 'images/work/') {
		redirect_to_all_work();
	}

?>
<!DOCTYPE html>
<html lang='en'>


	<?php
		$current_page_name = 'work';
		$current_page_url = 'harrysolovay.com/piece.php?index=' . $current_piece_index;
		include('components/head.php');
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<div></div>
		
		
		<?php
		
			$how_many_pieces = 0;
			foreach($work as $type) {
				for($i = 0; $i < count($type['pieces']); $i++) {
					$how_many_pieces++;
				}
			}
			
			$last_piece_href = 'piece.php?index=' . (($current_piece_index-1 < 0) ? $how_many_pieces-1 : $current_piece_index-1);
			$next_piece_href = 'piece.php?index=' . (($current_piece_index+1 >= $how_many_pieces) ? 0 : $current_piece_index+1);
			
			echo "<script type='text/javascript'>
					window.lastPieceHRef = '{$last_piece_href}';
					window.nextPieceHRef = '{$next_piece_href}';
				</script>"
			
		?>
		
		
		<section id='piece-navigation'>
			<div class='inner-section clearfix'>
				<a id='last-piece' class='float-left' href='<?php echo $last_piece_href; ?>'>last</a>
				<a id='all' href='work.php'>All</a>
				<a id='next-piece' class='float-right' href='<?php echo $next_piece_href; ?>'>Next</a>
			</div>
			<hr>
		</section>
		
		
		<section id='piece'>
			<div class='inner-section'>
				<span><?php echo $current_piece_name; ?></span>
				<div id='pieces-container'>
					<?php
					
						function display_piece($sub_href, $sub_src) {
							global $current_piece_url;
							echo "<a href='{$current_piece_url}{$sub_href}'>
									<img src='{$current_piece_url}{$sub_src}'>
								</a>";
						}
					
						if($current_piece_has_multiple) {
							$images = new FilesystemIterator($current_piece_url, FilesystemIterator::SKIP_DOTS);
							$how_many = (iterator_count($images) - 2)/2;
							for($i = 1; $i < $how_many + 1; $i++) {
								display_piece('large-p' . (string)$i . '.jpg', 'full-p' . (string)$i . '.jpg');
							}
						} else {
							display_piece('large.jpg', 'full.jpg');
						}
					
					?>
				</div>
			</div>
		</section>
	
	
		<?php include('components/footer.php'); ?>
		
		<script type='text/javascript'>
			
			$(document).keydown(function(e) {
				if(e.which == 37) {
					window.location.href = lastPieceHRef;
				} else if(e.which == 39) {
					window.location.href = nextPieceHRef;
				}
			});
			
		</script>
		
		
	</body>
	
	
</html>
