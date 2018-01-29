<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Special+Elite|Merriweather:400,300,300italic,700" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="header__logo">
					<a href="/">
						<img src="//roaminglove.imgix.net/2016/09/logo.svg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-sm-8">
				<a class="instagramLink" href="https://www.instagram.com/roaminglovetravel/" target="instagram">
					<span>follow us on instagram</span>
					<img src="https://roaminglove.imgix.net/2016/09/instagram-logo.svg" width="25">
				</a>
				<div class="header__nav">
					<ul class="list-unstyled list-inline">
						<li class="linkOverline"><a href="/destinations">destinations</a></li>
						<li class="linkOverline"><a href="">about</a></li>
						<li class="linkOverline"><a href="">contribute</a></li>
						<li class="headerSearch">


						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="63.171px" height="63.167px" viewBox="909.954 909.911 63.171 63.167"
							 enable-background="new 909.954 909.911 63.171 63.167" xml:space="preserve">
							<path d="M972.272,963.921l-16.172-16.173c2.309-3.769,3.708-8.16,3.708-12.909c0-13.765-11.165-24.928-24.927-24.928
							c-13.765,0-24.928,11.163-24.928,24.928c0,13.762,11.163,24.927,24.928,24.927c4.749,0,9.141-1.399,12.909-3.699l16.173,16.163
							c1.136,1.137,3.019,1.128,4.154,0l4.154-4.154C973.409,966.939,973.409,965.057,972.272,963.921z M934.882,951.457
							c-9.178,0-16.618-7.441-16.618-16.618c0-9.178,7.44-16.618,16.618-16.618c9.177,0,16.618,7.44,16.618,16.618
							C951.5,944.016,944.059,951.457,934.882,951.457z"/>
						</svg>


							<!-- <svg height="100" width="95" preserveAspectRatio="none" viewBox="0 0 100 95" xmlns="http://www.w3.org/2000/svg">
							  <path d="M960 832L710.875 582.875C746.438 524.812 768 457.156 768 384 768 171.96900000000005 596 0 384 0 171.969 0 0 171.96900000000005 0 384c0 212 171.969 384 384 384 73.156 0 140.812-21.562 198.875-57L832 960c17.5 17.5 46.5 17.375 64 0l64-64C977.5 878.5 977.5 849.5 960 832zM384 640c-141.375 0-256-114.625-256-256s114.625-256 256-256 256 114.625 256 256S525.375 640 384 640z" />
							</svg> -->
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="searchBar--overlay">
</div>
<div class="searchBar">
	<div class="container">
		<form class="wpcf7-form" id="search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			<input class="searchBar__input wpcf7-form-control wpcf7-text" type="text" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
			<button class="searchBar__btn wpcf7-form-control wpcf7-submit btn btn-primary" type="submit">Search</button>
		</form>
	</div>
</div>
