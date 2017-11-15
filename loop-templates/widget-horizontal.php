<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div <?php post_class('postWidgetHorizontal'); ?> id="post-<?php the_ID(); ?>">

    <a href="<?php the_permalink(); ?>">
        <div class="row">
            <div class="col-sm-6">
                <div class="postWidgetHorizontal__img">
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="postWidgetHorizontal__content">
                    <?php the_title( sprintf( '<div class=""postWidgetHorizontal__title">' ),
                    '</div>' ); ?>

                    <?php if ( 'post' == get_post_type() ) : ?>

                        <div class="postWidgetHorizontal__author">
                            <?php understrap_posted_by(); ?>
                        </div><!-- .entry-meta -->

                    <?php endif; ?>



                    <ul class="postWidgetHorizontal__categories">

                         <?php foreach((get_the_category()) as $category) { echo '<li> ' . $category->cat_name . '</li>'; } ?>

                    </ul><!-- .entry-footer -->
                </div>
            </div>
        </div>
    </a>

</div><!-- #post-## -->
