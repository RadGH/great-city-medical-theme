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
	
	// image sizes (overwrite default sizes)
	
	// [large]
	// full content width, one column, @see https://radleysustaire.com/s3/eb065c/figma
	// 1600px = 20px margin + [1560px] + 20px margin
	update_option( 'large_size_w', 1560 );
	update_option( 'large_size_h', 0 );
	
	// [medium_large]
	// one-half content width, two columns, @see https://radleysustaire.com/s3/076920/
	// 1600px = 20px margin + [764px] + 32px gutter + [764px] + 20px margin
	update_option( 'medium_large_size_w', 764 );
	update_option( 'medium_large_size_h', 0 );
	
	// [medium]
	// one-third content width, three columns, @see https://radleysustaire.com/s3/c39214/figma
	// 1600px = 20px margin + [500px] + 30px gutter + [500px] + 30px gutter + [500px] + 20px margin
	update_option( 'medium_size_w', 500 ); // third page width (when using 32px gutter)
	update_option( 'medium_size_h', 0 );
	
	// thumbnail
	// cropped to square
	update_option( 'thumbnail_size_w', 300 );
	update_option( 'thumbnail_size_h', 300 );
	
	// thumbnail_uncropped
	// preserve aspect ratio
	add_image_size( 'thumbnail_uncropped', 300, 300, false );
	
	// remove old image sizes so that they are no longer created when images are uploaded
	remove_image_size( '1536x1536' );
	remove_image_size( '2048x2048' );
	
	// remove ajax load more thumbnail size
	remove_image_size( 'alm-thumbnail' );
	
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
 * Get the version number used for enqueued CSS/JS files from this theme
 * Note that this version number is updated when the build script runs, see the theme readme for info
 */
function gcm_get_theme_version() {
	// Check if the current host is a subdomain of .radgh.com
	if ( strpos( $_SERVER['HTTP_HOST'], '.radgh.com' ) !== false ) {
		// If so, use the current timestamp as the version number
		// This ensures that the latest version of the theme is always loaded
		return 'dev_' . time();
	}else{
		return wp_get_theme()->get('Version');
	}
}

/**
 * Get an array of web fonts used on the website
 *
 * @return string[]
 */
function gcm_get_web_font_urls() {
	return array(
		
		// Adobe font: Sofia Pro
		// Font family: sofia-pro
		// Font styles: 300, 300i, 500, 500i
		'sofia-pro' => 'https://use.typekit.net/wfu3bib.css',
		'abhaya-libre' => 'https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;700&display=swap',
		
	);
}

/**
 * Add fonts to the frontend and Gutenberg editor
 *
 * @return void
 */
function gcm_enqueue_fonts() {
	foreach( gcm_get_web_font_urls() as $name => $url ) {
		wp_enqueue_style( $name, $url );
	}
}
add_action( 'wp_enqueue_scripts', 'gcm_enqueue_fonts', 10 );
add_action( 'enqueue_block_editor_assets', 'gcm_enqueue_fonts', 10 );

/**
 * Add CSS/JS to the visual editor (classic editor / tinymce, NOT gutenberg)
 *
 * @return void
 */
function gcm_enqueue_editor_scripts() {
	foreach( gcm_get_web_font_urls() as $name => $url ) {
		add_editor_style( $url );
	}
	
	add_editor_style( get_theme_file_uri( '/editor.css' ) );
}
add_action( 'after_setup_theme', 'gcm_enqueue_editor_scripts', 20 );

/**
 * Register (but do not enqueue) assets that are used by blocks
 *
 * @return void
 */
function gcm_register_block_assets() {
	
	// REMINDER: These scripts are only registered -- they are not enqueued and do not load on pages by default.
	
	// Flickity image slider / carousel
	// Used by the before-after-gallery acf block
	wp_register_script( 'flickity', get_theme_file_uri('/assets/third-party/flickity/2.3.0_flickity.min.js'), array(), '2.3.0' );
	wp_register_style( 'flickity', get_theme_file_uri('/assets/third-party/flickity/2.3.0_flickity.min.css'), array(), '2.3.0' );
	
}
add_action( 'wp_enqueue_scripts', 'gcm_register_block_assets', 20 );

