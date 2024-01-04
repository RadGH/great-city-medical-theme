<?php

// Fallback functions if dependencies are not loaded
require_once( __DIR__ . '/includes/fallback.php' );

// General utility functions
require_once( __DIR__ . '/includes/utility.php' );

// Functions used in templates
require_once( __DIR__ . '/includes/template-functions.php' );

// Actions and filters that adjust the theme behavior
require_once( __DIR__ . '/includes/template-hooks.php' );

// Theme icons
require_once( __DIR__ . '/includes/icons.php' );

// Set up the theme
require_once( __DIR__ . '/includes/theme-setup.php' );

// Block and customizations for the Gutenberg block editor
require_once( __DIR__ . '/includes/block-editor.php' );

// Customizations to the visual editor
require_once( __DIR__ . '/includes/editor.php' );

// WooCommerce support
require_once( __DIR__ . '/includes/plugin-woocommerce.php' );

// TranslatePress support
require_once( __DIR__ . '/includes/plugin-translatepress.php' );

// Shortcodes
require_once( __DIR__ . '/shortcodes/archive_title.php' );
require_once( __DIR__ . '/shortcodes/bt_fallbacks.php' );
require_once( __DIR__ . '/shortcodes/gcm_accordion.php' );
require_once( __DIR__ . '/shortcodes/gcm_form_structure.php' );
require_once( __DIR__ . '/shortcodes/gcm_icon.php' );

// Add a fallback setting page if the GCM plugin is not active
if ( ! function_exists('gcm_register_options_pages') ) {
	function gcm_register_fallback_options_page() {
		add_menu_page(
			null,
			__( 'Great City Medical', 'gcm' ),
			'manage_options',
			'acf-gcm-settings',
			function() {
				?>
				<div class="wrap">
					<h1>General Settings</h1>
					<p>Activate the Great City Medical plugin to enable theme settings.</p>
				</div>
				<?php
			},
			'dashicons-gcm-icon',
			80
		);
	}
	add_action( 'admin_menu', 'gcm_register_fallback_options_page' );
}