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