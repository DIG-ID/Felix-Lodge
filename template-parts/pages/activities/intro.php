<section id="section-intro" class="section-intro pt-16 md:pt-36 lg:pt-72 pb-0 md:pb-16 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid pt-28">
        <div class="col-span-4 md:col-span-4 xl:col-span-6">
            <h1 class="title-big hyphenate mb-12 md:mb-0"><?php the_field( 'section_intro_title' ); ?></h1>
        </div>
        <div class="col-span-1">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-4">
            <p class="text-body"><?php the_field( 'section_intro_description' ); ?></p>
        </div>
    </div>
    <div class="container-grid pt-12 md:pt-28">
        <div class="col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-x-5 gap-y-16 lg:gap-4 xl:gap-8 order-2 xl:order-1 py-8 md:py-28 xl:py-0">
            <p class="section-descriptions col-span-3 md:col-span-3 xl:col-span-3 md:col-start-2 xl:col-start-2"><?php the_field( 'section_intro_text_box_1' ); ?></p>
            <div class="hidden md:block xl:hidden md:col-span-4"></div>
            <p class="section-descriptions col-span-3 md:col-span-3 xl:col-span-3 col-start-2 md:col-start-5 xl:col-start-3"><?php the_field( 'section_intro_text_box_2' ); ?></p>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 order-1 xl:order-2">
            <?php 
                $image = get_field('section_intro_image_1');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'home-preview' );
                }
            ?>
        </div>
    </div>
    <div class="container-grid pt-12 md:pt-0 xl:pt-28">
        <div class="col-span-2 md:col-span-3 xl:col-span-3 xl:col-start-3 pb-16 md:pb-0">
            <?php 
                $image = get_field('section_intro_image_2');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'square-image' );
                }
            ?>
        </div>
        <div class="col-span-1 col-start-1 md:col-start-5 xl:col-start-7">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 col-start-2 xl:col-start-8">
            <p class="text-body xl:mb-36"><?php the_field( 'section_intro_text_box_3' ); ?></p>
            <p class="section-descriptions hidden xl:block"><?php the_field( 'section_intro_text_box_4' ); ?></p>
        </div>
    </div>
</section>