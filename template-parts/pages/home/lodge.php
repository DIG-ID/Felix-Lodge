<section id="section-lodge" class="section-lodge px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
<hr class="border-t-2 border-black">
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 py-20 xl:py-40">
		<div class="col-span-3 md:col-span-5 xl:col-span-5 xl:col-start-2">
			<h2 class="title-big mb-16"><?php the_field('section_lodge_title'); ?></h2>
			<div class="md:grid md:grid-cols-5 gap-5 lg:gap-4 xl:gap-8">
				<div class="col-span-1">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<p class="section-descriptions md:col-span-3 xl:col-span-4"><?php the_field('section_lodge_subtitle'); ?></p>
                <p class="text-body col-span-4 col-start-2 !mb-16 hidden xl:block"><?php the_field('section_lodge_description'); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn-primary col-start-2"><?php esc_html_e( 'Zum Sortiment', 'felixlodge' ); ?></a>
			</div>
		</div>
		<div class="col-span-2 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-8"> 
			<?php
			$image = get_field( 'section_lodge_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'square-image' );
			endif;
			?>
		</div>
	</div>
	<hr class="border-t-2 border-black">
</section>