<section id="section-activities" class="section-activities bg-white overflow-hidden px-5 lg:px-16 xl:px-14">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-40">
        <div class="col-span-1 lg:col-span-3 lg:col-start-2">
            <?php 
            $preview_image_1 = get_field('section_activities_image_1');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
        <div class="col-span-5 lg:col-start-7 grid grid-cols-1 lg:grid-cols-5 gap-x-6">
            <h2 class="title-big col-span-1 lg:col-span-5"><?php the_field( 'section_activities_title_1' ); ?></h2>
            <div class="col-span-1 w-full max-w-[120px] border-t-2 inline-block border-black mt-3"></div>
            <p class="title-subtitle col-span-1 lg:col-span-2 lg:col-start-2"><?php the_field( 'section_activities_subtitle_1' ); ?></p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-40">
        <div class="col-span-3 lg:col-start-2">
            <p class="text-body !mb-16"><?php the_field( 'section_activities_description_1' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></a>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-8">
            <?php 
            $preview_image_1 = get_field('section_activities_image_2');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'home-preview' );
            }
            ?>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6">
		<div class="col-span-1 lg:col-span-5 -mt-16">
			<h2 class="title-big mb-16"><?php the_field('section_activities_title_2'); ?></h2>
		</div>
	</div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-0 pb-40">
        <div class="col-span-1 lg:col-start-7">
			<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-5"></div>
		</div>
		<div class="col-span-1 lg:col-span-3 lg:col-start-8">
			<p class="title-subtitle col-span-4"><?php the_field('section_activities_subtitle_2'); ?></p>
		</div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6 pt-0 pb-80">
        <div class="col-span-1 lg:col-span-4 lg:col-start-3">
            <?php 
            $preview_image_1 = get_field('section_activities_image_3');
            if( $preview_image_1 ) {
                echo wp_get_attachment_image( $preview_image_1, 'square-image-large' );
            }
            ?>
        </div>
        <div class="col-span-1 lg:col-span-3 lg:col-start-8 flex flex-col justify-end">
            <p class="text-body !mb-16"><?php the_field( 'section_activities_description_2' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-primary"><?php esc_html_e( 'Mehr Erfahren', 'felixlodge' ) ?></a>
        </div>
    </div>
</section>