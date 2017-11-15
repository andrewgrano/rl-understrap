<?php /* Template Name: categories-list  */ ?>




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


<main class="main" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <div class="row">
                <div class="col-sm-4">
                    <div class="sidebar">
                        <?php

                            $parents = get_categories( array(
                                'orderby' => 'name',
                                'parent'  => 0
                            ) );

                            foreach ( $parents as $parent ) {
                        ?>
                            <div>
                                <h2><?php echo $parent->name; ?></h2>
                               <ul class="models">
                                    <?php wp_list_categories(
                                        array(
                                            'hierarchical' => false,
                                            'child_of' => $parent->term_id,
                                            'title_li' => ''
                                        ));
                                    ?>
                                    <li>View All <?php echo $parent->name; ?> Stories</li>
                                </ul>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-sm-8">
                        <?php
                            $parents = get_categories( array(
                                'orderby' => 'name',
                                'parent'  => 0
                            ) );

                            foreach ( $parents as $parent ) {
                                $category_link = get_category_link( $parent );
                        ?>
                            <div>
                                <h2><?php echo $parent->name; ?></h2>
                                <div>Post Count:<?php echo $parent->count; ?></div>
                                <a href="<?php echo esc_url( $category_link ); ?>">
                                    View all <?php echo $parent->name; ?> Stories
                                </a>

                                <img src="<?php echo $parent->description; ?>">

                                <div class="row">

                                    <?php
                                        $children = get_categories( array(
                                            'orderby' => 'name',
                                            'child_of' => $parent->term_id,
                                        ) );

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

                                    <div class="col-sm-4">
                                        <a href="<?php echo esc_url( $category_link ); ?>">
                                            <h2>View all <?php echo $parent->name; ?> Stories</h2>
                                            <div>Post Count:<?php echo $parent->count; ?></div>
                                            <img src="<?php echo $parent->description; ?>">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
