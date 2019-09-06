<?php
/**
 * Displays main navigation
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.2
 */

?>
<!--USE A ID & CLASSNAME OF "main-navigation" if you want to have the menu collapsible on smaller screens-->
<nav id="main-navigation" class="main-navigation navigation-collapsible" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'wireframe' ); ?>">
	<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
		<?php
		echo wireframe_get_svg( array( 'icon' => 'bars' ) );
		echo wireframe_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'wireframe' );
		?>
	</button>

	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'main',
			'menu_id'        => 'main-menu',
		)
	);
	?>

	<?php if ( ( wireframe_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo wireframe_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'wireframe' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
