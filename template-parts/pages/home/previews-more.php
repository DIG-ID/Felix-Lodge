<section id="section-previews-more" class="section-previews-more px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 pt-20 xl:pt-40">
        <h2 class="title-big col-span-4 md:col-span-8 xl:col-span-7 xl:col-start-3"><?php the_field('previews_more_title'); ?></h2>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 py-20 xl:py-40">
        <div class="col-span-3 md:col-span-3 xl:col-span-3 xl:col-start-2 hidden md:block">
            <?php 
            $preview_image_1 = get_field('previews_more_image_1');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image' );
            }
            ?>
        </div>
        <div class="col-span-1 col-start-2 md:col-start-5 xl:col-start-8">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-6"></div>
        </div>
        <div class="col-span-2 md:col-span-3 xl:col-span-3 col-start-3 md:col-start-6 xl:col-start-9">
            <p class="title lg:max-w-xl"><?php the_field('previews_more_subtitle'); ?></p>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 xl:col-start-3">
            <p class="text-body pt-10 md:pt-44"><?php the_field('previews_more_description'); ?></p>
        </div>
        <div class="col-span-3 md:col-span-4 xl:col-span-4 col-start-2 md:col-start-5 xl:col-start-7 mt-10 xl:-mt-10">
            <?php 
            $preview_image_1 = get_field('previews_more_image_2');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 pt-20 xl:pt-40">
        <h2 class="title-big col-span-4 md:col-span-7 xl:col-span-6 xl:col-start-5 xl:text-right pb-20 md:pb-40 xl:pb-0"><?php the_field('previews_more_title_2'); ?></h2>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-12 gap-5 lg:gap-4 xl:gap-8 pb-20 xl:pb-40">
        <div class="col-span-3 md:col-span-4 xl:col-span-4 xl:col-start-2 order-3 md:order-1">
            <?php 
            $preview_image_1 = get_field('previews_more_image_3');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
        <div class="col-span-1 col-start-2 md:col-start-6 xl:col-start-8 flex flex-col justify-center order-1 md:order-2">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black md:-mt-11 lg:mt-0"></div>
        </div>
        <div class="col-span-2 md:col-span-2 xl:col-span-3 col-start-3 md:col-start-7 xl:col-start-9 flex flex-col justify-center hyphenate order-2 md:order-3">
            <p class="title lg:max-w-xl"><?php the_field('previews_more_subtitle_2'); ?></p>
        </div>
        <div class="col-span-3 md:col-span-3 xl:col-span-3 md:col-start-2 xl:col-start-4 mt-10 md:mt-0 order-5 md:order-4">
            <p class="text-body md:pt-44"><?php the_field('previews_more_description_2'); ?></p>
        </div>
        <div class="col-span-2 md:col-span-3 xl:col-span-3 col-start-3 md:col-start-6 xl:col-start-9 mt-10 md:-mt-10 order-4 md:order-5">
            <?php 
            $preview_image_1 = get_field('previews_more_image_4');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image' );
            }
            ?>
        </div>
    </div>
</section>