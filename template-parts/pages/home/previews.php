<section id="section-previews" class="section-previews xl:pb-72 xl:pt-0 container-margins bg-white overflow-hidden">
    <div class="container-grid pt-[70px] md:pt-0">
        <h1 class="title-big"><?php the_field('section_previews_main_title_1'); ?></h1>
    </div>
    <div class="container-grid pt-12 pb-20 xl:pt-8 xl:pb-28">
        <div class="col-span-1 col-start-2 md:col-start-3 xl:col-start-8">
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-4 xl:mt-6 mr-5"></div>
        </div>
        <div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-3 md:col-start-4 xl:col-start-9">
            <h2 class="title"><?php the_field('section_previews_subtitle_1'); ?></h2>
        </div>
    </div>
    <div class="container-grid pt-8 pb-32 xl:pb-52">
        <div class="col-span-4 md:col-span-8 lg:col-span-8 xl:col-span-6 xl:col-start-2">
            <?php 
            $preview_image_1 = get_field('section_previews_preview_image_1');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'home-preview' );
            }
            ?>
        </div>
        <div class="col-span-3 md:col-span-8 xl:col-span-3 col-start-2 md:col-start-1 xl:col-start-9 flex justify-center items-center flex-col">
            <div class="w-full md:pt-14 xl:pt-0 block md:grid xl:block md:grid-cols-8">
                <p class="text-body md:max-w-md !mb-16 md:col-span-3"><?php the_field('section_previews_description_1'); ?></p>
                <a href="<?php the_field('section_previews_button_link_1'); ?>" class="btn-primary md:col-span-3 md:col-start-5 max-h-11"><span class="pt-0"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></span></a>
            </div>
        </div>
    </div>

    <div class="container-grid">
        <div class="col-span-4 md:col-span-8 xl:col-span-9 xl:col-start-3 xl:text-right">
            <h1 class="title-big"><?php the_field('section_previews_main_title_2'); ?></h1>
        </div>
    </div>
    <div class="container-grid py-16 xl:py-10">
        <div class="col-span-1 md:col-start-3 xl:col-start-1">
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-6 mr-5"></div>
        </div>
        <div class="col-span-3 md:col-span-4 xl:col-span-4 md:col-start-4 xl:col-start-2">
            <h2 class="title lg:max-w-xl"><?php the_field('section_previews_subtitle_2'); ?></h2>
        </div>
    </div>
    <div class="container-grid pb-8">
        <div class="col-span-3 md:col-span-8 xl:col-span-3 xl:col-start-2 flex justify-center items-center flex-col order-2 xl:order-1">
            <div class="w-full md:pt-14 xl:pt-0 block md:grid xl:block md:grid-cols-8">
                <p class="text-body lg:max-w-md !mb-16 md:col-span-3"><?php the_field('section_previews_description_2'); ?></p>
                <a href="<?php the_field('section_previews_button_link_2'); ?>" class="btn-primary md:col-start-5 max-h-11"><span class="pt-0"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></span></a>
            </div>
        </div>
        <div class="col-span-4 md:col-span-8 xl:col-span-6 xl:col-start-6 order-1 xl:order-2">
            <?php 
            $preview_image_2 = get_field('section_previews_preview_image_2');
            if( $preview_image_2 ) {
                echo wp_get_attachment_image( $preview_image_2, 'home-preview' );
            }
            ?>
        </div>
    </div>
</section>