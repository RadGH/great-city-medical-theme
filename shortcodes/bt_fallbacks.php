<?php

// Replaces all of the old "Bold Theme" shortcodes.
// This just replaces the shortcodes with their content, it does not do any formatting.
function gcm_bt_shortcode( $atts, $content = '', $shortcode_name = 'bt_' ) {
	return do_shortcode($content);
}

function gcm_bt_register_shortcodes() {
	if ( gcm_is_block_editor() ) return;
	
	// Shortcodes on left, and # of occurrences on the right, as of 2023-07-31.
	// Ideally we can get rid of all these shortcodes over time.
	$bt_shortcodes = array(
		'bt_hr' => 580,
		'bt_column' => 335,
		'bt_text' => 266,
		'bt_header' => 241,
		'bt_row' => 231,
		'bt_section' => 116,
		'bt_image' => 80,
		'bt_accordion_items' => 65,
		'bt_column_inner' => 33,
		'bt_icon' => 33,
		'bt_icons' => 29,
		'bt_button' => 26,
		'bt_row_inner' => 16,
		'bt_service' => 15,
		'bt_bb_content_slider_item' => 14,
		'bt_accordion' => 13,
		'bt_counter' => 12,
		'bt_custom_menu' => 9,
		'bt_bb_raw_content' => 4,
		'bt_bb_content_slider' => 3,
		'bt_bb_timetable' => 1,
		'bt_gmaps' => 1,
		'bt_working_hours' => 1,
		'bt_bb_before_after_image' => 1,
	);
	
	foreach( $bt_shortcodes as $shortcode_name => $count ) {
		if ( ! shortcode_exists( $shortcode_name ) ) {
			add_shortcode( $shortcode_name, 'gcm_bt_shortcode' );
		}
	}
}
add_action( 'init', 'gcm_bt_register_shortcodes' );

