<?php

/**
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

if ( ! isset($block) ) {
	die('$block must be provided in ' . __FILE__ .':' . __LINE__);
	exit;
}

$id = gcm_get_block_id( $block );
$classes = gcm_get_block_classes( $block );

// Load values and assign defaults.
$image   = get_field( 'image' );
$elements   = get_field( 'elements' );

$classes[] = 'gcm-photo-overlay-block';
$classes[] = $image ? 'has-image' : 'no-image';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<h2>todo: photo overlay block</h2>
	
	<pre><?php
		echo esc_html(print_r(compact('image', 'elements'), true));
	?></pre>
	
</div>