<?php
// Displays a list of languages with a link to switch to that language for the current page

// Optional args supplied by get_template_part
$use_code = $args['code'] ?? false; // show the display_code (EN) if true, or display_name (English) if false
$use_icon = $args['icon'] ?? true;  // show the icon if true
$icon_size = $args['icon_size'] ?? array( 20, 20 ); // image size for the icon
$use_svg = $args['use_svg'] ?? true; // if true, the icon will be an SVG. otherwise it will be a PNG.
$current_only = $args['current_only'] ?? false; // if true, only the currently selected language will be shown

$current_language_code = strtolower(gcm_tp_get_current_language()) ?: 'en_us';

echo '<nav class="language-list '. ($use_icon ? 'with-icons' : 'no-icons') .' '. ($use_code ? 'display-code' : 'display-name') .'">';
echo '<ul>';

$i = 0;

foreach( gcm_get_languages() as $code => $l ) {
	
	$code_long = $l['code_long'];
	$display_code = $l['display_code'];
	$display_name = $l['display_name'];
	
	$url = gcm_get_language_url( $_SERVER['REQUEST_URI'], $code );
	$text = $use_code ? $display_code : $display_name;
	
	$classes = array();
	$classes[] = 'language';
	$classes[] = 'language-' . esc_attr($code_long); // language-en_us, language-es_mx
	
	if ( $current_language_code == $code_long ) {
		// Highlight the selected language
		$classes[] = 'selected';
	}else{
		// If only showing the current language, skip the other languages
		if ( $current_only ) {
			continue;
		}
	}
	
	// If showing current language, do not create a link
	if ( $current_only ) {
		$url = '#';
		$classes[] = 'preview';
	}
	
	if ( $use_icon ) {
		if ( $use_svg ) {
			$icon_path = get_template_directory() . '/assets/flags/' . $l['icon_svg'];
			$img_tag = file_get_contents( $icon_path );
		}else{
			$icon_url = get_template_directory_uri() . '/assets/flags/' . $l['icon_png'];
			$img_tag = sprintf(
				'<img src="%s" width="%d" height="%d" alt="" role="presentation"> ',
				esc_attr($icon_url),
				esc_attr($icon_size[0]),
				esc_attr($icon_size[1])
			);
		}
		
		$img_tag = '<span class="language-icon">'. $img_tag .'</span>';
	}else{
		$img_tag = '';
	}
	
	echo '<li class="'. esc_attr(implode(' ', $classes)) .'">';
	
	echo sprintf(
		'<a href="%s" title="%s" data-no-translation-href data-no-auto-translation>%s <span class="language-name">%s</span></a>',
		esc_attr($url),
		esc_attr($display_name),
		$img_tag,
		esc_html($text)
	);
	
	echo '</li>';
	
	// If there are more languages to display, add a separator between them
	$has_more_languages = $i++ < count(gcm_get_languages() ) - 1;
	
	if ( $has_more_languages && ! $current_only ) {
		echo '<li class="sep" aria-hidden="true">|</li>';
	}
}

echo '</ul>';
echo '</nav>';