<section id="section-intro" class="section-intro px-14 pt-72 pb-36 bg-white overflow-hidden">
	<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pb-9">
		<div class="col-span-1 lg:col-span-6">
			<h1 class="title-big"><?php the_field( 'section_intro_title' ); ?></h1>
		</div>
		<div class="col-span-1">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
		</div>
		<div class="col-span-1 lg:col-span-3">
			<div class="col-span-2 text-body"><?php the_field( 'section_intro_description' ); ?></div>
		</div>
	</div>
	<div class="text-center">
		<a href="<?php the_permalink(); ?>" class="btn-moreinfo text-button"><span class="pt-1"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ); ?></span></a>
	</div>
</section>