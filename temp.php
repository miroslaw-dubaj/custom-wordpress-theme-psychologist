<?php
			$marzenakwasik_description = get_bloginfo( 'description', 'display' );
			if ( $marzenakwasik_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $marzenakwasik_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
            

            <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
            ?>

<?php

wp_nav_menu( array $args = array(
    'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'container_id'      => "", // (string) The ID that is applied to the container.
    'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    'before'            => "", // (string) Text before the link markup.
    'after'             => "", // (string) Text after the link markup.
    'link_before'       => "", // (string) Text before the link text.
    'link_after'        => "", // (string) Text after the link text.
    'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
    'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
    'walker'            => "", // (object) Instance of a custom walker class.
    'theme_location'    => "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
    'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
) );
?>

    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul> -->