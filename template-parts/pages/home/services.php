<section id="section-services" class="section-services container-margins bg-white overflow-hidden">
	<hr class="border-t-2 border-black">
	<div class="container-grid pt-20 xl:pt-40 items-center">
		<h2 class="title-big col-span-4 xl:col-span-5 xl:col-start-2 mb-20"><?php the_field('section_services_title'); ?></h2>
		<div class="col-span-1 md:col-start-4 xl:col-start-8 -mt-8 md:-mt-16 lg:-mt-8 xl:-mt-24 2xl:-mt-16">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black"></div>
		</div>
		<div class="col-span-3 md:col-span-3 xl:col-span-3 md:col-start-5 xl:col-start-9">
			<p class="section-descriptions col-span-4 xl:max-w-sm"><?php the_field('section_services_subtitle'); ?></p>
		</div>
	</div>
	<div class="grid grid-cols-1 md:grid-cols-4 py-28 gap-16 text-center lg:px-[20%]">
	<?php
	if( have_rows('section_services_services_list') ):
	while( have_rows('section_services_services_list') ) : the_row(); ?>
	<div class="col-span-1 flex flex-col items-center">
		<?php
			$image = get_sub_field( 'icon' );
			if ( $image ) :
				$image_attributes = wp_get_attachment_image_src( $image, 'full' );
				$image_url = $image_attributes[0];
				$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
				$image_class = 'services_icon';
				echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $image_alt ) . '" class="' . esc_attr( $image_class ) . '" />';
			endif;
		?>
		<p class="text-body services_info"><?php the_sub_field('description'); ?></p>
	</div>
	<?php endwhile;
	endif; ?>
	</div>
	<div class="flex justify-center pb-40">
		<a href="<?php the_field('section_services_button_link'); ?>" class="btn-primary"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ); ?></a>
	</div>
</section>