/**
 * Add CSS/JS to the frontend and backend
 *
 * @return void
 */
function gcm_enqueue_global_scripts() {
	gcm_enqueue_asset( 'gcm-global', 'assets/global.css', array(), gcm_get_theme_version() );
	gcm_enqueue_asset( 'gcm-global', 'assets/global.js', array(), gcm_get_theme_version() );
}
add_action( 'wp_enqueue_scripts', 'gcm_enqueue_global_scripts', 15 );
add_action( 'admin_enqueue_scripts', 'gcm_enqueue_global_scripts', 15 );

/**
 * Add CSS/JS to the visual editor (classic editor / tinymce, NOT gutenberg)
 *
 * @return void
 */
function gcm_enqueue_public_scripts() {
	gcm_enqueue_asset( 'gcm-theme', 'style.css', array(), gcm_get_theme_version() );
	gcm_enqueue_asset( 'gcm-theme', 'assets/public.js', array( 'gcm-global' ), gcm_get_theme_version() );
}
add_action( 'wp_enqueue_scripts', 'gcm_enqueue_public_scripts', 20 );

/**
 * Add CSS/JS to the backend
 *
 * @return void
 */
function gcm_enqueue_admin_scripts() {
	gcm_enqueue_asset( 'gcm-admin', 'admin.css', array(), gcm_get_theme_version() );
	gcm_enqueue_asset( 'gcm-admin', 'assets/admin.js', array( 'gcm-global' ), gcm_get_theme_version() );
}
add_action( 'admin_enqueue_scripts', 'gcm_enqueue_admin_scripts', 20 );

/**
 * Add CSS/JS to the gutenberg editor
 *
 * @return void
 */
function gcm_enqueue_gutenberg_styles() {
	wp_enqueue_style( 'gcm-gutenberg', get_theme_file_uri( '/gutenberg.css' ), false, gcm_get_theme_version() );
	
	// The blocks script is compiled using "npm run build" (or "wp-scripts build")
	// The package.json file in the theme root defines the build script with a custom output-path
	// @see https://github.com/WordPress/gutenberg/blob/trunk/packages/scripts/README.md
	// For more info see the theme readme file
	$block_asset_path = require get_template_directory() . '/assets/js-build/blocks.asset.php';
	
	wp_enqueue_script(
		'gcm-blocks',
		get_template_directory_uri() . '/assets/js-build/blocks.js',
		$block_asset_path['dependencies'],
		$block_asset_path['version']
	);
}
add_action( 'enqueue_block_editor_assets', 'gcm_enqueue_gutenberg_styles' );

/**
 * Display a custom post state for the 404 not found page, similar to how Draft and Pending are displayed
 */
function gcm_display_404_not_found_post_state( $post_states, $post ) {
	$error_page_id = get_field( 'page_404', 'gcm_settings' );
	
	if ( $post->ID == $error_page_id ) {
		$post_states[] = __( '404 Page', 'gcm' );
	}
	
	return $post_states;
}
add_filter( 'display_post_states', 'gcm_display_404_not_found_post_state', 10, 2 );

/**
 * Send a 404 error when viewing the 404 not found page
 */
function gcm_send_404_error() {
	$is_404 = is_404();
	
	// Check if accessing the 404 page directly, which also counts as "not found" (although it technically exists)
	if ( ! $is_404 ) {
		$error_page_id = get_field( 'page_404', 'gcm_settings' );
		if ( get_queried_object_id() == $error_page_id ) $is_404 = true;
	}
	
	if ( $is_404 ) {
		status_header( 404 );
		nocache_headers();
		include( get_query_template( '404' ) );
		die();
	}
}
add_action( 'template_redirect', 'gcm_send_404_error' );