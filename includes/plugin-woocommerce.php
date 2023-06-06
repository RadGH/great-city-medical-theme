<?php

// Declare that this theme supports woocommerce
add_theme_support( 'woocommerce' );

// 12 products per page
add_filter( 'loop_shop_per_page', function() { return 12; }, 20 );

// 3 products per column
add_filter( 'loop_shop_columns', function() { return 3; }, 20 );

// Change related products widget to 3 products in a 3 column grid
function gcm_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'gcm_related_products_args' );