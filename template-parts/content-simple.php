<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marzenakwasik
 */

?>

<article>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
