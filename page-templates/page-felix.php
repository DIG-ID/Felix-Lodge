<?php
/**
 * Template Name: Felix Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/felix/intro' );
	do_action( 'after_main_content' );
get_footer();
