<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>


	<main class="main" id="main">
		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="indexHeader">
				<div class="owl-carousel owl-theme" id="indexCarousel">
					<?php
					$args = array(
					    'posts_per_page' => '3',
					);

					$query = new WP_query ( $args );
					if ( $query->have_posts() ) { ?>

						<?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>
						<a class="itemLink" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('index-carousel'); ?>
							<?php } ?>
							<div class="itemContent">
								<h3>
									<?php the_title(); ?>
								</h3>
								<p>
									<?php understrap_posted_by(); ?> / <?php foreach((get_the_category()) as $category) { echo ' <span> ' . $category->cat_name . ' </span> '; } ?>
								</p>
							</div>
						</a>

						<?php // End the loop.
						endwhile;
						wp_reset_postdata();

					} ?>
				</div>
			</div>


			<div class="featureWidgetWrapper">
				<div class="row">
					<?php
					$args = array(
					    'posts_per_page' => '2',
					    'offset' => '3'
					);

					$query = new WP_query ( $args );
					if ( $query->have_posts() ) { ?>

						<?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>
							<div class="col-sm-6">
								<a class="featureWidget" href="<?php the_permalink(); ?>">
									<div class="featureWidgetHead">
										<div class="featureWidget__title">
											<?php the_title(); ?>
										</div>
										<div class="featureWidget__author">
											<?php understrap_posted_by(); ?> / <?php foreach((get_the_category()) as $category) { echo ' <span> ' . $category->cat_name . ' </span> '; } ?>
										</div>
									</div>
									<div class="featureWidgetImg">

										<?php
											$postid = get_the_ID();
											$images = get_attached_media('image', $postid);
											$i = 0;
											foreach($images as $image) {
												if($i < 2) {
										?>
											<div>
										    	<img src="<?php echo wp_get_attachment_image_src($image->ID,'full')[0]; ?>" />
										    </div>
										<?php
											}
											$i++;
										}
										?>
									</div>
									<div class="featureWidget__desc">
										<?php echo wp_trim_words( get_the_content(), 40, '...')  ?>
									</div>
									<div class="btn btnSecondary">
										 Continue Reading
									</div>
								</a>
							</div>

						<?php // End the loop.
						endwhile;
					}
					wp_reset_postdata();
					 ?>
				</div>
			</div>




			<?php if ( have_posts() ) : ?>
				<?php
					global $query_string;
					query_posts( $query_string . '&posts_per_page=9&offset=3' );
				 ?>

				<div class="row">

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-4">

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

				</div> <!-- end row -->


			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

			<?php endif; ?>

			<?php echo do_shortcode("[ajax_load_more container_type='div' post_type='post' posts_per_page='9' offset='14' pause='true' transition='fade' button_label='View More Stories' button_loading_label='Loading...' scroll='false' transition_container='false' css_classes='row' ]"); ?>


		</div> <!-- end container -->
	</main><!-- #main -->



<?php get_footer(); ?>
