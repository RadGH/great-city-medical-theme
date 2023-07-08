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

// $id = $block['anchor'];
// $classes = $block['className']
// $classes = ' align' . $block['align']

// Load values and assign defaults.
$name  = get_field( 'name' );
$color = get_field( 'color' );
$type = get_field( 'type' );
$size = get_field( 'size' );

$classes[] = 'gcm-icon-block';
$classes[] = 'name-' . ($name ?: 'none');
$classes[] = 'color-' . ($color ?: 'none');
$classes[] = 'type-' . ($type ?: 'none');
$classes[] = 'size-' . ($size ?: 'none');

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">

	<?php
	get_template_part( 'template-parts/components/icon', null, array(
		'name' => $name,
		'color' => $color,
		'type' => $type,
		'size' => $size,
	) );
	?>

</div>