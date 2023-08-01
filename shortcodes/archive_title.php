<?php

/**
 * Returns the archive title
 *
 * @param $atts
 * @param $content
 * @param $shortcode_name
 *
 * @return string
 */
function shortcode_archive_title( $atts, $content = '', $shortcode_name = 'archive_title' ) {
	return get_the_archive_title();
}
add_shortcode( 'archive_title', 'shortcode_archive_title' );