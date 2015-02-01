<!-- footer link data -->
<?php
	$my_google_plus_url = 'https://plus.google.com/+HarrySolovay/posts';
	$my_facebook_url = 'https://facebook.com/harry.solovay';
	$my_instagram_url = 'http://instagram.com/harrysolovay/';
	$my_linkedin_url = 'https://www.linkedin.com/in/harrysolovay';
	$my_github_url = 'https://github.com/harrysolovay';
	$my_site_download_url = 'https://github.com/harrysolovay/harrysolovay.com'; // edit this link
?>





<!-- footer -->
<footer>
	<hr>
	<div class='inner-section'>
		<div>
			<ul>
				<li><a class="iphotos <?php if(isset($_GET['iphotos'])) echo 'current'; ?>" href='gallery.php?iphotos'>iPhotos</a></li>
				<li><a class='google-plus' href='<?php echo $my_google_plus_url; ?>'>Google&#43;</a></li>
				<li><a class='linkedin' href='<?php echo $my_linkedin_url; ?>'>LinkedIn</a></li>
				<li><a class='github' href='<?php echo $my_github_url; ?>'>GitHub</a></li>
			</ul>
		</div>
		<div>
			<span>Copyright &#169; Harry Solovay, <?php echo date('Y') ?></span>
			<ul>
				<li><a href='documents/Harry_Solovay_Resume_12-30-2014.pdf'>Download resume</a></li>
				<li><span>|</span></li>
				<li><a href='<?php echo $my_site_download_url; ?>'>Download site</a></li>
			</ul>
		</div>
	</div>
	<hr>
</footer>





<!-- universal script -->
<script type='text/javascript' src='scripts/universal.js'></script>
