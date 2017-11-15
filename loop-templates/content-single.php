<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="headerWindow">
		<div id="js-parallax-window" class="parallax-window">
		<div class="parallax-static-content">
			<h1>
				<?php understrap_entry_categories2(); ?>
			</h1>
		</div>
		<div id="js-parallax-background" class="parallax-background" style="height:200px; background-image: url(<?php the_post_thumbnail_url(); ?>)">
		</div>
		</div>
	</div>
	<!-- <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>  -->

	<hr class="hr--primary">

	<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>

	<div class="post__meta">

		<?php understrap_posted_on(); ?>
		<?php understrap_entry_categories(); ?>


	</div><!-- .entry-meta -->




	<div class="post__content">

		<?php
			the_content();
		?>
	</div>

	<div class="authorBlock">

		<?php
			$authorFirstName = get_the_author_meta( 'first_name', $post->post_author );
			$authorLastName = get_the_author_meta( 'last_name', $post->post_author );
		?>

		<div class="authorBlock__name">
			Contributed by <?php understrap_posted_by_with_link()?>
		</div>
		<?php if ( ! empty( $authorFirstName ) ) : ?>
			<div class="authorBlock__link">
				<?php

					$search = array('[', ']');
					$replace   = array('<', '>');
					echo str_replace($search,$replace,$authorFirstName)
				?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $authorLastName ) ) : ?>
			<div class="authorBlock__desc">
				<?php echo $authorLastName ?>
			</div>
		<?php endif; ?>

	</div>

	<footer class="post__footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
