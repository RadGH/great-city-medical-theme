<?php
// Display the site logo as a link
?>
<a href="<?php echo esc_attr(site_url('/')); ?>">
	<img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/logo/logo.svg' ); ?>" alt="<?php _e( 'Great City Medical Logo', 'gcm' ); ?>">
</a>