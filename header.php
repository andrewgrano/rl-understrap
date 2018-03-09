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
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a class="instagramLink d-none d-sm-block" href="https://www.instagram.com/roaminglovetravel/" target="instagram">
					<span>follow us on instagram</span>
					<img src="https://roaminglove.imgix.net/2016/09/instagram-logo.svg" width="25">
				</a>
			</div>
		</div>


		<nav class="navbar navbar-expand-md">
			 <a class="navbar-brand header__logo" href="/">
				<img src="//roaminglove.imgix.net/2016/09/logo.svg" class="img-responsive" alt="Roaming Love Logo">
			 </a>

			<div class="headerSearch d-block d-md-none">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="63.171px" height="63.167px" viewBox="909.954 909.911 63.171 63.167"
					 enable-background="new 909.954 909.911 63.171 63.167" xml:space="preserve">
					<path d="M972.272,963.921l-16.172-16.173c2.309-3.769,3.708-8.16,3.708-12.909c0-13.765-11.165-24.928-24.927-24.928
					c-13.765,0-24.928,11.163-24.928,24.928c0,13.762,11.163,24.927,24.928,24.927c4.749,0,9.141-1.399,12.909-3.699l16.173,16.163
					c1.136,1.137,3.019,1.128,4.154,0l4.154-4.154C973.409,966.939,973.409,965.057,972.272,963.921z M934.882,951.457
					c-9.178,0-16.618-7.441-16.618-16.618c0-9.178,7.44-16.618,16.618-16.618c9.177,0,16.618,7.44,16.618,16.618
					C951.5,944.016,944.059,951.457,934.882,951.457z"/>
				</svg>
			</div>


			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-line"></span>
			<span class="navbar-toggler-line"></span>
			<span class="navbar-toggler-line"></span>
			</button>



			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="header__nav">
					<ul class="list-unstyled list-inline">
						<li class="linkOverline"><a href="/destinations">destinations</a></li>
						<li class="linkOverline js-scrollToAbout"><a href="">about</a></li>
						<li class="linkOverline"><a href="/contribute">contribute</a></li>
						<li class="headerSearch d-none d-md-inline-block">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="63.171px" height="63.167px" viewBox="909.954 909.911 63.171 63.167"
								 enable-background="new 909.954 909.911 63.171 63.167" xml:space="preserve">
								<path d="M972.272,963.921l-16.172-16.173c2.309-3.769,3.708-8.16,3.708-12.909c0-13.765-11.165-24.928-24.927-24.928
								c-13.765,0-24.928,11.163-24.928,24.928c0,13.762,11.163,24.927,24.928,24.927c4.749,0,9.141-1.399,12.909-3.699l16.173,16.163
								c1.136,1.137,3.019,1.128,4.154,0l4.154-4.154C973.409,966.939,973.409,965.057,972.272,963.921z M934.882,951.457
								c-9.178,0-16.618-7.441-16.618-16.618c0-9.178,7.44-16.618,16.618-16.618c9.177,0,16.618,7.44,16.618,16.618
								C951.5,944.016,944.059,951.457,934.882,951.457z"/>
							</svg>
						</li>
					</ul>
				</div>
		 	</div>
		</nav>

<!--
		<div class="row">
			<div class="col-sm-5">
				<div class="header__logo">
					<a href="/">
						<img src="//roaminglove.imgix.net/2016/09/logo.svg" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-sm-7">
				<a class="instagramLink" href="https://www.instagram.com/roaminglovetravel/" target="instagram">
					<span>follow us on instagram</span>
					<img src="https://roaminglove.imgix.net/2016/09/instagram-logo.svg" width="25">
				</a>






				<div class="header__nav">
					<ul class="list-unstyled list-inline">
						<li class="linkOverline"><a href="/destinations">destinations</a></li>
						<li class="linkOverline js-scrollToAbout"><a href="">about</a></li>
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
						</li>
					</ul>
				</div> -->
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
