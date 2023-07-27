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

$steps = get_field( 'steps' );

$classes[] = 'gcm-steps-block';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( !$steps && (is_admin() || acf_is_block_editor()) ) {
		echo 'Add steps to this block using <span class="dashicons dashicons-edit"></span> Edit mode.';
	}
	
	if ( $steps ) {
		
		echo '<div class="gcm-steps-list count-'. count($steps) .'">';
		
		$step_number = 1;
		
		foreach( $steps as $s ) {
			$text = $s['text'];
			$icon = gcm_get_icon_html( $step_number, 'purple', 'circle', 'large' );
			// [gcm_icon name="1" type="circle"]
			$icon = do_shortcode( '[gcm_icon name="' . $name . '" color="' . $color . '" type="' . $type . '" size="' . $size . '"]' );
			?>
			<div class="step step-<?php echo $step_number; ?>">
				<div class="number"><?php echo $step_number; ?></div>
				<div class="icon"><?php echo $text; ?></div>
				<div class="line"></div>
				<div class="curve"></div>
			</div>
			<?php
			
			$step_number += 1;
		}
		
		echo '</div>';
	}
	?>
	
</div>