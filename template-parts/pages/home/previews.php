<section id="section-previews" class="section-previews lg:pb-40 lg:pt-0 px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 pt-24 lg:pt-0">
        <h1 class="title-big"><?php the_field('section_previews_main_title_1'); ?></h1>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 py-8">
        <div class="col-span-1 col-start-2 md:col-start-3 xl:col-start-8">
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-4 xl:mt-6 mr-5"></div>
        </div>
        <div class="col-span-2 md:col-span-4 xl:col-span-4 col-start-3 md:col-start-4 xl:col-start-9">
            <h2 class="title"><?php the_field('section_previews_subtitle_1'); ?></h2>
        </div>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 pt-8 pb-52">
        <div class="col-span-4 md:col-span-8 lg:col-span-8 xl:col-span-6 xl:col-start-2">
            <?php 
            $preview_image_1 = get_field('section_previews_preview_image_1');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'home-preview' );
            }
            ?>
        </div>
        <div class="col-span-3 md:col-span-8 xl:col-span-3 col-start-2 md:col-start-1 xl:col-start-9 flex justify-center items-center flex-col">
            <div class="w-full md:pt-14 xl:pt-0">
                <p class="text-body md:max-w-md !mb-16 float-none md:float-left xl:float-none"><?php the_field('section_previews_description_1'); ?></p>
                <a href="<?php the_field('section_previews_button_link_1'); ?>" class="btn-primary float-none md:float-right xl:float-none"><span class="pt-0"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></span></a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 ">
        <div class="col-span-1 lg:col-span-9 lg:col-start-3 text-right">
            <h1 class="title-big"><?php the_field('section_previews_main_title_2'); ?></h1>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1">
            <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-6 mr-5"></div>
        </div>
        <div class="col-span-1 lg:col-span-4 lg:col-start-2">
            <h2 class="title lg:max-w-xl"><?php the_field('section_previews_subtitle_2'); ?></h2>
        </div>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1 lg:col-span-3 lg:col-start-2 flex justify-center items-center flex-col">
            <div>
                <p class="text-body lg:max-w-md !mb-16"><?php the_field('section_previews_description_2'); ?></p>
                <a href="<?php the_field('section_previews_button_link_2'); ?>" class="btn-primary text-button !leading-9"><span class="pt-0"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></span></a>
            </div>
        </div>
        <div class="col-span-1 lg:col-span-6 lg:col-start-6">
            <?php 
            $preview_image_2 = get_field('section_previews_preview_image_2');
            if( $preview_image_2 ) {
                echo wp_get_attachment_image( $preview_image_2, 'home-preview' );
            }
            ?>
        </div>
    </div>
</section>