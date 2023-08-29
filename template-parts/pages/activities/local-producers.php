<section id="section-local-producers" class="section-local-producers pt-0 md:pt-14 pb-16 md:pb-6 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid">
        <div class="col-span-4 md:col-span-8 xl:col-span-6">
            <?php 
                $image = get_field('section_local_producers_image');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'home-preview' );
                }
            ?>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-5 lg:gap-4 xl:gap-8">
            <h2 class="title-big hyphenate col-span-4 md:col-span-5 xl:col-span-5 xl:col-start-2 py-8 xl:py-0 xl:mb-40"><?php the_field( 'section_local_producers_title' ); ?></h2>
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-3 col-span-1 md:col-start-5 xl:col-start-1"></div>
            <p class="text-body col-span-3 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-2"><?php the_field( 'section_local_producers_text_box' ); ?></p>
        </div>
    </div>
</section>