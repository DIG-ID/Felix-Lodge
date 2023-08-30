<section id="section-winter" class="section-winter pt-0 md:pt-6 xl:pt-32 pb-0 md:pb-24 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid">
        <div class="col-span-3 md:col-span-4 xl:col-span-5">
            <h2 class="title-big hyphenate mb-16 md:mb-16 xl:mb-0"><?php the_field( 'section_winter_title' ); ?></h2>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 md:col-start-2 xl:col-start-7">
            <p class="section-descriptions"><?php the_field( 'section_winter_text_box_1' ); ?></p>
        </div>
        <div class="hidden md:block md:col-span-4 xl:col-span-3 md:col-start-5 xl:col-start-10"></div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-10">
            <p class="section-descriptions"><?php the_field( 'section_winter_text_box_2' ); ?></p>
        </div>
    </div>
    <div class="container-grid pt-16 md:pt-28 xl:pt-36">
        <div class="col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 order-2 xl:order-1 md:py-16 xl:py-0 gap-5 lg:gap-4 xl:gap-8">
            <h2 class="section-descriptions col-span-3 md:col-span-3 xl:col-span-3 xl:col-start-2 mt-9 md:mt-0 mb-16 md:mb-40"><?php the_field( 'section_winter_text_box_3' ); ?></h2>
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-3 col-span-1 col-start-1 md:col-start-5 xl:col-start-1"></div>
            <p class="text-body col-span-3 md:col-span-3 xl:col-span-3 col-start-2 md:col-start-6 xl:col-start-2"><?php the_field( 'section_winter_text_box_4' ); ?></p>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 order-1 xl:order-2">
            <?php 
                $image = get_field('section_winter_image_1');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'home-preview' );
                }
            ?>
        </div>
    </div>
    <div class="container-grid pt-20 md:pt-0 xl:pt-40 items-center">
        <div class="col-span-2 md:col-span-3 xl:col-span-3 xl:col-start-2">
            <?php 
                $image = get_field('section_winter_image_2');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'portrait-image' );
                }
            ?>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-8">
            <p class="section-descriptions py-16 md:py-0"><?php the_field( 'section_winter_text_box_5' ); ?></p>
        </div>
    </div>
</section>