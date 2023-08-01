<?php
// Blog page uses the page content. Posts are displayed using the "blog posts" block (which must be added to the blog page)
$blog_page_id = get_option( 'page_for_posts' );

if ( $blog_page_id ) {
	get_header();
	
	setup_postdata( $blog_page_id );
	the_content();
	
	get_footer();
}else{
	wp_die('Cannot display the blog, the "page_for_posts" option is not set.');
}