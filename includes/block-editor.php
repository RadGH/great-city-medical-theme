<?php

/**
 * Include ACF blocks from their individual json files
 *
 * @return void
 */
function gcm_register_acf_blocks() {
	
	// In use
	register_block_type( __DIR__ . '/../blocks/accordion/' );
	register_block_type( __DIR__ . '/../blocks/before-after-gallery/' );
	register_block_type( __DIR__ . '/../blocks/icon/' );
	register_block_type( __DIR__ . '/../blocks/steps/' );
	register_block_type( __DIR__ . '/../blocks/testimonial/' );
	
	// The parameters passed to the block type templates:
	/**
	 * @param   array $block The block settings and attributes.
	 * 			array(
	 * 				"render_template" => "card.php",
	 * 				"render_callback" => false,
	 * 				"enqueue_style" => false,
	 * 				"enqueue_script" => false,
	 * 				"enqueue_assets" => false,
	 * 				"post_types" => array(),
	 * 				"uses_context" => array(
	 * 					0 => "postId",
	 * 					1 => "postType",
	 * 				),
	 * 				"supports" => array(
	 * 					"align" => true,
	 * 					"html" => false,
	 * 					"mode" => true,
	 * 					"jsx" => true,
	 * 				),
	 * 				"attributes" => array(
	 * 					"name" => array(
	 * 						"type" => "string",
	 * 						"default" => "",
	 * 					),
	 * 					"data" => array(
	 * 						"type" => "object",
	 * 						"default" => array(),
	 * 					),
	 * 					"align" => array(
	 * 						"type" => "string",
	 * 						"default" => "",
	 * 					),
	 * 					"mode" => array(
	 * 						"type" => "string",
	 * 						"default" => "",
	 * 					),
	 * 				),
	 * 				"acf_block_version" => 2,
	 * 				"api_version" => 2,
	 * 				"title" => "Card",
	 * 				"category" => "text",
	 * 				"icon" => "admin-gcm-icon",
	 * 				"description" => "A card with title and content, and additional features.",
	 * 				"keywords" => ["card", "content", "title", "image", "button" ],
	 * 				"style_handles" => ["gcm-card-style"],
	 * 				"mode" => "preview",
	 * 				"name" => "gcm/card",
	 * 				"path" => "/apps/great-city-medical/public/wp-content/themes/great-city-medical/blocks/card",
	 * 				"data" => [],
	 * 				"align" => "",
	 * 				"id" => "block_5a40cc84-d4c0-43f6-802d-d79b559fc74f",
	 * 			};
	 *
	 * @param   string $content The block inner HTML (empty).
	 *          ""
	 *
	 * @param   bool $is_preview True during backend preview render.
	 *          true
	 *
	 * @param   int $post_id The post ID the block is rendering content against.
	 *          This is either the post ID currently being displayed inside a query loop,
	 *          or the post ID of the post hosting this block.
	 *          int(4153)
	 *
	 * @param   array $context The context provided to the block by the post, or it's parent block.
	 *          array(2) {
	 *              "postId" => 4153
	 *              "postType" => "page"
	 *          }
	 */
	
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
		$classes[] = 'align-' . $block['align'];
	}
	
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
