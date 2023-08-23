<section id="section-intro" class="section-intro lg:pb-32 pt-0 px-5 lg:px-16 xl:px-14 bg-white overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-12 pt-32">
        <div class="col-span-1 lg:col-span-12">
        <?php 
        $header_image = get_field('section_intro_header_image');
        if( $header_image ) {
            echo wp_get_attachment_image( $header_image, 'full' );
        }
        ?>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1 lg:col-span-6">
            <h1 class="title-big"><?php the_field('section_intro_first_title'); ?></h1>
        </div>
        <div class="col-span-1">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-1 lg:col-span-2">
            <div class="col-span-2 text-body"><?php the_field('section_intro_text_box_1'); ?></div>
        </div>
        <div class="col-span-1 lg:col-span-3 text-right">
            <a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ) ?></a>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1 lg:col-span-7 lg:col-start-6 text-right">
            <h2 class="title-big"><?php the_field('section_intro_second_title'); ?></h1>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1 lg:col-start-2">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-1 lg:col-span-2">
            <div class="col-span-2 text-body lg:max-w-[270px]"><?php the_field('section_intro_text_box_2'); ?></div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 py-8">
        <div class="col-span-1 lg:col-start-9">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-1 lg:col-span-2 lg:col-start-10">
            <div class="col-span-2 text-body lg:max-w-[270px]"><?php the_field('section_intro_text_box_3'); ?></div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 ">
        <div class="col-span-1 lg:col-span-3 lg:col-start-3">
            <p class="title"><?php the_field('section_intro_intro_image_description'); ?></p>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-8">
            <div class="col-span-2 pt-52">
                <?php 
                $intro_image = get_field('section_intro_intro_image');
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'full' );
                }
                ?>
            </div>
        </div>
        
    </div>
</section>