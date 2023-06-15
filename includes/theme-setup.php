<?php

/**
 * Set up theme configuration
 *
 * @return void
 */
function gcm_setup_theme() {
	
	// add theme features
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'title-tag' );
	
	// register navigation menus
	register_nav_menus( array (
		'primary'     => __( 'Primary Menu', 'gcm' ),
		'footer'      => __( 'Footer Menu', 'gcm' ),
		// 'sub_footer'  => __( 'Sub Footer Menu', 'gcm' ),
	));
	
	// old theme settings:
	
	// add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio', 'link', 'quote' ) );
	// add_post_type_support( 'page', 'excerpt' );
	
	// load translated strings
	// load_theme_textdomain( 'medicare', get_template_directory() . '/languages' );
	
	// image sizes
	// update_option( 'thumbnail_size_w', 160 );
	// update_option( 'thumbnail_size_h', 160 );
	// update_option( 'medium_size_w', 320 );
	// update_option( 'medium_size_h', 0 );
	// update_option( 'large_size_w', 1200 );
	// update_option( 'large_size_h', 0 );
	
	// add_image_size( 'boldthemes_grid', 540 );
	
	// add_image_size( 'boldthemes_grid_11', 540, 540, true );
	// add_image_size( 'boldthemes_grid_22', 1080, 1080, true );
	// add_image_size( 'boldthemes_grid_21', 1080, 540, true );
	// add_image_size( 'boldthemes_grid_12', 540, 1080, true );
	
	// add_image_size( 'boldthemes_latest_posts', 640, 480, true );
	// add_image_size( 'boldthemes_grid_gallery', 540, 405, true );
}
add_action( 'after_setup_theme', 'gcm_setup_theme' );

/**
 * Register sidebars/widget areas for compatibility with the old theme's widgets.
 *
 * (This theme does not use widgets)
 *
 * @return void
 */
function gcm_setup_widgets() {
	
	// Old widget areas:
	register_sidebar( array (
		'name' 			=> __( '(Old) Sidebar', 'medicare' ),
		'id' 			=> 'primary_widget_area',
	));
	register_sidebar( array (
		'name' 			=> __( '(Old) Header Left', 'medicare' ),
		'id' 			=> 'header_left_widgets',
	));
	register_sidebar( array (
		'name' 			=> __( '(Old) Header Right', 'medicare' ),
		'id' 			=> 'header_right_widgets',
	));
	register_sidebar( array (
		'name' 			=> __( '(Old) Footer', 'medicare' ),
		'id' 			=> 'footer_widgets',
	));
}
add_action( 'widgets_init', 'gcm_setup_widgets' );

/**
 * Enqueue a single CSS or JS file from the theme
 *
 * @param string $handle
 * @param string $asset_path
 * @param array $deps
 * @param string $version
 *
 * @return void
 */
function gcm_enqueue_asset( $handle, $asset_path, $deps = array(), $version = null ) {
	$url = get_template_directory_uri() . '/' . $asset_path;
	$path = get_template_directory() . '/' . $asset_path;
	$ext = pathinfo( $path, PATHINFO_EXTENSION );
	
	if ( $version === null ) {
		if ( gcm_is_developer() ) {
			// In development mode assets always use latest version
			$version = filemtime( $path );
		}else{
			// For normal visitors assets use the current theme version
			$version = wp_get_theme()->get('Version');
		}
	}
	
	if ( $ext == 'css' ) {
		wp_enqueue_style( $handle, $url, $deps, $version );
	}else{
		wp_enqueue_script( $handle, $url, $deps, $version );
	}
}

/**
 * Add CSS/JS to the frontend and backend
 *
 * @return void
 */
function gcm_enqueue_global_scripts() {
	gcm_enqueue_asset( 'gcm-global', 'assets/global.css' );
	gcm_enqueue_asset( 'gcm-global', 'assets/global.js' );
	
	gcm_enqueue_asset( 'gcm-icons', 'assets/icons/gcm-icons.css' );
}
add_action( 'wp_enqueue_scripts', 'gcm_enqueue_global_scripts', 15 );
add_action( 'admin_enqueue_scripts', 'gcm_enqueue_global_scripts', 15 );

/**
 * Add CSS/JS to the frontend
 *
 * @return void
 */
function gcm_enqueue_public_scripts() {
	gcm_enqueue_asset( 'gcm-theme', 'style.css' );
	gcm_enqueue_asset( 'gcm-theme', 'assets/public.js', array( 'gcm-global' ) );
}
add_action( 'wp_enqueue_scripts', 'gcm_enqueue_public_scripts', 20 );

/**
 * Add CSS/JS to the backend
 *
 * @return void
 */
function gcm_enqueue_admin_scripts() {
	gcm_enqueue_asset( 'gcm-admin', 'assets/admin.css' );
	gcm_enqueue_asset( 'gcm-admin', 'assets/admin.js', array( 'gcm-global' ) );
}
add_action( 'admin_enqueue_scripts', 'gcm_enqueue_admin_scripts', 20 );