<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?>

<form class="wpcf7-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="searchBox">
    	<label class="searchBox__label assistive-text" for="s"><?php esc_html_e( 'Search:', 'understrap' ); ?></label>
    	<input class="searchBox__input wpcf7-form-control wpcf7-text" id="s" name="s" type="text"
    		placeholder="<?php esc_attr_e( '', 'understrap' ); ?>">

    	<button class="searchBox__btn wpcf7-form-control wpcf7-submit btn btn-primary" id="searchsubmit"
    		value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">Search</button>
    </div>
</form>
