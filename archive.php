<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="archive-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main mb-5" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title text-secondary display-1">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
						<?php
						// Start the loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'home' );
						}
						?>
					</div>
					<?php
				}
				?>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
