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

$classes[] = 'gcm-testimonial-block';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( is_admin() || acf_is_block_editor() ) {
		echo '<img src="'. get_theme_file_uri('/assets/images/testimonial-preview.png' ) .'" alt="Testimonial widget will be displayed here" style="width: 100%; margin: 0 auto;" />';
	}else{
		echo do_shortcode('[brb_collection id="3269"]');
	}
	?>
	
</div>