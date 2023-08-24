<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-offer col-span-4 md:col-span-8 xl:col-span-12 container-grid py-10 md:py-14 xl:py-24 border-t border-black ' ); ?>>
	<figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-8 xl:mb-0">
		<a href="<?php the_permalink(); ?>" class="">
			<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover max-h-[226px] md:max-h-[500px] xl:max-h-[570px]' ) ); ?>
		</a>
	</figure>
	<div class="col-span-4 md:col-span-6 xl:col-span-5 flex flex-col justify-between">
		<div class="card-offer-wrapper">
			<a class="transition-all duration-300 ease-in-out opacity-100 hover:opacity-50 mb-10 md:mb-8 xl:mb-16 block" href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="font-sans text-base md:text-xl xl:text-3xl text-black leading-7 tracking-[0.56px] line-clamp-2">', '</h3>' ); ?></a>
			<div class="card-offer-content mb-10 xl:mb-20"><?php echo wp_kses_post( get_the_content() ); ?></div>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn-primary self-start"><?php esc_html_e( 'Anfrage senden', 'felixlodge' ); ?></a>
	</div>
</article>


