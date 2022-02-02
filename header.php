<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Elements for noisy gradient background -->
	<style>
		:root {
			--bs-primary: <?php echo get_theme_mod('primary_color'); ?>;
			--bs-primary-rgb: <?php echo hex2rgb(get_theme_mod('primary_color')); ?>;
			--bs-secondary: <?php echo get_theme_mod('secondary_color'); ?>;
			--bs-secondary-rgb: <?php echo hex2rgb(get_theme_mod('secondary_color')); ?>;
		}
	</style>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<!-- Elements for noisy gradient background -->
<div class="grain_background">
  <div class="grain_background__noise"></div>
  <div class="grain_background__overlay"></div>
</div>

<div class="site container bg-white" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-bootstrap5'); ?>

	</header><!-- #wrapper-navbar end -->
