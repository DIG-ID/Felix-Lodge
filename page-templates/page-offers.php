<?php
/**
 * Template Name: Offers Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/offers/intro' );
		get_template_part( 'template-parts/pages/offers/offers' );
	do_action( 'after_main_content' );
get_footer();
