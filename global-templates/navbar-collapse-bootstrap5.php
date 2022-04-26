<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<nav id="main-nav" class="navbar navbar-light navbar-expand-md" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="container align-items-start">

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>

			<h1 class="navbar-brand mb-0">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/legroove-logo.svg"); ?>
				</a>
			</h1>

			<?php
		} else {
			the_custom_logo();
		}
		?>
		<!-- end custom logo -->

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbarNavDropdown" class="collapse navbar-collapse">
			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container' => false,
					'menu_class'      => 'navbar-nav ms-auto text-uppercase h4',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="https://www.instagram.com/legroove_gva/" class="nav-link">
						<?php echo file_get_contents(get_template_directory_uri() . "/images/social/instagram-header.svg"); ?>
					</a>
				</li>
				<li class="nav-item">
					<a href="https://www.facebook.com/legroovegva" class="nav-link">
						<?php echo file_get_contents(get_template_directory_uri() . "/images/social/facebook-header.svg"); ?>
					</a>
				</li>
			</ul>
		</div>

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
