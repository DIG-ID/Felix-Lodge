<?php
/**
 * Template Name: Sleeping Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/sleeping/intro' );
		get_template_part( 'template-parts/pages/sleeping/room' );
		/*get_template_part( 'template-parts/pages/sleeping/paun' );*/
		get_template_part( 'template-parts/pages/sleeping/services' );
	do_action( 'after_main_content' );
get_footer();
