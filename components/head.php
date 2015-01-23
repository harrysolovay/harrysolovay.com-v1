




<!-- head -->
<head>


	<!-- head data -->
	<?php
		$title = "harrysolovay.com : {$current_page_name}";
		$description = 'Harry Solovay&#39;s personal website – view his work, resume, contact information &#38; more';
		$keywords = 'harry, solovay, personal, website, ' . str_replace(' ', ', ', $current_page_name) . ', page, product, ux, ui, web, designer, developer, programmer, coder, of, internet, and, online, applications, student, artist';
		$creator = 'Harry Solovay';
		$copyright = $creator . ', ' . date('Y');
	?>

	<title><?php echo $title ?></title>

	<!-- compatibility -->
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'>
	<meta name='HandheldFriendly' content='true'>
	<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
	<meta name='apple-touch-fullscreen' content='yes'>
	<meta name='format-detection' content='telephone=no'>

	<!-- descriptors, keywords & slight SEO -->
	<meta name='title' content='<?php echo $title ?>'>
	<meta name='description' content='<?php echo $description ?>'>
	<meta name='keywords' content='<?php echo $keywords ?>'>
	<meta name='robots' content='index, follow'>
	<meta name='revisit-after' content='15 days'>

	<!-- people -->
	<meta name='designer' content='<?php echo $creator ?>'>
	<meta name='copyright' content='<?php echo $copyright ?>'>

	<!-- open graph protocol -->
	<meta property='og:title' content='<?php echo $title ?>'>
	<meta property='og:description' content='<?php echo $description ?>'>
	<meta property='og:image' content='http://harrysolovay.com/images/logo.jpg'><!-- Check if can be replaced with local url -->
	<meta property='og:url' content='<?php echo $current_page_url ?>'>
	<meta property='og:type' content='website'>

	<!-- iOS shortcut -->
	<meta name='apple-mobile-web-app-capable' content='yes'>
	<meta name='apple-mobile-web-app-status-bar-style' content='black'>
	<meta name='apple-mobile-web-app-title' content='<?php echo $title ?>'>
	
	<!-- anything per-page -->
	<?php if(isset($other_meta_data)) echo $other_meta_data; ?>

	<!-- image relational -->
	<link rel='shortcut icon' href='images/icon/icon.png'>
	<link rel='icon' href='images/icon/icon.png'>

	<!-- iOS shortcut image -->
	<?php
		$directory = scandir('images/icon/sizes/');
		foreach($directory as $file) {
			if(($file != '..') &&
				($file != '.') &&
				($file != '.DS_Store')) {
				$size = getimagesize('images/icon/sizes/' . $file)[0];
				echo "<link rel='apple-touch-icon-precomposed' href='images/icon/sizes/{$file}' sizes='{$size}x{$size}'>";
   			}
		}
	?>

	<!-- include stylesheets & other relational -->
    <link rel='stylesheet' href='style/style.css'>
    <link rel='author' href='humans.txt'>

    <!-- include libraries -->
	<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='scripts/jquery-2.1.3.min.js'><\/script>");</script>
    <script type='text/javascript' src='scripts/modernizr.js'></script><!-- replace with minified custom build -->
    <script type='text/javascript' src='scripts/inner-text-shadow.js'></script>


</head>




