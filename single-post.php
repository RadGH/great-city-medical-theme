<?php

get_header();
the_post();

// todo:
// add category button at top
// add date after title

?>

<article <?php post_class('single-post'); ?>>
	
	<!-- Post title and breadcrumbs -->
	<div class="post-header inside">
		
		<?php
		// Display link back to blog
		?>
		<div class="back-to-blog">
			<a href="<?php echo esc_url( get_home_url() ); ?>" title="Back to blog" class="back-link button button-text button-blue button-small">
				<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7 13L1 7L7 1" stroke="#0957DE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<span>Back</span>
			</a>
		</div>
		
		
		<div class="wp-block wp-block-group is-layout-flex is-vertical is-content-justification-center">
			<?php
			// Display the first category
			get_template_part('template-parts/post-category');
			?>
			
			<?php
			// Breadcrumbs
			// (Replaced with back link)
			// echo gcm_get_yoast_breadcrumb_html();
			?>
			
			<?php
			// Post Title
			the_title( '<h1>', '</h1>' );
			?>
			
			<?php
			// Display the date and read time
			get_template_part('template-parts/post-date-read-time');
			?>
			
		</div>
	</div>
	
	<!-- Featured image -->
	<?php if ( has_post_thumbnail() ): ?>
	<div class="featured-image inside">
		<?php the_post_thumbnail( 'large' ); ?>
	</div>
	<?php endif; ?>
	
	<!-- Post content (blocks) -->
	<div class="post-content inside">
		<div class="is-root-container">
			
			<?php the_content(); ?>
			
		</div>
	</div>

</article>

<!-- Related posts -->
<div class="gcm-related-posts is-root-container">
	<div class="wp-block wp-block-group has-white-background-color has-background">
		<div class="wp-block wp-block-group container-style-section is-layout-flex is-vertical gap-60 is-content-justification-left">
			
			<h2><?php _e( 'Other articles', 'gcm' ); ?></h2>
			
			<?php
			$related_query = gcm_get_related_posts_query( get_the_ID() );
			
			echo '<div class="archive-list">';
			
			while ( $related_query->have_posts() ): $related_query->the_post();
				get_template_part('template-parts/blog-post');
			endwhile;
			
			echo '</div>';
			
			wp_reset_query();
			?>
		
		</div>
	</div>
</div>

<!-- Testimonials -->
<div class="gcm-testimonials-slider is-root-container">
	<?php
	$post = get_post(4769);
	setup_postdata($post);
	the_content();
	wp_reset_postdata();
	?>
</div>

<?php

get_footer();