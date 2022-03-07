<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="groove-card bg-dark text-white border-0">
    <?php if (has_post_thumbnail()): ?>
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <?php endif; ?>

    <div class="card-img-overlay d-flex justify-content-end flex-column pb-2">
        <h2 class="h3"><?php normalize_headers(the_title()); ?></h2>

        <div class="d-flex justify-content-between">
            <span class="small"><?php echo tribe_get_start_date(null, null, 'd.m.Y') ?> · AGENDA</span>
            <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
        </div>
    </div>
</div>
