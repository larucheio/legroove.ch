<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="index-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<?php
				echo do_shortcode('[smartslider3 slider="1"]');
			?>

			<main class="site-main mt-5" id="main">

				<div class="row row-cols-1 row-cols-md-3 g-4">
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'home' );
						}
					}
					?>
				</div>

				<section class="my-5 py-5 text-center">
					<h2 class="display-1">
						<span class="groove-text-gradient">Appel a benevoles!!!</span>
					</h2>
					<a href="#" class="btn btn-primary btn-lg bg-primary border-primary">Contactez-nous</a>
				</section>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
