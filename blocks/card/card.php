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
$button   = get_field( 'button' );
$title    = get_field( 'title' );
$content  = get_field( 'content' );
$icon     = get_field( 'icon' );

$show_button = get_field( 'show_button' );
$show_icon   = get_field( 'show_icon' );

if ( ! $show_button || ! $button['url'] ) $button = false;
if ( ! $show_icon || ! $icon['name'] ) $icon = false;

$classes[] = 'gcm-card-block';
$classes[] = $button ? 'has-button' : 'no-button';
$classes[] = $title ? 'has-title' : 'no-title';
$classes[] = $content ? 'has-content' : 'no-content';
$classes[] = $icon ? 'has-icon' : 'no-icon';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( $icon ) {
		echo '<div class="card-icon">';
		get_template_part( 'template-parts/components/icon', null, array(
			'name' => $icon['name'],
			'color' => $icon['color'],
			'type' => $icon['type'],
			'size' => $icon['size'],
		) );
		echo '</div>';
	}
	?>
	
	<h2 class="card-title"><?php echo $title; ?></h2>
	
	<div class="card-content"><?php echo $content; ?></div>
	
	<?php
	if ( $button ) {
		if ( $button['show_icon'] && $button['icon']['name'] ) {
			$button_icon = $button['icon']['name'];
		}else{
			$button_icon = false;
		}
		
		echo '<div class="card-button">';
		get_template_part( 'template-parts/components/button', null, array(
			'text' => $button['text'],
			'url' => $button['url'],
			'classes' => $button['type'],
			'icon' => $button_icon,
		) );
		echo '</div>';
	}
	?>
	
</div>