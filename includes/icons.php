<?php

/**
 * Get the formatted list of icon settings
 *
 * @return array[] {
 *      @type string $title     "Infant Footprints"
 *      @type string $name      "infant-footprints"
 *      @type string $tags      "infant footprints"
 *      @type string $filename  "infant-footprints.svg"
 *      @type string $url       "https://example.org/wp-content/themes/great-city-medical/assets/icons/svg/infant-footprints.svg"
 *      @type string $path      "/var/www/wp-content/themes/great-city-medical/assets/icons/svg/infant-footprints.svg"
 *      @type string $svg       "<svg>...</svg>"
 * }
 */
function gcm_get_icon_settings() {
	static $settings = null;
	if ( $settings === null ) {
		$settings = gcm_load_icon_settings();
	}
	return $settings;
}

function gcm_get_icon( $name ) {
	return gcm_get_icon_settings()[$name] ?? false;
}

/**
 * Contains a list of SVG icons, each keyed by their name, and including a list of tags to search for
 *
 * @return array
 */
function gcm_icon_config() {
	$icons = array(
		
		// logo
		'great-city-medical-logo' => array(
			'title' => 'Great City Medical Logo',
			'filename' => 'great-city-medical-logo.svg',
			'tags' => 'great city medical logo',
		),
		
		// arrows
		'up' => array(
			'filename' => 'up.svg',
			'tags' => 'up arrow',
		),
		'right' => array(
			'filename' => 'right.svg',
			'tags' => 'right arrow',
		),
		'down' => array(
			'filename' => 'down.svg',
			'tags' => 'down arrow',
		),
		'left' => array(
			'filename' => 'left.svg',
			'tags' => 'left arrow',
		),
		
		// numbers
		'0' => array(
			'filename' => 'n-0.svg',
			'tags' => 'number zero 0',
		),
		'1' => array(
			'filename' => 'n-1.svg',
			'tags' => 'number one 1',
		),
		'2' => array(
			'filename' => 'n-2.svg',
			'tags' => 'number two 2',
		),
		'3' => array(
			'filename' => 'n-3.svg',
			'tags' => 'number three 3',
		),
		'4' => array(
			'filename' => 'n-4.svg',
			'tags' => 'number four 4',
		),
		'5' => array(
			'filename' => 'n-5.svg',
			'tags' => 'number five 5',
		),
		'6' => array(
			'filename' => 'n-6.svg',
			'tags' => 'number six 6',
		),
		'7' => array(
			'filename' => 'n-7.svg',
			'tags' => 'number seven 7',
		),
		'8' => array(
			'filename' => 'n-8.svg',
			'tags' => 'number eight 8',
		),
		'9' => array(
			'filename' => 'n-9.svg',
			'tags' => 'number nine 9',
		),
		'10' => array(
			'filename' => 'n-10.svg',
			'tags' => 'number ten 10',
		),
		
		// stars
		'star-solid' => array(
			'filename' => 'star-solid.svg',
			'tags' => 'star filled solid',
		),
		'star-filled' => array(
			'filename' => 'star-filled.svg',
			'tags' => 'star filled',
		),
		'star-half-filled' => array(
			'filename' => 'star-half-filled.svg',
			'tags' => 'star half filled',
		),
		'star-empty' => array(
			'filename' => 'star-empty.svg',
			'tags' => 'star empty',
		),
		
		// heart (same shape as logo)
		'heart' => array(
			'filename' => 'heart.svg',
			'tags' => 'heart empty',
		),
		'heart-filled' => array(
			'filename' => 'heart-filled.svg',
			'tags' => 'heart filled',
		),
		
		// alphabetical
		'approved' => array(
			'filename' => 'approved.svg',
			'tags' => 'approved',
		),
		'baby' => array(
			'filename' => 'baby.svg',
			'tags' => 'baby',
		),
		'botox' => array(
			'filename' => 'botox.svg',
			'tags' => 'botox',
		),
		'calendar' => array(
			'filename' => 'calendar.svg',
			'tags' => 'calendar',
		),
		'cosmetics' => array(
			'filename' => 'cosmetics.svg',
			'tags' => 'cosmetics',
		),
		'cross' => array(
			'filename' => 'cross.svg',
			'tags' => 'cross',
		),
		'dermal-filler' => array(
			'filename' => 'dermal-filler.svg',
			'tags' => 'dermal filler',
		),
		'documents' => array(
			'filename' => 'documents.svg',
			'tags' => 'documents',
		),
		'empire-state-building' => array(
			'filename' => 'empire-state-building.svg',
			'tags' => 'empire state building',
		),
		'infant-footprints' => array(
			'filename' => 'infant-footprints.svg',
			'tags' => 'infant footprints',
		),
		'iud-implant' => array(
			'filename' => 'iud-implant.svg',
			'tags' => 'iud implant',
		),
		'lips' => array(
			'filename' => 'lips.svg',
			'tags' => 'lips',
		),
		'lotion' => array(
			'filename' => 'lotion.svg',
			'tags' => 'lotion',
		),
		'map' => array(
			'filename' => 'map.svg',
			'tags' => 'map',
		),
		'map-pin' => array(
			'filename' => 'map-pin.svg',
			'tags' => 'map pin',
		),
		'maternity' => array(
			'filename' => 'maternity.svg',
			'tags' => 'maternity',
		),
		'medicine' => array(
			'filename' => 'medicine.svg',
			'tags' => 'medicine pills prescription drug',
		),
		'menstrual-cup' => array(
			'filename' => 'menstrual-cup.svg',
			'tags' => 'menstrual cup',
		),
		'migration' => array(
			'filename' => 'migration.svg',
			'tags' => 'migration',
		),
		'naturalization' => array(
			'filename' => 'naturalization.svg',
			'tags' => 'naturalization',
		),
		'ovary' => array(
			'filename' => 'ovary.svg',
			'tags' => 'ovary',
		),
		'paperwork' => array(
			'filename' => 'paperwork.svg',
			'tags' => 'paperwork',
		),
		'passport' => array(
			'filename' => 'passport.svg',
			'tags' => 'passport',
		),
		'patient' => array(
			'filename' => 'patient.svg',
			'tags' => 'patient',
		),
		'phone' => array(
			'filename' => 'phone.svg',
			'tags' => 'phone',
		),
		'quote' => array(
			'filename' => 'quote.svg',
			'tags' => 'quote',
		),
		'sanitary-pad' => array(
			'filename' => 'sanitary-pad.svg',
			'tags' => 'sanitary pad',
		),
		'scalpel' => array(
			'filename' => 'scalpel.svg',
			'tags' => 'scalpel',
		),
		'search' => array(
			'filename' => 'search.svg',
			'tags' => 'search',
		),
		'stethoscope' => array(
			'filename' => 'stethoscope.svg',
			'tags' => 'stethoscope',
		),
		'stork' => array(
			'filename' => 'stork.svg',
			'tags' => 'stork',
		),
		'surgery' => array(
			'filename' => 'surgery.svg',
			'tags' => 'surgery',
		),
		'surgery-tools' => array(
			'filename' => 'surgery-tools.svg',
			'tags' => 'surgery tools',
		),
		'transfusion' => array(
			'filename' => 'transfusion.svg',
			'tags' => 'transfusion',
		),
		'ultrasound' => array(
			'filename' => 'ultrasound.svg',
			'tags' => 'ultrasound',
		),
		'ultrasound-results' => array(
			'filename' => 'ultrasound-results.svg',
			'tags' => 'ultrasound results',
		),
		'vaccine' => array(
			'filename' => 'vaccine.svg',
			'tags' => 'vaccine',
		),
		'visa' => array(
			'filename' => 'visa.svg',
			'tags' => 'visa',
		),
	);
	
	return apply_filters( 'gcm/icons', $icons );
}

