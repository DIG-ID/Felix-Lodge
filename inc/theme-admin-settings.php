<?php
/**
 * Customize WordPress Admin look and feel.
 */


// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts'] );
}
add_action( 'wp_dashboard_setup', 'disable_default_dashboard_widgets', 999 );


/************* CUSTOM LOGIN PAGE *****************/


// Updated to proper 'enqueue' method
// http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function theme_login_css() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'admin-login-css', get_theme_file_uri( '/dist/css/admin-login.css' ), array(), $theme_version );
}
add_action( 'login_enqueue_scripts', 'theme_login_css', 10 );

// Changing the logo link from wordpress.org to your site
function theme_login_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'theme_login_url' );

// Changing the alt text on the logo to show your site name
function theme_login_title() {
	return get_option( 'blogname' );
}
add_filter( 'login_headertext', 'theme_login_title' );


/************* CUSTOMIZE ADMIN *******************/

// Custom Backend Footer
function theme_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="https://dig.id" target="_blank">dig.id</a></span>.', 'hotel-inside' );
}

add_filter( 'admin_footer_text', 'theme_custom_admin_footer' );


// Change login page logo
function theme_login_logo() {
	echo '<style type="text/css">
	h1 a {
		background-image: url(' . get_template_directory_uri() . '/assets/images/logo_footer.png) !important;
	}
	</style>';
}

add_action( 'login_head', 'theme_login_logo' );


// remove WordPress logo from admin bar
add_action( 'admin_bar_menu', 'remove_wp_links', 999 );
function remove_wp_links( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}


// Custom WordPress Admin Color Scheme
/*function custom_admin_css() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'admin-css', get_theme_file_uri( '/build/admin-login.css' ), array(), $theme_version );
}
add_action( 'admin_print_styles', 'custom_admin_css' );*/
