<?php
/**
 * Register theme customizer
 */

function felixlodge_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'felixlodge_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'felixlodge Theme Options', 'felixlodge' ),
			'description'    => __( 'Theme options for the felixlodge Theme', 'felixlodge' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'felixlodge_theme_customizer_register' );
