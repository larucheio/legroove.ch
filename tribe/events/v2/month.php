<?php
/**
 * View: Month View
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/month.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version  5.7.0
 *
 * @var string   $rest_url             The REST URL.
 * @var string   $rest_method          The HTTP method, either `POST` or `GET`, the View will use to make requests.
 * @var string   $rest_nonce           The REST nonce.
 * @var int      $should_manage_url    int containing if it should manage the URL.
 * @var bool     $disable_event_search Boolean on whether to disable the event search.
 * @var string[] $container_classes    Classes used for the container of the view.
 * @var array    $container_data       An additional set of container `data` attributes.
 * @var string   $breakpoint_pointer   String we use as pointer to the current view we are setting up with breakpoints.
 */

$header_classes = [ 'tribe-events-header' ];
if ( empty( $disable_event_search ) ) {
	$header_classes[] = 'tribe-events-header--has-event-search';
}

$default_date        = date('Y-m');
$selected_date_value = $this->get( [ 'bar', 'date' ] );

$tax_query = null;
$path = array_filter(explode('/', parse_url( $_SERVER[ 'REQUEST_URI' ], PHP_URL_PATH )));
$category = count($path) === 4 ? $path[3] : null;
if ($category) {
	$tax_query = array(
		array(
		'taxonomy' => 'tribe_events_cat',
		'field' => 'slug',
		'terms' => $category,
		)
	);
}

if ($selected_date_value) {
	$start = date('Y-m-01', strtotime($selected_date_value));
	$end = date('Y-m-01', strtotime('+ 1 month', strtotime($selected_date_value)));
	$groove_events = tribe_get_events([
		'start_date' => $start,
		'end_date' => $end,
		'tax_query'=> $tax_query,
	]);
} else {
	$start = date('Y-m-01', strtotime($default_date));
	$groove_events = tribe_get_events([
		'start_date' => $start,
		'tax_query'=> $tax_query,
	]);
}

$years = [];
for ($i = intval(date('Y')); $i >= 2020; $i--) {
	array_push($years, $i + 1);
}

$categories = get_terms(
	'tribe_events_cat',
	array(
    	'hide_empty' => false,
	)
);
?>

<div class="wrapper">
	<div class="container">
		<main class="site-main pb-5" id="main">
			<header class="page-header">
				<h1 class="page-title text-secondary display-1">AGENDA</h1>
			</header>

			<div class="row g-3">
				<div class="col-md-3">
					<div class="display-4 text-primary groove-font-family-headings">MOIS</div>
					<select id="groove_calendar_filter_month" class="form-select form-select--groove">
						<option value="01">Janvier</option>
						<option value="02">Février</option>
						<option value="03">Mars</option>
						<option value="04">Avril</option>
						<option value="05">Mai</option>
						<option value="06">Juin</option>
						<option value="07">Juillet</option>
						<option value="08">Aout</option>
						<option value="09">Septembre</option>
						<option value="10">Octobre</option>
						<option value="11">Novembre</option>
						<option value="12">Décembre</option>
					</select>
				</div>

				<div class="col-md-3">
					<div class="display-4 text-primary groove-font-family-headings">ANNEE</div>
					<select id="groove_calendar_filter_year" class="form-select form-select--groove">
						<?php foreach ($years as $year): ?>
							<option value="<?php echo $year ?>"><?php echo $year ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-md-3">
					<div class="display-4 text-primary groove-font-family-headings">CATEGORIE</div>
					<select id="groove_calendar_filter_category" class="form-select form-select--groove">
						<option value="">-</option>
						<?php foreach ($categories as $category): ?>
							<option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>

			<div class="mt-4 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
			<?php
				foreach ($groove_events as $event) {
					$this->setup_postdata( $event );
					get_template_part( 'loop-templates/content', 'home' );
					}
			?>
			</div>
		</main>
	</div>
</div>

<script type="text/javascript">
	let currentUrlPath = new URL(window.location.href).pathname
	let currentUrlPathSplit = currentUrlPath.split("/").slice(2, -1)

	let year = document.getElementById('groove_calendar_filter_year')
	let month = document.getElementById('groove_calendar_filter_month')
	let category = document.getElementById('groove_calendar_filter_category')

	//Set the category value if present
	if (currentUrlPathSplit.length > 1) {
		category.value = currentUrlPathSplit[1]
	}

	let date = currentUrlPathSplit.pop()
	if (date) {
		year.value = date.slice(0, 4)
		month.value = date.slice(5, 7)
	} else {
		let today = new Date()
		year.value = today.getFullYear()
		month.value = String(today.getMonth() + 1).padStart(2, '0')
	}

	year.onchange = updateFilter
	month.onchange = updateFilter
	category.onchange = updateFilter

	function updateFilter() {
		let url = "/agenda/"

		if (category.value) {
			url += `category/${category.value}/`
		}

		url += `${year.value}-${month.value}`

		window.location.href = url
	}
</script>
