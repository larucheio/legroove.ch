<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$url = get_the_post_thumbnail_url( $post->ID, 'large' );
?>

<div class="groove-card groove-card--agenda" style="background-image: url(<?php echo $url; ?>);">
    <div class="card-img-overlay d-flex justify-content-end flex-column pb-2">
        <h2 class="h3 d-inline-block">
            <span class="groove-card--agenda__date"><?php echo tribe_get_start_date(null, null, 'd M') ?></span>
            <?php normalize_headers(the_title()); ?>
        </h2>

        <div class="d-flex justify-content-between">
            <span class="small"><?php echo tribe_get_start_date(null, null, 'd.m.Y') ?> · AGENDA</span>
            <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
        </div>
    </div>
</div>
