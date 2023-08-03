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

$classes[] = 'gcm-blog-posts-block container-style-section';

// $settings = get_field( 'settings' );
// if ( in_array('large', $settings) ) $classes[] = 'size-large';

?>
<div <?php echo ($id ? 'id="'. esc_attr($id) .'" ' : ''); ?> class="<?php echo esc_attr( implode(' ', $classes) ); ?>">
	
	<?php
	if ( gcm_is_block_editor() ) {
		
		// Block editor: Show an example using the latest few posts
		$q = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 6,
		));
		
		echo '<div class="archive-list">';
		
		if ( $q->have_posts() ) while( $q->have_posts() ): $q->the_post();
			get_template_part( 'template-parts/blog-post' );
		endwhile;
		
		echo '</div>';
		
		wp_reset_postdata();
		
	}else{
		
		// Front-end: Show the currently queried posts
		wp_reset_query();
		
		get_template_part('/template-parts/archive-list');
		
	}
	?>
	
</div>