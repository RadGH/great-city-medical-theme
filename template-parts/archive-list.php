<?php


if ( ! have_posts() ) {
	echo '<p class="no-posts">Sorry, there are no posts to display.</p>';
	return;
}

if ( gcm_has_ajax_load_more() ) {
	
	// If using ajax load more, the shortcode will handle the post display and pagination
	gcm_display_ajax_load_more_archive();
	
}else{
	
	// Fallback: Display traditional layout
	echo '<div class="archive-list">';
	
	while ( have_posts() ): the_post();
		get_template_part('template-parts/blog-post');
	endwhile;
	
	echo '</div>';
	
	echo '<div class="archive-pagination">';
	
	// Next/previous pages
	$paged = max( (int) get_query_var('paged'), 1 );
	$prev_url = get_previous_posts_page_link();
	$next_url = get_next_posts_page_link();
	
	if ( $prev_url && $paged > 1 ) echo '<a href="'. esc_attr($prev_url) .'" class="button button-purple button-secondary page-prev">&larr; '. __('Previous', 'gcm') .'</a>';
	if ( $next_url ) echo '<a href="'. esc_attr($next_url) .'" class="button button-purple button-secondary page-next">'. __('Next', 'gcm') .' &rarr;</a>';
	
	echo '</div>';
	
}