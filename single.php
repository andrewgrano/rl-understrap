<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<main class="main" role="main">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="headerWindow">
				<div id="js-parallax-window" class="parallax-window">
					<div class="parallax-static-content">
						<h1>
							<?php understrap_entry_categories2(); ?>
						</h1>
					</div>

			        <?php
				        $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
				        $ogImgSrc = get_the_post_thumbnail_url('', 'article-thumbnail-image');
				        $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);
			        ?>

					<div id="js-parallax-background" class="parallax-background" style="background-image: url(<?php echo $imgsrc ?>?w=1110&h=400&fit=crop&crop=focalpoint&blend=2693BB&bm=lighten&auto=compress,format)">
					</div>
				</div>
			</div>

			<hr class="hr--primary">


			<div class="row justify-content-md-center">
				<div class="col-lg-9 col-md-11">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;
						?>
				</div>
				<div class="col-sm-12">

						<?php understrap_post_recommended(); ?>

					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
