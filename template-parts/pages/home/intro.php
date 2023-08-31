<section id="section-intro" class="section-intro md:pb-48 xl:pb-48 pt-0 container-margins bg-white overflow-hidden">
    <div class="container-grid pt-28">
        <div class="col-span-4 md:col-span-8 xl:col-span-12">
            <?php 
            $images = get_field('section_intro_image_slider');
            $size = 'home-header'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <div class="swiper swiper-header-home">
                    <div class="swiper-wrapper">
                    <?php foreach( $images as $image_id ): ?>
                        <div class="swiper-slide">
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </div>
                    <?php endforeach; ?>
                    </div>
				</div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-grid gap-y-0 md:gap-y-[4.5rem] xl:gap-y-0 pt-9 xl:pt-12 pb-2">
        <div class="col-span-4 md:col-span-8 xl:col-span-6 pb-20 md:pb-0">
            <h1 class="title-big"><?php the_field('section_intro_first_title'); ?></h1>
        </div>
        <div class="col-span-1 md:col-start-2 xl:col-start-7">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-3 md:col-span-2 xl:col-span-2">
            <div class="col-span-2 text-body"><?php the_field('section_intro_text_box_1'); ?></div>
        </div>
        <div class="col-span-4 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-10 text-right">
            <a href="<?php the_field( 'settings_simple_booking_url', 'options'); ?>" target="_blank" class="btn-primary"><?php esc_html_e( 'Jetzt Buchen', 'felixlodge' ); ?></a>
        </div>
    </div>
    <div class="container-grid pt-14 pb-20 md:py-5 xl:py-2">
        <div class="col-span-4 md:col-span-5 xl:col-span-7 md:col-start-4 xl:col-start-6 text-right">
            <h2 class="title-big"><?php the_field('section_intro_second_title'); ?></h1>
        </div>
    </div>
    <div class="container-grid md:pt-14 xl:pt-36 xl:pb-9">
        <div class="col-span-1 xl:col-start-2">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-3 md:col-span-2 xl:col-span-2">
            <div class="col-span-2 text-body lg:max-w-[270px]"><?php the_field('section_intro_text_box_2'); ?></div>
        </div>
    </div>
    <div class="container-grid xl:pt-9 xl:pb-4">
        <div class="col-span-1 md:col-start-6 xl:col-start-9">
            <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
        </div>
        <div class="col-span-3 md:col-span-2 xl:col-span-2 md:col-start-7 xl:col-start-10">
            <div class="col-span-2 text-body lg:max-w-[270px]"><?php the_field('section_intro_text_box_3'); ?></div>
        </div>
    </div>
    <div class="container-grid pt-7 md:pt-14 xl:pt-0">
        <div class="col-span-3 xl:col-span-3 xl:col-start-3">
            <p class="title"><?php the_field('section_intro_intro_image_description'); ?></p>
        </div>
        <div class="col-span-2 md:col-span-4 xl:col-span-3 col-start-3 md:col-start-5 xl:col-start-8 mt-[75px] md:mt-0">
            <div class="md:pt-28 xl:pt-52">
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