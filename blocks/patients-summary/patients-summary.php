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
// $image   = get_field( 'image' );

$classes[] = 'gcm-patients-summary-block';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<div class="patients-list">
		<?php
		foreach( range('a','e') as $letter ) {
			$image_url = get_theme_file_uri('assets/images/patients/' . $letter . '.png' );
			echo '<span class="patient"><img src="' . $image_url . '" alt=""></span>';
		}
		?>
	</div>
	
	<div class="patients-count">
		<strong class="patients-count-number">10,000+</strong>
		<span class="patients-count-label">Patients</span>
	</div>
	
</div>