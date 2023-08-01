<?php

/**
 * Get locations from the theme's general settings page.
 *
 * @return array[] {
 *     @type string $title
 *     @type string $address
 *     @type string $phone
 *
 *     @type string[] $hours {
 *         @type string $sunday
 *         @type string $monday
 *         @type string $tuesday
 *         @type string $wednesday
 *         @type string $thursday
 *         @type string $friday
 *         @type string $saturday
 *     }
 * }
 */
function gcm_get_locations() {
	$locations = get_field( 'locations', 'gcm_settings' );
	
	// Format each location
	foreach( $locations as $i => &$location ) {
		$location['title']   = $location['title'] ?? '';
		$location['address'] = $location['address'] ?? '';
		$location['phone']   = $location['phone'] ?? '';
		
		$location['hours'] = (array) ($location['hours'] ?? array());
		$location['hours']['sunday']    = $location['hours']['sunday'] ?? '';
		$location['hours']['monday']    = $location['hours']['monday'] ?? '';
		$location['hours']['tuesday']   = $location['hours']['tuesday'] ?? '';
		$location['hours']['wednesday'] = $location['hours']['wednesday'] ?? '';
		$location['hours']['thursday']  = $location['hours']['thursday'] ?? '';
		$location['hours']['friday']    = $location['hours']['friday'] ?? '';
		$location['hours']['saturday']  = $location['hours']['saturday'] ?? '';
		
		// Translation support
		$location['title'] = __( $location['title'] );
		
		// Title is required
		if ( ! $location['title'] ) {
			unset($locations[$i]);
		}
	}
	
	return $locations;
}

/**
 * Simply checks if Ajax Load More is running, which enables the pagination and blog display features
 *
 * @return bool
 */
function gcm_has_ajax_load_more() {
	return shortcode_exists('ajax_load_more');
}

/**
 * Gets pagination links or ajax load more button
 *
 * @return void
 */
function gcm_display_ajax_load_more_archive() {
	// Ajax load more shortcode
	$alm_shortcode = '[ajax_load_more id="gcm-alm-posts" container_type="div" post_type="post" ';
	
	// Posts per page
	$posts_per_page = (int) get_option( 'posts_per_page' );
	$alm_shortcode .= ' posts_per_page="' . $posts_per_page . '"';
	
	// Show a placeholder while posts are loading:
	$img_url = site_url('/wp-content/uploads/2023/07/post-preview.png');
	$alm_shortcode .= ' placeholder_image="' . $img_url . '"';
	
	// Disable automatic loading
	$alm_shortcode .= ' scroll="false"';
	
	// Custom class to use archive grid
	$alm_shortcode .= ' css_classes="archive-list"';
	
	// Loading button text
	$alm_shortcode .= ' button_loading_label="Loading&hellip;"';
	
	// Add queried term
	$term = get_queried_object();
	if ( $term instanceof WP_Term ) {
		$taxonomy = $term->taxonomy;
		$tax_slug = $term->slug;
		$alm_shortcode .= ' taxonomy="'. $taxonomy .'" taxonomy_terms="'. $tax_slug .'" taxonomy_operator="IN"';
	}
	
	$alm_shortcode .= ']';
	
	echo do_shortcode( $alm_shortcode );
}

/**
 * Roughly calculate reading time based on content length, returning number of minutes
 *
 * @param string $content
 *
 * @return string
 */
function gcm_get_read_time( $content ) {
	$words = str_word_count( strip_tags( $content ) );
	$minutes = floor( $words / 189 ); // 189 = AVERAGE_READING_RATE
	
	return sprintf(_n('%d min read', '%d mins read', $minutes, 'gcm'), $minutes);
}

/**
 * Get yoast breadcrumbs with a wrapper
 *
 * @return string
 */
function gcm_get_yoast_breadcrumb_html() {
	if ( ! shortcode_exists('wpseo_breadcrumb') ) return '';
	
	return '<div class="yoast-breadcrumbs">' . do_shortcode( '[wpseo_breadcrumb]' ) . '</div>';
}

/**
 * Check if the current page is a backend page where you would use the block editor
 *
 * @return bool
 */
function gcm_is_block_editor() {
	if ( function_exists('acf_is_block_editor') ) {
		return acf_is_block_editor();
	}
	
	// Assume anything on the backend that is not ajax is the block editor
	if ( is_admin() && !is_ajax() ) {
		return true;
	}
	
	return false;
}

/**
 * Get a post excerpt
 *
 * @param $post_id
 *
 * @return void
 */
function gcm_get_post_excerpt( $post_id ) {
	
	// Does this post have an explicit excerpt?
	$excerpt = get_post_field( 'post_excerpt', $post_id );
	if ( $excerpt ) return $excerpt;
	
	// (the yoast descriptions were often redundant, using the title immediately again in the description)
	// Does it have a yoast description we can use?
	//	$yoast_desc = get_post_meta( $post_id, '_yoast_wpseo_metadesc', true );
	//	if ( $yoast_desc ) return $yoast_desc;
	
	// Otherwise, generate an excerpt from the content
	$html = get_post_field('post_content', $post_id );
	$html = wp_strip_all_tags($html);
	$html = apply_filters( 'the_excerpt', $html, get_the_ID() );
	$html = wp_strip_all_tags($html);
	$html = wp_trim_words( $html, 15, '&hellip;' );
	
	return $html;
}