<section id="section-summer" class="section-summer pt-6 md:pt-8 xl:pt-32 pb-0 md:pb-16 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid">
        <div class="col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-5 lg:gap-4 xl:gap-8 md:pb-12 xl:pb-0">
            <h1 class="title-big hyphenate col-span-3 md:col-span-4 xl:col-span-5 mb-5 md:mb-0 xl:mb-40"><?php the_field( 'section_summer_title' ); ?></h1>
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-3 col-span-1 col-start-1 md:col-start-5 xl:col-start-1"></div>
            <p class="text-body col-span-3 md:col-span-3 xl:col-span-3 md:col-start-6 xl:col-start-2"><?php the_field( 'section_summer_text_box_1' ); ?></p>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 xl:col-start-7 pt-7 md:pt-0">
            <?php 
                $image = get_field('section_summer_image');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'home-preview' );
                }
            ?>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-1 py-12">
            <p class="section-descriptions md:pt-24 xl:pt-0 xl:mt-64"><?php the_field( 'section_summer_text_box_2' ); ?></p>
        </div>
    </div>
</section>