<section id="section-paun" class="section-paun px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
	<div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-x-5 lg:gap-x-4 xl:gap-x-8 py-20 md:py-24 xl:py-40">
		<div class="col-span-4 md:col-span-4 xl:col-start-2 xl:col-span-5 order-2 md:order-1">
			<h2 class="title-big mb-5 md:mb-16"><?php the_field( 'section_paun_title' ); ?></h2>
			<div class="grid grid-cols-5 gap-x-5 lg:gap-x-4 xl:gap-x-8">
				<div class="col-span-1">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<p class="section-descriptions col-span-4 mb-10"><?php the_field( 'section_paun_description' ); ?></p>
				<?php
				$link = get_field( 'section_paun_link' );
				if ( $link ) :
					$link_url    = $link['url'];
					$link_title  = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn-primary col-start-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
		<div class="col-span-2 md:col-span-3 md:col-start-6 xl:col-start-8 xl:col-span-3 order-1 md:order-2 mb-12 md:mb-0"> 
			<?php
			$image = get_field( 'section_paun_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full' );
			endif;
			?>
		</div>
	</div>
	<hr class="bg-black h-[2px]">
</section>
