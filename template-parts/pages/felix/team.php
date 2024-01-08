<section id="section-team" class="section-team pt-16 md:pt-24 xl:pt-72 pb-28 md:pb-36 xl:pb-40 container-margins bg-white overflow-hidden hidden">
    <div class="container-grid">
        <div class="col-span-4 md:col-span-8 xl:col-span-12">
            <h2 class="title-big mb-16 xl:mb-[90px]"><?php the_field( 'team_title' ); ?></h2>
        </div>
    </div>
    <div class="container-grid">
    <?php
    if( have_rows('team_list') ):
    while( have_rows('team_list') ) : the_row(); ?>
        <div class="col-span-3 md:col-span-4 xl:col-span-4 mb-10 md:mb-0">
            <?php 
			$image = get_sub_field('image');
			if( $image ) {
				echo wp_get_attachment_image( $image, 'team-image', false, array('class' => 'w-full'));
			}
            else{
                echo '<img src="https://placehold.co/574x580">';
            }
			?>
            <div class="section-descriptions py-10"><?php the_sub_field( 'name' ); ?></div>
            <div class="text-body"><?php the_sub_field( 'description' ); ?></div>
        </div>
    <?php 
    endwhile;
    endif; ?>
    </div>
</section>