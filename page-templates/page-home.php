<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/pages/home/previews' );
		get_template_part( 'template-parts/pages/home/lodge' );
	do_action( 'after_main_content' );
get_footer();
