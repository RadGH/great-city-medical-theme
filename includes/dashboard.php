<?php

/**
 * Register the theme options page using ACF
 */
function gcm_register_options_pages() {
	if ( ! function_exists('acf_add_options_page') ) return;
	
	// Great City Medical Main page
	add_menu_page(
		null,
		__( 'Great City Medical', 'gcm' ),
		'manage_options',
		'acf-gcm-settings',
		'__return_false',
		'dashicons-gcm-icon',
		80
	);
	
	// Submenu page just to change the first link in the submenu to say General Settings
	add_submenu_page(
		'acf-gcm-settings',
		null,
		__( 'General Settings', 'gcm' ),
		'manage_options',
		'acf-gcm-settings',
		'__return_false'
	);
	
	// ACF options page to let us add acf fields to that page
	// Great City Medical -> General Settings
	// get_field( 'xxx', 'gcm_settings' );
	acf_add_options_sub_page( array(
		'parent_slug' => 'acf-gcm-root', // $parent, // 'acf-gcm-root',
		'menu_slug'   => 'acf-gcm-settings',
		'page_title'  => __( 'General Settings', 'gcm' ) . ' (gcm_settings)',
		'menu_title'  => null,
		'capability'  => 'manage_options',
		'post_id'     => 'gcm_settings',
		'autoload'      => false,
		'redirect' 		=> true,
	) );
	
	// Add other sub options pages
	// Great City Medical -> Icons
	add_submenu_page(
		'acf-gcm-settings', // $parent, // 'acf-gcm-root',
		'Icons',
		'Icons',
		'manage_options',
		'gcm-icons-settings',
		'gcm_display_icons_settings_page'
	);
	
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

/**
 * Displays the icons settings page
 *
 * @return void
 */
function gcm_display_icons_settings_page() {
	global $title;
	
	?>
	<div class="wrap">
		
		<h2><?php echo $title; ?></h2>
	
		<div id="poststuff" class="poststuff">
			<div id="post-body" class="metabox-holder columns-1">
				<div id="postbox-container-1" class="postbox-container">
					
					<!-- Icon List -->
					<div class="instructions-postbox postbox">
						<div class="postbox-header">
							<h2 id="instructions">Icon List</h2>
						</div>
						
						<div class="inside">
							
							<div class="gcm-icons-admin-preview">
								<?php echo do_shortcode('[gcm_icon_list]'); ?>
							</div>
							
						</div>
					</div>
					<!-- End: Icon List -->
					
				</div>
			</div>
		</div>
		
	</div>
	<?php
}