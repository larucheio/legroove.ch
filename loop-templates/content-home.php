<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="col" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
		if (in_category('4')) {
			echo get_template_part('loop-templates/cards/media');
		} elseif (in_category('5')) {
			echo get_template_part('loop-templates/cards/news');
		}
	?>
</article><!-- #post-## -->
