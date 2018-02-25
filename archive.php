<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<main class="main" role="main">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-sm-12">
				<h1>Archive Page</h1>

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<img src="', '">' );
						?>
					</header><!-- .page-header -->
					<div class="row justify-content-md-center justify-content-lg-start">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-lg-4 col-md-6">
								<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'loop-templates/widget-main', get_post_format() );
								?>
							</div>

						<?php endwhile; ?>
					</div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

				<!-- The pagination component -->
				<?php understrap_pagination(); ?>

			</div>

		</div> <!-- .row -->

	</div> <!-- #content -->

</main><!-- Wrapper end -->

<?php get_footer(); ?>
