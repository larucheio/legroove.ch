<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="card bg-dark text-white h-100 border-none">
    <?php if (has_post_thumbnail()): ?>
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <?php endif; ?>

    <div class="card-img-overlay d-flex justify-content-end flex-column pb-2">
        <h2 class="h3"><?php the_title(); ?></h2>

        <div class="d-flex justify-content-between">
            <span class="small"><?php echo get_the_date('d.m.Y') ?> · AGENDA</span>
            <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
        </div>
    </div>
</div>
