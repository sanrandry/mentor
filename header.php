<?php

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="home">
 *
 * @subpackage Best
 * @since      Best 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top">
			<div class="container d-flex align-items-center">
				<?php if (has_custom_logo()) : ?>
					<!-- Uncomment below if you prefer to use an image logo -->
					<?php
					$logo = get_theme_mod('custom_logo');
					$logo_url = wp_get_attachment_image_src($logo, 'full')[0];
					?>
					<a href="<?php echo (home_url('/')) ?>" class="logo mr-auto"><img src="<?php echo ($logo_url); ?>" alt="" class="img-fluid"></a>
				<?php else : ?>
					<h1 class="logo mr-auto"><a href="<?php echo ('/') ?>"><?php bloginfo('name'); ?></a></h1>
				<?php endif; ?>

				<nav class="nav-menu d-none d-lg-block">
					<?php wp_nav_menu(array(
						'theme_location' => 'header-menu',
						"menu_class" => "test",
						"container" => "ul",
						"walker" => new Best_nav_walker()
					)); ?>
				</nav><!-- .nav-menu -->
			</div>
		</header><!-- End Header -->