<?php
/**
 * The template for displaying 404 pages (not found).
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

		<header class="page-header">

			<h1 class="page-title">Sorry, we can't find what you're looking for.</h1>

		</header><!-- .page-header -->

		<div class="page-content">

			<p>But you can <a href="/">return to the homepage</a> or <a href="/destinations">check out all the destinations</a> or search for something below.</p>

			<?php get_search_form(); ?>


		</div><!-- .page-content -->
	</div>
</main>


<?php get_footer(); ?>
