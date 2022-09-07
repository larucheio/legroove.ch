<?php
/**
 * Single Event Template
 *
 * A single event complete template, divided in smaller template parts.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/single-event-blocks.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 4.7
 *
 */
?>

<div class="row">
	<div class="col-12 col-lg-6 offset-lg-6">
		<div class="text-secondary text-uppercase">
			<?php echo tribe_get_start_date(null, false, 'l d F Y'); ?>
		</div>
		<?php $this->template( 'single-event/title' ); ?>
	</div>
</div>

<div id="tribe-events-content" class="tribe-events-single tribe-blocks-editor">
	<?php $this->template( 'single-event/content' ); ?>
</div>

<div class="mb-3">
	<?php understrap_post_nav(); ?>
</div>
