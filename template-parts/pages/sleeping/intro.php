<section id="section-intro" class="section-intro container-margins pt-36 md:pt-72 pb-16 md:pb-24 xl:pb-40 bg-white overflow-hidden">
	<div class="container-grid pb-10">
		<div class="col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
			<h1 class="title-big mb-16 lg:mb-0"><?php the_field( 'section_intro_title' ); ?></h1>
		</div>
		<div class="col-span-1 xl:col-start-8">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
		</div>
		<div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
			<div class="col-span-2 text-body"><?php the_field( 'section_intro_description' ); ?></div>
		</div>
	</div>
	<div class="text-center">
		<a href="<?php the_field( 'settings_simple_booking_url', 'options' ); ?>" class="btn-primary" target="_blank"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ); ?></a>
	</div>
</section>