<?php

/**
 * Register the theme options page using ACF
 */
function gcm_register_options_pages() {
	if ( ! function_exists('acf_add_options_page') ) return;
	
	// Great City Medical
	acf_add_options_page(array(
		'menu_slug'     => 'acf-gcm-root',
		'menu_title' 	=> __( 'Great City Medical', 'gcm' ),
		'icon_url'      => 'dashicons-gcm-icon',
		'capability'    => 'manage_options',
		'page_title' 	=> __( 'General Settings', 'gcm' ),
		'post_id'       => null,
		'autoload'      => false,
		'redirect' 		=> true,
	));
	
	// Great City Medical -> General Settings
	// get_field( 'xxx', 'gcm_settings' );
	acf_add_options_sub_page( array(
		'parent_slug' => 'acf-gcm-root',
		'menu_slug'   => 'acf-gcm-settings',
		'page_title'  => __( 'General Settings', 'gcm' ) . ' (gcm_settings)',
		'menu_title'  => __( 'General Settings', 'gcm' ),
		'capability'  => 'manage_options',
		'post_id'     => 'gcm_settings',
		'autoload'      => false,
	) );
	
}
add_action( 'admin_menu', 'gcm_register_options_pages' );

/**
 * Remove unwanted meta boxes
 *
 * @return void
 */
function gcm_remove_meta_boxes() {
	$post_types = get_post_types(array( 'public' => true ));
	
	foreach( $post_types as $post_type ) {
		remove_meta_box( 'wpcode-metabox-snippets', $post_type, 'normal' );
	}
}
add_action( 'add_meta_boxes', 'gcm_remove_meta_boxes', 1000 );

/**
 * Allow SVG image upload
 *
 * @param string[] $mimes
 *
 * @return string[]
 */
function gcm_allow_svg_upload( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'gcm_allow_svg_upload' );