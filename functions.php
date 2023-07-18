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

// Customizations to the dashboard
require_once( __DIR__ . '/includes/dashboard.php' );

// Customizations to the visual editor
require_once( __DIR__ . '/includes/editor.php' );

// WooCommerce support
require_once( __DIR__ . '/includes/plugin-woocommerce.php' );

// TranslatePress support
require_once( __DIR__ . '/includes/plugin-translatepress.php' );

// Shortcodes
require_once( __DIR__ . '/shortcodes/gcm_accordion.php' );
require_once( __DIR__ . '/shortcodes/gcm_icon.php' );