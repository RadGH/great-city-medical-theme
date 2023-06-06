</div> <!-- .page-content -->

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