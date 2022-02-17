<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="entry-meta">

			<span class="text-primary">
				<?php
					foreach((get_the_category()) as $category) {
						echo $category->cat_name . ' ';
					}
					echo " • ";
					understrap_posted_on();
				?>
			</span>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="row">
		<div class="col-lg-4 offset-lg-1">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="col-lg-6">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

			<div class="entry-content mt-5">

				<?php
				the_content();
				understrap_link_pages();
				?>

			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
