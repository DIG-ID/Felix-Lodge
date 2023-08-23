<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/intro' );
		get_template_part( 'template-parts/pages/home/previews' );
		get_template_part( 'template-parts/pages/home/lodge' );
		get_template_part( 'template-parts/pages/home/previews-more' );
		get_template_part( 'template-parts/pages/home/services' );
		get_template_part( 'template-parts/pages/home/angebote-newsletter' );
		get_template_part( 'template-parts/pages/home/activities' );
	do_action( 'after_main_content' );
get_footer();
