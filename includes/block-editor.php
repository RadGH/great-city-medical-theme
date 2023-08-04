<?php

/**
 * Include ACF blocks from their individual json files
 *
 * @return void
 */
function gcm_register_acf_blocks() {
	
	// Icons
	$icon_gcm_logo = file_get_contents( get_template_directory() . '/assets/images/svg/gcm-logo.svg' );
	$icon_gcm_section = file_get_contents( get_template_directory() . '/assets/images/svg/gcm-section.svg' );
	
	// Block args
	$args_basic = array(
		'icon' => $icon_gcm_logo,
	);
	
	$args_fullwidth = array(
		'icon' => $icon_gcm_logo,
		'align' => 'full',
		'supports' => array(
			'align' => false,
		),
	);
	
	$args_variable_width = array(
		'icon' => $icon_gcm_logo,
		'align' => array( 'left', 'center', 'right', 'full' ),
		'supports' => array(
			'align' => true,
		),
	);
	
	$args_section = array(
		'icon' => $icon_gcm_section,
		'align' => 'full',
		'supports' => array(
			'align' => false,
			'innerBlocks' => true, // Enables container styles
			'color' => true, // Enables text and background color
		),
	);
	
	// Include blocks
	/** For args, @see WP_Block_Type::__construct() */
	register_block_type( __DIR__ . '/../blocks/accordion/',            $args_basic );
	register_block_type( __DIR__ . '/../blocks/before-after-gallery/', $args_basic );
	register_block_type( __DIR__ . '/../blocks/blog-posts/',           $args_basic );
	register_block_type( __DIR__ . '/../blocks/icon/',                 $args_variable_width );
	register_block_type( __DIR__ . '/../blocks/steps/',                $args_fullwidth );
	register_block_type( __DIR__ . '/../blocks/testimonial/',          $args_basic );
	register_block_type( __DIR__ . '/../blocks/section/',              $args_section );
	
}
add_action( 'init', 'gcm_register_acf_blocks' );

/**
 * Get the ID of a block (if specified)
 *
 * @param array $block
 *
 * @return false|mixed
 */
function gcm_get_block_id( $block ) {
	if ( ! empty( $block['anchor'] ) ) {
		return $block['anchor'];
	}
	
	return false;
}

/**
 * Get the classes of a block
 *
 * @param array $block
 *
 * @return array
 */
function gcm_get_block_classes( $block ) {
	$classes = array();
	
	// Create class attribute allowing for custom "className" and "align" values.
	if ( ! empty( $block['className'] ) ) {
		$classes[] = $block['className'];
	}
	
	if ( ! empty( $block['align'] ) ) {
		$classes[] = 'align' . $block['align'];
	}
	
	if ( ! empty( $block['backgroundColor'] ) ) {
		// Default classes, but acf block does not seem to apply them :/
		$classes[] = 'has-background';
		$classes[] = 'has-'. $block['backgroundColor'] .'-background-color';
	}
	
	if ( ! empty( $block['textColor'] ) ) {
		// Default classes, but acf block does not seem to apply them :/
		$classes[] = 'has-text-color';
		$classes[] = 'has-'. $block['textColor'] .'-color';
	}

	// Remove any duplicates just for fun
	$classes = array_unique( $classes );
	
	return $classes;
}

/**
 * Adds a block category for theme blocks.
 *
 * @param $categories
 * @param $post
 *
 * @return array
 */
function gcm_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'great-city-medical',
				'title' => __( 'Great City Medical', 'my-plugin' ),
				// icon disabled for now. to set it up later, follow:
				// https://github.com/WordPress/gutenberg/issues/11594
				// 'icon'  => file_get_contents( get_template_directory() . '/assets/logo/icon-flat.svg' ),
			),
		)
	);
}
add_filter( 'block_categories_all', 'gcm_block_categories', 10, 2 );
