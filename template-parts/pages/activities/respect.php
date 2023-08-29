<section id="section-respect" class="section-respect pt-6 md:pt-9 xl:pt-0 pb-40 md:pb-56 xl:pb-80 container-margins bg-white overflow-hidden">
    <div class="container-grid">
        <h2 class="title-big hyphenate col-span-4 md:col-span-8 xl:col-span-6 xl:col-start-6"><?php the_field( 'section_respect_title' ); ?></h2>
    </div>
    <div class="container-grid md:pb-0 pt-14 md:pt-[86px] xl:pt-32">
        <div class="col-span-4 md:col-span-8 xl:col-span-6 pb-10 md:pb-0">
            <?php 
                $image = get_field('section_respect_image_1');
                if( $image ) {
                    echo wp_get_attachment_image( $image, 'home-preview' );
                }
            ?>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 md:pt-[72px] xl:pt-0 gap-5 lg:gap-4 xl:gap-8">
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-3 col-span-1 md:col-start-1 xl:col-start-2"></div>
            <p class="text-body col-span-3 md:col-span-3 xl:col-span-3 md:col-start-2 xl:col-start-3 pb-7 md:pb-0 xl:!mb-32"><?php the_field( 'section_respect_text_box' ); ?></p>
            <div class="col-span-2 md:col-span-3 xl:col-span-3 col-start-3 md:col-start-6 xl:col-start-3">
                <?php 
                    $image = get_field('section_respect_image_2');
                    if( $image ) {
                        echo wp_get_attachment_image( $image, 'portrait-image' );
                    }
                ?>
            </div>
        </div>
    </div>
</section>