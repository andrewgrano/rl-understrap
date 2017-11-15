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

			<div class="row justify-content-md-center">
				<div class="col-sm-9">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
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
