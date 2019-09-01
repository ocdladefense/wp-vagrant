<?php
/**
 * Displays main navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation navigation-collapsible" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
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

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
