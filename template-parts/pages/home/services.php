<section id="section-services" class="section-services px-14 bg-white overflow-hidden">
	<hr class="border-t-2 border-black">
	<div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-40">
		<div class="lg:col-start-2 lg:col-span-5">
			<h2 class="title-big mb-16"><?php the_field('section_services_title'); ?></h2>
		</div>
		<div class="col-span-1 lg:col-start-8">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
		</div>
		<div class="col-span-1 lg:col-span-3 lg:col-start-9">
			<p class="section-descriptions col-span-4"><?php the_field('section_services_subtitle'); ?></p>
		</div>
	</div>
	<div class="grid grid-cols-1 lg:grid-cols-4 py-20 gap-16 text-center px-[20%]">
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
		<a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ); ?></a>
	</div>
</section>