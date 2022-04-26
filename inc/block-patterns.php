<?php

add_action('after_setup_theme', function() {
	remove_theme_support('core-block-patterns');
});

function groove_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'groove', array( 'label' => __( 'Groove', 'groove' ) ) );
	}

	$block_pattern_categories = array(
		'groove'  => array(
			'label'         => __( 'Groove', 'groove' ),
			'categoryTypes' => array( 'groove' ),
		),
	);

	$block_pattern_categories = apply_filters( 'groove_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'event-practical-informations',
	);

	$block_patterns = apply_filters( 'groove_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'groove/' . $block_pattern,
			array_merge(
				require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' ),
				array('content' => file_get_contents(get_theme_file_path( '/inc/patterns/' . $block_pattern . '.html' ))),
			),
		);
	}
}
add_action('init', 'groove_register_block_patterns');
