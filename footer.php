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

</div><!-- #content -->

<footer id="colophon" class="site-footer container-fluid fixed-bottom">
	<div class="container">
		<section class="row">
			<article class="col-lg-4">
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
			<article class="col-lg-6">
				<form action="mailto:miroslaw.dubaj@gmail.com" method="post" enctype="text/plain">
					<div class="form-group">
						<label for="exampleFormControlInput1">Adres Email</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Podaj swój adres email..">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Treść</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Napisz do nas..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Wyślij wiadomość</button>
				</form>
			</article>
			<article class="site-info col-lg-2">
				text
			</article>
		</section>
		<section class="row">
			<article class="col-lg-12">

				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('&#169; 2020 Centrum Diagnozy i Terapii – Marzena Kwasik', 'marzenakwasik'), 'WordPress');
				?>
				<span class="sep"> | </span>
				Strona stworzona przez <a href="https://dubaj.dev/">dubaj.dev</a>
			</article>
		</section>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>