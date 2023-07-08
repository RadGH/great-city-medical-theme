<?php
$name = $args['name'] ?? false;
$color = $args['color'] ?? false;
$type = $args['type'] ?? false;
$size = $args['size'] ?? false;

if ( ! $name ) return;

echo do_shortcode( '[gcm_icon name="' . $name . '" color="' . $color . '" type="' . $type . '" size="' . $size . '"]' );