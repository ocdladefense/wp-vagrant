<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage wireframe
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wireframe' ); ?></a>
		

		<div class="flex-container global-header" ><!--global-header-->
			<?php if ( has_nav_menu( 'main' ) ) : ?>
				<div class="navigation-main">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'main' );?>
					</div><!-- .wrap -->
				</div><!-- .navigation-main -->
			<?php endif; ?>

			<?php if (the_custom_logo() == null)
				?><img class="theImg" src="/wp-content/themes/wireframe/assets/images/defaultLogo.png" style="max-width:100px;" />
			<?php
			the_custom_logo(); ?>

			<div class="tagline-container">
				<strong class="tagline"> 
					<?php 
						if (get_bloginfo( 'description', 'display' ) == "")
							echo "Your Company Tagline Here";
						else
							echo get_bloginfo( 'description', 'display' ); 
					?>
				</strong>
			</div> <!--tagline-container-->

			<?php
				if ( is_active_sidebar( 'sidebar-4' ) ) {
					dynamic_sidebar( 'sidebar-4' );
				}
			?>
		</div><!--global-header-->

		<header id="masthead" class="site-header" role="banner">
			<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) {
				?>
				<div class="widget-column banner-widget-area">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<?php
			}
			?>
			<?php
			if ( is_active_sidebar( 'sidebar-6' ) ) {
				?>
				<div class="widget-column banner-widget-area">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				</div>
				<?php
			}
			?>
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div  id="cssmenu" class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>
		</header><!-- #masthead -->

		<?php

		/*
		* If a regular post or page, and not the front page, show the featured image.
		* Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
		*/
		if ( ( is_single() || ( is_page() && ! wireframe_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'wireframe-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain">
			<div id="content" class="site-content">
