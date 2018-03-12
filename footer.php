<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
<footer class="footer">
	<div class="container">

        <div class="footerAbout">
        	<div class="row">
        		<div class="col-xl-5 col-lg-6 col-md-7">
        			<!-- <h4 class="footerAbout__heading">
        				What is Roaming Love?
        			</h4> -->
	        		<!-- <div class="footerAbout__desc">
	        			Roaming Love is an online community of travel storytellers and photographers. We allow readers a personal and honest look into our trips. We hope our stories inspire others to travel, see the world, and join our community.
	        		</div> -->
	        		<div class="footerAboutSection footerAboutSection--info">
	        			<h4 class="footerAbout__heading">
	        				Want to read about travel destinations around the world?
	        			</h4>
		        		<div class="footerAbout__desc">
		        			Immerse yourself with travel stories from France to Uzbekistan to Vietnam, and nearly everywhere else in the world! We've collected stories from all types of travelers - from extreme bike riders to city explorers to hitchhikers.  Travel means something different to everyone, so we invite everyone to share their unique adventures on Roaming Love.
		        		</div>
		        	</div>

					<div class="polaroidWrapper d-block d-md-none">
						<div><img src="https://roaminglove.imgix.net/2018/02/IMG_3213_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/IMG_2950_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/IMG_3452_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2016/12/image1-1_opt-2.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format"></div>
					</div>


		        	<div class="footerAboutSection footerAboutSection--contribute">
	        			<h4 class="footerAbout__heading">
	        				Want to contribute?
	        			</h4>
		        		<div class="footerAbout__desc">
							Do you have a travel story to tell? Our online community would love to hear about it! We are looking for honest, first-person stories about a trip, vacation, backpacking adventure, car/train/plane ride, overnight visit, or long walk. Make sure you include some photos!
							<div>
								<a class="btn btn-primary" href="/contribute">Contribute to Roaming Love</a>
		        			</div>
		        		</div>
		        	</div>

		        	<div class="footerAboutSection footerAboutSection--newsletter">
	        			<h4 class="footerAbout__heading">
	        				Want to stay up to date?
	        			</h4>
		        		<div class="footerAbout__desc">
							We're constantly publishing new travel stories. Sign up for our weekly newsletter.  We'll keep you up to date with all our newest travel stories!

			        		<div class="signupform">
								<?php echo do_shortcode("[contact-form-7 id='4651' title='Newsletter Signup Form']"); ?>
			        		</div>
		        		</div>
		        	</div>
	        	</div>
	        	<div class="col-xl-7 col-lg-6 col-md-5">
					<div class="polaroidWrapper d-none d-md-block">
						<div><img src="https://roaminglove.imgix.net/2018/02/IMG_3213_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/IMG_2950_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/IMG_3452_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2016/12/image1-1_opt-2.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2017/06/tc4_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=faces&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/FullSizeRender-29_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format"></div>

						<div><img src="https://roaminglove.imgix.net/2018/01/fullsizeoutput_419_opt-1.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format"></div>


						<div><img src="https://roaminglove.imgix.net/2018/01/IMG_2680_opt.jpg?w=200&amp;h=215&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format"></div>





					</div>
	        	</div>
        	</div>
        </div>



		<!-- <hr> -->
		<div class="footerMain">
			<div class="row">
				<div class="col-sm-12">
					<div class="footer__links">
						<ul>
							<li><a href="/">home</a></li>
							<li><a href="/contribute">contribute</a></li>
							<li><a href="" class="js-scrollToAbout">about</a></li>
							<li><a href="/contact">contact</a></li>
							<li><a href="/destinations">destinations</a></li>
						</ul>
					</div>

					<a class="instagramLink" href="https://www.instagram.com/roaminglovetravel/" target="instagram"><span>follow us on instagram</span><img src="https://roaminglove.imgix.net/2016/09/instagram-logo.svg" width="25"></a>

					<!-- <div class="footer__summary">
						Roaming Love is an online community of travel storytellers and photographers. We allow readers a personal and honest look into our trips. We hope our stories inspire others to travel, see the world, and join our community.
					</div> -->
				</div>

			</div><!-- row end -->
		</div>

	</div><!-- wrapper end -->
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
var wpurl = "<?php bloginfo('wpurl') ?>"
</script>

<?php wp_footer(); ?>

</body>

</html>

