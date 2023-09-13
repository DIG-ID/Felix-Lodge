<section class="section-address-form container-margins pt-36 md:pt-72 mb-28 md:mb-32">
	<div class="container-grid">
		<div class="col-span-4 md:col-span-4 xl:col-span-6 grid grid-cols-4 md:grid-cols-6 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
			<div class="col-span-6">
				<h1 class="title-big mb-16 lg:mb-0"><?php the_title(); ?></h1>
			</div>
			<div class="col-span-4 md:col-span-4 xl:col-span-5 xl:col-start-2 mb-24 md:mb-0">
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Adresse', 'felixlodge' ); ?></h3>
				<p class="section-descriptions mb-6"><?php the_field( 'contact_address', 'option' ) ?></p>
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Email', 'felixlodge'  ); ?></h3>
				<a class="section-descriptions mb-6 inline-block" href="mailto:<?php the_field( 'contact_email', 'option' ) ?>"><?php the_field( 'contact_email', 'option' ) ?></a>
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Phone', 'felixlodge'  ); ?></h3>
				<a class="section-descriptions inline-block" href="tel:<?php the_field( 'contact_phone_number', 'option' ) ?>"><?php the_field( 'contact_phone_number', 'option' ) ?></a>
			</div>
		</div>
		<div class="col-span-4 md:col-span-4 xl:col-span-4 contact-form">
			<div class="grid grid-cols-4 md:grid-cols-4 xl:grid-cols-4 gap-x-5 lg:gap-x-4 xl:gap-x-8">
				<div class="col-span-1">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
					<div class="col-span-2 section-descriptions"><?php the_field( 'form_title' ); ?></div>
				</div>
				<div class="xl:col-start-2 col-span-4 md:col-span-4 xl:col-span-3 pt-44 md:pt-0">
					<?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
				</div>
			</div>

			
		</div>
	</div>
</section>