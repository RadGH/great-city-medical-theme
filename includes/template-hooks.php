<?php

function gcm_add_slug_body_class( $classes ) {
	if ( is_singular() ) {
		$slug = get_post_field( 'post_name', get_the_ID() );
		if ( $slug ) $classes[] = 'slug-' . $slug;
	}
	return $classes;
}
add_filter( 'body_class', 'gcm_add_slug_body_class' );