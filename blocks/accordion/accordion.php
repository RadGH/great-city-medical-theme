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

$items = get_field( 'items' );
$settings = get_field( 'settings' );

$classes[] = 'gcm-accordion-block';

if ( in_array('large', $settings) ) {
	$classes[] = 'testimonial-size-large';
}

// Remove any blank accordion items
if ( $items ) foreach( $items as $i => $item ) {
	if ( ! $item['title'] && ! $item['content'] ) {
		unset( $items[$i] );
	}
}

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( ! $items ) {
		
		if ( current_user_can( 'edit_posts' ) ) {
			echo '<p>Use edit mode to add accordion items.</p>';
		}
		
	}else{
		foreach( $items as $item ) {
			$title = $item['title'];
			$content = wpautop($item['content']);
			
			echo do_shortcode(
				'[gcm_accordion title="'. esc_attr($title) .'"]'. $content .'[/gcm_accordion]'
			);
		}
	}
	?>

</div>