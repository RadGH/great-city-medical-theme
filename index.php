<?php

get_header();

while( have_posts() ): the_post();

	if ( use_block_editor_for_post_type( get_post_type() ) ) {
		get_template_part( 'template-parts/loop-blocks', get_post_type() );
	}else{
		get_template_part( 'template-parts/loop-classic', get_post_type() );
	}
	
endwhile;

get_footer();