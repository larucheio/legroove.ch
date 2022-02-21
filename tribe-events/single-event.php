<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

/**
 * Allows filtering of the single event template title classes.
 *
 * @since 5.8.0
 *
 * @param array  $title_classes List of classes to create the class string from.
 * @param string $event_id The ID of the displayed event.
 */
$title_classes = apply_filters( 'tribe_events_single_event_title_classes', [ 'tribe-events-single-event-title' ], $event_id );
$title_classes = implode( ' ', tribe_get_classes( $title_classes ) );

/**
 * Allows filtering of the single event template title before HTML.
 *
 * @since 5.8.0
 *
 * @param string $before HTML string to display before the title text.
 * @param string $event_id The ID of the displayed event.
 */
$before = apply_filters( 'tribe_events_single_event_title_html_before', '<h1 class="' . $title_classes . '">', $event_id );

/**
 * Allows filtering of the single event template title after HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display after the title text.
 * @param string $event_id The ID of the displayed event.
 */
$after = apply_filters( 'tribe_events_single_event_title_html_after', '</h1>', $event_id );

/**
 * Allows filtering of the single event template title HTML.
 *
 * @since 5.8.0
 *
 * @param string $after HTML string to display. Return an empty string to not display the title.
 * @param string $event_id The ID of the displayed event.
 */
$title = apply_filters( 'tribe_events_single_event_title_html', the_title( $before, $after, false ), $event_id );

?>

<div id="tribe-events-content" class="tribe-events-single">
    <header class="entry-header">
		<div class="entry-meta">
			<span class="text-primary">
				<?php
					echo "Agenda • ";
					echo tribe_get_start_date(null, false, 'd.m.Y');
				?>
			</span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<!-- Notices -->
	<?php tribe_the_notices() ?>

    <div class="row">
        <div class="col-md-6 offset-md-6">
            <h2 class="mb-0 text-secondary"><?php echo tribe_get_start_date(null, false, 'd M y'); ?></h2>
            <h1 class="display-2"><?php echo the_title(); ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Event featured image, but exclude link -->
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
        </div>
        <div class="col-md-6">
            <!-- Event content -->
            <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
            <div class="tribe-events-single-event-description tribe-events-content">
                <?php the_content(); ?>
            </div>

        	<div>
        		<?php if ( tribe_get_cost() ) : ?>
        			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
        		<?php endif; ?>
        	</div>

            <?php tribe_get_template_part( 'modules/meta/details' ); ?>

            <!-- .tribe-events-single-event-description -->
            <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
        </div>
    </div>

</div><!-- #tribe-events-content -->
