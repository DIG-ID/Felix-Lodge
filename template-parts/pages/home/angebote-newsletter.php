<section id="section-angebote" class="section-angebote container-margins bg-white overflow-hidden">
	<hr class="border-t-2 border-black">
    <div class="grid grid-cols-1 xl:grid-cols-2">
        <div class="col-span-1">
            <div class="grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-5 lg:gap-4 xl:gap-8 border-b-2 xl:border-b-0 xl:border-r-2 border-black py-20 xl:py-32">
                <div class="col-span-4 md:col-span-8 xl:col-span-4 xl:col-start-2">
                    <h2 class="title-big mb-12 lg:mb-24"><?php the_field( 'section_angebote_title' ); ?></h2>
                </div>
                <div class="col-span-1 xl:col-start-2">
                    <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
                </div>
                <div class="col-span-3 md:col-span-6 xl:col-span-3 md:col-start-2 xl:col-start-3">
                    <p class="section-descriptions mb-16 max-w-xs"><?php the_field( 'section_angebote_subtitle' ); ?></p>
                    <p class="text-body !mb-16 columns-1 md:columns-2 xl:columns-1"><?php the_field( 'section_angebote_description' ); ?></p>
                    <a href="<?php the_field('section_angebote_button_link'); ?>" class="btn-primary"><?php esc_html_e( 'Alle Angebote', 'felixlodge' ); ?></a>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-5 lg:gap-4 xl:gap-8 py-20 xl:py-32">
                <div class="col-span-4 md:col-span-8 xl:col-span-4 xl:col-start-2">
                    <h2 class="title-big mb-12 lg:mb-24"><?php the_field( 'section_angebote_newsletter_title' ); ?></h2>
                </div>
                <div class="col-span-1 md:col-start-2">
                    <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
                </div>
                <div class="col-span-3 md:col-span-4 xl:col-span-3 md:col-start-3">
                    <p class="section-descriptions col-span-4"><?php the_field( 'section_angebote_newsletter_subtitle' ); ?></p>
                    <?php
                    $custom_shortcode = get_field( 'settings_newsletter_form_shortcode', 'option' ); 
                    echo do_shortcode( $custom_shortcode );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-t-2 border-black">
</section>