<?php
$classes = array();
$classes[] = 'archive-item';
$classes[] = 'post-type-' . get_post_type();
// $classes[] = has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail';

$post_url = get_permalink();
if ( gcm_is_block_editor() ) $post_url = '#' . get_post_field( 'post_name' );

?>
<article class="<?php echo esc_attr(implode(' ', $classes)); ?>">
	
	<?php
	if ( has_post_thumbnail() ) {
		?>
		<div class="post-thumbnail">
			<a href="<?php echo esc_attr($post_url); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
		</div>
		<?php
	}
	?>
	
	<div class="post-details">
		
		<div class="post-meta">
			
			<?php
			// Display the first category
			get_template_part('template-parts/post-category');
			?>
			
			<?php
			// Display the date and read time
			get_template_part('template-parts/post-date-read-time');
			?>
			
		</div>
	
		<h2 class="heading-h4">
			<a href="<?php echo esc_attr($post_url); ?>"><?php the_title(); ?></a>
		</h2>
		
		<div class="post-excerpt">
			<?php
			echo gcm_get_post_excerpt( get_the_ID() );
			?>
		</div>
		
	</div>
	
</article>
