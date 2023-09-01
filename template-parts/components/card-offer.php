<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-offer col-span-4 md:col-span-8 xl:col-span-12 container-grid py-10 md:py-14 xl:py-24 border-t border-black ' ); ?>>
	<figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-8 xl:mb-0">
		<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover max-h-[226px] md:max-h-[500px] xl:max-h-[570px]' ) ); ?>
	</figure>
	<div class="col-span-4 md:col-span-6 xl:col-span-5 flex flex-col justify-between">
		<div class="card-offer-wrapper">
			<?php the_title( '<h2 class="font-sans text-base md:text-xl xl:text-3xl text-black leading-7 tracking-[0.56px] line-clamp-2 mb-10">', '</h2>' ); ?>
			<div class="card-offer-content mb-6 md:mb-10 xl:mb-20 overflow-hidden"><?php echo wp_kses_post( get_the_content() ); ?></div>
		</div>
		<button class="btn-offer-readmore relative z-10 flex items-center justify-center text-center md:hidden md:invisible mb-10">
			<span class="font-sans uppercase text-sm leading-6"><?php esc_html_e( 'Read more', 'felixlodge' ); ?></span>
			<svg xmlns="http://www.w3.org/2000/svg" width="13" height="7" viewBox="0 0 13 7" fill="none" class="ml-1 mb-1">
				<path d="M12 1L6.5 6L1 1" stroke="black"/>
			</svg>
		</button>
		<?php
		$offer_link = get_field( 'link' );
		if ( $offer_link ) :
			?>
			<a href="<?php echo esc_attr( $offer_link ); ?>" class="btn-offer btn-primary inline-block mx-auto md:mx-0 md:self-start"><?php esc_html_e( 'anfrage senden', 'felixlodge' ); ?></a>
			<?php
		endif;
		?>
	</div>
</article>


