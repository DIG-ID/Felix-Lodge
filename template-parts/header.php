<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link
		rel="icon"
		type="image/png"
		sizes="32x32"
		href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico"
		media="(prefers-color-scheme: dark)"
		/>
		<link
		rel="icon"
		type="image/png"
		sizes="32x32"
		href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon_dark.ico"
		media="(prefers-color-scheme: light)"
		/>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>