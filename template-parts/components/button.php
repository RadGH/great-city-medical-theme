<?php
$text = $args['text'] ?? false;
$url = $args['url'] ?? false;
$color = $args['color'] ?? false;
$classes = $args['classes'] ?? 'button'; // "button-secondary"
$icon = $args['icon'] ?? '';

if ( ! $url && ! $text ) return;

if ( $color === false ) {
	$color = 'purple';
	if ( str_contains($classes, 'blue') ) $color = 'blue';
	if ( str_contains($classes, 'black') ) $color = 'black';
}

$atts = '';

echo '<a href="'. esc_attr($url) .'" class="'. esc_attr($classes) .'" '. $atts .'>';

echo $text;

if ( $icon ) {
	$icon = gcm_get_icon($icon);
	
	echo gcm_icon_get_styled_html( $icon, $color, 'circle', 'tiny' );
}

echo '</a>';