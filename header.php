<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	
	<!--
	Adobe font: Sofia Pro
	Font family: sofia-pro, Helvetica, Arial, sans-serif;
	Font styles: 300, 300i, 500, 500i, 700, 700i
	Used pretty much everywhere
	
	Google font: Abhaya Libre
	Font Family: 'Abhaya Libre', serif;
	Font styles: 400, 700
	Used as the serif font on the cards on top of certain hero images
	See https://radleysustaire.com/s3/fd0329/figma
	-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
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

<?php
global $show_admin_bar;
$tab_index = ($show_admin_bar ?? false) ? 2 : 1;
?>
<a class="screen-reader-shortcut" href="#site-content" tabindex="<?php echo $tab_index; ?>">Skip to page content</a>

<div class="menu-header">
	
	<div class="menu-logo">
		<?php get_template_part( 'template-parts/logo', null, array() ); ?>
	</div>
	
	<a href="#" id="menu-button" aria-expanded="false" aria-controls="primary-menu">
		<span class="open"><?php echo file_get_contents( __DIR__ . '/assets/images/menu-button.svg' ); ?></span>
		<span class="close"><?php echo file_get_contents( __DIR__ . '/assets/images/menu-close.svg' ); ?></span>
	</a>

</div>

<header class="site-header">
	
	<div class="row top">
		<div class="inside">
	
			<div class="header-locations">
				<?php get_template_part( 'template-parts/locations', null, array( 'hours' => false, 'icon_size' => 'tiny', 'switching' => true ) ); ?>
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
	
	<div class="row bottom">
		<div class="inside">
			
			<nav id="primary-menu" class="gcm-menu primary-menu" role="navigation">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => '',
					'depth' => 2,
				));
				?>
			</nav>
			
		</div>
	</div>
	
</header>

<div class="site-content" id="site-content">