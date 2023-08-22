<section id="section-services" class="section-services px-14 pt-60 bg-white overflow-hidden">
	<div class="grid grid-cols-1 lg:grid-cols-12 grid-rows-2 gap-x-7 mb-40">
		<div class="col-span-12 mb-28">
			<h2 class="title-big"><?php the_field( 'section_services_title' ); ?></h2>
		</div>
		<div class="col-span-3 col-start-2">
			<p class="body-text"><?php the_field( 'section_services_description' ); ?></p>
		</div>
		<div class="col-span-1 col-start-7">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-7"></div>
		</div>
		<div class="col-span-3 col-start-8">
			<p class="title"><?php the_field( 'section_services_subtitle' ); ?></p>
		</div>
	</div>
	<?php
	$services_list_one = get_field( 'section_services_services_list_1' );
	if ( $services_list_one ) :
		echo '<div class="grid grid-cols-1 lg:grid-cols-12 gap-7">';
		if ( have_rows( 'section_services_services_list_1_list' ) ) :
			echo '<ul class="col-start-2 col-span-4">';
			while ( have_rows( 'section_services_services_list_1_list' ) ) :
				the_row();
				$service_title       = get_sub_field( 'item_title' );
				$service_description = get_sub_field( 'item_description' );
				?>
				<li class="grid grid-cols-4 grid-rows-2 mb-10 last-of-type:mb-0">
					<span class="col-span-1"><div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div></span>
					<span class="col-span-3 text-list"><?php echo $service_title; ?></span>
					<?php
					if ( $service_description ) :
						?><span class="col-span-4 col-start-2 body-text"><?php echo $service_description; ?></span><?php
					endif;
					?>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;

		$services_list_one_img = get_field( 'section_services_services_list_1_image' );
		if ( $services_list_one_img ) :
			echo '<div class="col-start-8 col-span-3">' . wp_get_attachment_image( $services_list_one_img, 'full' ) . '</div>';
		endif;
		echo '</div>';
	endif;
	?>
</section>
