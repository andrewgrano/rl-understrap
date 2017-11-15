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
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
