<?php

/**
 * Add custom body classes:
 * 1. "slug-{post_name}"
 *
 * @param $classes
 *
 * @return mixed
 */
function gcm_add_custom_body_classes( $classes ) {
	if ( is_singular() ) {
		$slug = get_post_field( 'post_name', get_the_ID() );
		if ( $slug ) $classes[] = 'slug-' . $slug;
	}
	
	return $classes;
}
add_filter( 'body_class', 'gcm_add_custom_body_classes' );

/**
 * Replace the archive title "Archives" with "Blog" for regular posts
 */
function gcm_archive_title( $title ) {
	if ( is_home() || is_post_type_archive( 'post' ) ) {
		$title = 'Blog';
	}
	
	// Remove the archives, category, and tag prefix from the archive title
	$title = str_replace( array('Archives: ', 'Category: ', 'Tag: '), '', $title );
	
	return $title;
}
add_filter( 'get_the_archive_title', 'gcm_archive_title' );


/**
 * Insert a link to the blog in the breadcrumbs for categories and tags
 *
 * @param $links
 *
 * @return mixed
 */
function gcm_insert_yoast_parent_breadcrumb( $links ) {
	if ( is_home() || is_post_type_archive('post') ) return $links;
	
	$parent_id = false;

	// Category and tag pages show the blog as a parent page
	if ( is_category() || is_tag() ) {
		$parent_id = get_option( 'page_for_posts' );
	}
	
	// If parent page was found, add it to the breadcrumbs 2nd from the end
	if ( $parent_id ) {
		$breadcrumb[] = array(
			'url' => get_permalink( $parent_id ),
			'text' => get_the_title( $parent_id ),
		);
		
		array_splice( $links, 1, -2, $breadcrumb );
	}
	
	return $links;
}
add_filter( 'wpseo_breadcrumb_links', 'gcm_insert_yoast_parent_breadcrumb' );

/**
 * Add a wrapper around classic blocks
 *
 * @param $block_content
 * @param $block
 *
 * @return string
 */
/*
function gcm_classic_black_wrapper( $block_content, $block ) {
	
	// Check if it is a classic block
	if ( ! gcm_is_block_classic( $block ) ) return $block_content;
	
	// Do nothing if empty
	if ( empty( $block_content ) ) return $block_content;
	
	// Wrap content in block markup manually
	$block_content =
		'<div class="classic-block-container">' .
			'<div class="wp-block wp-block-group container-style-section is-layout-flex is-vertical gap-60">' .
				'<div class="wp-block wp-block-group is-layout-flex is-vertical is-content-justification-center">' .
			
					// Yoast breadcrumbs
					gcm_get_yoast_breadcrumb_html() .
			
					// Page title
					'<h1>' . get_the_title() . '</h1>' .
			
				'</div>' .
			
				'<div class="wp-block wp-block-group">' .
				
					// Classic page content
					'<div class="classic-block-content">' . $block_content . '</div>' .
				
				'</div>' .
			'</div>' .
		'</div>'
	;
	
	return $block_content;
}
add_filter( 'render_block', 'gcm_classic_black_wrapper', 20, 2 );
*/

/**
 * Add the post type to the wrapper for block editor
 *
 * @param $classes
 *
 * @return mixed|string
 */
function gcm_add_post_type_editor_class($classes) {
	global $pagenow;
	
	if ( $pagenow ==='post.php' ) {
		$classes .= ' edit-post';
	}else if ( $pagenow ==='post-new.php' ) {
		$classes .= ' new-post';
	}else{
		return $classes;
	}
	
	$post_id = isset($_GET['post']) ? (int) $_GET['post'] : get_the_ID();
	$post_type = $post_id ? get_post_type($post_id) : false;
	
	if ( $post_type ) {
		$classes .= ' post-type-' . $post_type;
	}
	
	return $classes;
}
add_filter('admin_body_class', 'gcm_add_post_type_editor_class' );

/**
 * List the locations from theme settings (Great City Medical menu) as options for the Location acf field on pages.
 * The location field lets a page specify which location to show in the header.
 *
 * @param array $field
 *
 * @return array
 */
function gcm_acf_location_choices( $field ) {
	// Do not apply to the field group editor
	if ( acf_is_screen('acf-field-group') ) return $field;
	
	// Get the current screen
	$current_screen = function_exists('get_current_screen') ? get_current_screen() : false;
	if ( ! $current_screen ) return $field;
	
	// Check if on the new page / edit page screen
	if ( $current_screen->base != 'post' ) return $field;
	
	// Get the locations from the theme settings
	$locations = gcm_get_locations();
	
	// Add the locations to the field choices
	$field['choices'] = array();
	
	foreach( $locations as $i => $location ) {
		$field['choices'][ $location['title'] ] = $location['title'];
	}
	
	return $field;
}
add_filter( 'acf/load_field/name=gcm_location', 'gcm_acf_location_choices' );