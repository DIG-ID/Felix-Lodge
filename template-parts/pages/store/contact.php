<section class="section-contact container-margins bg-white overflow-hidden">
    <hr class="border-t-2 border-black">
	<div class="container-grid pt-[76px] md:pt-20 xl:pt-44">
        <div class="col-span-3 md:col-span-8 xl:col-span-7 xl:col-start-2">
            <h1 class="title-big mb-8 md:mb-16 xl:mb-28"><?php the_field( 'contact_title' ); ?></h1>
        </div>
    </div>
    <div class="container-grid pb-[76px] md:pb-20 xl:pb-44">
        <div class="col-span-4 md:col-span-8 lg:col-span-4 xl:col-span-7 grid grid-cols-4 md:grid-cols-4 xl:grid-cols-7 gap-x-5 lg:gap-x-4 xl:gap-x-8 grid-rows-min-content">
            <div class="col-span-1 xl:col-start-2">
                <div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
            </div>
            <p class="section-descriptions col-span-3 md:col-span-3 xl:col-span-5 xl:col-start-3 mb-7 md:mb-10 xl:!mb-20"><?php the_field( 'contact_subtitle' ); ?></p>
            <p class="text-body col-span-3 md:col-span-3 xl:col-span-3 xl:col-start-3 pb-7 md:pb-0 xl:!mb-32"><?php the_field( 'contact_description' ); ?></p>
        </div>
        <div class="col-span-4 md:col-span-8 lg:col-span-4 xl:col-span-4 xl:col-start-8 contact-form">
            <?php echo do_shortcode( get_field( 'contact_contact_form_shortcode' ) ); ?>
        </div>		
	</div>
</section>