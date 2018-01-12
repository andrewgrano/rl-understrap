<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_posted_by' ) ) :
/**
 * Prints HTML "by [author]"
 */
function understrap_posted_by() {
	$posted_by = sprintf(
		esc_html_x( 'by %s', 'post author', 'understrap' ),
		'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
	);
	echo '<span> ' . $posted_by . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'understrap_posted_by_with_link' ) ) :
function understrap_posted_by_with_link() {
	$byline = sprintf(
		esc_html_x( ' %s', 'post author', 'understrap' ),
		'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);
	echo $byline; // WPCS: XSS
}
endif;

if ( ! function_exists( 'understrap_posted_by_with_link' ) ) :
/**
 * Prints HTML "by [author]"
 */
function understrap_posted_by_with_link() {
	$posted_by = sprintf(
		esc_html_x( 'by %s', 'post author', 'understrap' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span> ' . $posted_by . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'understrap_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function understrap_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	$posted_on = sprintf(
		esc_html_x( ' on %s', 'post date', 'understrap' ),
		 $time_string
	);
	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'understrap' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="byline">' . $byline . '</span><span class="posted-on"> ' . $posted_on . '</span>'; // WPCS: XSS
}
endif;

if ( ! function_exists( 'understrap_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function understrap_entry_footer() {

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'understrap' ), esc_html__( '1 Comment', 'understrap' ), esc_html__( '% Comments', 'understrap' ) );
		echo '</span>';
	}
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'understrap' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;


if ( ! function_exists( 'understrap_entry_categories' ) ) :
/**
 * Prints HTML with meta information for the categories
 */
function understrap_entry_categories() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ' ', 'understrap' ) );
		if ( $categories_list && understrap_categorized_blog() ) {
			printf( '<div class="post__categories">' . esc_html__( '%1$s', 'understrap' ) . '</div>', $categories_list ); // WPCS: XSS OK.
		}
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'understrap' ) );
		if ( $tags_list ) {
			printf( '<div class="post__tags">' . esc_html__( 'Tagged %1$s', 'understrap' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
	}
}
endif;


if ( ! function_exists( 'understrap_entry_categories2' ) ) :
function understrap_entry_categories2() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = strip_tags( get_the_category_list( esc_html__( ', ', 'understrap' ) ));
		if ( $categories_list && understrap_categorized_blog() ) {
			printf( '<div class="">' . esc_html__( '%1$s', 'understrap' ) . '</div>', $categories_list ); // WPCS: XSS OK.
		}
	}
}
endif;



if ( ! function_exists( 'understrap_postWidget_categories' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function understrap_postWidget_categories() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'understrap' ) );
		if ( $categories_list && understrap_categorized_blog() ) {
			printf( $categories_list );
			// WPCS: XSS OK.
		}
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'understrap' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'understrap' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}
}
endif;

// Remove p tags from category description
remove_filter('term_description','wpautop');

// Remove “Category:”, “Tag:”, “Author:” from the_archive_title
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});



/**
 * This creates the [my_cat_list] shortcode and calls the
 * my_list_categories_shortcode() function.
 */
add_shortcode( 'my_cat_list', 'my_list_categories_shortcode' );



/**
 * this function outputs your category list where you
 * use the [my_cat_list] shortcode.
 */
function my_list_categories_shortcode() {
    wp_list_categories();
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function understrap_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'understrap_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );
		set_transient( 'understrap_categories', $all_the_cool_cats );
	}
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so components_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so components_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in understrap_categorized_blog.
 */
function understrap_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'understrap_categories' );
}
add_action( 'edit_category', 'understrap_category_transient_flusher' );
add_action( 'save_post',     'understrap_category_transient_flusher' );



