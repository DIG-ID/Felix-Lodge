<section class="section-intro py-2 lg:pb-32 lg:pt-0 bg-bg-color overflow-hidden">
    <div class="max-w-[94%] mx-auto">
        <?php 
        $header_image = get_field('section_intro_header_image');
        if( $header_image ) {
            echo wp_get_attachment_image( $header_image, 'full' );
        }
        ?>
    </div>
</section>