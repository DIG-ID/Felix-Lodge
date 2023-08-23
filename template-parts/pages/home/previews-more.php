<section id="section-previews-more" class="section-previews-more px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-40">
        <h2 class="title-big col-span-1 lg:col-span-7 lg:col-start-3"><?php the_field('previews_more_title'); ?></h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-40">
        <div class="col-span-1 lg:col-span-3 lg:col-start-2">
            <?php 
            $preview_image_1 = get_field('previews_more_image_1');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image' );
            }
            ?>
        </div>
        <div class="col-span-1 lg:col-start-8">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-6"></div>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-9">
            <p class="title lg:max-w-xl"><?php the_field('previews_more_subtitle'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-3">
            <p class="text-body pt-44"><?php the_field('previews_more_description'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-4 lg:col-start-7 -mt-10">
            <?php 
            $preview_image_1 = get_field('previews_more_image_2');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-40">
        <h2 class="title-big col-span-1 lg:col-span-6 lg:col-start-5 text-right"><?php the_field('previews_more_title_2'); ?></h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pb-40">
        <div class="col-span-1 lg:col-span-4 lg:col-start-2">
            <?php 
            $preview_image_1 = get_field('previews_more_image_3');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
        <div class="col-span-1 lg:col-start-8 flex flex-col justify-center">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black"></div>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-9 flex flex-col justify-center">
            <p class="title lg:max-w-xl"><?php the_field('previews_more_subtitle_2'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-4">
            <p class="text-body pt-44"><?php the_field('previews_more_description_2'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-9 -mt-10">
            <?php 
            $preview_image_1 = get_field('previews_more_image_4');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image' );
            }
            ?>
        </div>
    </div>
</section>