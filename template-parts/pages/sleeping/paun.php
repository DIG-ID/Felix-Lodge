<section id="section-paun" class="section-paun px-14 bg-white overflow-hidden">
	<div class="grid grid-cols-1 lg:grid-cols-12 py-36">
		<div class=" lg:col-start-2 lg:col-span-5">
			<h2 class="title-big mb-16">Serneus <br>Für Daheim</h2>
			<div class="grid grid-cols-6 lg:gap-7">
				<div class="col-span-1 mt-3">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black"></div>
				</div>
				<p class="text-descriptions col-span-5 mb-14">In Paun, unsererem Pop up Store, finden Sie ein kleines, aber feines Sortiment an regionalen Produkten.</p>
				<a href="<?php the_permalink(); ?>" class="btn-primary text-button col-start-2"><span class="pt-1"><?php esc_html_e( 'Zum Sortiment', 'felixlodge' ); ?></span></a>
			</div>
		</div>
		<div class="lg:col-start-8 lg:col-span-3"> 
			<?php
			$image = get_field( 'section_room_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full' );
			endif;
			?>
		</div>
	</div>
	<hr class="bg-black h-[2px]">
</section>
