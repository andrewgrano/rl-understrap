<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<main class="main" role="main">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


		<?php
		$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug',
			$author_name ) : get_userdata( intval( $author ) );
		?>

		<h1 class="pageHeading"><?php esc_html_e( 'Travel Stories by', 'understrap' ); ?> <?php echo esc_html( $curauth->nickname ); ?></h1>

		<?php if ( ! empty( $curauth->last_name ) ) : ?>
			<div class="authorPageHeader__desc">
				<?php echo esc_html($curauth->last_name) ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $curauth->first_name ) ) : ?>
			<div class="authorPageHeader__link">
				Follow <?php echo esc_html( $curauth->nickname ); ?>:
				<?php

					$search = array('[', ']');
					$replace   = array('<', '>');
					echo str_replace($search,$replace,$curauth->first_name)
				?>
			</div>
		<?php endif; ?>




		<div class="row">

			<!-- The Loop -->
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-4">
						<?php get_template_part( 'loop-templates/widget-main', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

			<?php endif; ?>

			<!-- End Loop -->

		</div>

		<!-- The pagination component -->
		<?php understrap_pagination(); ?>


	</div><!-- Container end -->

</main><!-- Wrapper end -->

<?php get_footer(); ?>
