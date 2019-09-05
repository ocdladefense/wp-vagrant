<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if (is_active_sidebar( 'sidebar-3' ) ) :
	?>

	<aside class="widget-area footer-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'wireframe' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>
			<div class="widget-column footer-widget-2 site-info">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