/**
 * Get an array of the colors used in the icons
 *
 * @return string[][]
 */
function gcm_get_icon_colors() {
	// fill and fill_light are removed for "flat" icon type
	return array(
		'purple' => array(
			'outline' => '#9069AC',
			'fill' => '#E6C8FF',
			'fill_light' => '#FAF4FF',
			'overlay' => '#ffffff',
		),
		'blue' => array(
			'outline' => '#0957DE',
			'fill' => '#C9DCFD',
			'fill_light' => '#F4F8FF',
			'overlay' => '#ffffff',
		),
		'black' => array(
			'outline' => '#0e0d0d',
			'fill' => '#e3e3e3',
			'fill_light' => '#fafafa',
			'overlay' => '#ffffff',
		),
	);
}

/**
 * Load icon settings and import svg files. Results are cached to improve performance.
 *
 * @return array
 */
function gcm_load_icon_settings() {
	$cache_key = 'gcm_icon_settings';
	$settings = get_transient( $cache_key );
	if ( $settings !== false ) return $settings;
	
	$icon_dir = get_template_directory() . '/assets/icons/svg';
	$icon_url = get_template_directory_uri() . '/assets/icons/svg';
	$icon_list = array();
	
	foreach( gcm_icon_config() as $key => $icon ) {
		$title = $icon['title']    ?? false;
		$name  = $icon['name']     ?? $key;
		$file  = $icon['filename'] ?? false;
		$tags  = $icon['tags']     ?? array();
		
		$path = $icon_dir . '/' . $file;
		$url = $icon_url . '/' . $file;
		if ( ! file_exists($path) ) continue;
		
		if ( ! $title ) {
			$title = ucwords(str_replace(array('-', '_'), ' ', $key));
		}
		
		$icon_list[ $key ] = array(
			'title' => $title,
			'name' => $name,
			'tags' => $tags,
			'filename' => $file,
			'path' => $path,
			'url' => $url,
			'svg' => file_get_contents( $path ),
		);
	}
	
	set_transient( $cache_key, $icon_list, HOUR_IN_SECONDS );
	
	return $icon_list;
}

