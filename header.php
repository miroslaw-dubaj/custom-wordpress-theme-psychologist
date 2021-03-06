<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marzenakwasik
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="YVv1HsIF2wMcrONf5-kmaHgRiIgdaamDAnQCrd9c_a0" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166804680-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-166804680-1');
	</script>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#target"><?php esc_html_e('Skip to content', 'marzenakwasik'); ?></a>
	<header class="site-header">
		<section class="quote">
			<?php if (!is_home() && !is_front_page()) :
			?>
				<?php dynamic_sidebar('fav-quote-sidebar'); ?>
			<?php
			endif;
			?>
		</section>
	</header>
	<nav class="navbar navbar-toggleable-sm navbar-expand-lg navbar-light bg-light sticky-top">
		<?php dynamic_sidebar('logo-sidebar'); ?>
		<button class="navbar-toggler navbar-toggler-right collapsed position-relative" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span> </span>
			<span> </span>
			<span> </span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
			wp_nav_menu(array(
				'menu_id'           => 'primary-menu',
				'walker'            => new WPDocs_Walker_Nav_Menu(),
				'menu_class'        => 'navbar-nav mr-auto',
				'container'         => '',
				'theme_location'    => 'menu-1'
			));
			?>
			<hr class="d-block d-sm-none">
			<div class="d-flex align-items-center">
				<?php dynamic_sidebar('logo-sidebar'); ?><h2 class="navbar-text d-sm-block d-lg-none d-xl-block mb-0"> Centrum Diagnozy i Terapii <span class="d-none">-</span> Marzena Kwasik</h2>
			</div>
		</div>
	</nav>