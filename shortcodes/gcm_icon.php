<?php

/**
 * Contains a list of SVG icons, each keyed by their name, and including a list of tags to search for
 *
 * @return mixed
 */
function gcm_get_icon_list() {
	$icons = array(
		
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
		
		// logo and heart (same shape)
		'great-city-medical-logo' => array(
			'filename' => 'great-city-medical-logo.svg',
			'tags' => 'great city medical logo heart',
		),
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
			'tags' => 'medicine',
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
 * Get details about a single icon including the url and <svg> element
 *
 * @param string $name          Name of the icon such as "up"
 * @param string|null $color    Optional. Choices: purple, blue, black
 * @param string|null $type     Optional. Choices: none, flat, circle
 *
 * @return array|false {
 *     @type string $name       "up"
 *     @type string $tags       "up arrow"
 *     @type string $filename   "up.svg"
 *     @type string $url        ".../themes/great-city-medical/assets/icons/svg/up.svg"
 *     @type string $svg        "<svg>...</svg>"
 *     @type string[] $classes  ["gcm-icon", "icon-up", "color-purple", "type-circle"]
 * }
 */
function gcm_get_icon_data( $name, $color = null, $type = null ) {
	$data = gcm_get_icon_list()[$name] ?? false;
	if ( ! $data ) return false;
	
	// Allowed color and types
	if ( $type != 'circle' && $type != 'flat' ) $type = '';
	if ( $color != 'purple' && $color != 'blue' && $color != 'black' ) $color = 'purple';
	
	// Get html classes
	$classes = array();
	$classes[] = 'gcm-icon';
	$classes[] = 'has-svg';
	$classes[] = 'icon-'  . $name;
	$classes[] = 'color-' . ($color ?: 'none');
	$classes[] = 'type-'  . ($type ?: 'none');
	
	// Get settings
	$filename = $data['filename'];
	$tags = $data['tags'];
	
	// Get file
	$url = get_stylesheet_directory_uri() . '/assets/icons/svg/' . $filename;
	$path = get_template_directory() . '/assets/icons/svg/' . $filename;
	$svg = file_get_contents( $path );
	
	// Apply color and type adjustments to the svg
	$svg = gcm_icon_set_style( $svg, $color, $type );
	
	// Return all the data
	return array(
		'name' => $name,
		'tags' => $tags,
		'filename' => $filename,
		'url' => $url,
		'svg' => $svg,
		'classes' => $classes,
	);
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
 * Change the color of an SVG icon. The $svg must be the original color (purple).
 * The type "circle" does not make any changes to the svg itself.
 * The type "flat" removes fill color, leaving only a single colored outline
 *
 * @param string $svg     "<svg>...</svg>"
 * @param string $color   purple, blue, or black
 * @param string $type    none, circle, flat
 *
 * @return string
 */
function gcm_icon_set_style( $svg, $color = '', $type = '' ) {
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
function gcm_icon_svg_list_js() {
	$url = get_stylesheet_directory_uri() . '/assets/icons/gcm-icons.js';
	$path = get_stylesheet_directory() . '/assets/icons/gcm-icons.js';
	$v = filemtime($path);
	wp_enqueue_script( 'gcm-icon', $url, array( 'jquery' ), $v );
	
	$url = get_stylesheet_directory_uri() . '/assets/icons/gcm-icons.css';
	$path = get_stylesheet_directory() . '/assets/icons/gcm-icons.css';
	$v = filemtime($path);
	wp_enqueue_style( 'gcm-icon', $url, array(), $v );
	
	// Settings to be sent to js
	$settings = array(
		'icons' => array(),
		'colors' => gcm_get_icon_colors(),
	);
	
	// Get full details for each icon
	foreach( gcm_get_icon_list() as $name => $icon ) {
		$settings['icons'][$name] = gcm_get_icon_data( $name );
	}
	
	wp_localize_script( 'gcm-icon', 'gcm_icon_settings', $settings );
}
add_action( 'wp_enqueue_scripts', 'gcm_icon_svg_list_js' );

/**
 * Displays a single icon by name with optional color and type
 *
 * @param $atts
 * @param $content
 * @param $shortcode_name
 *
 * @return string
 */
function shortcode_gcm_icon( $atts, $content = '', $shortcode_name = 'gcm_icon' ) {
	$name = $atts['name'] ?? false;
	$color = $atts['color'] ?? false;
	$type = $atts['type'] ?? false;
	
	// Get icon filename and data
	$icon = gcm_get_icon_data( $name, $color, $type );
	if ( ! $icon ) {
		return '(invalid gcm_icon name="'. esc_html($name) .'")';
	}
	
	return '<span class="'. esc_attr(implode(' ', $icon['classes'])) .'">'. $icon['svg'] .'</span>';
}
add_shortcode( 'gcm_icon', 'shortcode_gcm_icon' );

/**
 * Displays a list of icons
 *
 * @param $atts
 * @param $content
 * @param $shortcode_name
 *
 * @return string
 */
function shortcode_gcm_icon_list( $atts, $content = '', $shortcode_name = 'gcm_icon' ) {
	$icons = gcm_get_icon_list();
	
	$types = array(
		'Purple' => array(
			'color' => 'purple',
			'type' => '',
		),
		'Purple Flat' => array(
			'color' => 'purple',
			'type' => 'flat',
		),
		'Purple Circle' => array(
			'color' => 'purple',
			'type' => 'circle',
		),
		'Blue' => array(
			'color' => 'blue',
			'type' => '',
		),
		'Blue Flat' => array(
			'color' => 'blue',
			'type' => 'flat',
		),
		'Blue Circle' => array(
			'color' => 'blue',
			'type' => 'circle',
		),
		'Black' => array(
			'color' => 'black',
			'type' => '',
		),
		'Black Flat' => array(
			'color' => 'black',
			'type' => 'flat',
		),
		'Black Circle' => array(
			'color' => 'black',
			'type' => 'circle',
		),
	);
	
	$html = '<table class="gcm-icon-list">';
	
	$html.= '<thead><tr>';
	$html.= '<th>Name</th>';
	foreach( $types as $type_name => $t ) {
		$html.= '<th>'. esc_html($type_name) .'</th>';
	}
	$html.= '</tr></thead>';
	
	
	$html.= '<tbody>';
	foreach( $icons as $name => $i ) {
		
		$icon = gcm_get_icon_list()[$name] ?? false; // used for tags
		
		$html .= '<tr>';
		$html .= '<th>'. esc_html($name) . '<br><em>'. esc_html($icon['tags']) .'</em></th>';
		
		foreach( $types as $type_name => $t ) {
			$type = $t['type'];
			$color = $t['color'];
			$icon = gcm_get_icon_data( $name, $color, $type );
			$classes  = $icon['classes'];
			
			$shortcode = '[gcm_icon name="'. $name .'"';
			if ( $color && $color != 'purple' ) $shortcode.= ' color="'. $color .'"';
			if ( $type ) $shortcode.= ' type="'. $type .'"';
			$shortcode .= ']';
			
			$html.= '<td>';
			$html.= '<span class="icon-wrap"><span class="'. esc_attr(implode(' ', $classes)) .'">'. $icon['svg'] .'</span></span>';
			$html.= '<input type="text" readonly value="'.esc_attr($shortcode).'">';
			$html.= '</td>';
		}
		
		$html.= '</tr>';
	}
	$html.= '</tbody>';
	
	$html .= '</table>';
	
	return $html;
}
add_shortcode( 'gcm_icon_list', 'shortcode_gcm_icon_list' );