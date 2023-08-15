<?php

$content = '<h1>Page Not Found</h1>';
$content.= "\n\n";
$content.= '<p>We\'re sorry, the page you were trying to view does not exist.</p>';

// Use a specific page as the error message.
$post_id = get_field( 'page_404', 'gcm_settings' );

if ( $post_id ) {
	$content = get_post_field( 'post_content', $post_id );
}

get_header();
?>

<div class="inside">
	
	<article <?php post_class( 'entry not-found' ); ?>>
		
		<div class="entry-content">
			<?php echo ($content); ?>
		</div>
	
	</article>
	
</div>

<?php
get_footer();