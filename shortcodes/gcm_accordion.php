<?php

// HTML usage:
// 1. The container class can include "gcm-collapsed" or "gcm-expanded". By default, items will be collapsed.
// 2. Accordions are initialized in global.js and work on the frontend and backend.
// 3. You can use a div for "gcm-handle" or add that class to a link/button directly, without a containing div.
/*
	<div class="gcm-accordion gcm-collapsed" id="first-item">
		<div class="gcm-handle">
			<a href="#first-item">First Item</a>
		</div>
		<div class="gcm-content">
			<p>Content for the first item.</p>
		</div>
	</div>
*/

// Shortcode usage:
/*
	[gcm_accordion title="Example Tab #1"]
		<p>Content goes here</p>
	[/gcm_accordion]
	[gcm_accordion title="Another Tab #2"]
		<p>More text</p>
	[/gcm_accordion]
*/

// Shortcode Arguments:
/*
	title: The title shown on the accordion button
	expanded: True or false. If true the accordion item is initially expanded. If false (default) the item is initially collapsed.
*/

function shortcode_gcm_accordion( $atts, $content = '', $shortcode_name = 'gcm_accordion' ) {
	$atts = shortcode_atts(array(
		'title' => '',
		'expanded' => 'false',
	), $atts, $shortcode_name);
	
	$title = trim($atts['title']);
	$content = do_shortcode($content);
	
	$id = gcm_accordion_get_html_id( $title );
	
	$is_expanded = strtolower($atts['expanded']) === 'true' || $atts['expanded'] === '1';
	$expanded_class = ($is_expanded ? 'gcm-expanded' : 'gcm-collapsed');
	
	return <<<HTML
<div class="gcm-accordion {$expanded_class}" id="{$id}">
	<div class="gcm-handle"><a href="#{$id}">{$title}</a></div>
	<div class="gcm-content">{$content}</div>
</div>
HTML;
}
add_shortcode( 'gcm_accordion', 'shortcode_gcm_accordion' );

/**
 * Convert a title into an HTML ID. If the resulting ID is already used a number will be appended to the end: "example-1"
 *
 * @param string $title
 *
 * @return string
 */
function gcm_accordion_get_html_id( $title ) {
	static $registered_ids = array();
	
	$index = 1;
	
	// The ID is based on the title converted to a slug
	$base_id = sanitize_title_with_dashes( $title );
	if ( ! $base_id ) $base_id = 'accordion-' . $index;
	
	// Check if id already used and append a number at the end until it is unique
	$id = $base_id;
	
	while( isset($registered_ids[$id]) ) {
		$id .= $base_id . '-' . $index;
		$index += 1;
	}
	
	// Store this id so we can check it next time
	$registered_ids[$id] = $id;
	
	return $id;
}