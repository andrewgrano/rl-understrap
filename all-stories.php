<?php /* Template Name: allStories  */ ?>




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


<main class="main allStories" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <hr class="hr--primary">
            <div class="row justify-content-md-center">
                <div class="col-lg-9 col-md-11">
                    <h1 class="pageHeading">All Stories</h1>

                    <?php if ( have_posts() ) : ?>
                        <?php
                            global $query_string;
                            query_posts( $query_string . '&posts_per_page=12' );
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

                    <!-- The pagination component -->
                    <?php understrap_pagination(); ?>

                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
