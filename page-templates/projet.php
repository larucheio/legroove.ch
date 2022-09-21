<?php
/**
 * Template Name: Projet
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->


<style media="screen">
	.groove-bg-wave {
		display: none !important;
	}

	.site.container {
		background-image: none;
	}

	@media (min-width: 992px) {
		.site.container {
			background-image: url('<?php echo get_template_directory_uri() . "/images/wave-projet.svg" ?>');
			background-repeat: no-repeat;
			background-position: center;
		}
	}
</style>

<?php
get_footer();
