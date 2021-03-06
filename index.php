<!--

/**
 * @package		harrysolovay.com
 * @author		Harry Solovay <harrysolovay.com || harrysolovay@gmail.com>
 * @copyright	Copyright (c) 2014, Harry Solovay All Rights Reserved
 */
	 
-->
<!DOCTYPE html>
<html lang='en'>


	<?php // head configuration :
		$current_page_name = 'about';
		$current_page_url = 'harrysolovay.com';
		include('components/head.php');
	?>
	
	
	<body>
	
	
		<?php include('components/header.php'); ?>
		
		
		<!-- hero section -->
		<section id='hero'>
			<div class='inner-section cover-with-image'></div>
		</section>
		
		
		<!-- about section -->
		<section id='about'>
			<hr>
			<div class='inner-section text-section-padding'>
				<p class='indent'>Hi: I&#x2019;m Harry Solovay, a product and web designer, software developer, UX engineer, artist and student from New York City. I&#x2019;m also a freshman at Connecticut College. While I am only 18 years old, I have quite a bit of experience creating software and design products for a wide range of project types. I create functional and intuitive interfaces, dynamic sites optimized for all browsers and devices, back-end systems, secure database interactions and clean, adaptive and understandable code. I love talking to people who are passionate about technology and design, so please reach out to me &#x2013; even if it isn&#x2019;t about a project or job opportunity. Whoever you might be, I&#x2019;d love to hear from you.<p>
			</div>
		</section>
		
		
		<!-- experience section -->
		<section id='experience'>
			<hr>
			<div class='inner-section text-section-padding'>
				<span>Experience</span>
				<p class='indent'>I have over four years of experience coding for the web. I can create almost anything with HTML, CSS and JavaScript. My code is well-organized, clean, efficient and takes advantage of the absolute best development practices today. In terms of my work history, my first technology-related job was working as a tutor; I taught other high school students programming basics. The summer before my Senior year of high school I worked for a tech startup in SoHo (Kogeto) where I designed and coded a 360 degree video player. In my senior year of high school I had an independent study in interface design and the future of computing, and took Advanced Topics in Programming. In my first semester of college, I had an independent study in App Development. During the current semester (Spring of 2015), I am working on an independent research project on social media and data collection. I also continue to freelance web design and work on personal projects. There&#x2019;s more to come.</p>
			</div>
		</section>
		
		
		<!-- future section -->
		<!--<section id='future'>
			<hr>
			<div class='inner-section text-section-padding'>
				<span>Future</span>
				<p class='indent'>I keep a running list of product and app ideas, all of which I hope to one day bring to life. I prioritize these projects pretty carefully and work on them in my free time during school. There are a couple hopes that I have for how my interests will play out over time &#x2013; all of which eventually lead me to a place where I can express all of my ideas. While I like the idea of achieving financial success, I am even more motivated by the idea of effective self-expression and innovation. In my life, I will do everything I can to be a positive part of our society&#x27;s design and technologic momentum.</p>
			</div>
		</section>-->
		
		
		<!-- tmi section -->
		<!--<section id='tmi'>
			<hr>
			<div class='inner-section text-section-padding'>
				<span>TMI</span>
				<p class='indent'>I love to toss a Frisbee outside (even if it&#x2019;s winter and freezing cold). I play drums almost every day. I listen to extremely loud music and create abstract art &#x2013; I&#x27;m a big fan of surrealism (Magritte is my favorite painter). I love taking my dog Lola for walks in Central Park. I watch every Apple keynote over live stream. I enjoy comedy improv shows and like to take classes at the Upright Citizens Brigade. I love having simple stay-in nights with Domino&#x27;s pizza and Will Farrell movies. My favorite television shows include Entourage and Shark Tank. I listen mostly to classic rock but love certain rap artists (not to brag, but I was a Kendrick Lamar fan way before he became big). For most Halloween weekends, I go at least one night as Hugh Hefner &#x2013; it&#x2019;s a great excuse to walk around in a bathrobe with a cigar. I once met Jony Ive and was so star-struck that I just said &#x201C;I love everything you&#x2019;ve ever done... ever.&#x201D;</p>
			</div>
		</section>-->
	
	
		<?php include('components/footer.php'); ?>
		
		
		<!--<script type='text/javascript'>
			
			/* if on mobile device, define parallax() to return false
			   if not on a mobile device, define actual parallax effect */
			
			window.isMobile = navigator.userAgent.match(/Android/i)
 				|| navigator.userAgent.match(/webOS/i)
 				|| navigator.userAgent.match(/iPhone/i)
 				|| navigator.userAgent.match(/iPad/i)
 				|| navigator.userAgent.match(/iPod/i)
 				|| navigator.userAgent.match(/BlackBerry/i)
 				|| navigator.userAgent.match(/Windows Phone/i);
			
			if(isMobile) {
			
				window.scrollEffect() = function() {
					return false;
				}
				
			} else {
			
				window.scrollEffect = function() {
				
					// fade-away:
					/*
					$('#hero').css('opacity', 1 - ($(window).scrollTop() / $('#hero').outerHeight()));
					*/
				
					// parallax:
					/*
					$('#hero div').offset({
						top : $(window).scrollTop() * .25 + $('header').outerHeight()
					});
					*/
					
				}
				
			}
			
			$(window).scroll(function() {
				scrollEffect();
			});
			
		</script>-->
		
		
	</body>
	
	
</html>


<!------------------------------------------------------
	And every element lived happily ever after. the end!
    ------------------------------------------------------>
