<?php

// Add a format select to the visual editor top bar, after the first item which should be the formatting dropdown.
function gcm_enable_editor_format_select($buttons) {
	return array_merge( 
		array_slice($buttons, 0, 1, true) 
		+ array('ss' => 'styleselect', 'fss' => 'fontsizeselect') 
		+ array_slice($buttons, 1, null, true) 
	);
}
add_filter('mce_buttons', 'gcm_enable_editor_format_select');

function gcm_custom_font_size_intervals($tmce_args) {
	$tmce_args['fontsize_formats'] = "12px 14px 16px 18px 24px 28px 32px 36px 60px 80px";
	return $tmce_args;
}
add_filter( 'tiny_mce_before_init', 'gcm_custom_font_size_intervals' );

// Include custom formats in the format dropdown
function gcm_insert_editor_formats( $init_array ) {
	/* Default Style Formats */
	$style_formats = array(
		array(
			'title'   => 'Formats',
			'items' => array(
				array(
					'title'   => 'Eyebrow Text',
					'inline' => 'span',
					'classes'  => 'heading-eyebrow-text',
				),
				array(
					'title'   => 'H1',
					'inline' => 'span',
					'classes'  => 'heading-h1',
				),
				array(
					'title'   => 'H2',
					'inline' => 'span',
					'classes'  => 'heading-h2',
				),
				array(
					'title'   => 'H3',
					'inline' => 'span',
					'classes'  => 'heading-h3',
				),
				array(
					'title'   => 'H4',
					'inline' => 'span',
					'classes'  => 'heading-h4',
				),
				array(
					'title'   => 'H5',
					'inline' => 'span',
					'classes'  => 'heading-h5',
				),
				array(
					'title'   => 'H6',
					'inline' => 'span',
					'classes'  => 'heading-h6',
				),
				array(
					'title'   => 'Lower Case (abc)',
					'inline' => 'span',
					'classes'  => 'text-lowercase',
				),
				array(
					'title'   => 'Upper Case (ABC)',
					'inline' => 'span',
					'classes'  => 'text-uppercase',
				),
			),
		),
		array(
			'title'   => 'Colors',
			'items' => array(
				array(
					'title'   => 'Purple',
					'inline' => 'span',
					'classes'  => 'text-color-purple',
				),
				array(
					'title'   => 'Blue',
					'inline' => 'span',
					'classes'  => 'text-color-blue',
				),
				array(
					'title'   => 'Black',
					'inline' => 'span',
					'classes'  => 'text-color-black',
				),
				array(
					'title'   => 'White',
					'inline' => 'span',
					'classes'  => 'text-color-white',
				),
			),
		),
		/*
		array(
			'title'   => 'Font Family',
			'items' => array(
				array(
					'title'   => 'Sofia Pro',
					'inline' => 'span',
					'classes'  => 'font-sofia-pro',
				),
			),
		),
		array(
			'title'   => 'Font Weight',
			'items' => array(
				array(
					'title'   => 'Light',
					'inline' => 'span',
					'classes'  => 'weight-light', // 300
				),
				array(
					'title'   => 'Regular',
					'inline' => 'span',
					'classes'  => 'weight-regular', // 400
				),
				array(
					'title'   => 'Semi-bold',
					'inline' => 'span',
					'classes'  => 'weight-semibold', // 600
				),
				array(
					'title'   => 'Bold',
					'inline' => 'span',
					'classes'  => 'weight-bold', // 700
				),
			),
		),
		*/
		array(
			'title'   => 'Links and Buttons',
			'items' => array(
				array(
					'title' => 'Link',
					'selector' => 'a',
					'classes' => '',
					'exact' => true,
				),
				
				// Purple buttons
				array(
					'title' => 'Button (Purple, Primary)',
					'selector' => 'a',
					'classes' => 'button',
					'exact' => true,
				),
				array(
					'title' => 'Button (Purple, Secondary)',
					'selector' => 'a',
					'classes' => 'button button-secondary',
					'exact' => true,
				),
				array(
					'title' => 'Button (Purple, Outline)',
					'selector' => 'a',
					'classes' => 'button button-outline',
					'exact' => true,
				),
				array(
					'title' => 'Button (Purple, Text)',
					'selector' => 'a',
					'classes' => 'button button-text',
					'exact' => true,
				),
				
				// Blue buttons
				array(
					'title' => 'Button (Blue, Primary)',
					'selector' => 'a',
					'classes' => 'button button-blue',
					'exact' => true,
				),
				array(
					'title' => 'Button (Blue, Secondary)',
					'selector' => 'a',
					'classes' => 'button button-blue button-secondary',
					'exact' => true,
				),
				array(
					'title' => 'Button (Blue, Outline)',
					'selector' => 'a',
					'classes' => 'button button-blue button-outline',
					'exact' => true,
				),
				array(
					'title' => 'Button (Blue, Text)',
					'selector' => 'a',
					'classes' => 'button button-blue button-text',
					'exact' => true,
				),
				
				// Black buttons
				array(
					'title' => 'Button (Black, Primary)',
					'selector' => 'a',
					'classes' => 'button button-black',
					'exact' => true,
				),
				array(
					'title' => 'Button (Black, Secondary)',
					'selector' => 'a',
					'classes' => 'button button-black button-secondary',
					'exact' => true,
				),
				array(
					'title' => 'Button (Black, Outline)',
					'selector' => 'a',
					'classes' => 'button button-black button-outline',
					'exact' => true,
				),
				array(
					'title' => 'Button (Black, Text)',
					'selector' => 'a',
					'classes' => 'button button-black button-text',
					'exact' => true,
				),
				
				// White buttons
				array(
					'title' => 'Button (White)',
					'selector' => 'a',
					'classes' => 'button button-white',
					'exact' => true,
				),
				array(
					'title' => 'Button (White, Outline)',
					'selector' => 'a',
					'classes' => 'button button-white button-outline',
					'exact' => true,
				),
			),
		),
		
		array(
			'title'   => 'Inline',
			'items' => array(
				array(
					'title'   => 'Underline',
					'icon'    => 'underline',
					'inline' => 'span',
					'classes'  => 'text-underline',
				),
				array(
					'title'   => 'Strikethrough',
					'format'  => 'strikethrough',
					'icon'    => 'strikethrough',
				),
				array(
					'title'   => 'Superscript',
					'format'  => 'superscript',
					'icon'    => 'superscript',
				),
				array(
					'title'   => 'Subscript',
					'format'  => 'subscript',
					'icon'    => 'subscript',
				),
				array(
					'title'   => 'Code',
					'format'  => 'code',
					'icon'    => 'code',
				),
			),
		),
	);
	
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );
	
	return $init_array;
	
}
add_filter( 'tiny_mce_before_init', 'gcm_insert_editor_formats' );
