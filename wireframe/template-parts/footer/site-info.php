<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
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
	<a href="<?php echo esc_url( __( 'https://info@ocdla.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'OCDLA, 101 E 14th, Eugene, OR, 97402 - 541.606.8716 - info@ocdla.org', 'twentyseventeen' ), 'WordPress' ); ?>
	</a>
</div><!-- .site-info -->
