<section id="section-room" class="section-room container-margins bg-white overflow-hidden">
	<div class="container-grid pb-10">
		<div class="col-span-4 md:col-span-8 xl:col-span-3 xl:col-start-2 order-2 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-12"> 
			<h2 class="title mb-4 md:mb-9 xl:mb-10 col-span-3 md:col-span-4 xl:col-span-12"><?php the_field( 'section_room_title' ); ?></h2>
			<p class="text-body col-span-3 md:col-span-4 xl:col-span-12"><?php the_field( 'section_room_description' ); ?></p>
		</div>
		<div class="col-span-4 md:col-span-8 lg:col-span-8 xl:col-span-6 xl:col-start-7 order-1 xl:order-2 mb-9 xl:mob-0">
			<?php
			$gallery = get_field( 'section_room_gallerie' );
			if ( $gallery ) :
				?>
				<div class="swiper swiper-room-gallery">
					<div class="swiper-wrapper">
						<?php foreach ( $gallery as $gallery_id ) : ?>
							<a class="swiper-slide" href="<?php echo esc_url( wp_get_attachment_image_url( $gallery_id, 'full' ) ); ?>" data-fancybox="gallery">
								<?php echo wp_get_attachment_image( $gallery_id, 'full' ); ?>
							</a>
						<?php endforeach; ?>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
	<div class="container-grid items-end">
		<div class="xl:col-start-2 col-span-3 xl:col-span-3 mb-14 md:mb-0"> 
			<?php
			$image = get_field( 'section_room_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full' );
			endif;
			?>
		</div>
		<div class="md:col-start-5 xl:col-start-7 col-span-3 xl:col-span-3">
			<div class="pl-6 border-l-2 border-black">
				<?php
				$room_details = get_field( 'section_room_details' );
				if ( $room_details ) :
					?><p class="font-sans font-normal italic text-large text-black mb-12"><?php echo esc_html( $room_details['title'] ); ?></p><?php
					if ( have_rows( 'section_room_details_detail_list' ) ) :
						?><ul class="list-disc ml-10"><?php
						// Loop through rows.
						while ( have_rows( 'section_room_details_detail_list' ) ) :
							the_row();
							?><li class="font-sans font-normal text-base md:text-xl xl:text-3xl mb-6 md:mb-10 last-of-type:mb-0"><?php the_sub_field( 'details_item' ); ?></li><?php
						endwhile;
						?></ul><?php
					endif;
				endif;
				?>
			</div>

		</div>
	</div>
	<div class="text-center pt-20 md:pt-24 xl:pt-40 pb-20 md:pb-36 xl:pb-60">
		<a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ); ?></a>
	</div>
	<hr class="bg-black h-[2px]">
</section>
