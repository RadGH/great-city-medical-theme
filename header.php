<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	
	<!--
	Adobe font: Sofia Pro
	Font family: sofia-pro
	Font styles: 300, 300i, 500, 500i
	-->
	<link rel="stylesheet" href="https://use.typekit.net/wfu3bib.css">
	
	<?php
	// Custom header CSS
	if ( $css = get_field( 'custom_css_header', 'option' ) ) {
		echo "\n<style id=\"custom-header-css\">\n". esc_html( $css ) . "\n</style>\n";
	}
	
	// Custom header JS
	if ( $js = get_field( 'custom_js_header', 'option' ) ) {
		echo "\n<script type=\"text/javascript\" id=\"custom-header-js\">\n". esc_html( $js ) . "\n</script>\n";
	}
	?>
	
</head>

<body <?php body_class('loading'); ?>>

	<header class="site-header">
		
		<div class="header-row top">
			<div class="inside">
		
				<div class="header-location">
					<?php get_template_part( 'template-parts/locations', null, array( 'hours' => false ) ); ?>
				</div>
				
				<div class="header-logo">
					<?php get_template_part( 'template-parts/logo', null, array() ); ?>
				</div>
				
				<div class="header-links">
					<div class="language-list">
						<?php get_template_part( 'template-parts/languages', null, array( 'icon' => false, 'code' => true ) ); ?>
					</div>
					
					<?php
					$button = get_field( 'header_button', 'gcm_settings' );
					if ( $button['text'] && $button['url'] ) {
						?>
						<div class="major-button">
							<a href="<?php echo esc_attr($button['url']); ?>" target="_blank" rel="external" class="button button-secondary"><?php _e( $button['text'], 'gcm' ); ?></a>
						</div>
						<?php
					}
					?>
				</div>
				
			</div>
		</div>
		
		<div class="header-row bottom">
			<div class="inside">
				<nav id="primary-menu" class="gcm-menu primary-menu" role="navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => '',
						'depth' => 3,
						'fallback_cb' => false,
					));
					?>
				</nav>
			</div>
		</div>
		
		<!--
		<div class="header-row mobile">
			<div class="header-menu-button">
				<a href="#" id="menu-button" aria-expanded="false" aria-controls="primary-menu">>
					<span class="open"><?php
						echo file_get_contents( __DIR__ . '/assets/images/menu-button.svg' );
					?></span>
					<span class="close"><?php
						echo file_get_contents( __DIR__ . '/assets/images/menu-close.svg' );
					?></span>
				</a>
			</div>
		</div>
		-->
		
	</header>

<div class="site-content">