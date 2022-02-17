<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="card h-100 border-secondary groove-bg-gradient">
    <div class="card-body">
        <h2 class="h3"><?php the_title(); ?></h2>

        <p>
            <?php echo get_the_excerpt(); ?>
        </p>
    </div>
    <div class="card-footer bg-transparent border-0 text-white d-flex justify-content-between">
        <span class="small"><?php echo get_the_date('d.m.Y') ?> · NEWS</span>
        <a href="<?php echo get_permalink(); ?>" class="stretched-link text-reset text-decoration-none">+</a>
    </div>
</div>
