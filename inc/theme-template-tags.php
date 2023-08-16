<?php
/**
 * Get our socials from the theme customizer and display them.
 */
function felixlodge_theme_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$youtube_url   = get_theme_mod( 'youtube_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $youtube_url ) ) :
		echo '<a href="' , esc_url( $youtube_url ) , '" target="_blank" class="social-link social-link__youtube">Youtube</a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram">Instagram</a>';
	endif;
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook">Facebook</a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'felixlodge_theme_socials' );

/**
 * This function open the main content.
 */
function felixlodge_theme_before_main_content() {
	?>
	<main id="main-content" class="main-content bg-main-black">
	<?php
}

add_action( 'before_main_content', 'felixlodge_theme_before_main_content' );

/**
 * This function closes the main content.
 */
function felixlodge_theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'felixlodge_theme_after_main_content' );

/**
 * This function open the post content.
 */
function felixlodge_theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'felixlodge_theme_before_post_content' );

/**
 * This function closes the post content.
 */
function felixlodge_theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'felixlodge_theme_after_post_content' );

/**
 * This function gets the logo and link for the mega menu.
 */
function felixlodge_theme_mega_menu_link( $slug, $type ) {

	if ( ! empty( $slug ) ) :

		$logo = get_field( "theme_logos_{$slug}", 'options' );
		$root = get_field( "root_pages_{$slug}", 'options' );

		$link_logo = $link_open = $link_open_b = $link_close = $link_title = $link_render = $link_img = $link_class = $link_title_custom = '';

		$separator    = '<hr>';
		$link_arrow   = '<span class="mega-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"/></svg></span>';
		$title_before = '<span class="mega-link-title-wrapper flex justify-between items-center">';
		$title_after  = '</span>';

		if ( 'hotel_restaurant' === $slug ) :
			$link_class = 'mega-link--hotel';
		elseif ( 'top_of_jura' === $slug ) :
			$link_class = 'mega-link--top-of-jura';
		elseif ( 'szl' === $slug ) :
			$link_class = 'mega-link--szl';
		endif;

		if ( ! empty( $logo ) ) :
			$link_logo = '<img src="' . esc_url( $logo['url'] )  . '" alt="' . $logo['alt'] . '" class="max-w-[175px]">';
		endif;
		if ( ! empty( $root ) ) :
			$root_id = $root->ID;

			if ( get_field( 'use_custom_name', $root_id ) ) :
				$link_title_custom = get_field( 'custom_name', $root_id );
			else :
				$link_title_custom = $root->post_title;
			endif;

			$link_open   = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="mega-link ' . $link_class . '">';
			$link_open_b = '<a href="' . esc_url( get_permalink( $root_id ) ) . '" class="custom-logo-link">';
			$link_close  = '</a>';
			$link_title  = '<h2 class="font-bold text-xl lg:text-2xl font-sans text-black uppercase my-2 lg:my-5 whitespace-nowrap text-ellipsis overflow-hidden">' . $link_title_custom . '</h2>';
			if ( has_post_thumbnail( $root_id ) ) :
				$link_img = get_the_post_thumbnail_url( $root_id, 'mega-link-thumbnail' );
				$link_img = '<img src="' . $link_img . '" alt="' . get_the_post_thumbnail_caption( $root_id ) . '">';
			endif;
		endif;

		if ( 'mega-menu' === $type ) :
			$link_render  = $link_open;
			$link_render .= $link_logo;
			$link_render .= $title_before;
			$link_render .= $link_title;
			$link_render .= $link_arrow;
			$link_render .= $title_after;
			$link_render .= $separator;
			$link_render .= $link_close;
		elseif ( 'mega-menu-bg' === $type ) :
			$link_render  = $link_open;
			$link_render .= $title_before;
			$link_render .= $link_title;
			$link_render .= $link_arrow;
			$link_render .= $title_after;
			$link_render .= $link_img;
			$link_render .= $link_close;
		elseif ( 'mega-menu-simple' === $type ) :
			$link_render  = $link_open_b;
			$link_render .= $link_logo;
			$link_render .= $link_close;
		else :
			$link_render = 'Missing second argument wich is the type of the link, could be: mega-menu, mega-menu-bg or mega-menu-simple';
		endif;
		echo $link_render;
	else :
		echo 'You need to pass a slug for the link! The slug is the name of the ACF field.';
	endif;
}

