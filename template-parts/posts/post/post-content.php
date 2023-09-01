<article id="post-<?php the_ID(); ?>" <?php post_class( 'pt-16 md:pt-36 lg:pt-72 md:pb-0 container-margins bg-white overflow-hidden' ); ?>>
	<div class="container mx-auto px-8 xl:px-0 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2"><?php echo get_the_date(); ?></time>
			<h1 class="title-normal"><?php the_title(); ?></h1>
			<figure class="mb-16 post__image relative">
				<?php
				$post_cat    = get_the_category();
				$post_cat_id = $post_cat[0]->term_id;
				$badge_label = get_field( 'category_badge_label', 'category_' . $post_cat_id );
				if ( $badge_label ) :
					?><p class="badge text-white text-[13px] font-semibold py-1 px-3 mb-10 absolute top-5 left-5 uppercase" style="background-color: <?php do_action( 'cat_color', 'hex' ); ?>;"><?php echo esc_html( $badge_label ); ?></p><?php
				endif;
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full' );
				else :
					echo '<img class="w-full h-auto object-cover" src="https://via.placeholder.com/1000x500">';
				endif;
				?>
			</figure>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<?php do_action( 'get_archive_page' ); ?>
		</div>
	</div>
</article>