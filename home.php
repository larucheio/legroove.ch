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

/* Get all sticky posts */
$sticky = get_option( 'sticky_posts' );
$events = array_column(tribe_get_events(['start_date' => 'now', 'post_per_page' => 3]), 'ID');
$sticky = array_merge($sticky, $events);

$the_query = new WP_Query( array(
      'post_type' => array('tribe_events', 'post'),
	  'post__in' => $sticky,
	  'orderby' => 'meta_value',
          'meta_key' => '_EventStartDate',
	  'order' => 'ASC',
	  'posts_per_page' => '3',
));

// News
$category_id = 5;
$news = new WP_Query(array(
    'cat'            => $category_id,
    'posts_per_page' => 3
));

// Media
$category_id = 4;
$media = new WP_Query(array(
    'cat'            => $category_id,
    'posts_per_page' => 3
));
?>

<div class="wrapper pt-0" id="index-wrapper">

    <?php
        echo do_shortcode('[smartslider3 slider="1"]');
    ?>

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main mt-5" id="main">

				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
					<?php
					if ( $the_query->have_posts() ) {
						// Start the Loop.
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							get_template_part( 'loop-templates/content', 'home' );
						}
					}
					?>
				</div>
				
				<div class="mt-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
					<?php
					if ( $news->have_posts() ) {
						// Start the Loop.
						while ( $news->have_posts() ) {
							$news->the_post();
							get_template_part( 'loop-templates/content', 'home' );
						}
					}
					?>
				</div>
				
				<div class="mt-5 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
					<?php
					if ( $media->have_posts() ) {
						// Start the Loop.
						while ( $media->have_posts() ) {
							$media->the_post();
							get_template_part( 'loop-templates/content', 'home' );
						}
					}
					?>
				</div>

				<section class="my-5 py-5 text-center">
					<h2 class="display-2">
						<span class="groove-text-gradient">Appel a benevoles!!!</span>
					</h2>
					<a href="mailto:bar@legroove.ch" class="groove_cta btn-lg">Contactez-nous</a>
				</section>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
