<?php
/**
 * Template Name: Wellness Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/wellness/intro' );
		get_template_part( 'template-parts/pages/wellness/offers' );
		get_template_part( 'template-parts/pages/wellness/schedule' );
	do_action( 'after_main_content' );
get_footer();
