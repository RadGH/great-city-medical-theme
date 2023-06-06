<?php
// Displays a list of languages with a link to switch to that language for the current page

// Optional args supplied by get_template_part
$use_code = $args['code'] ?? false; // show the display_code (EN) if true, or display_name (English) if false
$use_icon = $args['icon'] ?? true;  // show the icon if true
$icon_size = $args['icon_size'] ?? array( 20, 20 ); // image size for the icon

echo '<nav class="language-list '. ($use_icon ? 'with-icons' : 'no-icons') .' '. ($use_code ? 'display-code' : 'display-name') .'">';
echo '<ul>';

$i = 0;

foreach( gcm_get_languages() as $code => $l ) {
	
	$code_long = $l['code_long'];
	$display_code = $l['display_code'];
	$display_name = $l['display_name'];
	$icon_url = $l['icon_url'];
	
	$url = gcm_get_language_url( $_SERVER['REQUEST_URI'], $code );
	$text = $use_code ? $display_code : $display_name;
	
	if ( $use_icon && $icon_url ) {
		// no alt tag because the language is displayed adjacent to the icon
		$img_tag = sprintf(
			'<img src="%s" width="%d" height="%d" alt="" role="presentation"> ',
			esc_attr($icon_url),
			esc_attr($icon_size[0]),
			esc_attr($icon_size[1])
		);
	}else{
		$img_tag = '';
	}
	
	echo '<li class="language language-'. esc_attr($code_long) .'">';
	
	echo sprintf(
		'<a href="%s" title="%s" data-no-translation-href data-no-auto-translation>%s <span class="language-name">%s</span></a>',
		esc_attr($url),
		esc_attr($display_name),
		$img_tag,
		esc_html($text)
	);
	
	
	echo '</li>';
	
	if ( $i++ < count(gcm_get_languages() ) - 1 ) {
		echo '<li class="sep" aria-hidden="true">|</li>';
	}
}

echo '</ul>';
echo '</nav>';