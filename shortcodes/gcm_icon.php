<?php
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
	$size = $atts['size'] ?? false;
	
	$icon = gcm_get_icon( $name );
	
	if ( ! $icon ) {
		return '(Invalid icon name "'. esc_html($name) .'")';
	}
	
	// Get icon filename and data
	return gcm_get_icon_html( $icon, $color, $type, $size );
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
	$icons = gcm_get_icon_settings();
	
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
	foreach( $icons as $icon ) {
		
		$name = $icon['name'];
		
		$html .= '<tr>';
		$html .= '<th>'. esc_html($name) . '<br><em>'. esc_html($icon['tags']) .'</em></th>';
		
		foreach( $types as $type_name => $t ) {
			$type = $t['type'];
			$color = $t['color'];
			$icon = gcm_get_icon( $name );
			$svg = gcm_get_icon_html( $icon, $color, $type );
			
			$shortcode = '[gcm_icon name="'. $name .'"';
			if ( $color && $color != 'purple' ) $shortcode.= ' color="'. $color .'"';
			if ( $type ) $shortcode.= ' type="'. $type .'"';
			$shortcode .= ']';
			
			$html.= '<td>';
			$html.= '<span class="icon-wrap">'. $svg .'</span>';
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