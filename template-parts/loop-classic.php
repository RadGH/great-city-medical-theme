<article <?php post_class( 'classic-entry' ); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>