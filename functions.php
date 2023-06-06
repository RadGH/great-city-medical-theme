<?php

// Fallback functions if dependencies are not loaded
require_once( __DIR__ . '/includes/fallback.php' );

// General utility functions
require_once( __DIR__ . '/includes/utility.php' );

// Functions used in templates
require_once( __DIR__ . '/includes/template-functions.php' );

// Actions and filters that adjust the theme behavior
require_once( __DIR__ . '/includes/template-hooks.php' );

// Customizations to the dashboard
require_once( __DIR__ . '/includes/dashboard.php' );

// WooCommerce support
require_once( __DIR__ . '/includes/plugin-woocommerce.php' );

// TranslatePress support
require_once( __DIR__ . '/includes/plugin-translatepress.php' );

// Set up the theme
require_once( __DIR__ . '/includes/theme-setup.php' );

// Shortcodes
require_once( __DIR__ . '/shortcodes/gcm_icon.php' );