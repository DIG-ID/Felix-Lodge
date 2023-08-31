<section class="section-reservation container-margins mb-64">
	<div class="container-grid mb-14 xl:mb-16 xl:hidden">
		<div class="xl:col-start-2 col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
			<div class="col-span-1">
				<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
			</div>
			<div class="col-span-3 md:col-span-7 xl:col-span-5">
				<div class="title-subtitle"><?php the_field( 'find_us_title' ); ?></div>
			</div>
		</div>
	</div>
	<div class="container-grid">

		<div class="col-span-3 md:col-span-8 xl:col-span-4 xl:col-start-2 grid grid-cols-3 md:grid-cols-8 xl:grid-cols-4 gap-x-5 lg:gap-x-4 xl:gap-x-8 order-2 xl:order-1">
			<div class="col-span-1 md:hidden">
				<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
			</div>
			<div class="col-span-3 md:col-span-7 xl:col-span-3 md:hidden">
				<div class="title-subtitle mb-24"><?php the_field( 'find_us_title' ); ?></div>
			</div>
			<?php
			if ( have_rows( 'find_us_description' ) ) :
				while ( have_rows( 'find_us_description' ) ) :
					the_row();
					?>
					<div class="col-span-3 md:col-span-4 xl:col-span-3">
						<h4 class="text-black text-base sm:text-2xl xl:text-[28px] font-sans tracking-[0.56px] mb-6"><?php the_sub_field( 'title' ); ?></h4>
						<p class="text-body"><?php the_sub_field( 'description' ); ?></p>
					</div>

					<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="col-span-4 md:col-span-8 xl:col-span-6 xl:col-start-6 order-1 xl:order-2">
			<?php
			$location = get_field( 'find_us_map' );
			if ( $location ) :
				?>
				<div class="acf-map mb-14 md:mb-20 xl:mb-0" data-zoom="16">
					<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>