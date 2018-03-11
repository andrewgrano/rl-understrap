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
            <?php
            $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );
            $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $thumbnail[0]);
            ?>
            <img src="<?php echo $imgsrc ?>?w=370&h=250&fit=crop&crop=entropy&auto=compress,format">
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

                    <?php endif


                    ; ?>
                </div>
            </div>



            <ul class="postWidget__categories">

                 <?php foreach((get_the_category()) as $category) { echo '<li> ' . $category->cat_name . '</li>'; } ?>

            </ul><!-- .entry-footer -->
        </div>
    </a>

</div><!-- #post-## -->
