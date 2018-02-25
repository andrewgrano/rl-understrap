<?php /* Template Name: contact  */ ?>




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


<main class="main contact" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <hr class="hr--primary">
            <div class="row justify-content-md-center">
                <div class="col-lg-9 col-md-11">
                    <h1 class="pageHeading">Contact Us</h1>
                    <p>Roaming Love is available for collaborations and sponsorships. To view our media kit, please contact us here:</p>
                    <p>
                        <a href="mailto:roaminglovetravel@gmail.com">roaminglovetravel@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
