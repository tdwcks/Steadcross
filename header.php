<!doctype html>
	<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>
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
						<h1 class="logo">SteadCross</h1>
					</div>
					<div class="col-3">
						<h4>Making big business for small businesses</h4>
					</div>
				</div>
			</div>
			<nav>
				<div class="grid-container">
					<div class="row">
						<div class="col-8">
							<ul>
								<li><a href="">About Us</a></li>
								<li><a href="">Services</a></li>
								<li><a href="">Results</a></li>
									<ul class="submenu">
										<li><a href="">Case Studies</a></li>
										<li><a href="">Testimonials</a></li>
									</ul>
								<li><a href="">Updates</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</div>
						<div class="col-3">
							<a href="tel:+44 (0) 1484 294490">+44 (0) 1484 294490</a>
						</div>
					</div>
				</div>
			</nav>
			<div class="submenu-holder">
			</div>
		</header>	
