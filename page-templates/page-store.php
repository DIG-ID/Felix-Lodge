<?php
/**
 * Template Name: Store Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/store/intro' );
		get_template_part( 'template-parts/pages/store/products' );
		get_template_part( 'template-parts/pages/store/contact' );
	do_action( 'after_main_content' );
get_footer();
