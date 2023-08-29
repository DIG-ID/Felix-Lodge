<?php
/**
 * Template Name: Activities Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/activities/intro' );
		get_template_part( 'template-parts/pages/activities/local-producers' );
		get_template_part( 'template-parts/pages/activities/winter' );
		get_template_part( 'template-parts/pages/activities/summer' );
		get_template_part( 'template-parts/pages/activities/respect' );
	do_action( 'after_main_content' );
get_footer();
