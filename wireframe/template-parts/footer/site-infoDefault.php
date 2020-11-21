<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'https://google.com/', 'wireframe' ) ); ?>" class="imprint">
		<?php printf( __( 'Your Company, Your Street, City, State, Zip Code - ###.###.#### - info@yourSite.com', 'wireframe' ), 'WordPress' ); ?>
	</a>
</div><!-- .site-info -->
