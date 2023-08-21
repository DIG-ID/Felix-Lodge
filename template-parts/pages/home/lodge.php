<section id="section-lodge" class="section-lodge bg-white overflow-hidden">
    <div class="grid grid-cols-2 lg:grid-cols-12 gap-6 mx-14 py-12 border-t-2 border-b-2 border-black lg:py-32">
        <div class="col-span-6 col-start-2 grid grid-col-6 gap-6">
            <div class="col-span-6">
                <h2 class="title-big"><?php the_field('section_lodge_title'); ?></h2>
            </div>
            <div class="col-span-1">
                <div class="w-full max-w-[120px] border-t-2 inline-block border-black mt-4 mr-5"></div>
            </div>
            <div class="col-span-5 col-start-2">
                <p class="text-descriptions"><?php the_field('section_lodge_subtitle'); ?></p>
                <p class="text-body"><?php the_field('section_lodge_description'); ?></p>
            </div>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-9">
            <?php 
            $image = get_field('section_lodge_image');
            if( $image ) {
                echo wp_get_attachment_image( $image, 'square-image' );
            }
            ?>
        </div>
    </div>
</section>