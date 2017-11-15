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
		<hr>
		<div class="footerMain">
			<div class="row">

				<div class="col-sm-4">
					<div class="formNewsletter clearfix">
						<h6 class="formNewsletter__title">Join Our Newsletter</h6>
					</div>
				</div>

				<div class="col-sm-5 col-sm-offset-1">
					<div class="footer__summary">
						Roaming Love is an online community of travel storytellers and photographers. We allow readers a personal and honest look into our trips. We hope our stories inspire others to travel, see the world, and join our community.
					</div>

					<a class="instagramLink" href="https://www.instagram.com/roaminglovetravel/" target="instagram"><span>follow us on instagram</span><img src="https://roaminglove.imgix.net/2016/09/instagram-logo.svg" width="25"></a>
				</div>

				<div class="col-sm-2">
					<div class="footer__links">
						<ul>
							<li><a href="">home</a></li>
							<li><a href="">contribute</a></li>
							<li><a href="">about</a></li>
							<li><a href="">contact</a></li>
							<li><a href="">destinations</a></li>
						</ul>
					</div>
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

