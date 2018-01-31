<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<main class="main" role="main">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<hr class="hr--primary">

		<div class="row justify-content-md-center">

			<?php if ( have_posts() ) : ?>

					<div class="col-sm-12">
						<h1 class="pageHeading"><?php printf(
						/* translators:*/
						 esc_html__( 'Search Results for: %s', 'understrap' ),
							'<span>' . get_search_query() . '</span>' ); ?></h1>
					</div>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-4 col-md-6">
						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/widget-main', 'search' );
						?>
					</div>
				<?php endwhile; ?>

			<?php else : ?>

				<div class="col-sm-12">
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
				</div>

			<?php endif; ?>


		</div><!-- .row -->

        <?php

        	$queryObject = get_search_query();

			if($wp_query->found_posts > 9 ) {

			   echo do_shortcode('[ajax_load_more search="'.$queryObject.'" container_type="div" post_type="post" posts_per_page="9" offset="9" pause="true" scroll="false" transition="fade" button_label="More Stories with Keyword: '.$queryObject.'" button_loading_label="Loading..." transition_container="false" css_classes="row"]');
			}
         ?>

		<!-- The pagination component
		<?php understrap_pagination(); ?> -->


	</div><!-- Container end -->

</main><!-- Wrapper end -->

<?php get_footer(); ?>
