
<?php
	$pages = array(
		array(
			'href' => 'index.php',
			'text' => 'About'
		),
		array(
			'href' => 'work.php',
			'text' => 'Work'
		),
		array(
			'href' => 'contact.php',
			'text' => 'Contact'
		)
	);
?>

<!-- HEADER -->
<header class='fix-at-top'>
	<div class='inner-section clearfix'>
		<div class='float-left'>
			<a href='index.php'>Harry Solovay</a>
		</div>
		<div class='float-right'>
			<ul>
				<?php
					$counter = 0;
					foreach($pages as &$page) {
						$current = ($current_page_name == $page['text']) ? " class='current'" : '';
						echo "<li><a href='{$page['href']}'" . $current . ">{$page['text']}</a></li>";
						if($counter < 2)
							echo "<li><span>|</span></li>";
						$counter++;
					}
				?>
			</ul>
		</div>
	</div>
</header>
