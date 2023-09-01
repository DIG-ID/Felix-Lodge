<section id="section-lodge" class="section-lodge container-margins bg-white overflow-hidden">
<hr class="border-t-2 border-black">
    <div class="container-grid py-[76px] md:py-20 xl:py-44">
		<div class="col-span-3 md:col-span-5 xl:col-span-5 xl:col-start-2 order-2 md:order-1">
			<h2 class="title-big mb-16"><?php the_field('section_lodge_title'); ?></h2>
			<div class="grid grid-cols-4 md:grid-cols-5 gap-5 lg:gap-4 xl:gap-8">
				<div class="col-span-1">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<p class="section-descriptions col-span-3 xl:col-span-4"><?php the_field('section_lodge_subtitle'); ?></p>
                <p class="text-body col-span-4 col-start-2 !mb-16 hidden xl:block"><?php the_field('section_lodge_description'); ?></p>
				<a class="btn-primary btn-disabled col-start-2"><?php esc_html_e( 'Coming soon', 'felixlodge' ); ?></a>
			</div>
		</div>
		<div class="col-span-2 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-8 order-1 md:order-2 pb-8 md:pb-0"> 
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