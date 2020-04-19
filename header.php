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
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'marzenakwasik'); ?></a>
	<header class="site-header">
		<section class="quote">
			<?php if (!is_home() && !is_front_page()) :
			?>
				<h5 class="quote-text text-center mb-0 pt-1 pb-1">Wierzę, że człowiek może zmieniać sie i&nbsp;nie ustawać w&nbsp;przemianie tak długo, jak żyje - <span class="quote-author">Karen Horney</span></h5>
			<?php
			endif;
			?>
		</section>
	</header>
	<nav class="navbar navbar-toggleable-sm navbar-expand-lg navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
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
			<h5 class="navbar-text">
				Centrum Diagnozy i Terapii - Marzena Kwasik
			</h5>
		</div>
	</nav>

	<div id="content" class="site-content">