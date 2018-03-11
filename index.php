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

		                        <?php
		                        $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
		                        $ogImgSrc = get_the_post_thumbnail_url($post->ID, 'full');
		                        $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);
		                        ?>
		                        <img class="index-carousel" src="<?php echo $imgsrc ?>?w=1110&h=389&fit=crop&crop=focalpoint&auto=format&q=58">

								<?php /* the_post_thumbnail('index-carousel');*/ ?>
							<?php } ?>
							<div class="itemContent">
								<h3>
									<?php the_title(); ?>
								</h3>
								<p>
									<?php understrap_posted_by(); ?> / <?php foreach((get_the_category()) as $category) { echo ' <span> ' . $category->cat_name . '<em>,</em> </span> '; } ?>
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
											<?php understrap_posted_by(); ?> / <?php foreach((get_the_category()) as $category) { echo ' <span> ' . $category->cat_name . '<em>,</em> </span> '; } ?>
										</div>
									</div>
									<div class="featureWidgetImg">

										<?php
											$postid = get_the_ID();
											$images = get_attached_media('image', $postid);
											$i = 0;
											foreach($images as $image) {
												if($i < 2) {

					                        $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
					                        $ogImgSrc = wp_get_attachment_image_src($image->ID,'full')[0];
					                        $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);

										?>

											<div>
										    	<img src="<?php echo $imgsrc?>?w=260&h=175&fit=crop&crop=focalpoint&auto=compress,format" />
										    </div>
										<?php
											}
											$i++;
										}
										?>
									</div>
									<div class="featureWidget__desc">
										<?php echo wp_trim_words( get_the_content(), 39, '...')  ?>
									</div>
									<div class="btn btn-primary">
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

				</div> <!-- end row -->


			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

			<?php endif; ?>

			<?php echo do_shortcode("[ajax_load_more container_type='div' post_type='post' posts_per_page='9' offset='14' pause='true' transition='fade' button_label='View More Stories' button_loading_label='Loading...' scroll='false' transition_container='false' css_classes='row' ]"); ?>

			<hr class="hr--primary">

			<div class="indexLocations">
				<h3 class="pageHeading">Read Travel Stories From...</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<a href="/places/Africa" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/05/IMG_1582.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Africa</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Asia" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/04/HFA_6084-XL_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Asia</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Canada" class="locationWidget"><img src="https://roaminglove.imgix.net/2016/12/IMG_2447_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Canada</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Caribbean" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/04/UriramaBeach_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Caribbean</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Europe" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/01/6_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Europe</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Latin-America" class="locationWidget"><img src="https://roaminglove.imgix.net/2016/08/IMG_4026_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Latin America</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Middle-East" class="locationWidget"><img src="https://roaminglove.imgix.net/2016/12/DSC3297-Copy_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Middle East</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6">
			            <a href="/places/Oceania" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/05/oceania-2.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>Oceania</span></div>
				            </h6>
			            </a>
			        </div>
		            <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
			            <a href="/places/United-States" class="locationWidget"><img src="https://roaminglove.imgix.net/2017/03/D1C56C2D-EDB8-49A2-BBFD-8B6AA8BC3D40_opt.jpg?w=350&amp;h=185&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format" class="img-responsive">
				            <h6>
				              <div><span>United States</span></div>
				            </h6>
				        </a>
				    </div>
	            </div>
	        </div>
		</div> <!-- end container -->
	</main><!-- #main -->



<?php get_footer(); ?>
