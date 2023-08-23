<section id="section-lodge" class="section-lodge px-14 bg-white overflow-hidden">
<hr class="border-t-2 border-black">
    <div class="grid grid-cols-1 lg:grid-cols-12 py-40">
		<div class=" lg:col-start-2 lg:col-span-5">
			<h2 class="title-big mb-16"><?php the_field('section_lodge_title'); ?></h2>
			<div class="grid grid-cols-5 lg:gap-x-7">
				<div class="col-span-1">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<p class="section-descriptions col-span-4"><?php the_field('section_lodge_subtitle'); ?></p>
                <p class="text-body col-span-4 col-start-2 mb-10"><?php the_field('section_lodge_description'); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn-primary col-start-2"><?php esc_html_e( 'Zum Sortiment', 'felixlodge' ); ?></a>
			</div>
		</div>
		<div class="lg:col-start-8 lg:col-span-3"> 
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