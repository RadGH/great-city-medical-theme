</div> <!-- .site-content -->

<footer class="site-footer">
	
	<div class="footer-contact">
	
		<div class="footer-content">
			<div class="inside">
				<?php echo wpautop( __(get_field( 'footer_content', 'gcm_settings' ), 'gcm') ); ?>
			</div>
		</div>
		
		<div class="footer-locations">
			<div class="inside">
				<?php get_template_part( 'template-parts/locations', null, array( 'icon_type' => 'circle', 'icon_size' => 'small' ) ); ?>
			</div>
		</div>
	
	</div>
	
	<div class="footer-main">
		<div class="row top">
			<div class="inside">
				
				<div class="footer-logo">
					<?php get_template_part( 'template-parts/logo', null, array() ); ?>
				</div>
				
				<nav id="footer-menu" class="gcm-menu footer-menu" role="navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer',
						'container' => '',
						'depth' => 2,
					));
					?>
				</nav>
				
				<div class="footer-languages">
					<div class="language-dropdown">
						<div class="current-language">
							<?php get_template_part( 'template-parts/languages', null, array( 'icon' => true, 'current_only' => true ) ); ?>
						</div>
						<div class="other-languages">
							<?php get_template_part( 'template-parts/languages', null, array( 'icon' => true ) ); ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="row bottom">
			<div class="inside">
				
				<div class="footer-copyright">
					<?php echo wpautop( __(get_field( 'copyright_text', 'gcm_settings' ), 'gcm') ); ?>
				</div>
				
			</div>
		</div>
	</div>
	
</footer>

<?php
// WordPress footer content
wp_footer();

// Custom footer CSS
if ( $css = get_field( 'custom_css_footer', 'option' ) ) {
	echo "\n<style id=\"custom-footer-css\">\n". esc_html( $css ) . "\n</style>\n";
}

// Custom footer JS
if ( $js = get_field( 'custom_js_footer', 'option' ) ) {
	echo "\n<script type=\"text/javascript\" id=\"custom-footer-js\">\n". esc_html( $js ) . "\n</script>\n";
}
?>

<script type="text/javascript">
// Remove the "loading" class which was added to <body> inside header.php
document.body.classList.remove('loading');
</script>
</body>
</html>