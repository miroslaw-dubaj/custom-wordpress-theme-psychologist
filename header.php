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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'marzenakwasik' ); ?></a>

	<header id="masthead" class="site-header">
		



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php

wp_nav_menu( array(
    'menu_id'           => 'primary-menu', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
	'walker'            => new WPDocs_Walker_Nav_Menu(),
	'menu_class'        => 'navbar-nav mr-auto',
	'container'         => '',
    'theme_location'    => 'menu-1', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
) );


?>


  </div>
</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
