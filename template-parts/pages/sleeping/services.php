<section id="section-services" class="section-services container-margins pt-24 md:pt-36 xl:pt-60 bg-white overflow-hidden">
	<div class="container-grid xl:grid-rows-2 mb-14 md:mb-24 xl:mb-40">
		<div class="col-span-4 md:col-span-8 xl:col-span-12 mb-4 md:mb-9 xl:mb-28">
			<h2 class="title-big"><?php the_field( 'section_services_title' ); ?></h2>
		</div>
		<div class="col-span-4 md:col-span-3 xl:col-start-2">
			<p class="text-body"><?php the_field( 'section_services_description' ); ?></p>
		</div>
		<div class="col-span-1 md:col-start-5 xl:col-start-7">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-7"></div>
		</div>
		<div class="col-span-3 xl:col-start-8">
			<p class="title"><?php the_field( 'section_services_subtitle' ); ?></p>
		</div>
	</div>
	<?php
	$services_list_one = get_field( 'section_services_services_list_1' );
	if ( $services_list_one ) :
		echo '<div class="container-grid mb-14 md:mb-24 xl:mb-60">';
		if ( have_rows( 'section_services_services_list_1_list' ) ) :
			echo '<ul class="col-span-4 xl:col-span-4 xl:col-start-2 order-2 md:order-1">';
			while ( have_rows( 'section_services_services_list_1_list' ) ) :
				the_row();
				$service_title       = get_sub_field( 'item_title' );
				$service_description = get_sub_field( 'item_description' );
				?>
				<li class="grid grid-cols-4 xl:grid-cols-4 gap-x-5 lg:gap-x-4 xl:gap-x-8 mb-7 md:mb-9 xl:mb-16 last-of-type:mb-0">
					<span class="col-span-1"><div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div></span>
					<span class="col-span-3 text-list"><?php echo $service_title; ?></span>
					<?php
					if ( $service_description ) :
						?><span class="col-span-3 md:col-span-3 col-start-2 md:col-start-2 text-body !mb-0"><?php echo $service_description; ?></span><?php
					endif;
					?>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		$services_list_one_img = get_field( 'section_services_services_list_1_image' );
		if ( $services_list_one_img ) :
			echo '<div class="col-start-3 md:col-start-6 xl:col-start-8 col-span-2 md:col-span-3 order-1 md:order-2 mb-16 md:mb-0">' . wp_get_attachment_image( $services_list_one_img, 'full' ) . '</div>';
		endif;
		echo '</div>';
	endif;
	$services_list_two = get_field( 'section_services_services_list_2' );
	if ( $services_list_two ) :
		echo '<div class="container-grid mb-14 md:mb-24 xl:mb-40">';
		$services_list_two_img = get_field( 'section_services_services_list_2_image' );
		if ( $services_list_two_img ) :
			echo '<div class="xl:col-start-3 col-span-2 md:col-span-3 mb-16 md:mb-0">' . wp_get_attachment_image( $services_list_two_img, 'full' ) . '</div>';
		endif;
		if ( have_rows( 'section_services_services_list_2_list' ) ) :
			echo '<ul class="md:col-start-5 xl:col-start-7 col-span-4 md:col-span-4 xl:col-span-4">';
			while ( have_rows( 'section_services_services_list_2_list' ) ) :
				the_row();
				$service_title       = get_sub_field( 'item_title' );
				$service_description = get_sub_field( 'item_description' );
				?>
				<li class="grid grid-cols-4 xl:grid-cols-4 gap-x-5 lg:gap-x-4 xl:gap-x-8 mb-7 md:mb-9 xl:mb-16 last-of-type:mb-0">
					<span class="col-span-1"><div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div></span>
					<span class="col-span-2 text-list"><?php echo $service_title; ?></span>
					<?php
					if ( $service_description ) :
						?><span class="col-span-3 md:col-span-3 col-start-2 md:col-start-2 text-body !mb-0"><?php echo $service_description; ?></span><?php
					endif;
					?>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		echo '</div>';
	endif;
	$warnings = get_field( 'section_services_warnings' );
	if ( $warnings ) :
		?>
		<div class="container-grid mb-14 md:mb-24 xl:mb-60">
			<div class="xl:col-start-3 col-span-4 md:col-span-3 flex mb-9 md:my-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-full max-w-[24px] mr-3 -mt-[0.15rem]">
					<path d="M11 10.98C11 10.7148 11.1054 10.4605 11.2929 10.2729C11.4804 10.0854 11.7348 9.98002 12 9.98002C12.2652 9.98002 12.5196 10.0854 12.7071 10.2729C12.8946 10.4605 13 10.7148 13 10.98V16.98C13 17.2452 12.8946 17.4996 12.7071 17.6871C12.5196 17.8747 12.2652 17.98 12 17.98C11.7348 17.98 11.4804 17.8747 11.2929 17.6871C11.1054 17.4996 11 17.2452 11 16.98V10.98ZM12 6.05103C11.7348 6.05103 11.4804 6.15638 11.2929 6.34392C11.1054 6.53145 11 6.78581 11 7.05103C11 7.31624 11.1054 7.5706 11.2929 7.75813C11.4804 7.94567 11.7348 8.05102 12 8.05102C12.2652 8.05102 12.5196 7.94567 12.7071 7.75813C12.8946 7.5706 13 7.31624 13 7.05103C13 6.78581 12.8946 6.53145 12.7071 6.34392C12.5196 6.15638 12.2652 6.05103 12 6.05103Z" fill="black"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12Z" fill="black"/>
				</svg>
				<p class="text-body !mb-0"><?php the_field( 'section_services_warnings_warning_1' ); ?></p>
			</div>
			<div class="md:col-start-4 xl:col-start-6 col-span-2 hidden md:flex justify-center">
				<span class="h-full w-[2px] bg-black block"></span>
			</div>
			<div class="col-span-4 md:col-span-3 flex md:my-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-full max-w-[24px] mr-3 -mt-[0.15rem]">
					<path d="M11 10.98C11 10.7148 11.1054 10.4605 11.2929 10.2729C11.4804 10.0854 11.7348 9.98002 12 9.98002C12.2652 9.98002 12.5196 10.0854 12.7071 10.2729C12.8946 10.4605 13 10.7148 13 10.98V16.98C13 17.2452 12.8946 17.4996 12.7071 17.6871C12.5196 17.8747 12.2652 17.98 12 17.98C11.7348 17.98 11.4804 17.8747 11.2929 17.6871C11.1054 17.4996 11 17.2452 11 16.98V10.98ZM12 6.05103C11.7348 6.05103 11.4804 6.15638 11.2929 6.34392C11.1054 6.53145 11 6.78581 11 7.05103C11 7.31624 11.1054 7.5706 11.2929 7.75813C11.4804 7.94567 11.7348 8.05102 12 8.05102C12.2652 8.05102 12.5196 7.94567 12.7071 7.75813C12.8946 7.5706 13 7.31624 13 7.05103C13 6.78581 12.8946 6.53145 12.7071 6.34392C12.5196 6.15638 12.2652 6.05103 12 6.05103Z" fill="black"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12Z" fill="black"/>
				</svg>
				<p class="text-body !mb-0"><?php the_field( 'section_services_warnings_warning_2' ); ?></p>
			</div>
		</div>
		<?php
	endif;
	$optional_services = get_field( 'section_services_optional_list' );
	if ( $optional_services ) :
		?>
			<div class="container-grid mb-11 md:mb-14 mb- xl:mb-28">
				<h2 class="title xl:col-start-2 col-span-4 md:col-span-8 xl:col-span-12"><?php the_field( 'section_services_optional_list_title' ); ?></h2>
			</div>
		<?php
		$optional_list = get_field( 'section_services_optional_list_list' );
		if ( $optional_list ) :
			echo '<div class="container-grid mb-28 md:mb-60">';
			if ( have_rows( 'section_services_optional_list_list' ) ) :
				echo '<ul class="xl:col-start-2 col-span-4 order-2 md:order-1">';
				while ( have_rows( 'section_services_optional_list_list' ) ) :
					the_row();
					$service_title       = get_sub_field( 'item_title' );
					$service_description = get_sub_field( 'item_description' );
					?>
					<li class="grid grid-cols-4 gap-x-5 lg:gap-x-4 xl:gap-x-8 mb-7 md:mb-9 xl:mb-16 last-of-type:mb-0">
						<span class="col-span-1"><div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div></span>
						<span class="col-span-3 text-list"><?php echo $service_title; ?></span>
						<?php
						if ( $service_description ) :
							?><span class="col-span-3 md:col-span-3 col-start-2 md:col-start-2 text-body !mb-0"><?php echo $service_description; ?></span><?php
						endif;
						?>
					</li>
					<?php
				endwhile;
				echo '</ul>';
			endif;
			$optional_list_img = get_field( 'section_services_optional_list_image' );
			if ( $optional_list_img ) :
				echo '<div class="col-start-3 md:col-start-6 xl:col-start-8 col-span-2 md:col-span-3 order-1 md:order-2 mb-12 md:mb-0">' . wp_get_attachment_image( $optional_list_img, 'full' ) . '</div>';
			endif;
			echo '</div>';
		endif;
	endif;
	?>

</section>
