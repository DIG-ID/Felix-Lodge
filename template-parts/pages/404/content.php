<section id="section-intro" class="section-intro container-margins pt-36 md:pt-72 pb-16 bg-white overflow-hidden">
	<div class="container-grid pb-10">
		<div class="col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
			<h1 class="title-big mb-16 lg:mb-0"><?php esc_html_e( 'Seite nicht gefunden!', 'felixlodge' ); ?></h1>
		</div>
		<div class="col-span-1 xl:col-start-8">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
		</div>
		<div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
			<div class="col-span-2 text-body"><?php esc_html_e( 'Die von Ihnen gesuchte Seite existiert nicht.', 'felixlodge' ); ?></div>
		</div>
	</div>
</section>
<section class="section-not-found pt-8 pb-16 lg:pt-20 lg:pb-24 xl:pb-64 container-margins">
	<div class="container-grid lg:px-2">
		<div class="col-span-4 md:col-span-8 xl:col-span-12 text-center">
			<p class="text-body !mb-10"><?php esc_html_e( 'Sie können auf die Schaltfläche unten klicken, um zur Homepage zurückzukehren.', 'felixlodge' ); ?></p>
			<a href="<?php echo esc_url( get_site_url( 'https' ) ); ?>" class="btn-primary" type="button"><?php esc_html_e( 'Zur Website gehen', 'felixlodge' ) ?></a>
		</div>
	</div>
</section>