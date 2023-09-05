<section id="section-products" class="section-products container-margins overflow-hidden">
<?php
$taxonomy_slug = 'category';
$custom_post_type_slug = 'store';

$categories = get_terms([
    'taxonomy' => $taxonomy_slug,
    'hide_empty' => false,
]);

foreach ($categories as $category) {
echo '<div class="container-grid">';
echo '<div class="title pb-14">' . $category->name . '</div>';
echo '</div>';
echo '<hr class="border-t-2 border-black">';
echo '<div class="container-grid xl:pt-14 xl:pb-56">';

$posts_query = new WP_Query([
    'post_type' => $custom_post_type_slug,
    'order'     => 'ASC',
    'tax_query' => [
        [
            'taxonomy' => $taxonomy_slug,
            'field' => 'slug',
            'terms' => $category->slug,
        ],
    ],
]);

if ($posts_query->have_posts()) { ?>
    <?php
    while ($posts_query->have_posts()) {
        $posts_query->the_post(); 
        
        // Generate unique IDs and classes for each set of tabs and content
        $unique_id = 'product-' . get_the_ID();
        $tab_description_id = 'description-' . get_the_ID();
        $tab_specifications_id = 'specifications-' . get_the_ID();
        ?>
        <div class="col-span-4 md:col-span-4 xl:col-span-6 pb-80">
            <div id="<?php echo $unique_id; ?>" class="grid grid-cols-4 md:grid-cols-4 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
                <div id="product-img" class="col-span-4 md:col-span-4 xl:col-span-3">
                <?php
                $gallery = get_field( 'general_product_images' );
                if ( $gallery ) :
                    ?>
                    <div class="swiper swiper-store-thumbs">
                        <div class="swiper-wrapper">
                            <?php foreach ( $gallery as $gallery_id ) : ?>
                                <div class="swiper-slide" href="<?php echo esc_url( wp_get_attachment_image_url( $gallery_id, 'square-image' ) ); ?>">
                                    <?php echo wp_get_attachment_image( $gallery_id, 'square-image' ); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <?php
                endif;
                ?>
                </div>
                <div class="col-span-4 md:col-span-4 xl:col-span-3">
                    <h2 class="title-subtitle min-h-[110px] xl:max-h-[110px]"><?php the_title(); ?></h2>
                    <p class="text-body !mb-0"><?php esc_html_e( 'Price', 'felixlodge' ) ?></p>
                    <p class="title mb-5"><?php the_field( 'general_price' ); ?></p>
                    <div class="tabs-wrapper pb-8">
                        <a href="#" class="text-body mr-9 tab-link active" data-target="<?php echo $tab_description_id; ?>"><?php esc_html_e( 'Description', 'felixlodge' ) ?></a> 
                        <a href="#" class="text-body tab-link" data-target="<?php echo $tab_specifications_id; ?>"><?php esc_html_e( 'Specifications', 'felixlodge' ) ?></a>
                    </div>
                    <div id="<?php echo $tab_description_id; ?>" class="tab-content active">
                        <?php the_field( 'general_description' ); ?>
                    </div>
                    <div id="<?php echo $tab_specifications_id; ?>" class="tab-content" style="display: none;">
                        <ul class="list-disc pl-6 mb-9">
                        <?php
                        if( have_rows('specifications_specifications_list') ):
                        while( have_rows('specifications_specifications_list') ) : the_row(); ?>
                            <li><?php the_sub_field( 'list_item' ); ?></li>
                        <?php 
                        endwhile;
                        endif; 
                        ?>
                        </ul>
                        <div class="specifications-wrapper grid grid-cols-4 md:grid-cols-4 xl:grid-cols-3">
                            <?php if( get_field( 'specifications_sizes' ) ): ?>
                                <div class="col-span-4 md:col-span-3 xl:col-span-2">
                                    <p class="title-subtitle"><?php esc_html_e( 'Grössen', 'felixlodge' ) ?></p>
                                    <p class="text-body"><?php the_field( 'specifications_sizes' ); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if( have_rows('specifications_colors') ): ?>
                                <div class="col-span-4 md:col-span-1 xl:col-span-1">
                                    <p class="title-subtitle"><?php esc_html_e( 'Farbe', 'felixlodge' ) ?></p>
                                    <ul>
                                    <?php
                                    while( have_rows('specifications_colors') ) : the_row(); ?>
                                        <li class="text-body !mb-0"><?php the_sub_field( 'color' ); ?></li>
                                    <?php 
                                    endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>
    </div>
<?php }
echo '</div>';
wp_reset_postdata();
}
?>
</section>