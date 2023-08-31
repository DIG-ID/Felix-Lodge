<section class="section-content container-margins pt-36 md:pt-72">
	<div class="container-grid">
		<div class="col-span-4 md:col-span-4 xl:col-span-6 grid grid-cols-4 md:grid-cols-6 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
			<div class="col-span-6">
				<h1 class="title-big mb-16 lg:mb-0"><?php the_title(); ?></h1>
			</div>
			<div class="col-span-5 col-start-2">
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Adresse', 'felixlodge' ); ?></h3>
				<p class="section-descriptions mb-6"><?php the_field( 'address_address' ); ?></p>
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Email', 'felixlodge'  ); ?></h3>
				<?php
				$email = get_field( 'address_email' );
				if ( $email ) :
					?><a class="section-descriptions mb-6 inline-block" href="mailto:<?php echo esc_attr( $email ); ?>"> <?php echo $email; ?></a><?php
				endif;
				?>
				<h3 class="section-descriptions uppercase mb-6"><?php esc_html_e( 'Phone', 'felixlodge'  ); ?></h3>
				<?php
				$phone = get_field( 'address_phone' );
				$clean_phone = str_replace( ' ', '', $phone );
				if ( $phone ) :
					?><a class="section-descriptions inline-block" href="tel:<?php echo esc_attr( $clean_phone ); ?>"> <?php echo $phone; ?></a><?php
				endif;
				?>
			</div>
		</div>
		<div class="col-span-4 md:col-span-4 xl:col-span-4 contact-form">
			<div class="grid grid-cols-4 md:grid-cols-6 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
				<div class="col-span-1 xl:col-start-8">
					<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
				</div>
				<div class="col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3">
					<div class="col-span-2 text-body"><?php the_field( 'form_title' ); ?></div>
				</div>
			</div>
			<?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
		</div>
	</div>
</section>