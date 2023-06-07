<?php
get_header();
?>

<div class="inside">
	
	<?php
	while( have_posts() ): the_post();
		
		get_template_part( 'template-parts/loop', get_post_type() );
		
	endwhile;
	?>
	
</div>

<?php
get_footer();