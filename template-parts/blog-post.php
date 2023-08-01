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
			$categories = get_the_category();
			if ( $categories ) {
				$category = $categories[0];
				$url = get_category_link( $category->term_id );
				if ( gcm_is_block_editor() ) $url = '#' . $category->slug;
				?>
				<div class="post-category">
					<a href="<?php echo esc_url( $url ); ?>" class="button button-purple button-secondary button-small"><?php echo esc_html( $category->name ); ?></a>
				</div>
				<?php
			}
			?>
			
			<?php
			// Display the date and read time
			$date = get_the_time( 'F d, Y' );
			$read_time = gcm_get_read_time( get_the_content() );
			?>
			<div class="post-time">
				<div class="post-date"><?php echo $date; ?></div>
				<div class="read-time"><?php echo $read_time; ?></div>
			</div>
			
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
