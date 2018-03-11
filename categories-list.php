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


<main class="main destinations" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <div class="row">
                <div class="col-md-4 d-none d-md-block">
                    <nav class="destinations__sidebar navbar" id="destinations__sidebar">
                        <?php

                            $parents = get_categories( array(
                                'orderby' => 'name',
                                'parent'  => 0
                            ) );

                            foreach ( $parents as $parent ) {
                        ?>
                            <nav class="nav">
                                <a class="nav-link" href="#<?php echo str_replace(" ", "-",$parent->name) ?>"><?php echo $parent->name; ?></a>
                               <ul class="" id="">
                                    <?php wp_list_categories(
                                        array(
                                            'hierarchical' => false,
                                            'child_of' => $parent->term_id,
                                            'title_li' => ''
                                        ));
                                    ?>
                                    <li><a href="<?php echo esc_url( get_category_link( $parent ) ); ?>">All <?php echo $parent->name; ?> Stories</a></li>
                                </ul>
                            </nav>
                        <?php
                            }
                        ?>
                    </nav>
                </div>
                <div class="col-md-8">
                        <?php
                            $parents = get_categories( array(
                                'orderby' => 'name',
                                'parent'  => 0
                            ) );

                            foreach ( $parents as $parent ) {
                                $category_link = get_category_link( $parent );
                        ?>
                            <div id="<?php echo str_replace(" ", "-",$parent->name) ?>" class="destinations__country">
                                <div class="destinations__header parallax-window d-none d-md-block">
                                    <div class="parallax-static-content">
                                        <h2><?php echo $parent->name; ?></h2>

                                        <a href="<?php echo esc_url( $category_link ); ?>">
                                            View All <?php echo $parent->name; ?> Stories &raquo;

                                           <!--  Stories Count: <?php echo $parent->count; ?> -->
                                        </a>
                                    </div>


                                    <?php
                                        $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
                                        $ogImgSrc = $parent->description;
                                        $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);
                                    ?>

                                    <div class="parallax-background" style="background-image:url(<?php echo $imgsrc ?>?w=788&h=400&fit=crop&crop=focalpoint&auto=compress,format)">
                                    </div>
                                </div>

                                <div class="destinations__headerMobile d-block d-md-none" data-toggle="collapse" href="#collapse--<?php echo str_replace(" ", "-", $parent->name); ?>">
                                    <span><?php echo $parent->name; ?></span>
                                </div>

                               <!-- <div class="pageHeading">Destinations in <?php echo $parent->name; ?></div> -->

                               <div class="destinations__widgetWraper collapse show" id="collapse--<?php echo str_replace(" ", "-", $parent->name); ?>">
                                    <div class="row">

                                        <?php
                                            $children = get_categories( array(
                                                'orderby' => 'name',
                                                'child_of' => $parent->term_id,
                                            ) );

                                            foreach ( $children as $child ) {
                                                $category_link = get_category_link( $child );

                                        ?>

                                        <div class="col-md-4 col-sm-6 px-2 px-sm-3 px-md-1 px-lg-3">
                                            <?php
                                                include 'loop-templates/category-widget.php';
                                            ?>
                                        </div>

                                        <?php
                                            }
                                        ?>

                                        <div class="col-md-4 col-sm-6 px-2 px-sm-3 px-md-1 px-lg-3">
                                            <a class="locationWidget" href="<?php echo esc_url( $category_link ); ?>">

                                                <?php
                                                    $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
                                                    $ogImgSrc = $parent->description;
                                                    $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);
                                                ?>

                                                <img src="<?php echo $imgsrc ?>?w=249&h=249&fit=crop&crop=entropy&auto=compress,format">
                                                <h6><div><span>All <?php echo $parent->name; ?> Stories</span></div></h6>
                                                <!-- <div>Post Count:<?php echo $parent->count; ?></div> -->
                                            </a>
                                        </div>
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
