<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="groove-card groove-card--news border-0 groove-bg-gradient">
    <?php if (has_post_thumbnail()): ?>
        <div class="groove-card--news__image m-3" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); height: 50%; background-size: cover; background-position: center;"></div>
    <?php endif; ?>

    <div class="card-body text-white">
        <h2 class="h3"><?php normalize_headers(the_title()); ?></h2>

        <?php if (!has_post_thumbnail()): ?>
        <p>
            <?php echo get_the_excerpt(); ?>
        </p>
        <?php endif; ?>
    </div>
    <div class="card-footer bg-transparent border-0 text-white d-flex justify-content-between">
        <span class="small"><?php echo get_the_date('d.m.Y') ?> · NEWS</span>
        <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
    </div>
</div>
