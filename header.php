<!doctype html>
	<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Steadcross → <?php wp_title( '', true, 'right' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Typekit -->

		<script src="https://use.typekit.net/ooy2zyu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>

	<body <?php body_class(); ?>>

		<header>
			<div class="grid-container">
				<div class="row">
					<div class="col-4">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg"></a>
					</div>
					<div class="col-3">
						<h4>making big business for small businesses</h4>
					</div>
					<a href="" class="menu-trigger"></a>
					<a href="" class="menu-cross"></a>
				</div>
			</div>
			<nav>
				<div class="grid-container">
					<div class="row">
						<div class="col-8">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
						<div class="col-3">
							<a class="telephone" href="tel:+44 (0) 1484 294490">+44 (0) 1484 294490</a>
						</div>
					</div>
				</div>
			</nav>
			<div class="submenu-holder"></div>
		</header>	
