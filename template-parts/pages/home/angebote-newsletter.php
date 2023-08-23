<section id="section-angebote" class="section-angebote px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
	<hr class="border-t-2 border-black">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 grid grid-cols-1 lg:grid-cols-6 gap-x-6 border-r-2 border-black py-32">
            <div class="col-span-1 lg:col-span-4 lg:col-start-2">
                <h2 class="title-big mb-24"><?php the_field( 'section_angebote_title' ); ?></h2>
            </div>
            <div class="col-span-1 lg:col-start-2">
			    <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
            </div>
            <div class="col-span-1 lg:col-span-3 lg:col-start-3">
                <p class="section-descriptions mb-16"><?php the_field( 'section_angebote_subtitle' ); ?></p>
                <p class="text-body !mb-16"><?php the_field( 'section_angebote_description' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Alle Angebote', 'felixlodge' ); ?></a>
            </div>
        </div>
        <div class="col-span-1 grid grid-cols-1 lg:grid-cols-6 gap-x-6 py-32">
            <div class="col-span-1 lg:col-span-4 lg:col-start-2">
                <h2 class="title-big mb-24"><?php the_field( 'section_angebote_newsletter_title' ); ?></h2>
            </div>
            <div class="col-span-1 lg:col-start-2">
			    <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
            </div>
            <div class="col-span-1 lg:col-span-3 lg:col-start-3">
                <p class="section-descriptions col-span-4"><?php the_field( 'section_angebote_newsletter_subtitle' ); ?></p>
                <?php
                $custom_shortcode = get_field( 'settings_newsletter_form_shortcode', 'option' ); 
                echo do_shortcode( $custom_shortcode );
                ?>
            </div>
        </div>
    </div>
    <hr class="border-t-2 border-black">
</section>