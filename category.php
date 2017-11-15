<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<main class="main" role="main">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <div class="row">
            <div class="col-sm-12">

                <div class="breadcrumbs">
                    <?php
                        echo get_category_parents( $cat, true, ' <span>&raquo;</span> ' );
                    ?>
                </div>


                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<img src="', '">' );
                        ?>
                    </header><!-- .page-header -->
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
                    </div>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

                <!-- The pagination component -->
                <?php understrap_pagination(); ?>

                <hr>
                <div class="more">
                    <?php
                        function get_level($category, $level = 0)
                        {
                            if ($category->category_parent == 0) {
                                return $level;
                            } else {
                                $level = 1;
                                return $level;
                            }

                        }

                        if (is_category()) {
                            $cat = get_query_var('cat');
                            $yourcat = get_category($cat);

                            // echo get_level($yourcat);

                            if ( get_level($yourcat) == 0 ) {
                    ?>
                        <div> Destinations in <?php the_archive_title()?> </div>


                       <div class="row">
                            <?php
                                $children = get_categories(
                                array(
                                    'hierarchical' => false,
                                    'child_of' => $cat,
                                    'title_li' => ''
                                ));

                                foreach ( $children as $child ) {
                                    $category_link = get_category_link( $child );
                            ?>
                                <div class="col-sm-4">
                                    <?php
                                        include 'loop-templates/category-widget.php';
                                    ?>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>

                    <?php
                            } else if ( get_level($yourcat) == 1 ) {
                    ?>








                        <?php
                            // get parent category slug
                            $parentCatList = get_category_parents($cat,false,',');
                            $parentCatListArray = explode(",", $parentCatList);
                            $topParentName = $parentCatListArray[0];
                            $topParentId = get_cat_ID( $topParentName )
                        ?>

                        <div> Other Destinations In <?php echo $topParentName ?> </div>

                        <div class="row">
                            <?php

                                $children = get_categories(
                                array(
                                    'hierarchical' => false,
                                    'child_of' => $topParentId,
                                    'title_li' => ''
                                ));

                                foreach ( $children as $child ) {
                                    if ( $child->name != get_the_archive_title() ) {
                                        $category_link = get_category_link( $child );


                            ?>
                                <div class="col-sm-4">
                                    <?php
                                        include 'loop-templates/category-widget.php';
                                    ?>
                                </div>
                            <?php
                                    }
                                }
                            ?>

                        </div>


                    <?php
                            }
                        }
                    ?>
                </div>


            </div>

        </div> <!-- .row -->

    </div> <!-- #content -->

</main><!-- Wrapper end -->

<?php get_footer(); ?>
