<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions .
 */
require get_template_directory() . '/inc/editor.php';



/* =custom -- Clean up the WordPress head
------------------------------------------------- */
    // remove header links
    add_action('init', 'tjnz_head_cleanup');
    function tjnz_head_cleanup() {
        remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
        remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
        remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
        remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
        remove_action( 'wp_head', 'index_rel_link' );                           // index link
        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
        remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
        remove_action( 'wp_head', 'wp_generator' );                             // WP version
        if (!is_admin()) {
            wp_deregister_script('jquery');                                     // De-Register jQuery
            wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in footer.php
        }
    }
    // remove WP version from RSS
    add_filter('the_generator', 'tjnz_rss_version');
    function tjnz_rss_version() { return ''; }

//custom:  adjust number of posts per page on archive (category) pages.
function wpsites_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 9 );
    }
}
add_action( 'pre_get_posts', 'wpsites_query' );


/* =custom -- change the number of search results initially displayed (on the search-results page)
------------------------------------------------- */

function change_wp_search_size($queryVars) {
    if ( isset($_REQUEST['s']) ) // Make sure it is a search page
        $queryVars['posts_per_page'] = 9; // Change 10 to the number of posts you would like to show
    return $queryVars; // Return our modified query variables
}
add_filter('request', 'change_wp_search_size'); // Hook our custom function onto the request filter



/* =custom -- remove the wordpress admin toolbar from top of site
------------------------------------------------- */

show_admin_bar(false);


/* =custom -- replace image source on post pages with imgix source
------------------------------------------------- */
function replace_content($content)
{
$potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
$content = str_replace($potentialImgHostPaths, 'https://roaminglove.imgix.net/',$content);
return $content;
}
add_filter('the_content','replace_content');

