<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */
$action = "//lodtest.ocdla.org/search.php";
$action = "/search-results";
function get_custom_search_query(){
	return isset($_GET['query']) ? $_GET['query'] : '';
}
?>

<?php $unique_id = esc_attr( wireframe_unique_id( 'search-form-' ) ); ?>

<!--
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
-->
<form method="get" class="search-form" action="<?php print $action; ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'wireframe' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Case Reviews, Books Online, Publications, Seminars & Events, Articles and more &hellip;', 'placeholder', 'wireframe' ); ?>" value="<?php echo get_custom_search_query(); ?>" name="query" />
	<button type="submit" class="search-submit"><?php echo wireframe_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'wireframe' ); ?></span></button>
</form>
