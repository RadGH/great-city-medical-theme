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

$classes[] = 'gcm-before-after-gallery-block';

// Remove any blank gallery items
if ( $items ) foreach( $items as $i => $item ) {
	if ( ! $item['before_image_id'] && ! $item['after_image_id'] ) {
		unset( $items[$i] );
	}
}

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( ! $items ) {
		
		if ( current_user_can( 'edit_posts' ) ) {
			echo '<p><strong>[Gallery Block]</strong> Use edit mode to add gallery items.</p>';
		}
		
	}else{
		
		// This div becomes the slider using Flickity, see public.js -> setup_flickity_sliders()
		echo '<div class="gcm-slider">';
		
		foreach( $items as $item ) {
			$before_image_id = $item['before_image_id'];
			$after_image_id = $item['after_image_id'];
			
			echo '<div class="slider-item">';
			
				echo '<div class="both-images">';
				
					echo '<div class="image before">';
						echo wp_get_attachment_image( $before_image_id, 'large' );
						echo '<div class="label">Before</div>';
					echo '</div>';
					
					echo '<div class="image after">';
						echo wp_get_attachment_image( $after_image_id, 'large' );
						echo '<div class="label">After</div>';
					echo '</div>';
				
				echo '</div>';
			
			echo '</div>';
		}
		
		echo '</div>';
		
	}
	?>

</div>