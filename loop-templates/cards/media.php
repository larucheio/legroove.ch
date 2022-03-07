<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="groove-card border-secondary">
    <?php if (has_post_thumbnail()): ?>
        <div class="m-3">
            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <h2 class="h3 <?php if (!has_excerpt()) { echo 'mb-0'; } ?>"><?php normalize_headers(the_title()); ?></h2>

        <?php echo substr(get_the_excerpt(), 0, 100); ?>
    </div>
    <div class="card-footer bg-transparent border-secondary d-flex justify-content-between text-secondary">
        <span class="small"><?php echo get_the_date('d.m.Y') ?> · MEDIA</span>
        <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
    </div>
</div>
