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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '&#169; 2020 Centrum Diagnozy i Terapii – Marzena Kwasik', 'marzenakwasik' ), 'WordPress' );
				?>
			<span class="sep"> | </span>
				Strona stworzona przez <a href="https://dubaj.dev/">dubaj.dev</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
