<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marzenakwasik
 */

?>
<footer id="colophon" class="site-footer container-fluid fixed-bottom">
	<div class="container">
		<section class="row">
			<article class="col-6 col-sm-6 col-md-6 col-lg-3 order-lg-1 d-none d-md-block">
				<h5>Mapa strony</h5>
				<?php
				wp_nav_menu(array(
					'menu_id'           => 'primary-menu',
					'walker'            => new WPDocs_Walker_Nav_Menu(),
					'menu_class'        => 'nav flex-column',
					'container'         => '',
					'theme_location'    => 'menu-1'
				));
				?>
			</article>
			<article class="col-12 col-sm-12 col-md-12 col-lg-6 order-lg-2">
				<h5 class="d-block d-md-none">Zostaw wiadomość</h5>
				<?php dynamic_sidebar('footer-form') ?>
			</article>
			<article class="site-info d-flex flex-wrap align-items-end justify-content-between d-md-block col-12 col-md-6 col-lg-3 order-lg-3 order-first">
				<h5 class="d-none d-md-block">Dane adresowe</h5>
				<p>Centrum Diagnozy i&nbsp;Terapii Marzena&nbsp;Kwasik</p>
				<p>ul. Al. Piłsudskiego 31, I piętro, Gabinet 108</p>
				<p>35-074, Rzeszów</p>
			</article>
		</section>
		<section class="row">
			<article class="copyright col-lg-12 text-center">
				<p>&#169; 2020 Centrum Diagnozy i Terapii – Marzena Kwasik
					<span class="sep"> | </span>
					Strona stworzona przez <a href="https://dubaj.dev/">dubaj.dev</a>
				</p>
			</article>
		</section>
	</div>
</footer>
<div id="scroll-down">
	<div id="target"></div>
</div>

<?php wp_footer(); ?>
</body>

</html>