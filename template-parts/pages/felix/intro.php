<section id="section-intro" class="section-intro pt-16 md:pt-36 lg:pt-72 md:pb-0 container-margins bg-white overflow-hidden">
	<div class="container-grid pt-28 lg:pt-0">
		<div class="col-span-4 md:col-span-3 lg:col-span-4 xl:col-span-5">
			<h1 class="title-big mb-16 lg:mb-0 hyphenate"><?php the_field( 'section_intro_title' ); ?></h1>
		</div>
		<div class="col-span-1 xl:col-start-7">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
		</div>
		<div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3 xl:col-start-8">
			<div class="col-span-2 text-body"><?php the_field( 'section_intro_description_1' ); ?></div>
		</div>
	</div>
	<div class="container-grid">
		<div class="col-span-4 md:col-span-4 xl:col-span-3 xl:col-start-3 items-center flex order-2 xl:order-1">
			<h2 class="text-body"><?php the_field( 'section_intro_description_2' ); ?></h2>
		</div>
		<div class="col-span-4 md:col-span-8 xl:col-span-6 xl:col-start-7 order-1 xl:order-2 pt-14 md:pt-36 xl:pt-0 pb-10 md:pb-12 xl:pb-0">
			<?php 
			$intro_image = get_field('section_intro_image');
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, 'full' );
			}
			?>
		</div>
	</div>
</section>