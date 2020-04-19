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
			<article class="col-12 col-sm-12 col-md-12 col-lg-6 order-lg-2 order-first">
				<h5 class="d-block d-md-none">Zostaw wiadomość</h5>
				<form id="form" action="mailto:miroslaw.dubaj@gmail.com" method="post" enctype="text/plain">
					<div class="form-group">
						<label class="d-none d-md-block" for="exampleFormControlInput1">Zostaw wiadomość</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Podaj swój adres email">
					</div>
					<div class="form-group">
						<label class="d-none d-md-block" for="exampleFormControlInput1">Temat</label>
						<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Wpisz temat">
					</div>
					<div class="form-group">
						<label class="d-none d-md-block" for="exampleFormControlTextarea1">Treść</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Wpisz treść"></textarea>
					</div>
					<button type="submit" class="btn btn-secondary mb-2">Wyślij wiadomość</button>
				</form>
			</article>
			<article class="site-info d-flex justify-content-between d-md-block col-12 col-md-6 col-lg-3 order-lg-3">
				<h5>Sieci społecznościowe</h5>
				<p>FACEBOOK</p>
				<p>ZNANYLEKARZ</p>
				<p>GOOGLE</p>
				<p>MINIATURA MAPY?</p>
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

<?php wp_footer(); ?>

</body>

</html>