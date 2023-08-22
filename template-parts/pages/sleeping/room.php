<section id="section-room" class="section-room px-14 bg-white overflow-hidden">
	<div class="grid grid-cols-1 lg:grid-cols-12">
		<div class="lg:col-start-2 col-span-12 lg:col-span-3"> 
			<h2 class="title mb-8"><?php the_field( 'section_room_title' ); ?></h2>
			<p class="text-body"><?php the_field( 'section_room_description' ); ?></p>
		</div>
		<div class="lg:col-start-7 col-span-12 lg:col-span-6">
			<?php
			$gallery = get_field( 'section_room_gallerie' );
			if ( $gallery ) :
				?>
				<div class="swiper swiper-room-gallery">
					<div class="swiper-wrapper">
						<?php foreach ( $gallery as $gallery_id ) : ?>
							<div class="swiper-slide">
								<?php echo wp_get_attachment_image( $gallery_id, 'full' ); ?>
							</div>
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
	<div class="grid grid-cols-1 lg:grid-cols-12 items-end">
		<div class="lg:col-start-2 col-span-12 lg:col-span-3"> 
			<?php
			$image = get_field( 'section_room_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full' );
			endif;
			?>
		</div>
		<div class="lg:col-start-7 col-span-12 lg:col-span-3">
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
							?><li class="font-sans font-normal text-3xl mb-10 last-of-type:mb-0"><?php the_sub_field( 'details_item' ); ?></li><?php
						endwhile;
						?></ul><?php
					endif;
				endif;
				?>
			</div>

		</div>
	</div>
	<div class="text-center pt-44 pb-56">
		<a href="<?php the_permalink(); ?>" class="btn-moreinfo text-button"><span class="pt-1"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ); ?></span></a>
	</div>
	<hr class="bg-black h-[2px]">
</section>
