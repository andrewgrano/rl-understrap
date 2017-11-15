<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div <?php post_class('postWidget'); ?> id="post-<?php the_ID(); ?>">

    <a href="<?php the_permalink(); ?>">
        <div class="postWidget__img">
            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div>

        <div class="postWidget__content">
            <div class="postWidget__main">
                <div>
                    <?php the_title( sprintf( '<div class="postWidget__title">' ),
                    '</div>' ); ?>

                    <?php if ( 'post' == get_post_type() ) : ?>

                        <div class="postWidget__author">
                            <?php understrap_posted_by(); ?>
                        </div><!-- .entry-meta -->

                    <?php endif; ?>
                </div>
            </div>



            <ul class="postWidget__categories">

                 <?php foreach((get_the_category()) as $category) { echo '<li> ' . $category->cat_name . '</li>'; } ?>

            </ul><!-- .entry-footer -->
        </div>
    </a>

</div><!-- #post-## -->
