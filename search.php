<?php

get_header();
?>

<div class="site-content" id="site-content">
	<div class="inside">
		<article <?php post_class( 'search-results' ); ?>>
			
			<div class="entry-content">
				<h1 class="wp-block-heading has-text-align-center">Search Results</h1>
				
				<?php
				if ( ! have_posts() ) {
					?>
					<div class="has-text-align-center">
						<p>We are sorry, no results for: "<?php echo esc_html(get_query_var('s')); ?>"</p>
						<p><a href="https://greatcitymedical.radgh.com/">Back to homepage</a></p>
					</div>
					<?php
				}else{
					?>
					<div class="has-text-align-center">
						<p>Found <?php echo $wp_query->found_posts; ?> results</p>
						
						<?php get_search_form(); ?>
						
					</div>
					<?php
				}
				?>
			
			</div>
		
		</article>
	
	</div>

</div>

<?php
// Display results
if ( have_posts() ) {
	?>
	<div class="is-root-container">
		<div class="wp-block-group has-white-background-color has-background">
			<div class="container-style-section">
				
					<?php
					get_template_part('/template-parts/archive-list');
					?>
				
			</div>
		</div>
	</div>
	<?php
}

get_footer();