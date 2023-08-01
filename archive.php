<?php
// Use the blog page as a template for posts, categories, and taxonomies
if ( is_home() || is_post_type_archive('post') || is_category() || is_tax() ) {
	get_template_part( 'home' );
	return;
}

// Displays an archive title and a list of posts
get_header();
?>

<main class="archive-container is-root-container">
	
	<div class="wp-block wp-block-group container-style-section is-layout-constrained">
		<div class="wp-block wp-block-group is-layout-flex is-vertical is-content-justification-center">
			
			<?php
			// Yoast breadcrumbs
			echo gcm_get_yoast_breadcrumb_html();
			?>
			
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
			
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
			
		</div>
	</div>
	
	<div class="wp-block wp-block-group has-white-background-color has-background">
			
        <?php
        get_template_part('/template-parts/archive-list');
        ?>
			
	</div>
	
</main>

<?php
get_footer();