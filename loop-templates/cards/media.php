<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="groove-card groove-card--media border-secondary">
    <?php if (has_post_thumbnail()): ?>
        <div class="groove-card--media__image m-3" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); height: 50%; background-size: cover; background-position: center;"></div>
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
