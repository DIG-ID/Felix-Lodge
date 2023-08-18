<section id="section-lodge" class="section-lodge py-2 lg:pb-32 lg:pt-0 bg-bg-color overflow-hidden">
    <div class="container mx-auto grid grid-cols-3">
        <div class="col-span-2">
            <h2 class="title-big"><?php the_field('section_lodge_title'); ?></h2>
            <p class="text-descriptions"><?php the_field('section_lodge_subtitle'); ?></p>
            <p class="text-body"><?php the_field('section_lodge_description'); ?></p>
        </div>
        <div class="col-span-1">
            <?php 
            $image = get_field('section_lodge_image');
            if( $image ) {
                echo wp_get_attachment_image( $image, 'square-image' );
            }
            ?>
        </div>
    </div>
</section>