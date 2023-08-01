<?php
$name = $args['name'] ?? false;
$color = $args['color'] ?? false;
$type = $args['type'] ?? false;
$size = $args['size'] ?? false;

if ( ! $name ) return;

echo gcm_get_icon_html( $name, $color, $type, $size );