/**
 * Get the SVG element with appropriate classes for a given icon.
 *
 * @param array|string $icon    Icon settings from gcm_get_icon_settings()
 * @param string|null $color    Optional. Choices: purple, blue, black
 * @param string|null $type     Optional. Choices: none, flat, circle
 * @param string|null $size     Optional. Choices: none, tiny, x-small, small, medium, large, x-large
 *
 * @return string
 */
function gcm_icon_get_styled_html( $icon, $color = null, $type = null, $size = null ) {
	// Allowed color and types
	if ( ! in_array( $color, array('purple', 'blue', 'black') ) ) $color = 'purple';
	if ( ! in_array( $type, array( 'circle', 'flat' ) ) ) $type = '';
	if ( ! in_array( $size, array( 'tiny', 'x-small', 'small', 'medium', 'large', 'x-large' ) ) ) $size = '';
	
	// Icon can be name or array
	if ( is_string($icon) ) $icon = gcm_get_icon($icon);
	
	// Get html classes
	$classes = array();
	$classes[] = 'gcm-icon';
	$classes[] = 'has-svg';
	$classes[] = 'icon-'  . $icon['name'];
	$classes[] = 'color-' . ($color ?: 'none');
	$classes[] = 'type-'  . ($type ?: 'none');
	$classes[] = 'size-'  . ($size ?: 'none');
	
	// Apply color and type adjustments to the svg
	$svg = gcm_icon_set_style( $icon['svg'], $color, $type, $size );
	
	// Return all the data
	return '<span class="'. esc_attr(implode(' ', $classes)) .'"><span class="icon-frame">'. $svg .'</span></span>';
}

/**
 * Change the color of an SVG icon. The $svg must be the original color (purple).
 * The type "circle" does not make any changes to the svg itself.
 * The type "flat" removes fill color, leaving only a single colored outline
 *
 * @param string $svg     "<svg>...</svg>"
 * @param string $color   purple, blue, or black
 * @param string $type    none, circle, flat
 * @param string $size
 *
 * @return string
 */
function gcm_icon_set_style( $svg, $color = '', $type = '', $size = '' ) {
	$colors = gcm_get_icon_colors();
	
	if ( $type != 'circle' && $type != 'flat' ) $type = '';
	if ( $color != 'purple' && $color != 'blue' && $color != 'black' ) $color = 'purple';
	
	$new_color = $colors[ $color ] ?? false;
	if ( ! $new_color ) return $svg;
	
	// For flat icons, remove the fill color
	if ( $type == 'flat' ) {
		$new_color['fill'] = '';
		$new_color['fill_light'] = '';
	}
	
	foreach( $new_color as $i => $new_hex ) {
		$old_hex = $colors['purple'][$i];
		$svg = str_ireplace( $old_hex, $new_hex, $svg );
	}
	
	return $svg;
}

/**
 * Includes the CSS and JS to improve icons and load them via javascript
 *
 * @return void
 */
/*
function gcm_icon_svg_list_js() {
	$url = get_stylesheet_directory_uri() . '/assets/icons/gcm-icons.js';
	$path = get_stylesheet_directory() . '/assets/icons/gcm-icons.js';
	$v = filemtime($path);
	wp_enqueue_script( 'gcm-icon', $url, array( 'jquery' ), $v );
	
	// Settings to be sent to js
	$settings = array(
		'icons' => gcm_get_icon_settings(),
		'colors' => gcm_get_icon_colors(),
	);
	
	wp_localize_script( 'gcm-icon', 'gcm_icon_settings', $settings );
}
add_action( 'wp_enqueue_scripts', 'gcm_icon_svg_list_js' );
*/


/**
 * Load the icon list in a dropdown for an ACF field.
 *
 * @param $field
 *
 * @return mixed
 */
function gcm_load_icon_field( $field ) {
	if ( acf_is_screen('acf-field-group') ) return $field;
	
	$icon_settings = gcm_get_icon_settings();
	
	$field['choices'] = array();

	foreach( $icon_settings as $icon_setting ) {
		$field['choices'][ $icon_setting['name'] ] =
			'<div class="gcm-icon-type">' .
				'<div class="icon-svg">' .
					$icon_setting['svg'] .
				'</div>' .
				'<div class="icon-title">' .
				$icon_setting['title'] .
				'</div>' .
				'<div class="icon-tags screen-reader-text">' .
				$icon_setting['tags'] .
				'</div>' .
			'</div>';
	}
	
	// Return the field.
	return $field;
}
add_filter('acf/load_field/key=field_649c97ef3f394', 'gcm_load_icon_field', 10, 1); // field group "Block - Icon" -> field "Icon"