add_action( 'mega_menu_link', 'felixlodge_theme_mega_menu_link', 10, 2 );

/**
 * This function gets the color from the category.
 */
function felixlodge_theme_get_cat_color_class( $type ) {
	$event_cat          = get_the_category();
	$event_cat_id       = $event_cat[0]->term_id;
	$event_cat_hexcolor = get_field( 'category_color', 'category_' . $event_cat_id );

	if ( $event_cat_hexcolor ) :
		if ( 'hex' === $type ) :
			$cat_hex = $event_cat_hexcolor;
			echo esc_attr( $cat_hex );
		elseif ( 'class' === $type ) :
			$cat_class = '';
			if ( '#D12329' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'hotel';
			elseif ( '#00944E' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'szl';
			elseif ( '#0071BA' === strtoupper( $event_cat_hexcolor ) ) :
				$cat_class = 'jura';
			endif;
			echo esc_html( $cat_class );
		endif;
	endif;
}

add_action( 'cat_color', 'felixlodge_theme_get_cat_color_class', 10, 1 );

/**
 * This function creates the pagination links.
 */
function felixlodge_theme_pagination( $lquery ) {
	$big = 999999999;
	$my_pagination = paginate_links(
		array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'    => '?paged=%#%',
			'total'     => $lquery->max_num_pages,
			'current'   => max( 1, get_query_var( 'paged' ) ),
			'prev_text' => __( 'Previous' ),
			'next_text' => __( 'Next' ),
		)
	);
	echo '<div class="pagination">' . $my_pagination . '</div>';
}

add_action( 'pagination', 'felixlodge_theme_pagination', 10, 1 );


/**
 * This function gets the link to the archive page of custom post types.
 */
function felixlodge_theme_get_archive_page( $slug = false ) {
	$link = '';
	if ( $slug ) :
		$link = get_permalink( get_field( $slug, 'options' ) );
	else :
		$link = get_permalink( get_option( 'page_for_posts' ) );
	endif;
	if ( $link ) :
		?>
		<a class="inline-block mt-10" href="<?php echo esc_url( $link ); ?>">
			<svg class="inline mr-2" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
			</svg>
			<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'felixlodge' ); ?></span>
		</a>
		<?php
	endif;
}

add_action( 'get_archive_page', 'felixlodge_theme_get_archive_page', 10, 1 );


/**
 * This function gets the link to the asee all posts fgrom the archive pasts.
 */
function felixlodge_theme_see_all_posts( $slug = false, $name ) {
	$link = '';
	$name = $name;
	if ( $slug ) :
		$link = get_permalink( get_field( $slug, 'options' ) );
	else :
		$link = get_permalink( get_option( 'page_for_posts' ) );
	endif;
	if ( $link ) :
		?>
			<a class="btn__arrow-alle" href="<?php echo esc_url( $link ); ?>"><?php echo sprintf( __( 'Alle %s', 'felixlodge' ), $name ); ?>
				<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
				</svg>
			</a>
		<?php
	endif;
}

add_action( 'see_all', 'felixlodge_theme_see_all_posts', 10, 2 );

/**
 * Breadcrumbs
 */
function felixlodge_theme_breadcrumbs() {

	if ( function_exists( 'yoast_breadcrumb' ) ) {
		yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
	}

}

add_action( 'breadcrumbs', 'felixlodge_theme_breadcrumbs' );


class Left_Right_Menu_Walker extends Walker_Nav_Menu {
    private $item_counter = 0;

    function start_lvl(&$output, $depth = 0, $args = null) {
        // Don't do anything here
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // Don't do anything here
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if ($depth === 0) {
            // Count the menu items and add the first 3 items to the left and the last 3 items to the right
            $this->item_counter++;
            if ($this->item_counter <= 3) {
                $output .= '<li class="left-menu-item">' . $args->before;
                $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
                $output .= $args->after . '</li>';
            } else {
                $output .= '<li class="right-menu-item">' . $args->before;
                $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
                $output .= $args->after . '</li>';
            }
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            // Do nothing here, handled in start_el
        }
    }
}



